<?php

class CarController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'images'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','obrisi'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionObrisi($id) {

		$model = $this->loadModel($id);
		$model->is_active = 0;
		if($model->update()) {
			$images = Image::model()->findAllByAttributes(array(
						'car_id' => $model->id,
					));
			foreach($images as $image) {
				$image->delete();
			}
			$this->deleteFolder($model->mark_id, $id);
		}

		$this->redirect(array('index'));
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
        $model = $this->loadModel($id);

        $postUrl = Yii::app()->request->getBaseUrl(true).CController::createUrl($model->mark->getLinkName($model->mark_id).'/'.$model->id);
        $socialPost = new SocialPost(array(
            'url' => urlencode($postUrl),
            'title' => $model->naslov,
            'description' => substr(strip_tags($model->opis),0,220),
            'image' => $model->getMainImage()
        ));

        $this->metaData->setMetaData(array(
            'title' => $model->naslov . ' | Auto Rašević Pale',
            'description' => substr(strip_tags($model->opis),0,220),
            'image' => $model->getMainImage(),
            'url' => $postUrl,
        ));
        $this->metaData->useAllMetaData();

        $this->render('view',array(
			'model'=>$model,
            'fbUrl' => $socialPost->getFacebookShareUrl(),
            'twUrl' => $socialPost->getTwitterShareUrl()
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Car;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Car']))
		{
			$model->attributes=$_POST['Car'];

			$model->user_id = Yii::app()->user->id;
			$model->is_active = 1;
			if($model->save())
			{
				$this->uploadImages($model);
				$this->redirect(array('view','id'=>$model->id));
			}

		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$images=new Image('search');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Car']))
		{
			$model->attributes=$_POST['Car'];
			if($model->save()) {
				$this->uploadImages($model);
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'images'=>$images,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{

        $this->pageTitle = Yii::app()->name;
		if(isset($_GET['stanje'])) {
			$stanje = str_replace('-','_',$_GET['stanje']);
			if($stanje === 'u_dolasku' || $stanje === 'na_akciji')
            {
                $dataProvider=new CActiveDataProvider('Car',array(
                    'criteria'=>array(
                        'condition'=>'is_active=1 AND '.$stanje.'=1',
                    ),
                    'pagination'=>array(
                        'pageSize'=>50
                    ),
                ));

                $this->pageTitle = 'Automobili' . (($stanje == 'u_dolasku') ? ' u dolasku' : ' na akciji') . ' | ' . Yii::app()->name;
            }
            else
				throw new CHttpException('404','Stranica ne postoji');
		}
		elseif(isset($_GET['proizvodjac'])) {
			$proizvodjac = Mark::getId(str_replace('+',' ',$_GET['proizvodjac']));
			if(!$proizvodjac)
				throw new CHttpException('404','Stranica ne postoji');
			$dataProvider=new CActiveDataProvider('Car',array(
				'criteria'=>array(
					'condition'=>'is_active=1 AND mark_id ='.$proizvodjac,
				),
				'pagination'=>array(
					'pageSize'=>50
				),
			));

            $this->pageTitle = Mark::getName($proizvodjac) . ' | ' . Yii::app()->name;

            $this->metaData->setMetaData(array(
                'title' => Mark::getName($proizvodjac). ' | Auto Rašević Pale',
                'description' => 'Auto plac Rasevic Pale, Vam nudi sirok asortiman polovnih automobila marke '.Mark::getName($proizvodjac).', mogucnost zamjene staro za novo kao i mogucnost kupovine na lizing.',
                'url' => Yii::app()->request->getBaseUrl(true).CController::createUrl(Mark::getName($proizvodjac))
            ));
			Yii::app()->clientScript->registerMetaTag('Auto plac Rasevic Pale, Vam nudi sirok asortiman polovnih automobila marke '.Mark::getName($proizvodjac).', mogucnost zamjene staro za novo kao i mogucnost kupovine na lizing.', 'description', null, array('lang' => 'sr'),1);
		}
		else {
			$dataProvider=new CActiveDataProvider('Car',array(
				'criteria'=>array(
					'condition'=>'is_active=1',
				),
				'pagination'=>array(
					'pageSize'=>50
				),
			));
		}

        if(isset($_GET['vtype']))
        {
            if($_GET['vtype'] == 'list' || $_GET['vtype'] == 'grid')
            {
                Yii::app()->session['viewType'] = $_GET['vtype'];
            }
        }

		$dataProvider->sort->defaultOrder = array(
			'id'=>CSort::SORT_DESC,
		);
		$dataProvider->sort->sortVar = 'sort';

        $this->metaData->useAllMetaData();

		$this->render('index',array(
			'dataProvider'=> $dataProvider,
            'carViewType' => ((Yii::app()->session['viewType'])?Yii::app()->session['viewType'] : 'list')
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Car('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Car']))
			$model->attributes=$_GET['Car'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Car the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Car::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Car $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='car-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	protected function uploadImages($model)
	{

		$imgFolderUrl = $this->createFoldersForImages($model);



		$images = CUploadedFile::getInstancesByName('images');
		$order = 1;
		if (isset($images) && count($images) > 0) {
			foreach ($images as $image => $pic) {
				$newImageName = time() . '-auto-rasevic-pale-'.$order.'.'.$pic->extensionName;
				if ($pic->saveAs($imgFolderUrl.'/'.$newImageName)) {
					// add it to the main model now
					$img_add = new Image();
					$img_add->link = $newImageName; //it might be $img_add->name for you, filename is just what I chose to call it in my model
					$img_add->car_id = $model->id; // this links your picture model to the main model (like your user, or profile model)
					$img_add->sort = $order++;
					$img_add->save(); // DONE

					$this->createThumbsAndSliderImages($imgFolderUrl.'/'.$newImageName);
				}
				else
					throw new CHttpException('401');
				// handle the errors here, if you want
			}
		}
	}

	protected function createFoldersForImages($model)
	{
		//Rjesiti se nasi slova u imenima proizvodjaca kod kreiranja foldera
		$markFolderUrl = Yii::getPathOfAlias('webroot').'/media/'.Mark::getFolderName($model->mark_id);
		// make the directory to store the pic:
		if(!is_dir($markFolderUrl))
		{
			mkdir($markFolderUrl);
			chmod($markFolderUrl, 0755);
		}
		$imgFolderUrl = Yii::getPathOfAlias('webroot').'/media/'.Mark::getFolderName($model->mark_id).'/'. $model->id;
		if(!is_dir($imgFolderUrl))
		{
			mkdir($imgFolderUrl);
			chmod($imgFolderUrl, 0755);

			mkdir($imgFolderUrl.'/original');
			chmod($imgFolderUrl.'/original', 0755);

			mkdir($imgFolderUrl.'/thumbs');
			chmod($imgFolderUrl.'/thumbs', 0755);

			mkdir($imgFolderUrl.'/slider');
			chmod($imgFolderUrl.'/slider', 0755);
		}

		return Yii::getPathOfAlias('webroot').'/media/'.Mark::getFolderName($model->mark_id).'/'. $model->id.'/original';
	}

	protected function createThumbsAndSliderImages($orginalUrl)
	{
		Yii::import("ext.EPhpThumb.EPhpThumb");

		$thumbUrl = str_replace('original','thumbs',$orginalUrl);
		$sliderUrl = str_replace('original','slider',$orginalUrl);

		$thumb=new EPhpThumb();
		$thumb->init(); //this is needed


		//chain functions
		$thumb->create($orginalUrl)->adaptiveResize(150,120)->save($thumbUrl);
		$thumb->create($orginalUrl)->adaptiveResize(380,285)->save($sliderUrl);
	}

	protected function deleteFolder($markID, $folder=0)
	{
		if($folder != 0)
		{
			$dirname = Yii::getPathOfAlias('webroot').'/media/'.Mark::getFolderName($markID).'/'.$folder;
			$thumbs = $dirname.'/thumbs';
			$original = $dirname.'/original';
			$slider = $dirname.'/slider';
			print_r($thumbs);
			if(!file_exists($dirname))
				return;
			if(file_exists($thumbs))
			{
				$folder_handler = dir($thumbs);
				while ($file = $folder_handler->read())
				{
					if ($file == "." || $file == "..")
						continue;
					unlink($thumbs.'/'.$file);
				}
				$folder_handler->close();
				rmdir($thumbs);
			}
			if(file_exists($original))
			{
				$folder_handler = dir($original);
				while ($file = $folder_handler->read())
				{
					if ($file == "." || $file == "..")
						continue;
					unlink($original.'/'.$file);
				}
				$folder_handler->close();
				rmdir($original);
			}
			if(file_exists($slider))
			{
				$folder_handler = dir($slider);
				while ($file = $folder_handler->read())
				{
					if ($file == "." || $file == "..")
						continue;
					unlink($slider.'/'.$file);
				}
				$folder_handler->close();
				rmdir($slider);
			}

			$folder_handler = dir($dirname);
			while ($file = $folder_handler->read())
			{
				if ($file == "." || $file == "..")
					continue;
				unlink($dirname.'/'.$file);
			}
			$folder_handler->close();
			rmdir($dirname);
		}

	}

    public function actionImages($id)
    {
        $model=$this->loadModel($id);
        echo $model->getAllImages();
    }
}

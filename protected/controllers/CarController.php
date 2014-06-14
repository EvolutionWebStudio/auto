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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Car']))
		{
			$model->attributes=$_POST['Car'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
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
		if(isset($_GET['stanje'])) {
			$stanje = str_replace('-','_',$_GET['stanje']);
			if($stanje === 'u_dolasku' || $stanje === 'na_akciji')
				$dataProvider=new CActiveDataProvider('Car',array(
					'criteria'=>array(
						'condition'=>'is_active=1 AND '.$stanje.'=1',
					),
				));
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
			));
		}
		else {
			$dataProvider=new CActiveDataProvider('Car',array(
				'criteria'=>array(
					'condition'=>'is_active=1',
				),
			));
		}


		$this->render('index',array(
			'dataProvider'=>$dataProvider,
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
		//Rjesiti se nasi slova u imenima proizvodjaca kod kreiranja foldera
		$markFolderUrl = Yii::getPathOfAlias('webroot').'/media/'.Mark::getName($model->mark_id);
		// make the directory to store the pic:
		if(!is_dir($markFolderUrl))
		{
			mkdir($markFolderUrl);
			chmod($markFolderUrl, 0755);
		}
		$imgFolderUrl = Yii::getPathOfAlias('webroot').'/media/'.Mark::getName($model->mark_id).'/'. $model->id;
		if(!is_dir($imgFolderUrl))
		{
			mkdir($imgFolderUrl);
			chmod($imgFolderUrl, 0755);
			mkdir($imgFolderUrl.'/original');
			chmod($imgFolderUrl.'/original', 0755);
		}
		$imgFolderUrl = Yii::getPathOfAlias('webroot').'/media/'.Mark::getName($model->mark_id).'/'. $model->id.'/original';
		$images = CUploadedFile::getInstancesByName('images');
		$order = 1;
		if (isset($images) && count($images) > 0) {
			foreach ($images as $image => $pic) {
				echo $pic->name.'<br />';
				if ($pic->saveAs($imgFolderUrl.'/'.$pic->name)) {
					// add it to the main model now
					$img_add = new Image();
					$img_add->link = $pic->name; //it might be $img_add->name for you, filename is just what I chose to call it in my model
					$img_add->car_id = $model->id; // this links your picture model to the main model (like your user, or profile model)
					$img_add->order = $order++;
					$img_add->save(); // DONE
				}
				else
					throw new CHttpException('401');
				// handle the errors here, if you want
			}
		}
	}
}

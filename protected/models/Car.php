<?php

/**
 * This is the model class for table "car".
 *
 * The followings are the available columns in table 'car':
 * @property integer $id
 * @property string $naslov
 * @property string $model
 * @property integer $godiste
 * @property string $snaga
 * @property integer $kilometraza
 * @property string $gorivo
 * @property string $transmisija
 * @property string $boja
 * @property string $cijena
 * @property string $opis
 * @property integer $u_dolasku
 * @property integer $na_akciji
 * @property integer $mark_id
 * @property integer $user_id
 * @property integer $is_active
 *
 * The followings are the available model relations:
 * @property Mark $mark
 * @property User $user
 * @property Image[] $images
 */
class Car extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'car';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mark_id, user_id', 'required'),
			array('godiste, kilometraza, u_dolasku, na_akciji, mark_id, user_id, is_active', 'numerical', 'integerOnly'=>true),
			array('naslov, model', 'length', 'max'=>120),
			array('snaga, gorivo, transmisija, boja, cijena', 'length', 'max'=>45),
			array('opis', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, naslov, model, godiste, snaga, kilometraza, gorivo, transmisija, boja, cijena, opis, u_dolasku, na_akciji, mark_id, user_id, is_active', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'mark' => array(self::BELONGS_TO, 'Mark', 'mark_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'images' => array(self::HAS_MANY, 'Image', 'car_id', 'order'=>'sort ASC'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Datum objave',
			'naslov' => 'Naslov',
			'model' => 'Model',
			'godiste' => 'Godina',
			'snaga' => 'Snaga',
			'kilometraza' => 'Kilometraža',
			'gorivo' => 'Gorivo',
			'transmisija' => 'Transmisija',
			'boja' => 'Boja',
			'cijena' => 'Cijena',
			'opis' => 'Opis',
			'u_dolasku' => 'U Dolasku',
			'na_akciji' => 'Na Akciji',
			'mark_id' => 'Proizvođač',
			'user_id' => 'User',
			'is_active' => 'Is Active',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('naslov',$this->naslov,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('godiste',$this->godiste);
		$criteria->compare('snaga',$this->snaga,true);
		$criteria->compare('kilometraza',$this->kilometraza);
		$criteria->compare('gorivo',$this->gorivo,true);
		$criteria->compare('transmisija',$this->transmisija,true);
		$criteria->compare('boja',$this->boja,true);
		$criteria->compare('cijena',$this->cijena,true);
		$criteria->compare('opis',$this->opis,true);
		$criteria->compare('u_dolasku',$this->u_dolasku);
		$criteria->compare('na_akciji',$this->na_akciji);
		$criteria->compare('mark_id',$this->mark_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('is_active',1);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Car the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getFuelTypes()
	{
		$types = array(
			'Dizel' => 'Dizel',
			'Benzin' => 'Benzin',
			'Plin' => 'Plin',
		);
		return $types;
	}

	public static function getTransmissionTypes()
	{
		$types = array(
			'Manuelna' => 'Manuelna',
			'Automatska' => 'Automatska',
			'Poluautomatska' => 'Poluautomatska',
		);
		return $types;
	}

    /**
     * Returns main image of car
     *
     * @param string $size enum [thumbnail, slider, original]
     * @return string path to image
     */
    public function getMainImage($size = 'original')
    {
	    if($this->images)
	    {
		    $imagesPath = Yii::app()->request->getBaseUrl(true).'/media/'.Mark::getFolderName($this->mark_id).'/'.$this->id.'/';
		    $imageName = $this->images[0]->link;
	    }
	    else
	    {
		    $imagesPath = Yii::app()->request->getBaseUrl(true).'/media/default/';
		    $imageName = 'auto-rasevic-pale-default-image.jpg';
	    }

        if($size == 'thumbnail')
            $imagesPath .= 'slider/';
        else if ($size == 'slider')
            $imagesPath .= 'slider/';
        else
            $imagesPath .= 'original/';

        return $imagesPath.$imageName;

    }

    /**
     * Returns custom facebook share link for this car
     */
    public function getFacebookShareUrl($carUrl)
    {
        $url = Yii::app()->request->getBaseUrl(true).$carUrl;
        $title = $this->naslov;
        $description = strip_tags($this->opis);
        $image = $this->getMainImage('slider');

        $link = 'http://www.facebook.com/sharer.php?s=100&p[url]='.$url.'&p[images][0]='.$image.'&p[title]='.$title.'&p[summary]='.$description;
//        return 'https://www.facebook.com/sharer/sharer.php?s=100&p[title]="' . $this->naslov . '"&p[summary]="' . strip_tags($this->opis) . '"&p[url]=' . Yii::app()->request->getBaseUrl(true).$carUrl . '&p[images][0]='.$this->getMainImage('slider');
        return $link;
    }

    /**
     * Returns custom facebook share link for this car
     */
    public function getTwitterShareUrl($carUrl)
    {
        $url = Yii::app()->request->getBaseUrl(true).$carUrl;
        $text = $this->naslov;
        $via = '';
        $hashtags = '';
        $link = 'https://twitter.com/share?url='.$url.'&text='.$text.'&via='.$via.'&hashtags='.$hashtags;
//        return 'http://twitter.com/share?url=' . $carUrl . '&text=' . $this->naslov . '&count=horiztonal';
        return $link;
    }

    public function getShortDescription()
    {
	    $opis = strip_tags($this->opis);
        if(strlen($opis)>220)
            return substr($opis,0, 220).'...';
        else
            return $opis;
    }

    /**
     * Returns JASON with all images in original size
     */
    public function getAllImages()
    {
        if($this->images) {
            $images = array();
            $imagesPath = Yii::app()->request->getBaseUrl(true).'/media/'.Mark::getFolderName($this->mark_id).'/'.$this->id.'/original/';
            foreach ($this->images as $image)
            {
                array_push($images, array('src' => $imagesPath.$image->link));
            }
            return json_encode($images);
        }
        return false;
    }


	public static function hasUDolasku() {
		$uDolasku = Car::model()->findAllByAttributes(array(
			'u_dolasku' => 1,
		));
		if(!$uDolasku)
			return false;
		return true;
	}
}

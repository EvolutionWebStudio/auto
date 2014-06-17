<?php

/**
 * This is the model class for table "mark".
 *
 * The followings are the available columns in table 'mark':
 * @property integer $id
 * @property string $name
 * @property string $link
 *
 * The followings are the available model relations:
 * @property Car[] $cars
 */
class Mark extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mark';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, link', 'length', 'max'=>120),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, link', 'safe', 'on'=>'search'),
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
			'cars' => array(self::HAS_MANY, 'Car', 'mark_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Proizvođač',
			'link' => 'Link',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('link',$this->link,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>$this->count()
			),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mark the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getId($name) {
		$model = Mark::model()->findByAttributes(array(
			'name' => $name,
		));
		if($model)
			return $model->id;
		else
			return false;
	}

	public static function getName($id) {
		$model = Mark::model()->findByAttributes(array(
			'id' => $id,
		));
		if($model) {
			return $model->name;
		}
		else
			return false;
	}

	public static function getLinkName($id) {
		$model = Mark::model()->findByAttributes(array(
			'id' => $id,
		));
		if($model) {
			return strtolower($model->name);
		}
		else
			return false;
	}

	public static function getFolderName($id) {
		$model = Mark::model()->findByAttributes(array(
			'id' => $id,
		));
		if($model) {
			$name = strtr($model->name,array(
				'š'=>'s',
				'Š'=>'S',
				'Ć'=>'C',
				'Č'=>'C',
				'č'=>'c',
				'ć'=>'c',
				'ë'=>'e',
			));
			return $name;
		}

		else
			return false;
	}
}

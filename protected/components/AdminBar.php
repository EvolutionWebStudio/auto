<?php
/**
 * Created by PhpStorm.
 * User: HoHoHo
 * Date: 6/13/14
 * Time: 5:08 PM
 */
Yii::import('zii.widgets.CPortlet');

class AdminBar extends CPortlet
{
	public function init()
	{
		//$this->title=CHtml::encode(Yii::app()->user->name);
		parent::init();
	}

	protected function renderContent()
	{
		$this->render('admin-bar');
	}
}
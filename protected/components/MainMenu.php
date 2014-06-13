<?php
/**
 * Created by PhpStorm.
 * User: HoHoHo
 * Date: 6/13/14
 * Time: 5:18 PM
 */
Yii::import('zii.widgets.CMenu', true);

class MainMenu extends CMenu
{


	public function buildMenu()
	{
		$criteria = new CDbCriteria;
		$criteria->join = 'RIGHT JOIN Car on t.id = car.mark_id';
		$criteria->condition = 'Car.is_active = 1';
		$criteria->distinct=true;
		$criteria->select = 'name';
		$menus = Mark::model()->findAll($criteria);
		$html = "";


		$html.="<ul id='yw2' class='sf-js-enabled'>";
		$html.="<li>".CHtml::link('Svi automobili', array('car/index'), array('class'=>'strong'))."</li>";
		$html.="<li>".CHtml::link('Na akciji', array('car/index','stanje'=>'na-akciji'), array('class'=>'strong text-red'))."</li>";
		$html.="<li>".CHtml::link('U dolasku', array('car/index','stanje'=>'u-dolasku'), array('class'=>'strong'))."</li>";
		foreach ($menus as $menu) {
			$html.="<li>".CHtml::link($menu->name, array('car/index','proizvodjac'=>$menu->name))."</li>";
		}
		$html.="</ul>";



		return $html;
	}
	public function init()
	{
		echo $this->buildMenu();
		parent::init();
	}


}

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
		$criteria->join = 'RIGHT JOIN car on t.id = car.mark_id';
		$criteria->condition = 'car.is_active = 1';
		$criteria->distinct=true;
		$criteria->select = 'name, t.id';
		$menus = Mark::model()->findAll($criteria);
		$html = "";


		$html.="<ul id='yw2' class='sf-js-enabled'>";
		if(!isset($_GET['stanje']) && !isset($_GET['proizvodjac']) && Yii::app()->controller->id == 'car' && Yii::app()->controller->action->id == 'index')
			$html.="<li>".CHtml::link('Svi automobili', array('car/index'), array('class'=>'strong active'))."</li>";
		else
			$html.="<li>".CHtml::link('Svi automobili', array('car/index'), array('class'=>'strong'))."</li>";
		if(isset($_GET['stanje'])):
			$html.="<li>".CHtml::link('Na akciji', array('car/index','stanje'=>'na-akciji'), array('class'=>($_GET['stanje'] == 'na-akciji')? 'active strong text-red' : 'strong text-red'))."</li>";
			if(Car::model()->hasUDolasku()): $html.="<li>".CHtml::link('U dolasku', array('car/index','stanje'=>'u-dolasku'), array('class'=>($_GET['stanje'] == 'u-dolasku')? 'active strong' : 'strong'))."</li>"; endif;
		else:
			$html.="<li>".CHtml::link('Na akciji', array('car/index','stanje'=>'na-akciji'), array('class'=>'strong text-red'))."</li>";
			if(Car::model()->hasUDolasku())$html.="<li>".CHtml::link('U dolasku', array('car/index','stanje'=>'u-dolasku'), array('class'=>'strong'))."</li>";
		endif;
		$html.="<li>".CHtml::link('Prikaži meni', '#', array('class'=>'toggle-mobile-menu'))."</li>";
		$html.="</ul>";
		$html.="<ul class='mobile-menu'>";
		if(isset($_GET['proizvodjac']))
			foreach ($menus as $menu) {
				$html.="<li>".CHtml::link(
						$menu->name,
						array('car/index','proizvodjac'=>Mark::getLinkName($menu->id)),
						($_GET['proizvodjac'] == strtolower($menu->name))? array('class'=>'active') : array())."</li>";

			}
		else
			foreach ($menus as $menu) {
				$html.="<li>".CHtml::link(
						$menu->name,
						array('car/index','proizvodjac'=>strtolower($menu->name)))."</li>";

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

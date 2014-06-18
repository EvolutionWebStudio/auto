<?php
/**
 * Created by PhpStorm.
 * User: HoHoHo
 * Date: 6/14/14
 * Time: 7:52 PM
 */
$imageUrl = Yii::app()->getBaseUrl(true).'/media/'.Mark::getLinkName($model->mark_id).'/'. $model->id.'/thumbs/';

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'-grid',
	'dataProvider'=>$images->search($model->id),
	'columns'=>array(
		'sort',
		array(
			'name'=>'link',
			'type'=>'raw',
			'value'=>'CHtml::image("'.$imageUrl.'$data->link")',
		),

		array(
			'class'=>'CButtonColumn',
			'template'=>'{delete}{up}',
			'buttons' => array(
				'up' => array(
					'label'=> '',
					'url' => 'Yii::app()->createUrl("image/imageUp", array("id"=>$data->id))',
					'options'=>array(
						'class'=>'fa fa-chevron-up'
					)
				),
				'delete' => array(
					'url' =>  'Yii::app()->createUrl("image/obrisi", array("id"=>$data->id))',
				)
			),
		),
	),
)); ?>
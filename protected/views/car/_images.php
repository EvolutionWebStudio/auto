<?php
/**
 * Created by PhpStorm.
 * User: HoHoHo
 * Date: 6/14/14
 * Time: 7:52 PM
 */

Yii::app()->clientScript->registerScript('up',"
jQuery('#Images-grid a.fa-chevron-up').live('click',function() {
        var th=this;
        var afterDelete=function(){};
        $.fn.yiiGridView.update('Images-grid', {
                type:'POST',
                url:$(this).attr('href'),
                data:{ 'YII_CSRF_TOKEN':'49cb016b8bb156888586ab4e1640c8636ab3e083' },
                success:function(data) {
                        $.fn.yiiGridView.update('Images-grid');
                        afterDelete(th,true,data);
                },
                error:function(XHR) {
                        return afterDelete(th,false,XHR);
                }
        });
        return false;
});
");

$imageUrl = Yii::app()->getBaseUrl(true).'/media/'.Mark::getFolderName($model->mark_id).'/'. $model->id.'/thumbs/';

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'Images-grid',
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
			'deleteConfirmation'=>'Jeste li sigurni da želite da obrišete ovu sliku?',
			'buttons' => array(
				'up' => array(
					'label'=> '',
					'url' => 'Yii::app()->createUrl("image/imageUp", array("id"=>$data->id))',
					'options'=>array(
						'class'=>'fa fa-chevron-up'
					),


				),
				'delete' => array(
					'url' =>  'Yii::app()->createUrl("image/obrisi", array("id"=>$data->id))',
				)
			),
		),
	),
)); ?>
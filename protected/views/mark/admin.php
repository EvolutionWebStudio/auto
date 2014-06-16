<?php
/* @var $this MarkController */
/* @var $model Mark */


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mark-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="page car-mark clearfix">
    <div class="large-6 columns">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>

    <div class="large-12 columns">
        <?php $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'mark-grid',
            'dataProvider'=>$model->search(),
            'enablePagination'=>false,
            'columns'=>array(
                'id',
                'name',
                array(
                    'class'=>'CButtonColumn',
                    'template'=>'{delete}',
                ),
            ),
        )); ?>
    </div>

</div>

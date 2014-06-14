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

<div class="row">
	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

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

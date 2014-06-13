<?php
/* @var $this MarkController */
/* @var $model Mark */

$this->breadcrumbs=array(
	'Marks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mark', 'url'=>array('index')),
	array('label'=>'Manage Mark', 'url'=>array('admin')),
);
?>

<h1>Create Mark</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
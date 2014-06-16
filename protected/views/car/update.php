<?php
/* @var $this CarController */
/* @var $model Car */

$this->breadcrumbs=array(
	'Cars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Car', 'url'=>array('index')),
	array('label'=>'Create Car', 'url'=>array('create')),
	array('label'=>'View Car', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Car', 'url'=>array('admin')),
);
?>
<div class="page car-update clearfix">
    <div class="large-12 columns">
        <h1 class="page-title">Izmjena automobila</h1>
    </div>

    <div class="large-12 columns">
        <?php $this->renderPartial('_form', array('model'=>$model, 'images' => $images)); ?>
    </div>
</div>

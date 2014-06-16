<?php
/* @var $this CarController */
/* @var $model Car */

$this->breadcrumbs=array(
	'Cars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Car', 'url'=>array('index')),
	array('label'=>'Manage Car', 'url'=>array('admin')),
);
?>
<div class="page car-update clearfix">
    <div class="large-12 columns">
        <h1 class="page-title">Novi automobil</h1>
    </div>

    <div class="large-12 columns">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
</div>
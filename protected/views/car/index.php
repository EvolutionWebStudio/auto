<?php
/* @var $this CarController */
/* @var $dataProvider CActiveDataProvider */

$view = '_view';

$this->menu=array(
	array('label'=>'Create Car', 'url'=>array('create')),
	array('label'=>'Manage Car', 'url'=>array('admin')),
);
?>

<div class="page car-list clearfix">
    <div class="large-12 columns">
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>$view,
            'sortableAttributes'=>array(
                'godiste',
                'cijena',
                'kilometraza'
            ),
            'template' => '{sorter} {items} {pager}',
            'emptyText'=>'<span data-alert class="alert-box info">Trenutno nema ni jedan automobil.</span>'
        )); ?>
    </div>
</div>



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
                'id',
                'godiste',
                'cijena',
                'kilometraza',
            ),
            'sorterHeader' => 'Sortiraj listu po:',
            'template' => '{sorter} {items} {pager}',
            'emptyText'=>'<p data-alert class="alert-box secondary">Trenutno nema ni jedan automobil.</p>'
        )); ?>
    </div>
</div>



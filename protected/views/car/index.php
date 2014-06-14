<?php
/* @var $this CarController */
/* @var $dataProvider CActiveDataProvider */

$view = '_view';

$this->menu=array(
	array('label'=>'Create Car', 'url'=>array('create')),
	array('label'=>'Manage Car', 'url'=>array('admin')),
);
?>

<h1>Cars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>$view,
	'sortableAttributes'=>array(
		'godiste',
		'cijena',
		'kilometraza'
	),
	'emptyText'=>'Trenutno nema ni jedan automobil'
)); ?>

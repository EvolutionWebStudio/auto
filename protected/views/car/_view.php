<?php
/* @var $this CarController */
/* @var $data Car */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('naslov')); ?>:</b>
	<?php echo CHtml::encode($data->naslov); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('model')); ?>:</b>
	<?php echo CHtml::encode($data->model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('godiste')); ?>:</b>
	<?php echo CHtml::encode($data->godiste); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('snaga')); ?>:</b>
	<?php echo CHtml::encode($data->snaga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kilometraza')); ?>:</b>
	<?php echo CHtml::encode($data->kilometraza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gorivo')); ?>:</b>
	<?php echo CHtml::encode($data->gorivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transmisija')); ?>:</b>
	<?php echo CHtml::encode($data->transmisija); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('boja')); ?>:</b>
	<?php echo CHtml::encode($data->boja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cijena')); ?>:</b>
	<?php echo CHtml::encode($data->cijena); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opis')); ?>:</b>
	<?php echo CHtml::encode($data->opis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('u_dolasku')); ?>:</b>
	<?php echo CHtml::encode($data->u_dolasku); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('na_akciji')); ?>:</b>
	<?php echo CHtml::encode($data->na_akciji); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mark_id')); ?>:</b>
	<?php echo CHtml::encode($data->mark_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />



</div>
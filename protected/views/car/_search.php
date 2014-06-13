<?php
/* @var $this CarController */
/* @var $model Car */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'naslov'); ?>
		<?php echo $form->textField($model,'naslov',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'model'); ?>
		<?php echo $form->textField($model,'model',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'godiste'); ?>
		<?php echo $form->textField($model,'godiste'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'snaga'); ?>
		<?php echo $form->textField($model,'snaga',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kilometraza'); ?>
		<?php echo $form->textField($model,'kilometraza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gorivo'); ?>
		<?php echo $form->textField($model,'gorivo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transmisija'); ?>
		<?php echo $form->textField($model,'transmisija',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'boja'); ?>
		<?php echo $form->textField($model,'boja',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cijena'); ?>
		<?php echo $form->textField($model,'cijena',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'opis'); ?>
		<?php echo $form->textArea($model,'opis',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'u_dolasku'); ?>
		<?php echo $form->textField($model,'u_dolasku'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'na_akciji'); ?>
		<?php echo $form->textField($model,'na_akciji'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mark_id'); ?>
		<?php echo $form->textField($model,'mark_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
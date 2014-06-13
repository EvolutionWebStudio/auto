<?php
/* @var $this CarController */
/* @var $model Car */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'car-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'naslov'); ?>
		<?php echo $form->textField($model,'naslov',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'naslov'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'model'); ?>
		<?php echo $form->textField($model,'model',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'model'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'godiste'); ?>
		<?php echo $form->textField($model,'godiste'); ?>
		<?php echo $form->error($model,'godiste'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'snaga'); ?>
		<?php echo $form->textField($model,'snaga',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'snaga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kilometraza'); ?>
		<?php echo $form->textField($model,'kilometraza'); ?>
		<?php echo $form->error($model,'kilometraza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gorivo'); ?>
		<?php echo $form->textField($model,'gorivo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'gorivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transmisija'); ?>
		<?php echo $form->textField($model,'transmisija',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'transmisija'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'boja'); ?>
		<?php echo $form->textField($model,'boja',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'boja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cijena'); ?>
		<?php echo $form->textField($model,'cijena',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cijena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opis'); ?>
		<?php echo $form->textArea($model,'opis',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'opis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'u_dolasku'); ?>
		<?php echo $form->textField($model,'u_dolasku'); ?>
		<?php echo $form->error($model,'u_dolasku'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'na_akciji'); ?>
		<?php echo $form->textField($model,'na_akciji'); ?>
		<?php echo $form->error($model,'na_akciji'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mark_id'); ?>
		<?php echo $form->textField($model,'mark_id'); ?>
		<?php echo $form->error($model,'mark_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_id'); ?>
		<?php echo $form->textField($model,'image_id'); ?>
		<?php echo $form->error($model,'image_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active'); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
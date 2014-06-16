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
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'naslov'); ?>
		<?php echo $form->textField($model,'naslov',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'naslov'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mark_id'); ?>
		<?php
		$list = CHtml::listData(Mark::model()->findAll(), 'id', 'name');
		echo CHtml::dropDownList('Car[mark_id]', $model->mark_id, $list);
		?>
		<?php echo $form->error($model,'mark_id'); ?>
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
		<?php echo $form->labelEx($model,'boja'); ?>
		<?php echo $form->textField($model,'boja',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'boja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gorivo'); ?>
		<?php
		$list = Car::getFuelTypes();
		echo CHtml::dropDownList('Car[gorivo]', $model->gorivo, $list);
		?>
		<?php echo $form->error($model,'gorivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transmisija'); ?>
		<?php
		$list = Car::getTransmissionTypes();
		echo CHtml::dropDownList('Car[transmisija]', $model->transmisija, $list);
		?>
		<?php echo $form->error($model,'transmisija'); ?>
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
		<?php echo $form->checkBox($model,'u_dolasku'); ?>
		<?php echo $form->error($model,'u_dolasku'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'na_akciji'); ?>
		<?php echo $form->checkBox($model,'na_akciji'); ?>
		<?php echo $form->error($model,'na_akciji'); ?>
	</div>
	<?php if(!$model->isNewRecord) $this->renderPartial('_images',array('model'=>$model, 'images'=>$images)) ?>
	<div>
		<?php
		$this->widget('CMultiFileUpload', array(
			'name' => 'images',
			'accept' => 'jpeg|jpg|gif|png', // useful for verifying files
			'duplicate' => 'Duplicate file!', // useful, i think
			'denied' => 'Invalid file type', // useful, i think
			'htmlOptions' => array( 'multiple' => 'multiple', ),
		)); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this MarkController */
/* @var $model Mark */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mark-form',
	'action'=>Yii::app()->createUrl('//mark/create'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="large-5 columns">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Dodaj' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
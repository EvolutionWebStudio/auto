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

	<div class="">
		<?php echo $form->labelEx($model,'name'); ?>
        <div class="row collapse">
            <div class="large-7 columns">
                <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>120)); ?>
            </div>
            <div class="large-5 columns">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Upiši proizvođača' : 'Snimi proizvođača', array('class' => 'button primary radius postfix')); ?>
            </div>
        </div>

		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row buttons">

	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
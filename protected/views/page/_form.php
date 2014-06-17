<?php
/* @var $this PageController */
/* @var $model Page */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php $this->widget('application.extensions.editMe.widgets.ExtEditMe', array(
			'model'=>$model,
			'attribute'=>'content',
			'width'=>'600',
			'height'=>'250',
			'toolbar'=>array(
				array(
					'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat',
				),
				array(
					'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote',
					'-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock',
				),
				array(
					'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo',
				),
			)

		)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Snimi'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
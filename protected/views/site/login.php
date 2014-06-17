<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="page login clearfix">

    <div class="medium-6 columns medium-centered">
        <h1 class="page-title">Prijava na sistem</h1>
    </div>


    <div class="login-form">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>


        <div class="medium-6 columns small-centered">
            <?php echo $form->labelEx($model,'username'); ?>
            <?php echo $form->textField($model,'username'); ?>
            <?php echo $form->error($model,'username'); ?>
        </div>

        <div class="medium-6 columns small-centered">
            <?php echo $form->labelEx($model,'password'); ?>
            <?php echo $form->passwordField($model,'password'); ?>
            <?php echo $form->error($model,'password'); ?>
        </div>

        <div class="medium-6 columns small-centered">
            <?php echo $form->checkBox($model,'rememberMe'); ?>
            <?php echo $form->label($model,'rememberMe'); ?>
            <?php echo $form->error($model,'rememberMe'); ?>
        </div>

        <div class="form-buttons text-center">
            <?php echo CHtml::submitButton('Prijavi me', array('class' => 'button small')); ?>
        </div>

    <?php $this->endWidget(); ?>
    </div><!-- form -->
</div>
<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle= 'Kontakt | '. Yii::app()->name;

?>

<div class="page kontakt clearfix">
    <div class="small-12 columns">
        <h1 class="page-title">Kontaktirajte nas</h1>
    </div>
    <div class="small-12 columns">
        <?php if(Yii::app()->user->hasFlash('contact')): ?>
            <div class="alert-box sucess">
                <?php echo Yii::app()->user->getFlash('contact'); ?>
            </div>
        <?php else: ?>

            <p class="medium-4 columns">
                <?php echo $contactInformations->name; ?><br />
                <?php echo $contactInformations->email; ?><br />
                <?php echo $contactInformations->phone; ?><br />
                <?php echo $contactInformations->links; ?>
            </p>

            <div class="form panel medium-8 columns">

                <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'contact-form',
                    'enableClientValidation'=>true,
                    'clientOptions'=>array(
                        'validateOnSubmit'=>true,
                    ),
                )); ?>

                <p class="form-note">Polja sa <span class="required">*</span> su obavezna.</p>

                <?php echo $form->errorSummary($model); ?>

                <div class="">
                    <?php echo $form->labelEx($model,'name'); ?>
                    <?php echo $form->textField($model,'name'); ?>
                    <?php echo $form->error($model,'name'); ?>
                </div>

                <div class="">
                    <?php echo $form->labelEx($model,'email'); ?>
                    <?php echo $form->textField($model,'email'); ?>
                    <?php echo $form->error($model,'email'); ?>
                </div>

                <div class="">
                    <?php echo $form->labelEx($model,'subject'); ?>
                    <?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
                    <?php echo $form->error($model,'subject'); ?>
                </div>

                <div class="">
                    <?php echo $form->labelEx($model,'body'); ?>
                    <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
                    <?php echo $form->error($model,'body'); ?>
                </div>

                <div class="form-buttons text-center">
                    <?php echo CHtml::submitButton('Pošalji', array('class' => 'button small')); ?>
                </div>

                <?php $this->endWidget(); ?>

            </div><!-- form -->

        <?php endif; ?>
    </div>
</div>

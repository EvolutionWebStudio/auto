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

	<p class="form-note">Polja sa <span class="required">*</span> su obavezna</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="">
		<?php echo $form->labelEx($model,'naslov'); ?>
		<?php echo $form->textField($model,'naslov',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'naslov'); ?>
	</div>

    <div class="row">
        <div class="large-4 columns">
            <?php echo $form->labelEx($model,'mark_id'); ?>
            <?php
            $list = CHtml::listData(Mark::model()->findAll(), 'id', 'name');
            echo CHtml::dropDownList('Car[mark_id]', $model->mark_id, $list);
            ?>
            <?php echo $form->error($model,'mark_id'); ?>
        </div>

        <div class="large-4 columns">
            <?php echo $form->labelEx($model,'model'); ?>
            <?php echo $form->textField($model,'model',array('size'=>60,'maxlength'=>120)); ?>
            <?php echo $form->error($model,'model'); ?>
        </div>

        <div class="large-4 columns">
            <?php echo $form->labelEx($model,'godiste'); ?>
            <?php echo $form->textField($model,'godiste'); ?>
            <?php echo $form->error($model,'godiste'); ?>
        </div>
    </div>

    <div class="row">
        <div class="large-3 columns">
            <?php echo $form->labelEx($model,'snaga'); ?>
            <div class="row collapse">
                <div class="small-9 columns">
                    <?php echo $form->textField($model,'snaga',array('size'=>45,'maxlength'=>45)); ?>
                    <?php echo $form->error($model,'snaga'); ?>
                </div>
                <div class="small-3 columns">
                    <span class="postfix">kW</span>
                </div>
            </div>
        </div>

        <div class="large-3 columns">
            <?php echo $form->labelEx($model,'kilometraza'); ?>
            <div class="row collapse">
                <div class="small-9 columns">
                    <?php echo $form->textField($model,'kilometraza'); ?>
                    <?php echo $form->error($model,'kilometraza'); ?>
                </div>
                <div class="small-3 columns">
                    <span class="postfix">km</span>
                </div>
            </div>
        </div>

        <div class="large-3 columns">
            <?php echo $form->labelEx($model,'gorivo'); ?>
            <?php
            $list = Car::getFuelTypes();
            echo CHtml::dropDownList('Car[gorivo]', $model->gorivo, $list);
            ?>
            <?php echo $form->error($model,'gorivo'); ?>
        </div>

        <div class="large-3 columns">
            <?php echo $form->labelEx($model,'transmisija'); ?>
            <?php
            $list = Car::getTransmissionTypes();
            echo CHtml::dropDownList('Car[transmisija]', $model->transmisija, $list);
            ?>
            <?php echo $form->error($model,'transmisija'); ?>
        </div>
	</div>

    <div class="row">
        <div class="large-4 columns">
            <?php echo $form->labelEx($model,'boja'); ?>
            <?php echo $form->textField($model,'boja',array('size'=>45,'maxlength'=>45)); ?>
            <?php echo $form->error($model,'boja'); ?>
        </div>
    </div>

    <div class="row">
        <div class="large-4 columns">
            <div class="row collapse">
                <?php echo $form->labelEx($model,'cijena'); ?>
                <div class="small-9 columns">
                    <?php echo $form->textField($model,'cijena',array('size'=>45,'maxlength'=>45)); ?>
                    <?php echo $form->error($model,'cijena'); ?>
                </div>
                <div class="small-3 columns">
                    <span class="postfix">KM</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="large-3 columns">
                <div class="row">
                    <div class="small-2 columns">
                        <?php echo $form->checkBox($model,'u_dolasku'); ?>
                    </div>
                    <div class="small-10 columns">
                        <?php echo $form->labelEx($model,'u_dolasku', array('class' => ' ')); ?>
                    </div>
                </div>
                <?php echo $form->error($model,'u_dolasku'); ?>
            </div>
    </div>
    <div class="row">
            <div class="large-3 columns">
                <div class="row">
                    <div class="small-2 columns">
                        <?php echo $form->checkBox($model,'na_akciji'); ?>
                    </div>
                    <div class="small-10 columns">
                        <?php echo $form->labelEx($model,'na_akciji', array('class' => '')); ?>
                    </div>
                </div>
                <?php echo $form->error($model,'na_akciji'); ?>
            </div>
        <br/>
        <br/>
    </div>

	<div class="row">
        <div class="large-12 columns">
            <?php echo $form->labelEx($model,'opis'); ?>
            <?php $this->widget('application.extensions.editMe.widgets.ExtEditMe', array(
	            'model'=>$model,
	            'attribute'=>'opis',
	            'height'=>'150',
	            'htmlOptions' => array('class'=>'has_editor',),
	            'toolbar'=>array(
		            array(
			            'Bold', 'Italic', 'Underline', 'Subscript', 'Superscript', '-', 'RemoveFormat',
		            ),
		            array(
			            'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-',
			            '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight',
		            ),
		            array(
			            'Cut', 'Copy', 'Paste', 'PasteText', '-', 'Undo', 'Redo',
		            ),
	            )

            )); ?>
            <?php echo $form->error($model,'opis'); ?>
        </div>
	</div>

    <div class="row">
        <div class="large-12 columns">
            <fieldset>
                <legend>Slike automobila</legend>

                <?php if(!$model->isNewRecord) $this->renderPartial('_images',array('model'=>$model, 'images' => $images)) ?>

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
            </fieldset>
        </div>
    </div>

	<div class="text-center form-buttons large-12 columns">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kreiraj automobil' : 'Sačuvaj izmjene', array('class' => 'button primary small')); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->

<?php
    $baseUrl = Yii::app()->baseUrl;
    $cs = Yii::app()->getClientScript();
    $cs->registerScriptFile($baseUrl.'/js/vendor/icheck/icheck.min.js', CClientScript::POS_END);
    $cs->registerCssFile($baseUrl.'/js/vendor/icheck/skins/minimal/grey.css');
    $cs->registerScript("icheck","$('input').iCheck({ checkboxClass: 'icheckbox_minimal-grey', radioClass: 'iradio_minimal-grey', increaseArea: '20%'});", CClientScript::POS_END);

?>
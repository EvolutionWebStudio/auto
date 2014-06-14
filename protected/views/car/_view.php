<?php
/* @var $this CarController */
/* @var $data Car */
?>

<div class="row car-list-item">
    <div class="large-3 columns car-image">
        <div class="image-wrapper">
            <img src="<?php echo $data->getMainImage('thumbnail'); ?>"/>
        </div>
    </div>

    <div class="large-6 columns">
        <h2 class="car-title"><?php echo CHtml::link(CHtml::encode($data->naslov), array('view', 'id' => $data->id)); ?></h2>
        <div class="car-description">
            <?php echo CHtml::encode($data->opis); ?>
        </div>
    </div>
    <div class="large-3 columns car-info">
        <p>
            <b><?php echo CHtml::encode($data->getAttributeLabel('godiste')); ?>:</b>
            <?php echo CHtml::encode($data->godiste); ?>
        </p>
        <p>
            <b><?php echo CHtml::encode($data->getAttributeLabel('kilometraza')); ?>:</b>
            <?php echo CHtml::encode($data->kilometraza); ?>
        </p>
        <p>
            <b><?php echo CHtml::encode($data->getAttributeLabel('gorivo')); ?>:</b>
            <?php echo CHtml::encode($data->gorivo); ?>
        </p>
    </div>
</div>

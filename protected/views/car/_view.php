<?php
/* @var $this CarController */
/* @var $data Car */
?>

<div class="row car-list-item">
    <div class="small-12 medium-6 large-3 columns car-image">
        <div class="image-wrapper">
            <img src="<?php echo $data->getMainImage('thumbnail'); ?>"/>
        </div>
    </div>

    <div class="small-12 medium-6 large-6 columns">
        <h2 class="car-title"><?php echo CHtml::link(CHtml::encode($data->naslov), array('view', 'proizvodjac'=>Mark::getName($data->mark_id), 'id' => $data->id)); ?></h2>
        <div class="car-description">
            <?php echo CHtml::encode($data->getShortDescription()); ?>
        </div>
    </div>
    <div class="small-12 medium-6 large-3 columns car-info">
        <table>
            <tbody>
            <tr>
                <td><?php echo CHtml::encode($data->getAttributeLabel('godiste')); ?>:</td>
                <td><?php echo CHtml::encode($data->godiste); ?></td>
            </tr>
            <tr>
                <td><?php echo CHtml::encode($data->getAttributeLabel('kilometraza')); ?>:</td>
                <td><?php echo CHtml::encode($data->kilometraza); ?> km</td>
            </tr>
            <tr>
                <td><?php echo CHtml::encode($data->getAttributeLabel('gorivo')); ?>:</td>
                <td><?php echo CHtml::encode($data->gorivo); ?></td>
            </tr>
            </tbody>
        </table>
        <div class="car-price">
            <span><?php echo CHtml::encode($data->cijena); ?> KM</span>
            <?php echo CHtml::link('<span class="fa fa-chevron-right"></span>', array('view', 'proizvodjac'=>Mark::getName($data->mark_id), 'id' => $data->id), array('class' => 'button primary small')); ?>
        </div>
    </div>
</div>

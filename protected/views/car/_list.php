<?php
/* @var $this CarController */
/* @var $data Car */

Yii::app()->clientScript->registerScript('popup', "
    $('.show-popup').bind('click', function(e){
        e.preventDefault();
        $('.fa-search').addClass('.fa-spinner').removeClass('.fa-search');
        url = '". CController::createUrl('car/images') . "/' + $(this).attr('data-id');
        allImages = '';
        parent = this;
        $.ajax({
            dataType: 'json',
            url: url,
            success: function(images){
                $.magnificPopup.open({
                    items: images,
                    gallery: {
                        enabled: true
                    },
                    type: 'image'
                });
                $('.fa-spinner').addClass('.fa-search').removeClass('.fa-spinner');
            }
        });
     });
");
?>

<div class="row car-list-item">
    <div class="small-12 medium-6 large-3 columns car-image">
        <?php $this->renderPartial('_promo-label', array('model' => $data)); ?>

        <?php if(!Yii::app()->user->isGuest): ?>
            <?php $this->renderPartial('_admin-buttons', array('model' => $data)); ?>
        <?php endif; ?>

        <div class="image-wrapper">
            <a href="#" class="show-popup" data-id="<?php echo $data->id; ?>">
                <div class="popup-hint"><span class="fa fa-search"></span></div>
                <img src="<?php echo $data->getMainImage('thumbnail'); ?>"/>
            </a>
        </div>
    </div>

    <div class="small-12 medium-6 large-6 columns">
        <h2 class="car-title"><?php echo CHtml::link(CHtml::encode($data->naslov), array('view', 'proizvodjac'=>Mark::getLinkName($data->mark_id), 'id' => $data->id)); ?></h2>
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
            <?php echo CHtml::link('<span class="fa fa-chevron-right"></span>', array('view', 'proizvodjac'=>Mark::getLinkName($data->mark_id), 'id' => $data->id), array('class' => 'button primary small')); ?>
        </div>
    </div>
</div>

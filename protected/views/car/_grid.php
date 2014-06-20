<?php
/* @var $this CarController */
/* @var $data Car */

?>

<li class="car-grid-item">
    <div class="item-wrapper">
        <div class="car-image">
            <?php $this->renderPartial('_promo-label', array('model' => $data)); ?>

            <?php if(!Yii::app()->user->isGuest): ?>
                <?php $this->renderPartial('_admin-buttons', array('model' => $data)); ?>
            <?php endif; ?>
            <div class="image-wrapper">
                <a href="<?php echo CController::createUrl('view', array('proizvodjac'=>Mark::getLinkName($data->mark_id), 'id' => $data->id)); ?>" class="">
                    <img src="<?php echo $data->getMainImage('thumbnail'); ?>"/>
                </a>
            </div>
        </div>
        <h2 class="car-title"><?php echo $data->naslov; ?></h2>
        <div class="car-price">
            <span><?php echo CHtml::encode($data->cijena); ?> KM</span>
            <?php echo CHtml::link('<span class="fa fa-chevron-right"></span>', array('view', 'proizvodjac'=>Mark::getLinkName($data->mark_id), 'id' => $data->id), array('class' => 'button primary small')); ?>
        </div>
    </div>

</li>





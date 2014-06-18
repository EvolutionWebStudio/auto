<?php
/* @var $this CarController */
/* @var $data Car */

?>

<li class="car-grid-item">
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
</li>





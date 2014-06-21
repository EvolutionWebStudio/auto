<?php
/* @var $this CarController */
/* @var $model Car */

$this->pageTitle = $model->naslov .' | ' . Yii::app()->name;
$metaDescription = $model->getShortDescription();
$imagesPath = Yii::app()->baseUrl.'/media/'.Mark::getFolderName($model->mark_id).'/'.$model->id;
?>

<div class="page one-car clearfix">
    <div class="large-12 columns relative">
        <h1 class="car-title"><?php echo $model->naslov; ?></h1>

        <?php if(!Yii::app()->user->isGuest): ?>
            <?php $this->renderPartial('_admin-buttons', array('model' => $model)); ?>
        <?php endif; ?>
    </div>

    <div class="large-8 columns relative">
        <div class="promo-label-wrapper">
            <?php if($model->na_akciji): ?>
                <div class="promo-label akcija" title="Na akciji">
                    <span class="fa fa-bullhorn"></span>
                </div>
            <?php endif; ?>
            <?php if($model->u_dolasku): ?>
                <div class="promo-label dolazak" title="U dolasku">
                    <span class="fa fa-truck"></span>
                </div>
            <?php endif; ?>
        </div>

        <ul class="car-slider bxslider">
            <?php
            if($model->images)
            {
                foreach ($model->images as $image)
                {
                    echo '<li><img src="'.$imagesPath.'/original/'.$image->link.'"/></li>';
                }
            }
            else
            {
                echo '<li><img src="'.Yii::app()->baseUrl.'/media/'.'default/original/auto-rasevic-pale-default-image.jpg"/></li>';
            }
            ?>
        </ul>
        <div class="car-description">
            <?php echo $model->opis; ?>
        </div>
    </div>
    <div class="large-4 columns">

        <table class="car-info">
            <tbody>
                <tr>
                    <td>Proizvođač:</td>
                    <td><?php echo $model->mark->name; ?></td>
                </tr>
                <tr>
                    <td>Model:</td>
                    <td><?php echo $model->model; ?></td>
                </tr>
                <tr>
                    <td>Godina:</td>
                    <td><?php echo $model->godiste; ?></td>
                </tr>
                <?php if($model->snaga): ?>
                    <tr>
                        <td>Snaga:</td>
                        <td><?php echo $model->snaga . 'kW'; ?></td>
                    </tr>
                <?php endif; ?>
                <?php if($model->kilometraza): ?>
                    <tr>
                        <td>Kilometraža:</td>
                        <td><?php echo $model->kilometraza . ' km'; ?></td>
                    </tr>
                <?php endif; ?>

                <?php if($model->gorivo): ?>
                    <tr>
                        <td>Gorivo:</td>
                        <td><?php echo $model->gorivo; ?></td>
                    </tr>
                <?php endif; ?>
                <?php if($model->transmisija): ?>
                    <tr>
                        <td>Transmisija:</td>
                        <td><?php echo $model->transmisija; ?></td>
                    </tr>
                <?php endif; ?>
                <?php if($model->boja): ?>
                    <tr>
                        <td>Boja:</td>
                        <td><?php echo $model->boja; ?></td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="car-price">
            <?php echo $model->cijena . ' KM'; ?>
        </div>
        <ul class="button-group social-buttons">
            <li>
<!--                <a href="--><?php //echo urldecode($model->getFacebookShareUrl(Yii::app()->request->url)); ?><!--" class="button facebook small social-share" target="_blank" rel="nofollow"><span class="fa fa-facebook"></span> Share</a>-->

                <?php echo CHtml::link('<span class="fa fa-facebook"></span> Share', $model->getFacebookShareUrl(Yii::app()->request->url), array('rel' => 'nofollow', 'target' => '_blank', 'class' => 'button facebook small social-share')); ?></li>
            <li><?php echo CHtml::link('<span class="fa fa-twitter"></span> Tweet', $model->getTwitterShareUrl(Yii::app()->request->url), array('rel' => 'nofollow', 'target' => '_blank', 'class' => 'button twitter small social-share')); ?></li>
        </ul>
    </div>
</div>

<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/vendor/jquery.bxslider/jquery.bxslider.min.js', CClientScript::POS_END);
$cs->registerCssFile($baseUrl.'/js/vendor/jquery.bxslider/jquery.bxslider.css');
$cs->registerScript("bindBxslider","$('.bxslider').bxSlider({uceCSS:false,adaptiveHeight: true});", CClientScript::POS_END);
$cs->registerMetaTag($metaDescription, 'description', null, array('lang' => 'sr'),1);
?>
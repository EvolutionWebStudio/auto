<?php
/* @var $this CarController */
/* @var $model Car */

$this->breadcrumbs=array(
	'Cars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Car', 'url'=>array('index')),
	array('label'=>'Create Car', 'url'=>array('create')),
	array('label'=>'Update Car', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Car', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Car', 'url'=>array('admin')),
);

$imagesPath = Yii::app()->baseUrl.'/media/'.$model->mark->name.'/'.$model->id.'/'
?>

<div class="page one-car clearfix">
    <div class="large-12 columns">
        <h1 class="car-title"><?php echo $model->naslov; ?></h1>
    </div>

    <div class="large-8 columns">
        <ul class="car-slider bxslider">
            <?php
            foreach ($model->images as $image)
            {
                echo '<li><img src="'.$imagesPath.'original/'.$image->link.'"/></li>';
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
                <?php if($model->boja): ?>
                    <tr>
                        <td>Boja:</td>
                        <td><?php echo $model->boja; ?></td>
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
            </tbody>
        </table>

        <div class="car-price">
            <?php echo $model->cijena . ' KM'; ?>
        </div>
    </div>
</div>

<?php
    $baseUrl = Yii::app()->baseUrl;
    $cs = Yii::app()->getClientScript();
    $cs->registerScriptFile($baseUrl.'/js/vendor/jquery.bxslider/jquery.bxslider.min.js', CClientScript::POS_END);
    $cs->registerCssFile($baseUrl.'/js/vendor/jquery.bxslider/jquery.bxslider.css');
    $cs->registerScript("bindBxslider","$('.bxslider').bxSlider({uceCSS:false,adaptiveHeight: true});", CClientScript::POS_END);
?>
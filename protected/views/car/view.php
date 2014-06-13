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

<div class="row">
    <div class="large-12 columns">
        <h1 class="car-title"><?php echo $model->naslov; ?></h1>
    </div>
    <div class="large-7 columns">
        <ul class="car-slider bxslider">
            <?php
            foreach ($model->images as $image)
            {
                echo '<li><img src="'.$imagesPath.'original/'.$image->link.'"/></li>';
            }
            ?>
        </ul>
        <div class="car-description">

        </div>
    </div>
    <div class="large-5 columns">

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
            <tr>
                <td>Snaga:</td>
                <td><?php echo $model->snaga; ?></td>
            </tr>
            <tr>
                <td>Kilometraža:</td>
                <td><?php echo $model->kilometraza; ?></td>
            </tr>
            <tr>
                <td>Boja:</td>
                <td><?php echo $model->boja; ?></td>
            </tr>
            <tr>
                <td>Gorivo:</td>
                <td><?php echo $model->gorivo; ?></td>
            </tr>
            <tr>
                <td>Transmisija:</td>
                <td><?php echo $model->transmisija; ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<h1>View Car #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'naslov',
		'model',
		'godiste',
		'snaga',
		'kilometraza',
		'gorivo',
		'transmisija',
		'boja',
		'cijena',
		'opis',
		'u_dolasku',
		'na_akciji',
		'mark_id',
		'user_id',
		'is_active',
	),
)); ?>

<?php
    $baseUrl = Yii::app()->baseUrl;
    $cs = Yii::app()->getClientScript();
    $cs->registerScriptFile($baseUrl.'/js/vendor/jquery.bxslider/jquery.bxslider.min.js', CClientScript::POS_END);
    $cs->registerCssFile($baseUrl.'/js/vendor/jquery.bxslider/jquery.bxslider.css');
    $cs->registerScript("bindBxslider","$('.bxslider').bxSlider({uceCSS:false,adaptiveHeight: true, slideMargin: 0});", CClientScript::POS_END);
?>
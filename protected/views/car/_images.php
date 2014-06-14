<?php
/**
 * Created by PhpStorm.
 * User: HoHoHo
 * Date: 6/14/14
 * Time: 7:52 PM
 */
$imageUrl = Yii::app()->getBaseUrl(true).'/media/'.Mark::getName($model->mark_id).'/'. $model->id.'/thumbs';
foreach($model->images as $image):
?>
<img src='<?php echo $imageUrl.'/'.$image->link; ?>' />
<?php
endforeach;
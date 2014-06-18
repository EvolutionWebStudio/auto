<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle= 'Greška | ' . Yii::app()->name;

?>

<div class="page clearfix error-page">
    <div class="small-12 columns">
        <h1 class="page-title">Error <?php echo $code; ?></h1>
    </div>

    <div class="error small-12 columns">
    <?php echo CHtml::encode($message); ?>
    </div>
</div>
<?php
/* @var $this ContactController */
/* @var $model Contact */

?>

<div class="page clearfix">
    <div class="small-12 columns">
        <h1>Promjena kontakt informacija</h1>
    </div>
    <div class="small-12 columns">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
</div>




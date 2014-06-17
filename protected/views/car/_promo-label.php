<?php
/**
 * Created by PhpStorm.
 * User: ITesic
 * Date: 17.6.14.
 * Time: 21.28
 */
?>

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
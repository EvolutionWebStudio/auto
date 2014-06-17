<?php
/**
 * Created by PhpStorm.
 * User: ITesic
 * Date: 17.6.14.
 * Time: 21.41
 */

?>

<div class="admin-buttons">
    <ul class="button-group">
        <li><?php echo CHtml::link('<span class="fa fa-pencil"></span>', array('car/update','id'=>$model->id),array('class' => 'button small', 'title' => 'Izmjeni')); ?></li>
        <li><?php echo CHtml::link('<span class="fa fa-trash-o"></span>', array('car/obrisi','id'=>$model->id),array('class' => 'button small', 'title' => 'Obriši', 'confirm' => 'Jeste li sigurni da želite obrisati ovaj automobil iz baze?',)); ?></li>
    </ul>
</div>
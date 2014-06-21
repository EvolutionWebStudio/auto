<?php
/* @var $this CarController */
/* @var $dataProvider CActiveDataProvider */

$listSettings = array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_'.$carViewType,
    'sortableAttributes'=>array(
        'id',
        'godiste',
        'cijena',
        'kilometraza',
    ),
    'ajaxUpdate' => false,
    'sorterHeader' => 'Sortiraj listu po:',
    'sorterFooter' => '<div class="car-view-buttons">
                    <a href="'.$this->createUrl('', array_merge($_GET, array('vtype'=>'list'))).'" class="list-view-button '.(($carViewType == 'list')? 'active' : '').'"><span class="fa fa-list"></span></a>
                    <a href="'.$this->createUrl('', array_merge($_GET, array('vtype'=>'grid'))).'" class="grid-view-button '.(($carViewType == 'grid')? 'active' : '').'"><span class="fa fa-th"></span></a></div>',
    'template' => '{sorter} {items} {pager}',
    'emptyText'=>'<p data-alert class="alert-box secondary">Trenutno nema ni jedan automobil.</p>',
);

if($carViewType == 'grid')
{
    $listSettings = array_merge($listSettings, array('itemsTagName' => 'ul', 'itemsCssClass' => 'small-block-grid-1 medium-block-grid-2 large-block-grid-3'));
}
?>

<div class="page car-<?php echo $carViewType; ?> clearfix">
    <div class="small-12 columns">
        <?php $this->widget('zii.widgets.CListView', $listSettings ); ?>
    </div>
</div>

<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/vendor/magnific-popup/jquery.magnific-popup.min.js', CClientScript::POS_END);
$cs->registerCssFile($baseUrl.'/js/vendor/magnific-popup/magnific-popup.css');
?>

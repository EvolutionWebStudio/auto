

<div class="page clearfix car-sorting">
    <div class="large-12 columns">
        <h1 class="page-title">Sortiranje vozila</h1>
    </div>
    <div class="large-12 columns">

        <?php
        $str_js = "
                var fixHelper = function(e, ui) {
                    ui.children().each(function() {
                        $(this).width($(this).width());
                    });
                    return ui;
                };

                $('#project-grid table.items tbody').sortable({
                    forcePlaceholderSize: true,
                    forceHelperSize: true,
                    opacity: 0.8,
                    cursor: 'move',
                    placeholder: 'ui-sortable-placeholder',
                    revert: 200,
                    items: 'tr',
                    update : function () {
                        serial = $('#project-grid table.items tbody').sortable('serialize', {key: 'items[]', attribute: 'class'});
                        $.ajax({
                            'url': '" . $this->createUrl('//car/sort') . "',
                            'type': 'post',
                            'data': serial,
                            'success': function(data){

                            },
                            'error': function(request, status, error){
                                alert('We are unable to set the sort order at this time.  Please try again in a few minutes.');
                            }
                        });
                    },
                    helper: fixHelper
                }).disableSelection();
            ";

        Yii::app()->clientScript->registerScript('sortable-project', $str_js);

        $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'project-grid',
            'template' => '{items}',
            'dataProvider'=>$model,
            'rowCssClassExpression'=>'"items[]_{$data->id}"',
            'ajaxUpdate'=>false,
            'columns'=>array(
                'naslov',
            ),
            'hideHeader' => true,
        ));

        Yii::app()->clientScript->registerScriptFile('http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js');
        ?>

    </div>
</div>
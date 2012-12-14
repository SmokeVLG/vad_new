<h1>Список дорог</h1>

<?php

$js_sign = '
function() {    
    var idroad = $(this).attr("href").replace("#", "");
    // посылка запроса на сохранение
    $.post("'.Yii::app()->createUrl('/serviceorg/createbyr', array()).'", {org: '.$rf_idOrg.', roads: idroad});
    $("#frmHidden").dialog("close");
    // update
    location.reload(true);
    return false;
}';


 

$dataProvider = $model->search();
$dataProvider->getPagination()->setPageSize(50);


      $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'roads-grid',
	'dataProvider'=>$dataProvider,
	//'filter'=>$model,
	'columns'=>array(
		'id',
                array(// территории берем из справочника
                    'name' => 'rf_idServiceObject',
                    'filter' => CHtml::listData(ServiceObject::model()->findAll(), 'id', 'name'),
                    'value' => 'ServiceObject::model()->findByPk($data->rf_idServiceObject)->name',
                    'sortable' => true,
                ),		
		'name',
		'comments',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{sign}',
                        'buttons'=>array
                        (
                            'sign' => array
                            (
                                'label'=>'Выбрать',
                                'url'=>'"#$data->id"',
                                'click'=>$js_sign,
                            ),
                        ),
		),
	),
)); ?>

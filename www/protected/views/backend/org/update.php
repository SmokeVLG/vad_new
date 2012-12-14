<?php
$this->breadcrumbs=array(
	'Организации'=>array('admin'),
	'Редактировать',
);

$this->menu=array(
    array('label'=>'Список', 'url'=>array('admin')),
    array('label'=>'Добавить', 'url'=>array('create')),
    array('label'=>'Добавить дорогу', 'url'=>'#', 'itemOptions'=>array('class'=>'trigger_addroad'))
);
?>

<h1>Редактировать организацию <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php if(count($servOrgData) > 0) {  ?>

<h2>Обслуживает дороги</h2>

<?php
    $js_delete = '
    function() {    
        var idroadservice = $(this).attr("href").replace("#", "");
        // посылка запроса на сохранение
        $.post("'.Yii::app()->createUrl('/serviceorg/delete', array()).'&ajax=1&id="+idroadservice);            
        // update
        location.reload(true);
        return false;
    }';
 


$servOrgData->getPagination()->setPageSize(50);


    
    $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'orgroad-grid',
	'dataProvider'=>$servOrgData,
	'columns'=>array(		
		array(
                        'name' => 'rf_idRoad',
                        //'filter' => CHtml::listData(WorkTech::model()->findAll(), 'id', 'name'),
                        'value' => 'Roads::model()->findByPk($data->rf_idRoad)->name',
                        //'sortable' => true,
                    ),
                array(
			'class'=>'CButtonColumn',
                        'template'=>'{delete}',
                        'buttons'=>array
                        (
                            'delete' => array
                            (
                                'label'=>'удалить',
                                'url'=>'"#$data->id"',
                                'click'=>$js_delete,
                            ),
                        ),
		),
	),
)); } ?>

<div id="frmHidden" style="display: none;"></div>
<div id="frmSelectRoad" style="display: none;"></div>

<?php
// обработка кнопки добавления дороги к организации
$cs=Yii::app()->clientScript;  
$cs->registerScriptFile(Yii::app()->baseUrl . '/js/jquery/jquery-1.6.2.min.js', CClientScript::POS_HEAD);
$cs->registerScriptFile(Yii::app()->baseUrl . '/js/jquery/jquery-ui-1.8.16.custom.min.js', CClientScript::POS_HEAD);  
$cs->registerCssFile(Yii::app()->baseUrl . '/css/start/jquery-ui-1.8.16.custom.css');

Yii::app()->clientScript->registerScript('orgroads','js:
    $(".trigger_addroad").live("click", function(){      
            hax({url: "'.Yii::app()->createUrl('/road/adminmini', array('rf_idOrg'=>$model->id)).'",
                   id: "frmHidden",
                   nocache: true,
                   nohistory:1});
              // Dialog
              $("#frmHidden").dialog({
                autoOpen: true,
                width: 750,
                modal: true,
                position: "top",
                close: function(){
                    $("#frmHidden").empty();
                }
              });
              return false;
       });


', CClientScript::POS_HEAD);
?>
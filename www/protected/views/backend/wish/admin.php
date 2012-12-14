<?php
//$this->breadcrumbs=array(
//	'Обращения',
//);

$this->menu=array(
	array('label'=>'Добавить Обращение', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('wish-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<?php $dataProvider = $model->search();
$dataProvider->pagination->pageSize = 50;
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'wish-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		'id',		
                array(// дороги берем из справочника
                    'name' => 'rf_idRoad',
                    'filter' => CHtml::listData(Roads::model()->findAll(), 'id', 'name'),
                    'value' => 'Roads::model()->findByPk($data->rf_idRoad)->name',
                    'sortable' => true,
                ),
                'comments',
                'date_wish',
                'ourComments',
                'date_ans',            
                array(// дороги берем из справочника
                    'name' => 'rf_idWorkStatus',
                    'filter' => CHtml::listData(WorkStatus::model()->findAll(), 'id', 'name'),
                    'value' => 'WorkStatus::model()->findByPk($data->rf_idWorkStatus)->name',
                    'sortable' => true,
                ),            
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

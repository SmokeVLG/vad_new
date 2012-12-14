<?php
$this->breadcrumbs=array(
);

$this->menu=array(
	array('label'=>'Добавить', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('roads-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список дорог</h1>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $dataProvider = $model->search();
$dataProvider->pagination->pageSize = 50;
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'roads-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
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
		),
	),
)); ?>

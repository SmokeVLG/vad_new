<?php
$this->breadcrumbs=array(
	'Объекты обслуживания'=>array('admin'),
	'Список',
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
	$.fn.yiiGridView.update('service-object-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список объектов обслуживания</h1>

<?php if(Yii::app()->user->hasFlash('result')) { ?>
<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('result'); ?>
</div>
<?php } ?>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 

$dataProvider = $model->search();
$dataProvider->pagination->pageSize = 50;



$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'service-object-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		'id',
                array(// территории берем из справочника
                    'name' => 'rf_idArea',
                    'filter' => CHtml::listData(Area::model()->findAll(), 'id', 'name'),
                    'value' => 'Area::model()->findByPk($data->rf_idArea)->name',
                    'sortable' => true,
                ),
		'name',
		'comments',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
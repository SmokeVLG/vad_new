<?php
$this->breadcrumbs=array(
	'Округи'=>array('index'),
	'Список',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('area-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список округов</h1>
<?php if(Yii::app()->user->hasFlash('result')) { ?>
<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('result'); ?>
</div>
<?php } ?>

<?php echo CHtml::link('Поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $dataProvider = $model->search();
$dataProvider->pagination->pageSize = 50;
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'area-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<?php
$this->breadcrumbs=array(
	'Work Kalaches'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List WorkKalach', 'url'=>array('index')),
	array('label'=>'Create WorkKalach', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('work-kalach-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Work Kalaches</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 

$dataProvider = $model->search();
$dataProvider->pagination->pageSize = 50;
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'work-kalach-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		'id',
		'toplivo',
		'benzin80',
		'benzin92',
		'karti',
		'rf_idOrg',
		/*
		'datePlan',
		'infotime',
		'rf_idUser',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

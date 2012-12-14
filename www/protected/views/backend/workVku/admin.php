<?php
$this->breadcrumbs=array(
	'Work Vkus'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List WorkVku', 'url'=>array('index')),
	array('label'=>'Create WorkVku', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('work-vku-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Обзор ГСМ по ВКУ</h1>


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
	'id'=>'work-vku-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		'id',
		'lip',
		'zim',
		'benzin',
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

<?php
$this->breadcrumbs=array(
	'Организации'=>array('index'),
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
	$.fn.yiiGridView.update('org-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список организаций</h1>

<?php echo CHtml::link('Поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $dataProvider = $model->search();
$dataProvider->pagination->pageSize = 50;
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'org-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'comment',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update}{delete}'
		),
	),
)); ?>

<?php
//$this->breadcrumbs=array(
//	'Users'=>array('index'),
//	'Manage',
//);

$this->menu=array(
	array('label'=>'Список Пользователей', 'url'=>array('index')),
	array('label'=>'Создать Пользователя', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Редактирование пользователей</h1>






<?php 

$dataProvider = $model->search();
$dataProvider->getPagination()->setPageSize(50);

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'password',
		'role',
		'rf_idOrg',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

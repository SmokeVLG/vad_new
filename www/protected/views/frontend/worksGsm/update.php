<?php
$this->breadcrumbs=array(
	'Данные по ГСМ'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Список данных по ГСМ', 'url'=>array('index')),
	array('label'=>'Создать данные по ГСМ', 'url'=>array('create')),
	array('label'=>'Показ данных по ГСМ', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Обзор данных по ГСМ', 'url'=>array('admin')),
);
?>

<h1>Обновить данные по ГСМ<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
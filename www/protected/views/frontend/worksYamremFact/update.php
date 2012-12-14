<?php
$this->breadcrumbs=array(
	'Работы по Ямочному ремонту (Факт)'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Список работ по Ямочному ремонту (Факт)', 'url'=>array('index')),
	array('label'=>'Создать работу по Ямочному ремонту (Факт)', 'url'=>array('create')),
	array('label'=>'Обзор работ пор Ямочному ремонту (Факт)', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Список работ по Ямочному ремонту (Факт)', 'url'=>array('admin')),
);
?>

<h1>Обновить работы по Ямочному ремонту (Факт)<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
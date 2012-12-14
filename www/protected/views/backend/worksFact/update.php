<?php
$this->breadcrumbs=array(
	'Работы Факт'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Список работ Факт', 'url'=>array('index')),
	array('label'=>'Создать работу Факт', 'url'=>array('create')),
	array('label'=>'Показать работу Факт', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Обзор работ Факт', 'url'=>array('admin')),
);
?>

<h1>Update WorksFact <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'infotime'=>$infotime)); ?>
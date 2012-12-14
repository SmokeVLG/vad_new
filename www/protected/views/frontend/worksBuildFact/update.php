<?php
$this->breadcrumbs=array(
	'Работы по строительству (Факт)'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Список работ по строительсвут(Факт)', 'url'=>array('index')),
	array('label'=>'Создать работу по строительсву(Факт)', 'url'=>array('create')),
	array('label'=>'Показ работ по строительству (Факт)', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Обзор работ по строительству(Факт)', 'url'=>array('admin')),
);
?>

<h1>Обновить работу по строительству (Факт) <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
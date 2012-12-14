<?php
$this->breadcrumbs=array(
	'Работы по строительству (План)'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Список работ по строительсвут(План)', 'url'=>array('index')),
	array('label'=>'Создать работу по строительсву(План)', 'url'=>array('create')),
	array('label'=>'Показ работ по строительству (План)', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Обзор работ по строительству(План)', 'url'=>array('admin')),
);
?>

<h1>Обновить работу по строительству (План) <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
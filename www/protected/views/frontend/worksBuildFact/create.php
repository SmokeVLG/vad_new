<?php
$this->breadcrumbs=array(
	'Работы по строительству (Факт)'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список работ по строительству(Факт)', 'url'=>array('index')),
	array('label'=>'Обзор работ по строительству(Факт)', 'url'=>array('admin')),
);
?>

<h1>Создать работу по строительству (Факт)</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'infotime'=>$infotime)); ?>
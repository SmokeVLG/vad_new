<?php
$this->breadcrumbs=array(
	'Работы по строительству (План)'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список работ по строительству(План)', 'url'=>array('index')),
	array('label'=>'Обзор работ по строительству(План)', 'url'=>array('admin')),
);
?>

<h1>Создать работу по строительству (План)</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'infotime'=>$infotime)); ?>
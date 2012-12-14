<?php
$this->breadcrumbs=array(
	'Работы Факт'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список работ Факт', 'url'=>array('index')),
	array('label'=>'Обзор работ Факт', 'url'=>array('admin')),
);
?>

<h1>Создать работу Факт</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'infotime'=>$infotime)); ?>
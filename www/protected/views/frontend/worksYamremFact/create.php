<?php
$this->breadcrumbs=array(
	'Работы по ямочному ремонту (Факт)'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список работ по ямочному ремонту (Факт)', 'url'=>array('index')),
	array('label'=>'Обзор работ по ямочному ремонту (Факт)', 'url'=>array('admin')),
);
?>

<h1>Создать работу по ямочному ремонту(Факт)</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'infotime'=>$infotime)); ?>
<?php
$this->breadcrumbs=array(
	'Работы по строительству (Факт)',
);

$this->menu=array(
	array('label'=>'Создать работу по строительству (Факт)', 'url'=>array('create')),
	array('label'=>'Обзор работ по строительству (Факт)', 'url'=>array('admin')),
);
?>

<h1>Работы по строительству (Факт)</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

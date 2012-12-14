<?php
$this->breadcrumbs=array(
	'Работы Факт',
);

$this->menu=array(
	array('label'=>'Создать работу Факт', 'url'=>array('create')),
	array('label'=>'Обзор работ Факт', 'url'=>array('admin')),
);
?>

<h1>Работы Факт</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

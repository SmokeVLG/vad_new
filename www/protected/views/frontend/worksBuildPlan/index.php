<?php
$this->breadcrumbs=array(
	'Работы по строительству (План)',
);

$this->menu=array(
	array('label'=>'Создать работу по строительству (План)', 'url'=>array('create')),
	array('label'=>'Обзор работ по строительству (План)', 'url'=>array('admin')),
);
?>

<h1>Работы по строительству (План)</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

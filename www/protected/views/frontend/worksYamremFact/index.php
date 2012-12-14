<?php
$this->breadcrumbs=array(
	'Работы по Ямочному ремонту (Факт)',
);

$this->menu=array(
	array('label'=>'Создать работу по Ямочному ремонту (Факт)', 'url'=>array('create')),
	array('label'=>'Обзор работ по ямочному ремонту (Факт)', 'url'=>array('admin')),
);
?>

<h1>Работы по Ямочному ремонту (Факт)</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

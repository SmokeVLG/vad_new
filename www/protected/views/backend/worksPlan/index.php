<?php
$this->breadcrumbs=array(
	'Списо Работ План',
);

$this->menu=array(
	array('label'=>'Создать Дорожную Работу (План)', 'url'=>array('create')),
	array('label'=>'Обзор Дорожных Работ(План)', 'url'=>array('admin')),
);
?>

<h1>Работы (План)</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
$this->breadcrumbs=array(
	'Области',
);

$this->menu=array(
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Области</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

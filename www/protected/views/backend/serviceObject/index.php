<?php
$this->breadcrumbs=array(
	'Service Objects',
);

$this->menu=array(
	array('label'=>'Create ServiceObject', 'url'=>array('create')),
	array('label'=>'Manage ServiceObject', 'url'=>array('admin')),
);
?>

<h1>Service Objects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

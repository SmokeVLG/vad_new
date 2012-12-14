<?php
$this->breadcrumbs=array(
	'Roads',
);

$this->menu=array(
	array('label'=>'Create Roads', 'url'=>array('create')),
	array('label'=>'Manage Roads', 'url'=>array('admin')),
);
?>

<h1>Roads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

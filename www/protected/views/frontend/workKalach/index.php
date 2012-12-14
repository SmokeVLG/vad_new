<?php
$this->breadcrumbs=array(
	'Work Kalaches',
);

$this->menu=array(
	array('label'=>'Create WorkKalach', 'url'=>array('create')),
	array('label'=>'Manage WorkKalach', 'url'=>array('admin')),
);
?>

<h1>Work Kalaches</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

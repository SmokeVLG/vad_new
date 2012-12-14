<?php
$this->breadcrumbs=array(
	'Works Yamrem Plans',
);

$this->menu=array(
	array('label'=>'Create WorksYamremPlan', 'url'=>array('create')),
	array('label'=>'Manage WorksYamremPlan', 'url'=>array('admin')),
);
?>

<h1>Works Yamrem Plans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

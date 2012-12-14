<?php
$this->breadcrumbs=array(
	'Service Objects'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ServiceObject', 'url'=>array('index')),
	array('label'=>'Create ServiceObject', 'url'=>array('create')),
	array('label'=>'Update ServiceObject', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ServiceObject', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ServiceObject', 'url'=>array('admin')),
);
?>

<h1>View ServiceObject #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'comments',
	),
)); ?>

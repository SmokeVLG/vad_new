<?php
$this->breadcrumbs=array(
	'Roads'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Roads', 'url'=>array('index')),
	array('label'=>'Create Roads', 'url'=>array('create')),
	array('label'=>'Update Roads', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Roads', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Roads', 'url'=>array('admin')),
);
?>

<h1>View Roads #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'comments',
	),
)); ?>

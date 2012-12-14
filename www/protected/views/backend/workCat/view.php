<?php
$this->breadcrumbs=array(
	'Work Cats'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List WorkCat', 'url'=>array('index')),
	array('label'=>'Create WorkCat', 'url'=>array('create')),
	array('label'=>'Update WorkCat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete WorkCat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WorkCat', 'url'=>array('admin')),
);
?>

<h1>View WorkCat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'comment',
	),
)); ?>

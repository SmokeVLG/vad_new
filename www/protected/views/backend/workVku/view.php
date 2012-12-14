<?php
$this->breadcrumbs=array(
	'Work Vkus'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List WorkVku', 'url'=>array('index')),
	array('label'=>'Create WorkVku', 'url'=>array('create')),
	array('label'=>'Update WorkVku', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete WorkVku', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WorkVku', 'url'=>array('admin')),
);
?>

<h1>View WorkVku #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'lip',
		'zim',
		'benzin',
		'karti',
		'rf_idOrg',
		'datePlan',
		'infotime',
		'rf_idUser',
	),
)); ?>

<?php
$this->breadcrumbs=array(
	'Work Kalaches'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WorkKalach', 'url'=>array('index')),
	array('label'=>'Create WorkKalach', 'url'=>array('create')),
	array('label'=>'View WorkKalach', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage WorkKalach', 'url'=>array('admin')),
);
?>

<h1>Update WorkKalach <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
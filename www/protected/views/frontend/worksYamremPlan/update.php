<?php
$this->breadcrumbs=array(
	'Works Yamrem Plans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WorksYamremPlan', 'url'=>array('index')),
	array('label'=>'Create WorksYamremPlan', 'url'=>array('create')),
	array('label'=>'View WorksYamremPlan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage WorksYamremPlan', 'url'=>array('admin')),
);
?>

<h1>Update WorksYamremPlan <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
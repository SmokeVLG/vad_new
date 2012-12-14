<?php
$this->breadcrumbs=array(
	'Work Vkus'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WorkVku', 'url'=>array('index')),
	array('label'=>'Create WorkVku', 'url'=>array('create')),
	array('label'=>'View WorkVku', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage WorkVku', 'url'=>array('admin')),
);
?>

<h1>Update WorkVku <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
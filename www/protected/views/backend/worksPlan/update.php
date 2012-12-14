<?php
$this->breadcrumbs=array(
	'Работы (План)'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WorksPlan', 'url'=>array('index')),
	array('label'=>'Create WorksPlan', 'url'=>array('create')),
	array('label'=>'View WorksPlan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage WorksPlan', 'url'=>array('admin')),
);
?>

<h1>Update WorksPlan <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
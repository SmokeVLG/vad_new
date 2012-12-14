<?php
$this->breadcrumbs=array(
	'Roads'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label'=>'Список', 'url'=>array('admin')),
	array('label'=>'Добавить', 'url'=>array('create')),
);
?>

<h1>Редактировать дорогу <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
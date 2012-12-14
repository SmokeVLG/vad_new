<?php
$this->breadcrumbs=array(
	'Объекты обслуживания'=>array('admin'),
	$model->id,
	'Редактировать',
);

$this->menu=array(
        array('label'=>'Список', 'url'=>array('admin')),
	array('label'=>'Добавить', 'url'=>array('create')),
);
?>

<h1>Редактировать объект обслуживания <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
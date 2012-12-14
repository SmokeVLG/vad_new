<?php
$this->breadcrumbs=array(
	'Округи'=>array('admin'),
	'Редактировать',
);

$this->menu=array(
    array('label'=>'Список', 'url'=>array('admin')),
    array('label'=>'Добавить', 'url'=>array('create')),	
);
?>

<h1>Редактировать округ <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
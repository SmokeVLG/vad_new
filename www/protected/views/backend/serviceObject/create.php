<?php
$this->breadcrumbs=array(
	'Объекты обслуживания'=>array('admin'),
	'Добавить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('admin')),
);
?>

<h1>Добавить объект обслуживания</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
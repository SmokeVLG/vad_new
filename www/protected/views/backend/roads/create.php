<?php
$this->breadcrumbs=array(
	'Дороги'=>array('admin'),
	'Добавить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('admin')),
);
?>

<h1>Добавить дорогу</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
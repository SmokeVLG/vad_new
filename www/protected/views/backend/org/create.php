<?php
$this->breadcrumbs=array(
	'Организации'=>array('admin'),
	'Добавить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('admin')),
);
?>

<h1>Добавить организацию</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>



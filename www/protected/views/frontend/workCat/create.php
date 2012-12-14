<?php
$this->breadcrumbs=array(
	'Виды работ'=>array('admin'),
	'Добавить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('admin')),
);
?>

<h1>Добавить вид работ</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
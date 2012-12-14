<?php
$this->breadcrumbs=array(
	'Список'=>array('admin'),
	'Добавить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('admin')),
);
?>

<h1>Добавить обращение-заявку</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
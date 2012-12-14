<?php
$this->breadcrumbs=array(
	'Округи'=>array('index'),
	'Добавить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('admin')),
);
?>

<h1>Добавить запись</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
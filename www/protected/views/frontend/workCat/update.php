<?php
$this->breadcrumbs=array(
	'Виды работ'=>array('index'),
	$model->id,
	'Редактировать',
);

$this->menu=array(
        array('label'=>'Список', 'url'=>array('admin')),
	array('label'=>'Добавить', 'url'=>array('create')),	
);
?>

<h1>Изменить вид работ <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
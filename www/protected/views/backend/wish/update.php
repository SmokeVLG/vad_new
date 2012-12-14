<?php
$this->breadcrumbs=array(
	'Список'=>array('admin'),
	'Редактировать',
);

$this->menu=array(
        array('label'=>'Список', 'url'=>array('admin')),
	array('label'=>'Добавить', 'url'=>array('create')),
);
?>

<h1>Редактировать обращение-заявку [<?php echo $model->id; ?>]</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
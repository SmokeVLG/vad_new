<?php
$this->breadcrumbs=array(
	'Работы План'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список работ (План)', 'url'=>array('index')),
	array('label'=>'Обзор работ (План)', 'url'=>array('admin')),
);
?>

<h1>Создать работу (План)</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'infotime'=>$infotime)); ?>
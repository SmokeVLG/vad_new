<?php
$this->breadcrumbs=array(
	'Work Vkus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Список данных по ГСМ(ВКУ)', 'url'=>array('index')),
	array('label'=>'Обзор данных по ГСМ(ВКУ)', 'url'=>array('admin')),
);
?>

<h1>Создать данные по ГСМ</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'infotime'=>$infotime)); ?>
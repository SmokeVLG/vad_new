<?php
$this->breadcrumbs=array(
	'Данные по ГСМ'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список данных по ГСМ', 'url'=>array('index')),
	array('label'=>'Обзор данных по ГСМ', 'url'=>array('admin')),
);
?>

<h1>Создать данные по ГСМ</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'infotime'=>$infotime)); ?>
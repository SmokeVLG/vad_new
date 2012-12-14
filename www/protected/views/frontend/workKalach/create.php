<?php
$this->breadcrumbs=array(
	'Work Kalaches'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Обзор', 'url'=>array('admin')),
);
?>

<h1>Ввести данные по ГСМ</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'infotime'=>$infotime)); ?>
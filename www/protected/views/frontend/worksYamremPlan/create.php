<?php
$this->breadcrumbs=array(
	'Работы по ямочному ремонту (План)'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'List WorksYamremPlan', 'url'=>array('index')),
	array('label'=>'Manage WorksYamremPlan', 'url'=>array('admin')),
);
?>

<h1>Создать работу по ямочному ремонту(План)</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'infotime'=>$infotime)); ?>
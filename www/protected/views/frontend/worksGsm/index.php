<?php
$this->breadcrumbs=array(
	'Данные по ГСМ',
);

$this->menu=array(
	array('label'=>'Ввести данные по ГСМ', 'url'=>array('create')),
	array('label'=>'Обзор данных по ГСМ', 'url'=>array('admin')),
);
?>

<h1>Данные по ГСМ</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

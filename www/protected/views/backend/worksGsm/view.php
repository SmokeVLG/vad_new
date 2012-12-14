<?php
$this->breadcrumbs=array(
	'Данные по ГСМ'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список данных по ГСМ', 'url'=>array('index')),
	array('label'=>'Создать данные по ГСМ', 'url'=>array('create')),
	//array('label'=>'Update WorksGsm', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete WorksGsm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Обзор данных по ГСМ', 'url'=>array('admin')),
);
?>

<h1>Показ данных по ГСМ #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(// организации
                    'name' => 'rf_idOrg',
                    //'filter' => CHtml::listData(Org::model()->findAll(), 'id', 'name'),
                    'value' => 'Администратор',
                   
                    'sortable' => true,
                ),
		'toplivo',
		'benzin',
		'karti',
		
		'datePlan',
		'infotime',
		'rf_idUser',
	),
)); ?>

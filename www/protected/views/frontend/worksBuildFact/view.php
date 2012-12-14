<?php
$this->breadcrumbs=array(
	'Работы по строительству(Факт)'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список работ по строительству(Факт)', 'url'=>array('index')),
	array('label'=>'Создать работу по строительству(Факт)', 'url'=>array('create')),	
	array('label'=>'Обзор работ по строительству(Факт)', 'url'=>array('admin')),
);
?>

<h1>Показ работы по строительству #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(// организации
                    'name' => 'rf_idOrg',
                    //'filter' => CHtml::listData(Org::model()->findAll(), 'id', 'name'),
                    'value' => Org::model()->findByPk($model->rf_idOrg)->name,
                   
                    'sortable' => true,
                ),
		'rf_idRoads',
            'rf_idRoadsBuild',
		'rf_idWorkCat',
		'quantityRes',
		'infotime',
		'rf_idWorkStatus',
		'pogoda',
		'rf_idUser',
		'cKDM',
		'cK700',
		'cT100',
		'cAGR',
		'Avtokran',
		'cROTOR',
		'cBULD',
		'cPOGR',
		'obstanovka',
		'ABS',
		'sheben',
		'pesok',
		'MTZ80',
		'T150',
		'T170',
		'Benzovoz',
		'Bitunovoz',
		'asfaltouk',
		'katok',
		'vibropl',
		'vozduhduv',
		'motokos',
		'bus',
		'samosv',
		'ABZ',
		'PGM',
		'uchdor',
		
		'Zil',
		'Isk',
		'Avtogudronator',
		'D40',
		'datePlan',
	),
)); ?>

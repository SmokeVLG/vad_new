<?php
$this->breadcrumbs=array(
	'Работы (План)'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список работ(План)', 'url'=>array('index')),
        array('label'=>'Создать работу(План)', 'url'=>array('create')),	
	array('label'=>'Обзор работ (План)', 'url'=>array('admin')),
);
?>

<h1>Обзор работ (План) #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		array(// организации
                    'name' => 'rf_idOrg',
                    //'filter' => CHtml::listData(Org::model()->findAll(), 'id', 'name'),
                    'value' => Org::model()->findByPk($model->rf_idOrg)->name,
                   
                    'sortable' => true,
                ),
               array(// организации
                    'name' => 'rf_idRoads',
                    //'filter' => CHtml::listData(Org::model()->findAll(), 'id', 'name'),
                    'value' => Roads::model()->findByPk($model->rf_idRoads)->name,
                   
                    'sortable' => true,
                ),
		
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
		'remkolgor',
		'remkolpnev',
		'remkolhol',
		'remkolkar',
		'remkolgorS',
		'remkolpnevS',
		'remkolholS',
		'remkolkarS',
		'remkolgorK',
		'remkolpnevK',
		'remkolholK',
		'remkolkarK',
		'Zil',
		'Isk',
		'Avtogudronator',
		'D40',
		'datePlan',
	),
)); ?>

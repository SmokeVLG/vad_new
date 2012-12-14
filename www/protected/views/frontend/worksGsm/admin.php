<?php
$this->breadcrumbs=array(
	'ГСМ'=>array('index'),
	'Обзор',
);

$this->menu=array(
	array('label'=>'Список данных ГСМ', 'url'=>array('index')),
	array('label'=>'Ввести данные ГСМ', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('works-gsm-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Обзор данных ГСМ</h1>



<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 

$dataProvider = $model->search();
$dataProvider->pagination->pageSize = 50;


$criteria=new CDbCriteria;
$criteria=$dataProvider->getCriteria();
$condition='rf_idOrg = ('. (int) Yii::app()->user->id  .')';
$criteria->addCondition($condition);
$dataProvider->setCriteria($criteria);



$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'works-gsm-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		
		'toplivo',
		'benzin',
		'karti',
         
		array(// организации
                    'name' => 'rf_idOrg',
                    //'filter' => CHtml::listData(Org::model()->findAll(), 'id', 'name'),                    
                    'value' => 'Org::model()->findByPk($data->rf_idOrg)->name',                   
                    'sortable' => true,
                ),
		'datePlan',
		/*
		'infotime',
		'rf_idUser',
		*/
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}'
		),
	),
)); ?>

<?php
$this->breadcrumbs=array(
	'Дорожные работы(План)'=>array('index'),
	'Обзор Дорожных работ (План)',
);

$this->menu=array(
	array('label'=>'Список Дорожных работ(План)', 'url'=>array('index')),
	array('label'=>'Создать Дорожную работу(План)', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('works-plan-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список Дорожных работ(План)</h1>


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
	'id'=>'work-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		 array(// организации
                    'name' => 'rf_idOrg',
                    //'filter' => CHtml::listData(Org::model()->findAll(), 'id', 'name'),                    
                    'value' => 'Org::model()->findByPk($data->rf_idOrg)->name',                   
                    'sortable' => true,
                ),
		array(// дороги берем из справочника
                    'name' => 'rf_idRoads',
                    'filter' => CHtml::listData(Roads::model()->findAll(), 'id', 'name'),
                    'value' => 'Roads::model()->findByPk($data->rf_idRoads)->name',
                    'sortable' => true,
                ),               
               
               
                'infotime',
                'datePlan',
                'rf_idWorkCat',               
             
                'rf_idUser',
               
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}'
		),
	),
)); ?>

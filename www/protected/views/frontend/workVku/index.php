<?php
$this->breadcrumbs=array(
	'Work Vkus',
);

$this->menu=array(
	array('label'=>'Create WorkVku', 'url'=>array('create')),
	array('label'=>'Manage WorkVku', 'url'=>array('admin')),
);
?>

<h1>Work Vkus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

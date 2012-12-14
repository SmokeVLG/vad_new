<?php
$this->breadcrumbs=array(
	'Work Cats',
);

$this->menu=array(
	array('label'=>'Create WorkCat', 'url'=>array('create')),
	array('label'=>'Manage WorkCat', 'url'=>array('admin')),
);
?>

<h1>Work Cats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

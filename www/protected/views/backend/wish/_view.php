<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rf_idRoad')); ?>:</b>
	<?php echo CHtml::encode($data->rf_idRoad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rf_idWorkStatus')); ?>:</b>
	<?php echo CHtml::encode($data->rf_idWorkStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />


</div>
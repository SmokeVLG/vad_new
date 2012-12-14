<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('toplivo')); ?>:</b>
	<?php echo CHtml::encode($data->toplivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('benzin80')); ?>:</b>
	<?php echo CHtml::encode($data->benzin80); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('benzin92')); ?>:</b>
	<?php echo CHtml::encode($data->benzin92); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('karti')); ?>:</b>
	<?php echo CHtml::encode($data->karti); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rf_idOrg')); ?>:</b>
	<?php echo CHtml::encode($data->rf_idOrg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datePlan')); ?>:</b>
	<?php echo CHtml::encode($data->datePlan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('infotime')); ?>:</b>
	<?php echo CHtml::encode($data->infotime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rf_idUser')); ?>:</b>
	<?php echo CHtml::encode($data->rf_idUser); ?>
	<br />

	*/ ?>

</div>
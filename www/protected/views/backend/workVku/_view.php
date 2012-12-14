<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lip')); ?>:</b>
	<?php echo CHtml::encode($data->lip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zim')); ?>:</b>
	<?php echo CHtml::encode($data->zim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('benzin')); ?>:</b>
	<?php echo CHtml::encode($data->benzin); ?>
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
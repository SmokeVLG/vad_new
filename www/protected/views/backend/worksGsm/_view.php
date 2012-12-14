<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rf_idOrg')); ?>:</b>
	<?php echo CHtml::encode (Org::model()->findByPk(($data->rf_idOrg))->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('toplivo')); ?>:</b>
	<?php echo CHtml::encode($data->toplivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('benzin')); ?>:</b>
	<?php echo CHtml::encode($data->benzin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('karti')); ?>:</b>
	<?php echo CHtml::encode($data->karti); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('datePlan')); ?>:</b>
	<?php echo CHtml::encode($data->datePlan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('infotime')); ?>:</b>
	<?php echo CHtml::encode($data->infotime); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('rf_idUser')); ?>:</b>
	<?php echo CHtml::encode($data->rf_idUser); ?>
	<br />

	*/ ?>

</div>
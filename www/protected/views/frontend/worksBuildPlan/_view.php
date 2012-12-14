<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rf_idOrg')); ?>:</b>
	<?php echo CHtml::encode (Org::model()->findByPk(($data->rf_idOrg))->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rf_idRoads')); ?>:</b>
	<?php echo CHtml::encode(Roads::model()->findByPk(($data->rf_idRoads))->name)         ; ?>
	<br />
        
        
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('rf_idRoadsBuild')); ?>:</b>
	<?php echo CHtml::encode($data->rf_idRoadsBuild) ; ?>
	<br />
        
        
        
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('rf_idWorkCat')); ?>:</b>
	<?php echo CHtml::encode($data->rf_idWorkCat); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('infotime')); ?>:</b>
	<?php echo CHtml::encode($data->infotime); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('datePlan')); ?>:</b>
	<?php echo CHtml::encode($data->datePlan); ?>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pogoda')); ?>:</b>
	<?php echo CHtml::encode($data->pogoda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rf_idUser')); ?>:</b>
	<?php echo CHtml::encode($data->rf_idUser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cKDM')); ?>:</b>
	<?php echo CHtml::encode($data->cKDM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cK700')); ?>:</b>
	<?php echo CHtml::encode($data->cK700); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cT100')); ?>:</b>
	<?php echo CHtml::encode($data->cT100); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cAGR')); ?>:</b>
	<?php echo CHtml::encode($data->cAGR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Avtokran')); ?>:</b>
	<?php echo CHtml::encode($data->Avtokran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cROTOR')); ?>:</b>
	<?php echo CHtml::encode($data->cROTOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cBULD')); ?>:</b>
	<?php echo CHtml::encode($data->cBULD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cPOGR')); ?>:</b>
	<?php echo CHtml::encode($data->cPOGR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obstanovka')); ?>:</b>
	<?php echo CHtml::encode($data->obstanovka); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ABS')); ?>:</b>
	<?php echo CHtml::encode($data->ABS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sheben')); ?>:</b>
	<?php echo CHtml::encode($data->sheben); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pesok')); ?>:</b>
	<?php echo CHtml::encode($data->pesok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MTZ80')); ?>:</b>
	<?php echo CHtml::encode($data->MTZ80); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('T150')); ?>:</b>
	<?php echo CHtml::encode($data->T150); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('T170')); ?>:</b>
	<?php echo CHtml::encode($data->T170); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Benzovoz')); ?>:</b>
	<?php echo CHtml::encode($data->Benzovoz); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Bitunovoz')); ?>:</b>
	<?php echo CHtml::encode($data->Bitunovoz); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asfaltouk')); ?>:</b>
	<?php echo CHtml::encode($data->asfaltouk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('katok')); ?>:</b>
	<?php echo CHtml::encode($data->katok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vibropl')); ?>:</b>
	<?php echo CHtml::encode($data->vibropl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vozduhduv')); ?>:</b>
	<?php echo CHtml::encode($data->vozduhduv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motokos')); ?>:</b>
	<?php echo CHtml::encode($data->motokos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bus')); ?>:</b>
	<?php echo CHtml::encode($data->bus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('samosv')); ?>:</b>
	<?php echo CHtml::encode($data->samosv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ABZ')); ?>:</b>
	<?php echo CHtml::encode($data->ABZ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PGM')); ?>:</b>
	<?php echo CHtml::encode($data->PGM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uchdor')); ?>:</b>
	<?php echo CHtml::encode($data->uchdor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remkolgor')); ?>:</b>
	<?php echo CHtml::encode($data->remkolgor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remkolpnev')); ?>:</b>
	<?php echo CHtml::encode($data->remkolpnev); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remkolhol')); ?>:</b>
	<?php echo CHtml::encode($data->remkolhol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remkolkar')); ?>:</b>
	<?php echo CHtml::encode($data->remkolkar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remkolgorS')); ?>:</b>
	<?php echo CHtml::encode($data->remkolgorS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remkolpnevS')); ?>:</b>
	<?php echo CHtml::encode($data->remkolpnevS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remkolholS')); ?>:</b>
	<?php echo CHtml::encode($data->remkolholS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remkolkarS')); ?>:</b>
	<?php echo CHtml::encode($data->remkolkarS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remkolgorK')); ?>:</b>
	<?php echo CHtml::encode($data->remkolgorK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remkolpnevK')); ?>:</b>
	<?php echo CHtml::encode($data->remkolpnevK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remkolholK')); ?>:</b>
	<?php echo CHtml::encode($data->remkolholK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remkolkarK')); ?>:</b>
	<?php echo CHtml::encode($data->remkolkarK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Zil')); ?>:</b>
	<?php echo CHtml::encode($data->Zil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Isk')); ?>:</b>
	<?php echo CHtml::encode($data->Isk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Avtogudronator')); ?>:</b>
	<?php echo CHtml::encode($data->Avtogudronator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D40')); ?>:</b>
	<?php echo CHtml::encode($data->D40); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datePlan')); ?>:</b>
	<?php echo CHtml::encode($data->datePlan); ?>
	<br />

	*/ ?>

</div>
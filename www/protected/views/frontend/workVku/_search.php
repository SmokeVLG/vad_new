<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lip'); ?>
		<?php echo $form->textField($model,'lip'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zim'); ?>
		<?php echo $form->textField($model,'zim'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'benzin'); ?>
		<?php echo $form->textField($model,'benzin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'karti'); ?>
		<?php echo $form->textField($model,'karti'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rf_idOrg'); ?>
		<?php echo $form->textField($model,'rf_idOrg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datePlan'); ?>
		<?php echo $form->textField($model,'datePlan',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'infotime'); ?>
		<?php echo $form->textField($model,'infotime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rf_idUser'); ?>
		<?php echo $form->textField($model,'rf_idUser',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
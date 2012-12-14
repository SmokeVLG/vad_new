<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'service-object-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля помеченные <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
            <?php echo $form->labelEx($model, 'rf_idArea'); ?>
            <?php echo $form->dropDownList($model, 'rf_idArea',
                    CHtml::listData(Area::model()->findAll(), 'id', 'name') ); ?>
            <?php echo $form->error($model,'rf_idArea'); ?>
            
            <?php echo CHtml::link('Справочник филиалов', array('area/admin'),
                    array('target' => '_blank')); ?>
            
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
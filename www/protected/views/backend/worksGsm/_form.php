<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'works-gsm-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля помеченные <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

        
        
           <div class="row">
            <?php echo $form->labelEx($model, 'rf_idOrg'); ?>
            <?php echo $form->dropDownList($model, 'rf_idOrg',
                    CHtml::listData(Org::model()->findAll(), 'id', 'name') ); ?>
            <?php echo $form->error($model,'rf_idOrg'); ?>
            
                     
	</div>
        
        
        
        
        
        
        
        
        <div class="row">
            <?php echo $form->labelEx($model, 'datePlan'); ?>
         
         
            <?php  
         $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                            'model'=>$model,
                                            'attribute'=>'datePlan',
                                            'options'=>array(
                                                'showAnim'=>'fold',
                                                'dateFormat'=>'dd-mm-yy'
                                            ),

                ));
         
         ?>
         
            <?php echo $form->error($model,'datePlan'); ?>
     </div>
        
     <div class="row">
		<?php echo $form->labelEx($model,'infotime'); ?>
                <?php echo $form->textField($model, 'infotime', array('value'=>$infotime, 'disabled'=>'disabled')); ?>
	</div> 
        
        
	<div class="row">
		<?php echo $form->labelEx($model,'toplivo'); ?>
		<?php echo $form->textField($model,'toplivo'); ?>
		<?php echo $form->error($model,'toplivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'benzin'); ?>
		<?php echo $form->textField($model,'benzin'); ?>
		<?php echo $form->error($model,'benzin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'karti'); ?>
		<?php echo $form->textField($model,'karti'); ?>
		<?php echo $form->error($model,'karti'); ?>
	</div>

        <div class="row">
            <?php echo $form->labelEx($model,'rf_idUser'); ?>
            <?php echo $form->textField($model,'rf_idUser',array('size'=>30,'maxlength'=>300)); ?>
            <?php echo $form->error($model,'rf_idUser'); ?>
        </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
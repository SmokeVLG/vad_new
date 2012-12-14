<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'wish-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля помеченные <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

 <table>
    
    <!-- Состаяние -->
    
    <tr>
    
        <td>
            
            <?php echo $form->labelEx($model, 'rf_idWorkStatus'); ?>
            <?php echo $form->dropDownList($model, 'rf_idWorkStatus',
                    CHtml::listData(WorkStatus::model()->findAll(), 'id', 'name') ); ?>
            <?php echo $form->error($model,'rf_idWorkStatus'); ?>
            
            <?php echo CHtml::link('Справочник состояний', array('workstatus/admin'),
                    array('target' => '_blank')); ?>
            
        </td>  
        
        
    </tr>
    
    <!-- Текст -->


   <tr>
    
        <td>
            
           <?php echo $form->labelEx($model,'comments'); ?><br />
           <?php echo $form->textArea($model,'comments',array('size'=>60,'maxlength'=>300)); ?>
	   <?php echo $form->error($model,'comments'); ?>
            
        </td>  
        
       
        <td>
            
            <?php echo $form->labelEx($model,'ourComments'); ?><br />
            <?php echo $form->textArea($model,'ourComments',array('size'=>60,'maxlength'=>300)); ?>
            <?php echo $form->error($model,'ourComments'); ?>
            
        </td>  
        
        
        
    </tr>
    
    
     <!-- Дорога -->


   <tr>
    
        <td>
            
           <?php echo $form->labelEx($model, 'rf_idRoad'); ?>
            <?php echo $form->dropDownList($model, 'rf_idRoad',
                    array(""=>"") + CHtml::listData(Roads::model()->findAll(), 'id', 'name') ); ?>
            <?php echo $form->error($model,'rf_idRoad'); ?>
            
            <?php echo CHtml::link('Справочник дорог', array('road/admin'),
                    array('target' => '_blank')); ?>
            
        </td>  
              
    </tr>
    
    
    
</table>
        
<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

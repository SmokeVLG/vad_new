<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	      <div class="row">
            <?php echo $form->labelEx($model, 'rf_idOrg'); ?>
            <?php echo $form->dropDownList($model, 'rf_idOrg',
                    CHtml::listData(Org::model()->findAll(), 'id', 'name'), array('empty'=>'') ); ?>
            <?php echo $form->error($model,'rf_idOrg'); ?>
            
                       
	</div> 

		

	<div class="row">
		<?php echo $form->label($model,'datePlan'); ?>
            
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
            
            
            
		
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Искать'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
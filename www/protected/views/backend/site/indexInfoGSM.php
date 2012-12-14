     
     
     
      Инфо по ГСМ :        
    
    <form action="<?php echo Yii::app()->createUrl('site/reportmonGSM'); ?>" method="post"> 
     
       <table class="so_mon">  
         
          
         <tr>
              <td class="h_work_sum">Дата</td> 
              <td class="h_work_sum">
                  <?php 
                      $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                            'model'=>$report,
                                            'attribute'=>'infotimeS',
                                            'options'=>array(
                                                'showAnim'=>'fold',
                                                'dateFormat'=>'dd-mm-yy'
                                            ),

                                    ));
                  ?>
              </td> 
                
         </tr>
         
        
         
         
     
         
              
       </table>
            
            <div class="row buttons">
		<?php echo CHtml::submitButton('Выполнить запрос', array('class'=>'showReport')); ?>
            </div>
       </form>
     
   

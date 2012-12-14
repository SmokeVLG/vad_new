

     Инфо по состоянию по ямочному ремонту по ДРСУ(Факт):        
    
    <form action="<?php echo Yii::app()->createUrl('site/reportmonYRPFR'); ?>" method="post"> 
     
       <table class="so_mon">  
         
          
         <tr>
              <td class="h_work_sum">С</td> 
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
         
         <tr>
              <td class="h_work_sum">На</td> 
              <td class="h_work_sum">
                   <?php 
             
                      $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                            'model'=>$report,
                                            'attribute'=>'infotimeF',
                                            'options'=>array(
                                                'showAnim'=>'fold',
                                                'dateFormat'=>'dd-mm-yy'
                                            ),

                ));
                              
                 ?>
              </td> 
             
         </tr>
          
         <tr>
               <div class="row">
           
            <?php 
//            echo  CHtml::dropDownList(Org::model()->findAll(), 'id', 'name'), array('empty'=>'') ; 
            echo CHtml::dropDownList('Wid_org', $model->org, 
                    
                    
                    
                 CHtml::listData(Org::model()->findAll(),'id','name'),
                                                    
                  
                    
              array('empty' => 'Выберите филиал'));
         
            ?>
                                     
                </div>        
         </tr>
       </table>
            
            <div class="row buttons">
		<?php echo CHtml::submitButton('Выполнить запрос', array('class'=>'showReport')); ?>
            </div>
            </form>
     

     
     
     
   


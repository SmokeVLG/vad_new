<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'works-yamrem-fact-form',
	'enableAjaxValidation'=>false,
)); ?>

		 <p class="note">Поля помеченные <span class="required">*</span> обязательны.</p>

        
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
     
        
        
	<?php echo $form->errorSummary($model); ?>
                
        
        
        <div class="row">
            <?php echo $form->labelEx($model, 'rf_idRoads'); ?>
            
             <?php
            
           
            echo $form->dropDownList(
                                     $model,// the input name
                                     'rf_idRoads',//Суда записывается значение  из массива ниже
                    
//                                     array
//                                         (
//                                         1=>"Отображение1",
//                                         2=>"Отображение2",
//                                         3=>"Отображение3",
//                                         )
                                      //data for generating the list options (value=>display).
                                      CHtml::listData(
                                                         //a list of model objects.
                                                        Roads::model()->findAllBySql
                                                                            (
                                                                               ' SELECT 
                                                                                t_roads.id,
                                                                                t_roads.name,
                                                                                t_roads.rf_idServiceObject


                                                                                FROM t_org    
                                                                                RIGHT JOIN t_serviceorg
                                                                                ON t_org.id = t_serviceorg.rf_idOrg
                                                                                RIGHT JOIN t_roads
                                                                                ON t_serviceorg.rf_idRoad = t_roads.id


                                                                                WHERE t_org.id=\''.(int) Yii::app()->user->id.'\'
                                                                                ORDER BY t_roads.id
                                                                                '
                                                                            ), 
                                                      
                                                        'id', //the attribute name for list option values
                                                        'name'//the attribute name for list option texts
                                                        // array('class'=>'typeWorks')
                                                     ),
                    array('class'=>'typeWorks') 
                                    ); 
            
            ?>
            
            
            <?php echo $form->error($model,'rf_idRoads'); ?>
                </div>
            <table>
            <tr>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'remkolgor'); ?>
                        <?php echo $form->textField($model,'remkolgor'); ?>
                        <?php echo $form->error($model,'remkolgor'); ?>
                   </div>                    
                </td>
                <td style="width: 50px;">
                   <div class="row">
                       <?php echo $form->labelEx($model,'remkolgorS'); ?>
                        <?php echo $form->textField($model,'remkolgorS'); ?>
                        <?php echo $form->error($model,'remkolgorS'); ?>
                    </div>                    
                </td>
                <td style="width: 50px;">
                   <div class="row">
                       <?php echo $form->labelEx($model,'remkolgorK'); ?>
                        <?php echo $form->textField($model,'remkolgorK'); ?>
                        <?php echo $form->error($model,'remkolgorK'); ?>
                    </div>                    
                </td>
            </tr>
            <tr>
                <td style="width: 50px;">
                   <div class="row">
                         <?php echo $form->labelEx($model,'remkolpnev'); ?>
                        <?php echo $form->textField($model,'remkolpnev'); ?>
                        <?php echo $form->error($model,'remkolpnev'); ?>
                   </div>                    
                </td>
                <td style="width: 50px;">
                   <div class="row">
                         <?php echo $form->labelEx($model,'remkolpnevS'); ?>
                        <?php echo $form->textField($model,'remkolpnevS'); ?>
                        <?php echo $form->error($model,'remkolpnevS'); ?>
                   </div>                    
                </td>
                   <td style="width: 50px;">
                   <div class="row">
                         <?php echo $form->labelEx($model,'remkolpnevK'); ?>
                        <?php echo $form->textField($model,'remkolpnevK'); ?>
                        <?php echo $form->error($model,'remkolpnevK'); ?>
                   </div>                    
                </td>   
            </tr>
            <tr>
                <td style="width: 50px;">
                   <div class="row">
                         <?php echo $form->labelEx($model,'remkolhol'); ?>
                        <?php echo $form->textField($model,'remkolhol'); ?>
                        <?php echo $form->error($model,'remkolhol'); ?>
                   </div>                    
                </td>
                <td style="width: 50px;">
                   <div class="row">
                         <?php echo $form->labelEx($model,'remkolholS'); ?>
                        <?php echo $form->textField($model,'remkolholS'); ?>
                        <?php echo $form->error($model,'remkolholS'); ?>
                   </div>                    
                </td>
                <td style="width: 50px;">
                   <div class="row">
                         <?php echo $form->labelEx($model,'remkolholK'); ?>
                        <?php echo $form->textField($model,'remkolholK'); ?>
                        <?php echo $form->error($model,'remkolholK'); ?>
                   </div>                    
                </td>
                     
            </tr>
             <tr>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'remkolkar'); ?>
                        <?php echo $form->textField($model,'remkolkar'); ?>
                        <?php echo $form->error($model,'remkolkar'); ?>
                   </div>                    
                </td>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'remkolkarS'); ?>
                        <?php echo $form->textField($model,'remkolkarS'); ?>
                        <?php echo $form->error($model,'remkolkarS'); ?>
                   </div>                    
                </td>
                    <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'remkolkarK'); ?>
                        <?php echo $form->textField($model,'remkolkarK'); ?>
                        <?php echo $form->error($model,'remkolkarK'); ?>
                   </div>                    
                </td>
                     
            </tr>
           
        </table>


             

                  

	<div class="row">
		<?php echo $form->labelEx($model,'infotime'); ?>
                <?php echo $form->textField($model, 'infotime', array('value'=>$infotime, 'disabled'=>'disabled')); ?>
	</div>    
                 
                 
                 
                 
           <table>
            <tr>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'cKDM'); ?>
                        <?php echo $form->textField($model,'cKDM'); ?>
                        <?php echo $form->error($model,'cKDM'); ?>
                   </div>                    
                </td>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'cK700'); ?>
                        <?php echo $form->textField($model,'cK700'); ?>
                        <?php echo $form->error($model,'cK700'); ?>
                    </div>                    
                </td>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'cT100'); ?>
                        <?php echo $form->textField($model,'cT100'); ?>
                        <?php echo $form->error($model,'cT100'); ?>
                    </div>                   
                </td>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'cAGR'); ?>
                        <?php echo $form->textField($model,'cAGR'); ?>
                        <?php echo $form->error($model,'cAGR'); ?>
                    </div>                   
                </td>
            </tr>
            <tr>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'Avtokran'); ?>
                        <?php echo $form->textField($model,'Avtokran'); ?>
                        <?php echo $form->error($model,'Avtokran'); ?>
                    </div>                  
                </td>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'cROTOR'); ?>
                        <?php echo $form->textField($model,'cROTOR'); ?>
                        <?php echo $form->error($model,'cROTOR'); ?>
                    </div>                 
                </td>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'cBULD'); ?>
                        <?php echo $form->textField($model,'cBULD'); ?>
                        <?php echo $form->error($model,'cBULD'); ?>
                    </div>               
                </td>
                <td style="width: 50px;">
                     <div class="row">
                        <?php echo $form->labelEx($model,'cPOGR'); ?>
                        <?php echo $form->textField($model,'cPOGR'); ?>
                        <?php echo $form->error($model,'cPOGR'); ?>
                    </div>              
                </td>
            </tr>
            
            
            
            
            
            
            
            
            
            <tr>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'MTZ80'); ?>
                        <?php echo $form->textField($model,'MTZ80'); ?>
                        <?php echo $form->error($model,'MTZ80'); ?>
                   </div>                    
                </td>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'T150'); ?>
                        <?php echo $form->textField($model,'T150'); ?>
                        <?php echo $form->error($model,'T150'); ?>
                    </div>                    
                </td>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'T170'); ?>
                        <?php echo $form->textField($model,'T170'); ?>
                        <?php echo $form->error($model,'T170'); ?>
                    </div>                   
                </td>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'Benzovoz'); ?>
                        <?php echo $form->textField($model,'Benzovoz'); ?>
                        <?php echo $form->error($model,'Benzovoz'); ?>
                    </div>                   
                </td>
            </tr>
            <tr>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'Bitunovoz'); ?>
                        <?php echo $form->textField($model,'Bitunovoz'); ?>
                        <?php echo $form->error($model,'Bitunovoz'); ?>
                    </div>                  
                </td>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'asfaltouk'); ?>
                        <?php echo $form->textField($model,'asfaltouk'); ?>
                        <?php echo $form->error($model,'asfaltouk'); ?>
                    </div>                 
                </td>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'katok'); ?>
                        <?php echo $form->textField($model,'katok'); ?>
                        <?php echo $form->error($model,'katok'); ?>
                    </div>               
                </td>
                <td style="width: 50px;">
                     <div class="row">
                        <?php echo $form->labelEx($model,'vibropl'); ?>
                        <?php echo $form->textField($model,'vibropl'); ?>
                        <?php echo $form->error($model,'vibropl'); ?>
                    </div>              
                </td>
            </tr>
            
            
            
             <tr>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'vozduhduv'); ?>
                        <?php echo $form->textField($model,'vozduhduv'); ?>
                        <?php echo $form->error($model,'vozduhduv'); ?>
                    </div>                  
                </td>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'motokos'); ?>
                        <?php echo $form->textField($model,'motokos'); ?>
                        <?php echo $form->error($model,'motokos'); ?>
                    </div>                 
                </td>
                <td style="width: 50px;">
                   <div class="row">
                        <?php echo $form->labelEx($model,'bus'); ?>
                        <?php echo $form->textField($model,'bus'); ?>
                        <?php echo $form->error($model,'bus'); ?>
                    </div>               
                </td>
                <td style="width: 50px;">
                     <div class="row">
                        <?php echo $form->labelEx($model,'samosv'); ?>
                        <?php echo $form->textField($model,'samosv'); ?>
                        <?php echo $form->error($model,'samosv'); ?>
                    </div>              
                </td>
                
             <tr>   
                <td style="width: 50px;">
                     <div class="row">
                        <?php echo $form->labelEx($model,'Zil'); ?>
                        <?php echo $form->textField($model,'Zil'); ?>
                        <?php echo $form->error($model,'Zil'); ?>
                    </div>              
                </td>
                <td style="width: 50px;">
                     <div class="row">
                        <?php echo $form->labelEx($model,'Isk'); ?>
                        <?php echo $form->textField($model,'Isk'); ?>
                        <?php echo $form->error($model,'Isk'); ?>
                    </div>              
                </td>
                <td style="width: 50px;">
                     <div class="row">
                        <?php echo $form->labelEx($model,'Avtogudronator'); ?>
                        <?php echo $form->textField($model,'Avtogudronator'); ?>
                        <?php echo $form->error($model,'Avtogudronator'); ?>
                    </div>              
                </td>
                <td style="width: 50px;">
                     <div class="row">
                        <?php echo $form->labelEx($model,'D40'); ?>
                        <?php echo $form->textField($model,'D40'); ?>
                        <?php echo $form->error($model,'D40'); ?>
                    </div>              
                </td>
              </tr>  
            </tr>
        </table>
         




      
                 
                 
                 
                 
                 
                 
        <div class="row">
            <?php echo $form->labelEx($model,'rf_idUser'); ?>
            <?php echo $form->textField($model,'rf_idUser',array('size'=>30,'maxlength'=>300)); ?>
            <?php echo $form->error($model,'rf_idUser'); ?>
        </div>
            
       
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php
// обработка кнопки добавления дороги к организации
$cs=Yii::app()->clientScript;  
//$cs->registerScriptFile(Yii::app()->baseUrl . '/js/jquery/jquery-1.6.2.min.js', CClientScript::POS_HEAD);
$cs->registerScriptFile(Yii::app()->baseUrl . '/js/jquery/jquery-ui-1.8.16.custom.min.js', CClientScript::POS_HEAD);  
$cs->registerCssFile(Yii::app()->baseUrl . '/css/start/jquery-ui-1.8.16.custom.css');
// 1) обработка выбора организации, после выбора отфильтровать список дорог
?>
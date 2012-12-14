<?php
//Yii::app()->clientScript->registerCssFile('css/sections.css');
?>
<tr>
    <td class="td_road_name"><?php echo CHtml::link($data['name'],
                Yii::app()->createUrl('site/workmonitor', array('ro'=>$data['id'], 'so'=>$data['rf_idServiceObject']))); ?></td>
    
    
    <td class="td_so_cnt" style="text-align: right;"><?php echo $data['cKDM']; ?></td>    
    <td class="td_so_cnt" style="text-align: right;"><?php echo $data['cK700']; ?></td> 
    <td class="td_so_cnt" style="text-align: right;"><?php echo $data['cT100']; ?></td>
    <td class="td_so_cnt" style="text-align: right;"><?php echo $data['cAGR']; ?></td>
    <td class="td_so_cnt" style="text-align: right;"><?php echo $data['Avtokran']; ?></td>
    <td class="td_so_cnt" style="text-align: right;"><?php echo $data['cROTOR']; ?></td>
    <td class="td_so_cnt" style="text-align: right;"><?php echo $data['cBULD']; ?></td>
    <td class="td_so_cnt" style="text-align: right;"><?php echo $data['cPOGR']; ?></td>    
    
   
    <td class="td_road_sum1"><?php echo $data['sum1']; ?></td>
    <td class="td_road_wish"><?php echo $data['cntWish']; ?></td>
    
     <td class="td_so_cnt"><?php  echo $data['obstanovka']; ?></td>
    
    
</tr>

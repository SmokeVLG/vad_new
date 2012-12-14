<?php
//Yii::app()->clientScript->registerCssFile('css/sections.css');
?>
<tr>
<!--    <td class="td_so_name">-->
        <?php
        //echo CHtml::link($data['serviceobject'],
            //    Yii::app()->createUrl('site/roadmonitorfact', array('so'=>$data['id']))); 
        ?>
<!--    </td>-->
    
    
    <td class="td_so_left" style="text-align: left;"><?php echo $data['serviceobject']; ?></td> 
    
    
    <td class="td_so_cnt" style="text-align: right;"><?php echo $data['cKDM']; ?></td>    
    <td class="td_so_cnt" style="text-align: right;"><?php echo $data['cK700']; ?></td> 
    <td class="td_so_cnt" style="text-align: right;"><?php echo $data['cT100']; ?></td>
    <td class="td_so_cnt" style="text-align: right;"><?php echo $data['cAGR']; ?></td>
    <td class="td_so_cnt" style="text-align: right;"><?php echo $data['Avtokran']; ?></td>
    <td class="td_so_cnt" style="text-align: right;"><?php echo $data['cROTOR']; ?></td>
    <td class="td_so_cnt" style="text-align: right;"><?php echo $data['cBULD']; ?></td>
    <td class="td_so_cnt" style="text-align: right;"><?php echo $data['cPOGR']; ?></td>
    <td class="td_sum1" style="text-align: right;"><?php echo $data['sum1']; ?></td>
<!--	<td class="h_so_sum1" style="text-align: right;"><?php // echo $data['delta']; ?></td>-->
    <td class="td_cntWish" style="text-align: right;"><?php echo $data['cntWish']; ?></td>
    <td class="td_cntWish" style="text-align: right;"><?php echo $data['obstanovka']; ?></td>
    
</tr>

<?php
//Yii::app()->clientScript->registerCssFile('css/sections.css');
?>
<tr>
   
    
    
    
    <td class=".td_so_drsu" style="text-align: left;"><?php 
    
  if($data['rf_idOrg'] == 1)echo("ДСУ - 1 (Гумрак)");
    if($data['rf_idOrg'] == 2)echo("ДСУ - 2 (Михайловка)");
    if($data['rf_idOrg'] == 3)echo("ДСУ - 3 (Камышин)");
    if($data['rf_idOrg'] == 4)echo("ДСУ - 4 (Фролово)");
    if($data['rf_idOrg'] == 5)echo("ДСУ - 5 (Новоаннинский)");
    if($data['rf_idOrg'] == 6)echo("ДСУ - 6 (Волжский)");
    if($data['rf_idOrg'] == 7)echo("Быковское ДРСУ");
    if($data['rf_idOrg'] == 8)echo("Дубовское ДРСУ");
    if($data['rf_idOrg'] == 9)echo("Еланское ДРСУ");
    if($data['rf_idOrg'] == 10)echo("Жирновское ДРСУ");
    if($data['rf_idOrg'] == 11)echo("Калачевское ДРСУ");
    if($data['rf_idOrg'] == 12)echo("Котельниковское ДРСУ");
    if($data['rf_idOrg'] == 13)echo("Палласовское ДРСУ");
    if($data['rf_idOrg'] == 14)echo("Серафимовичское ДРСУ");
    if($data['rf_idOrg'] == 15)echo("Суровикинское ДРСУ");
    if($data['rf_idOrg'] == 16)echo("Урюпинское ДРСУ");
    if($data['rf_idOrg'] == 17)echo("Чернышковское ДРСУ");
    if($data['rf_idOrg'] == 18)echo("ВКУ");

           
    ?></td>    
    <td class=".td_so_drsu" style="text-align: left;"> <?php echo($data['repetitions']);?> </td>    
    <td class=".td_so_drsu" style="text-align: left;"> <?php echo 'Дорожные работы';?> </td>   
    
</tr>

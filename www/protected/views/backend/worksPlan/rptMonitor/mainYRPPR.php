<html>
<head>
<title>Информация о состоянии проезда План</title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reports/rptMonitor.css" />

</head>

<body>
<h3>Информация о состоянии проезда по автодорогам Волгоградской области с <?php  echo $dateRep; ?> по  <?php  echo $dateRep3; ?> </h3>

<table border="1" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td rowspan="2">№ п/п</td>
			<td rowspan="2">Филиал</td>
			<td rowspan="2">Время перед. инф.</td>			
			<td rowspan="2">Наименование автомобильной дороги</td>			
			<td rowspan="2">ФИО дежурного</td>
                        
                         <td rowspan="2">Вид работы</td>	
                         
                        <td colspan="2">Количество ямочного ремонта (горячий а/б)</td>
                        <td colspan="2">Количество ямочного ремонта (пневмонабразгом- КДМ-316)</td>
                        <td colspan="2">Количество ямочного ремонта (холодным (литым) а/б)</td>
                        <td colspan="2">Количество ямочного ремонта (картами)</td>
		</tr>
                
                <tr>
                    
                        <td>тонн</td>
                        <td>м2</td>
                        <td>тонн</td>
                        <td>м2</td>
                        <td>тонн</td>
                        <td>м2</td>
                        <td>тонн</td>
                        <td>м2</td>
	        </tr>


<?php
 /*
 * Представление для показа информации по дорогам
 * 
 */
/*
$this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProviderOrg,
        'itemView'=>'application.views.backend.workPlan.rptMonitor._org',
        'template'=>'{items}',
        'pager'=>array()
));*/
	
?>
         <?php for($i=0; $i<1; $i++) { ?>
                <tr>
                    <td class="org"><?php echo 1; ?></td>
                    <td class="org"><?php echo $dataOrg[$org-1]['NAME']; ?></td>
                    
                    
                </tr>
                                 
                <?php for($j=0; $j<count($dataSO); $j++) { ?>
                <tr>
                    <td></td>
                    <?php if($dataSO[$j]['OrgID'] == $dataOrg[$org-1]['id']) { ?>
                       <td></td>
                        <td><?php  echo $dataSO[$j]['info_date']; ?></td>
            
                        <td><?php echo $dataSO[$j]['roadName']; ?></td>

                     
                        
                        
                        <td><?php echo $dataSO[$j]['rf_idUser']; ?></td>
                        
                          <td><?php echo $dataSO[$j]['work']; ?></td>
                        
                        
                          <td><?php  echo $dataSO[$j]['remkolgor']; ?></td>
                        <td><?php  echo $dataSO[$j]['remkolgorS']; ?></td>
                        <td><?php echo $dataSO[$j]['remkolpnev']; ?></td>    
                        <td><?php echo $dataSO[$j]['remkolpnevS']; ?></td>
                        
                          <td><?php  echo $dataSO[$j]['remkolhol']; ?></td>
                        <td><?php  echo $dataSO[$j]['remkolholS']; ?></td>
                        <td><?php echo $dataSO[$j]['remkolkar']; ?></td>    
                        <td><?php echo $dataSO[$j]['remkolkarS']; ?></td>
                    <?php } ?>
                </tr>
                <?php }  ?>
                    
                    
                
                
                
          <?php }  ?>
</table>

<p>←<a href="<?php echo $url_back; ?>">Назад</a></p>
                
	</tbody>
</table>

</body>
<html>
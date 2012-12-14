<html>
<head>
<title>Информация о состоянии проезда</title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reports/rptMonitor.css" />

</head>

<body>
<h3>Информация по ГСМ  <?php  echo $dateRep; ?>  </h3>

<table border="1" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td rowspan="2">№ п/п</td>
			<td rowspan="2">Филиал</td>
			<td rowspan="2">Дата</td>
			<td rowspan="2">Время перед. инф.</td>
                        
			<td rowspan="2">Топливо</td>
<!--			<td rowspan="2">Работали, номер КДМ</td>-->
                         <td rowspan="2">Бензин</td>
			<td rowspan="2">Карты</td>
			<td rowspan="2">ФИО дежурного</td>
		</tr>
                
                <tr>
			
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
         <?php for($i=0; $i<count($dataSO); $i++) { ?>
                <tr>
            
                    
                    <td class="org"><?php echo $i+1; ?></td>
                    <td class="org"><?php echo $dataSO[$i]['name']; ?></td>
                    <td class="org"><?php echo $dataSO[$i]['datePlan']; ?></td>
                    <td class="org"><?php echo $dataSO[$i]['infotime']; ?></td>
                    <td class="org"><?php echo $dataSO[$i]['toplivo']; ?></td>
                    <td class="org"><?php echo $dataSO[$i]['benzin']; ?></td>
                    <td class="org"><?php echo $dataSO[$i]['karti']; ?></td>
                    <td class="org"><?php echo $dataSO[$i]['rf_idUser']; ?></td>
                    
                 </tr>                
                
          <?php }      
          
   

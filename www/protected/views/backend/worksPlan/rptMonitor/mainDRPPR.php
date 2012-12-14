<html>
<head>
<title>Информация о состоянии проезда</title>
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
			<td rowspan="2">Погодные условия</td>
			<td rowspan="2">Наименование автомобильной дороги</td>
<!--			<td rowspan="2">Работали, номер КДМ</td>-->
                        
                        
                        <td rowspan="2">Вид работы</td>
                        
			<td colspan="8">Количество работающих(дежуривших) механизмов</td>
			<td rowspan="2">ФИО дежурного</td>
		</tr>
		<tr>
<!--			<td>&nbsp;</td>-->
<!--			<td>&nbsp;</td>-->
<!--			<td>&nbsp;</td>
			<td>&nbsp;</td>-->
			<td>КДМ</td>
			<td>К-700</td>
			<td>Т150</td>
			<td>А/гр</td>
			<td>Автокран<br /> </td>
			<td>Ротор</td>
			<td>Бульд</td>
			<td>Погруз</td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                                 
                <?php for($j=0; $j<count($dataSO); $j++) { ?>
                <tr>
                    <td></td>
                    <?php if($dataSO[$j]['OrgID'] == $dataOrg[$org-1]['id']) { ?>
                        <td><?php echo $dataSO[$j]['serviceobject']; ?></td>
                        <td><?php  echo $dataSO[$j]['info_date']; ?></td>
<!--                        <td><?php echo "2";// $dataSO[$j]['info_e']; ?></td>-->
<!--                        <td><?php echo "3";//$dataSO[$j]['pogoda_b']; ?></td>-->
                        <td><?php echo  $dataSO[$j]['pogoda_b']; ?></td>
                        <td><?php echo $dataSO[$j]['roadName']; ?></td>

                        
                        
                        <td><?php echo $dataSO[$j]['work']; ?></td>
                        
                        
                        
                        
                        
                        <td><?php echo $dataSO[$j]['cKDM']; ?></td>
                        <td><?php echo $dataSO[$j]['cK700']; ?></td>
                        <td><?php echo $dataSO[$j]['cT100']; ?></td>
                        <td><?php echo $dataSO[$j]['cAGR']; ?></td>
                        <td><?php echo $dataSO[$j]['Avtokran']; ?></td>
                        <td><?php echo $dataSO[$j]['cROTOR']; ?></td>
                        <td><?php echo $dataSO[$j]['cBULD']; ?></td>
                        <td><?php echo $dataSO[$j]['cPOGR']; ?></td>
                        <td><?php echo $dataSO[$j]['rf_idUser']; ?></td>
                    <?php } ?>
                </tr>
                <?php } // end SO ?>
                    
                    
                
                
                
          <?php } // end Org ?>
</table>

<p>←<a href="<?php echo $url_back; ?>">Назад</a></p>
                
	</tbody>
</table>

</body>
<html>
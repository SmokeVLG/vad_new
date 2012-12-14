<html>
<head>
    
   <?php
   // header('Content-Type: text/html; charset=UTF-8',true);
   ?>
 
    
    
    
<title>Информация о состоянии проезда</title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reports/rptMonitor.css" />

</head>

<body>
 
<table border="1" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
<!--                 <td rowspan="2">   Эта ячека занимает 2 строки-->
<!--                 <td colspan="8">  Эта ячека занимает 2 столбца-->
			<td rowspan="2">№ п/п</td> 
			<td rowspan="2">Филиал</td>

			<td rowspan="2">Время перед. инф.</td>
                        <td rowspan="2">Количество ПСС (тонн) </td>
			<td rowspan="2">Погодные условия</td>
                        <td rowspan="2">Дорожная обстановка</td>
			<td rowspan="2">Наименование автомобильной дороги</td>
<!--			<td rowspan="2">Работали, номер КДМ</td>-->
			<td colspan="8">Количество работающих(дежуривших) механизмов</td>
			<td rowspan="2">ФИО дежурного</td>
		</tr>
		<tr>
<!--                        <td>&nbsp;</td>-->
<!--                        <td>&nbsp;</td>
			<td>&nbsp;</td>
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
        'itemView'=>'application.views.work.rptMonitor._org',
        'template'=>'{items}',
        'pager'=>array()
));*/
	
?>
        
                                 
                <?php for($j=0; $j<count($dataSO); $j++)  {  ?>
                <tr>
                      <td> <?php  echo ($j+1); ?></td>
                    
                        <td><?php  echo $dataSO[$j]['serviceobject']; ?></td>
                        <td><?php echo $dataSO[$j]['info_date']; ?></td>
                         <td><?php echo $dataSO[$j]['quantityRes']; ?></td>
                        <td><?php  echo $dataSO[$j]['pogoda']; ?></td>
                        <td><?php  echo $dataSO[$j]['obstanovka']; ?></td>
                        <td><?php  echo $dataSO[$j]['name']; ?></td>

                        <td><?php  echo $dataSO[$j]['cKDM']; ?></td>
                        <td><?php  echo $dataSO[$j]['cK700']; ?></td>
                        <td><?php  echo $dataSO[$j]['cT100']; ?></td>
                        <td><?php  echo $dataSO[$j]['cAGR']; ?></td>
                        <td><?php  echo $dataSO[$j]['Avtokran']; ?></td>
                        <td><?php  echo $dataSO[$j]['cROTOR']; ?></td>
                        <td><?php  echo $dataSO[$j]['cBULD']; ?></td>
                        <td><?php  echo $dataSO[$j]['cPOGR']; ?></td>
                        <td><?php  echo $dataSO[$j]['rf_idUser']; ?></td>
                    <?php  ?>
                </tr>
                <?php } // end SO ?>
                 

</table>

<p>←<a href="<?php echo $url_back; ?>">Назад</a></p>
                
	</tbody>
</table>

</body>
<html>
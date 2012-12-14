<h1>Мониторинг по объектам обслуживания(Факт)</h1>

<table class="so_mon">    
    <tr>
        <td class="h_so_name">Объект обслуживания</td>
        
        <td class="h_work_sum">КДМ</td>
	<td class="h_work_sum">К-700</td>
	<td class="h_work_sum">Т150</td>
        <td class="h_work_sum">А/гр</td>
	<td class="h_work_sum">Автокран<br /> </td>
        <td class="h_work_sum">Ротор</td>
	<td class="h_work_sum">Бульд</td>
        <td class="h_work_sum">Погруз</td>
        <td class="h_so_sum1">Расход ПСС</td>
<!--	<td class="h_so_sum1">Изменение</td>-->
        <td class="h_so_cntWish">Кол-во обращений-заявок</td>
        <td class="h_work_sum">Дорожная обстановка</td>
    </tr>

    <tr>
        <td class="h_so_name">Всего по области</td>
        <td class="h_so_cnt" style="text-align: right;"><?php echo $dataSumProvider[0]['cKDM']; ?></td>
        <td class="h_so_cnt" style="text-align: right;"><?php echo $dataSumProvider[0]['cK700']; ?></td>
        <td class="h_so_cnt" style="text-align: right;"><?php echo $dataSumProvider[0]['cT100']; ?></td>
        <td class="h_so_cnt" style="text-align: right;"><?php echo $dataSumProvider[0]['cAGR']; ?></td>
        <td class="h_so_cnt" style="text-align: right;"><?php echo $dataSumProvider[0]['Avtokran']; ?></td>
        <td class="h_so_cnt" style="text-align: right;"><?php echo $dataSumProvider[0]['cROTOR']; ?></td>
        <td class="h_so_cnt" style="text-align: right;"><?php echo $dataSumProvider[0]['cBULD']; ?></td>
        <td class="h_so_cnt" style="text-align: right;"><?php echo $dataSumProvider[0]['cPOGR']; ?></td>
        <td class="h_so_sum1" style="text-align: right;"><?php echo $dataSumProvider[0]['sum1']; ?></td>
<!--        <td class="h_so_sum1" style="text-align: right;"></td>-->
        <td class="h_so_cntWish" style="text-align: right;"><?php echo $dataSumProvider[0]['cntWish']; ?></td>      
        <td class="h_work_sum" style="text-align: right;"></td>
    </tr>
<?php

/*
 * Представление для показа мониторинга по объектам обслуживания
 * 
 */

$this->widget('zii.widgets.CListView', array(
        'id'=>'monitor',
        'dataProvider'=>$dataProvider,
        'itemView'=>'application.views.backend.site.monitoring._soFact',
        'template'=>'{items}',
        'pager'=>array()
        /* обращение к странице под номером
         * 
        'pager'=>(isset($psections)) ? array(
            'currentPage'=> $psections - 1
        ) : array(),*/
));


/*
$this->widget('zii.widgets.CListView', array(
        'id'=>'monitor',
        'dataProvider'=>$dataProvider2,
        'itemView'=>'application.views.backend.site.monitoring._so2',
        'template'=>'{items}',
        'pager'=>array()
        // обращение к странице под номером
        'pager'=>(isset($psections)) ? array(
            'currentPage'=> $psections - 1
        ) : array(),
));
*/

?>

</table>


<?php
Yii::app()->clientScript->registerScript('updatesList', 'js:
    setInterval(function(){
        location.reload(true);
        /*
        var ajaxRequest = $(this).serialize();
        $.fn.yiiListView.update(
          "monitor",
          {
            type: "POST",
            url: "'.CController::createUrl('site/monitoring').'",
            data: ajaxRequest
          });
        return false;
        */
    }, 30000);    
');
?>        
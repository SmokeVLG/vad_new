<h1>Мониторинг по Ямочному ремонту (План)</h1>
<?php $time = date('d-m-Y'); echo $time; ?>
    
    <table class="so_mon">    
    <tr>
        <td rowspan="2">Дорожное управление</td>
        <td rowspan="2">Район</td> 
        <td rowspan="2">Дорога</td>  
        
        <td colspan="2">Количество ямочного ремонта (горячий а/б)</td>
        <td colspan="2">Количество ямочного ремонта (пневмонабразгом- КДМ-316)</td>
        <td colspan="2">Количество ямочного ремонта (холодным (литым) а/б)</td>
        <td colspan="2">Количество ямочного ремонта (картами)</td>
    </tr>
   

    <tr>
<!--            <td>&nbsp;</td>-->
<!--            <td>&nbsp;</td>-->
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
 * Представление для показа мониторинга по объектам обслуживания
 * 
 */

$this->widget('zii.widgets.CListView', array(
        
        'dataProvider'=>$dataProvider,
        'itemView'=>'application.views.backend.site.monitoring._soDrsuYamremPlan',
        'template'=>'{items}',
        'pager'=>array(),
      
));


$this->widget('zii.widgets.CListView', array(
        
        'dataProvider'=>$dataProvider2,
        'itemView'=>'application.views.backend.site.monitoring._soDrsu2YamremPlan',
        'template'=>'{items}',
        'pager'=>array(),
      
));



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
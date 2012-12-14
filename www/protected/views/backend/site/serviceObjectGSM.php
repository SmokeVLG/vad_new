<h1>Мониторинг по ДРСУ (ГСМ)</h1>
<?php $time = date('d-m-Y'); echo $time; ?>
<table class="so_mon">    
    <tr>
        <td class="h_so_name">Дорожное управление</td>
           <td class="h_so_name">Дизельное топливо</td>
        <td class="h_so_name">Бензин</td>        
     
        <td class="h_so_name">Карты</td>

    </tr>

    <tr>
        
    </tr>
<?php

/*
 * Представление для показа мониторинга по объектам обслуживания
 * 
 */

$this->widget('zii.widgets.CListView', array(
        
        'dataProvider'=>$dataProvider,
        'itemView'=>'application.views.backend.site.monitoring._soDrsuGSM',
        'template'=>'{items}',
        'pager'=>array(),
      
));


$this->widget('zii.widgets.CListView', array(
        
        'dataProvider'=>$dataProvider2,
        'itemView'=>'application.views.backend.site.monitoring._soDrsu2GSM',
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
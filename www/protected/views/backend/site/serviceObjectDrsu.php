<h1>Мониторинг работ по районам (План)</h1>

<table class="so_mon">    
    <tr>
        <td class="h_so_name">Дорожное управление</td>
        <td class="h_so_name">Количество поданных нарядов</td>
         <td class="h_so_name">Вида наряда</td>
       
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
        'itemView'=>'application.views.backend.site.monitoring._soDrsu',
        'template'=>'{items}',
        'pager'=>array(),
      
));


$this->widget('zii.widgets.CListView', array(
        
        'dataProvider'=>$dataProvider2,
        'itemView'=>'application.views.backend.site.monitoring._soDrsu2',
        'template'=>'{items}',
        'pager'=>array(),
      
));






?>


<?php

/*
 * Представление для показа мониторинга по объектам обслуживания
 * 
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
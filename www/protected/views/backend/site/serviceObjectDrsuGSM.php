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
if($dataProvider->getData()!=null)  
{
$this->widget('zii.widgets.CListView', array(
        
        'dataProvider'=>$dataProvider,
        'itemView'=>'application.views.backend.site.monitoring._soDrsuGSM',
        'template'=>'{items}',
        'pager'=>array(),
      
));
}




if($dataProvider2->getData()!=null)  
{

$this->widget('zii.widgets.CListView', array(
        
        'dataProvider'=>$dataProvider2,
        'itemView'=>'application.views.backend.site.monitoring._soDrsuGSMVku',
        'template'=>'{items}',
        'pager'=>array(),
      
));
}


if($dataProvider5->getData()!=null)  
{

$this->widget('zii.widgets.CListView', array(
        
        'dataProvider'=>$dataProvider5,
        'itemView'=>'application.views.backend.site.monitoring._soDrsuGSMKalach',
        'template'=>'{items}',
        'pager'=>array(),
      
));
}

if($dataProvider3->getData()!=null)  
{

$this->widget('zii.widgets.CListView', array(
        
        'dataProvider'=>$dataProvider3,
        'itemView'=>'application.views.backend.site.monitoring._soDrsu2GSM',
        'template'=>'{items}',
        'pager'=>array(),
      
));
}
if($dataProvider4->getData()!=null)  
{

        $this->widget('zii.widgets.CListView', array(

                'dataProvider'=>$dataProvider4,
                'itemView'=>'application.views.backend.site.monitoring._soDrsu2GSMVku',
                'template'=>'{items}',
                'pager'=>array(),

        ));
}

if($dataProvider6->getData()!=null)  
{

        $this->widget('zii.widgets.CListView', array(

                'dataProvider'=>$dataProvider6,
                'itemView'=>'application.views.backend.site.monitoring._soDrsu2GSMKalach',
                'template'=>'{items}',
                'pager'=>array(),

        ));
}




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
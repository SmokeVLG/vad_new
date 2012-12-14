<h1>Мониторинг работ по районам (Факт)</h1>

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





?>

</table>








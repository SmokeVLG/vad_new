<h1>Мониторинг объекта [<?php echo $serviceObj; ?>]</h1>

<table class="so_mon">    
    <tr>
        <td class="h_road_name">Дорога</td>
        
        
        
        
        <td class="h_road_cnt">КДМ</td>
	<td class="h_road_cnt">К-700</td>
	<td class="h_road_cnt">Т150</td>
        <td class="h_road_cnt">А/гр</td>
	<td class="h_road_cnt">Автокран<br /> </td>
        <td class="h_road_cnt">Ротор</td>
	<td class="h_road_cnt">Бульд</td>
        <td class="h_road_cnt">Погруз</td>
        
    
        
      
        <td class="h_road_sum1">Расход ПСС</td>
        <td class="h_road_cntWish">Кол-во обращений-заявок</td>
        
        <td class="h_road_cnt">Дорожная обстановка</td>
    </tr>


<?php
/*
 * Представление для показа мониторинга по дорогам
 * 
 */

$this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'application.views.frontend.site.monitoring._road',
        'template'=>'{items}',
        'pager'=>array()
));
	
?>

</table>

<p>←<a href="<?php echo $url_back;?>">Назад</a></p>
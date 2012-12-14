<h1>Мониторинг дороги [<?php echo $road; ?>]</h1>

<table class="so_mon">    
    <tr>
        <td class="h_work_cat_name">Дорожные работы. Виды работ</td>
        <td class="h_work_tech">Рабочая техника</td>
        <td class="h_work_sum">Расход ПСС</td>
        <td class="h_work_sum">КДМ</td>
	<td class="h_work_sum">К-700</td>
	<td class="h_work_sum">Т150</td>
        <td class="h_work_sum">А/гр</td>
	<td class="h_work_sum">Автокран<br /> </td>
        <td class="h_work_sum">Ротор</td>
	<td class="h_work_sum">Бульд</td>
        <td class="h_work_sum">Погруз</td>
        <td class="h_work_sum">Дежурный</td>
    </tr>

<?php

/*
 * Представление для показа мониторинга по дорогам
 * 
 */

$this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'application.views.backend.site.monitoring._work',
        'template'=>'{items}',
        'pager'=>array()
));
	
?>

</table>

<p>←<a href="<?php echo $url_back;?>">Назад</a></p>
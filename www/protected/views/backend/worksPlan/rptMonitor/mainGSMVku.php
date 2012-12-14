<html>


<body>



	<tbody>
	
                
             

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
         <?php for($i=0; $i<count($dataSO); $i++) { ?>
                <tr>
            
                    
                  <td class="org"><?php echo "-"; ?></td>
                    <td class="org"><?php echo $dataSO[$i]['name']; ?></td>
                    <td class="org"><?php echo $dataSO[$i]['datePlan']; ?></td>
                    <td class="org"><?php echo $dataSO[$i]['infotime']; ?></td>
                    <td class="org"><?php echo "лип:"; echo $dataSO[$i]['lip']; echo "\n"; echo "зим:"; echo $dataSO[$i]['zim'];?></td>
                    <td class="org"><?php echo $dataSO[$i]['benzin']; ?></td>
                    <td class="org"><?php echo $dataSO[$i]['karti']; ?></td>
                    <td class="org"><?php echo $dataSO[$i]['rf_idUser']; ?></td>
                    
                 </tr>                
                
          <?php } // end Org ?>
</table>


<p>←<a href="<?php echo $url_back; ?>">Назад</a></p>
                
	</tbody>

</body>
</html>
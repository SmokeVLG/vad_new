<?php for($j=0; $j<count($serviceObj); $j++) { 
                                if($serviceObj[$j]->rfOrg == $org[$i]->id) { ?>                                
                                    <tr>
                                        <td><?php echo $serviceObj[$j]->soname; ?></td>
                                        <td><?php echo $serviceObj[$j]->infotime; ?></td>
                                        <td><?php echo $serviceObj[$j]->pogoda_b; ?></td>
                                        <td><?php echo $serviceObj[$j]->pogoda_e; ?></td>
                                        <td><?php echo $serviceObj[$j]->roadName.'[ПСС-'.$serviceObj[$j]->res.'] тн.'; ?></td>
                                        <td><?php echo $serviceObj[$j]->workTechs; ?></td>                                        
                                        <td><?php echo $serviceObj[$j]->cKDM; ?></td>
                                        <td><?php echo $serviceObj[$j]->cK700; ?></td>
                                        <td><?php echo $serviceObj[$j]->cT100; ?></td>
                                        <td><?php echo $serviceObj[$j]->cAGR; ?></td>
                                        <td><?php echo $serviceObj[$j]->Avtokran; ?></td>
                                        <td><?php echo $serviceObj[$j]->cROTOR; ?></td>
                                        <td><?php echo $serviceObj[$j]->cBULD; ?></td>
                                        <td><?php echo $serviceObj[$j]->cPOGR; ?></td>
                                        <td></td>
                                    </tr>
                            <?php } } ?>
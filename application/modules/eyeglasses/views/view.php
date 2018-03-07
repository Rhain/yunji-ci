<hr>

        <table>
                <tr><td>Brand</td>
                    <td><input type="radio" name="brand" value="none" ><label>None</label></td>
                    <?php
                        foreach($brands as $brand){
                            echo '<td><input type="radio" name="brand" value="'.$brand.'"><label>'.$brand.'</label></td>';
                        }
                    ?>
                </tr>
        </table>

<hr>
<?php
   foreach($eyeglasses as $eg ){
       echo '<a href="' . $this->config->base_url() . 'eyeglasses/details?pid='.$eg['id'].'&from=view&now='.$now.'" ><div><img style="width:100px;height:100px" src="'.$eg['guid'].'" /></div>';
       echo '<div>';
       echo '<span>'.$eg['title'].'</span></a></br>';
       echo '<span>'.$eg['price'].'</span></br>';
       echo '<span>'.substr($eg['description'],0,250).'</span></br>';
       echo '<span>'.$eg['brand_name'].'</span></br>';
       echo '<span>'.$eg['model_number'].'</span></br>';
       echo '<span>'.$eg['lens_width'].'</span></br>';
       echo '<span>'.$eg['nose_bridge'].'</span></br>';
       echo '<span>'.$eg['total_width'].'</span></br>';
       echo '</div>';
   }
   echo "<div>";
   echo $paginate['page']." of ".ceil($paginate['records']/$paginate['each_page_count']);
   if(isset($previous)){
       echo '<a onclick="loadView(\''.$previous.'\')"> < </a> ';
   }
   if(isset($next)){
       echo '<a onclick="loadView(\''.$next.'\')"> > </a> ';
   }
   echo "</div>";
?>


<header class="content__title">
    <h1>Customers Lists</h1>
    <small>In this page you can view all the customers information.</small>
</header>

<div class="card">
    <div class="card-header d-flex flex-row justify-content-between">
        <h2 class="card-title">List Customers</h2>
    </div>

    <div class="card-block">
        <table class="table mb-0">
            <thead class="thead-default">
            <tr>
                <th>NAME</th>
                <th>PHONE</th>
                <th>SPH</th>
                <th>CYL</th>
                <th>AXIS</th>
                <th>ADD</th>
                <th>EACH PD</th>
                <th>PD</th>
                <th>INDEX</th>
                <th>FRAME STYLE</th>
                <th>MATIERAL</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    foreach($customers as $customer){
                        echo '<tr><td >'. $customer['name'] .'</td>';
                        echo '<td >'. $customer['phone'] .'</td>';
                        echo '<td >'. $customer['od_sph'] .'|'.$customer['os_sph'].'</td>';
                        echo '<td >'. $customer['od_cyl'] .'|'.$customer['os_cyl'] .'</td>';
                        echo '<td >'. $customer['od_axis'] .'|'.$customer['os_axis'].'</td>';
                        echo '<td >'. $customer['od_add'] .'|'.$customer['os_add'] .'</td>';
                        echo '<td >'. $customer['od_pd'] .'|'.$customer['os_pd'] .'</td>';
                        echo '<td >'. $customer['pd'] .'</td>';
                        echo '<td >'. $customer['lens_index'] .'</td>';
                        echo '<td >'. $customer['frame_style'] .'</td>';
                        echo '<td >'. $customer['frame_material'] .'</td>';
                        echo '</tr>';
                        echo '<tr><td>Lens Details:</td>';
                        echo '<td colspan="9">'.$customer['lens_detail'].'</td>';
                        echo '</tr>';
                        echo '<tr><td>Frame Details:</td>';
                        echo '<td colspan="9">'.$customer['frame_detail'].'</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
  <div>
   <?php
   echo $paginate['page']." of ".ceil($paginate['records']/$paginate['each_page_count']);
   if(isset($previous)){
       echo '<a onclick="show_page_for_backend(\''.$previous.'\')"> < </a> ';
   }
   if(isset($next)){
       echo '<a onclick="show_page_for_backend(\''.$next.'\')"> > </a> ';
   }
   ?>
   </div>


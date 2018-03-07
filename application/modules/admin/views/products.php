<header class="content__title">
    <h1>Catalogue Products</h1>
    <small>In this page you can managed you products.</small>
</header>

<div class="card">
    <div class="card-header d-flex flex-row justify-content-between">
        <h2 class="card-title">List Eyeglasses</h2>
        <button type="button" onclick="show_page_for_backend('<?php echo $this->config->base_url(); ?>/admin/create_eyeglasses')" class="btn btn-danger btn-sm waves-effect"><i class="zmdi zmdi-plus"> Add New</i></button>
    </div>

    <div class="card-block">
        <table class="table mb-0">
            <thead class="thead-default">
            <tr>
                <th>Photo</th>
                <th>TITLE</th>
                <th>PRICE</th>
                <th>CATEGORY</th>
                <th>BRAND</th>
                <th>MODEL NUMBER</th>
                <th>MATERIAL</th>
                <th>GENDER</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    foreach($products as $product){
                        echo '<tr><td ><img style="width:50px;height:50px" src="'.$product['guid'].'" /></td>';
                        echo '<td >'. $product['title'] .'</td>';
                        echo '<td >'. $product['price'] .'</td>';
                        echo '<td >'. $product['category'] .'</td>';
                        echo '<td >'. $product['brand_name'] .'</td>';
                        echo '<td >'. $product['model_number'] .'</td>';
                        echo '<td >'. $product['material'] .'</td>';
                        echo '<td >'. $product['gender'] .'</td>';
                        echo '<td ><a onclick="show_page_for_backend(\'' . $this->config->base_url() . 'admin/create_eyeglasses?pid='.$product['id'].'\')" ><button class="btn btn-sm btn-outline-primary waves-effect" style="margin-right:10px;"><i class="zmdi zmdi-edit"></i> Edit</button></a>';
                        echo '<a onclick="delete_item(\''.$product['id'].'\')" ><button class="btn btn-sm btn-outline-danger waves-effect"><i class="zmdi zmdi-delete"></i> Delete</button></a></td>';
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
<script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/items.js"></script>
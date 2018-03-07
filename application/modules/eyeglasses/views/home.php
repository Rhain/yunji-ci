        <div>
            <hr>
            <h1> Recommends</h1>
            <hr>
        <?php
        foreach($recommend as $eg ){
            echo '<div><a href="' . $this->config->base_url() . 'eyeglasses/details?pid='.$eg['id'].'" ><img style="width:100px;height:100px" src="'.$eg['guid'].'" /></a></div>';
            echo '<div>';
            echo '<span>'.$eg['title'].'</span></br>';
            echo '<span>'.$eg['price'].'</span></br>';
            echo '<span>'.substr($eg['description'],0,250).'</span></br>';
            echo '<span>'.$eg['brand_name'].'</span></br>';
            echo '<span>'.$eg['model_number'].'</span></br>';
            echo '<span>'.$eg['lens_width'].'</span></br>';
            echo '<span>'.$eg['nose_bridge'].'</span></br>';
            echo '<span>'.$eg['total_width'].'</span></br>';
            echo '</div>';
        }
        ?>
        </div>
        <div>
            <hr>
            <h1> Newest</h1>
            <hr>
        <?php
        foreach($newest as $eg ){
            echo '<div><a href="' . $this->config->base_url() . 'eyeglasses/details?pid='.$eg['id'].'" ><img style="width:100px;height:100px" src="'.$eg['guid'].'" /></a></div>';
            echo '<div>';
            echo '<span>'.$eg['title'].'</span></br>';
            echo '<span>'.$eg['price'].'</span></br>';
            echo '<span>'.substr($eg['description'],0,250).'</span></br>';
            echo '<span>'.$eg['brand_name'].'</span></br>';
            echo '<span>'.$eg['model_number'].'</span></br>';
            echo '<span>'.$eg['lens_width'].'</span></br>';
            echo '<span>'.$eg['nose_bridge'].'</span></br>';
            echo '<span>'.$eg['total_width'].'</span></br>';
            echo '</div>';
        }
        ?>
        </div>


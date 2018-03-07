<div class="wrapper-mandates-images">
                        <div id="carousel-mandate" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
<?php
       foreach($images as $image){
           echo '<img src="'.$image .'" />';
       }
?>

                            </div>
                        </div>
</div>
<div class="content">
 <?php
    foreach($eyeglasses as $key => $eg ){
        
        echo $key.' ： '.$eg.'<br>';
    }
 ?>
</div>




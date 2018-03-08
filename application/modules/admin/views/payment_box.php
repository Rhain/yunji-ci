
<!-- <style>
            html { font-size: 14px; }
            @media (min-width: 768px) { html { font-size: 16px; } .tooltip-inner { max-width: 350px; } }
            .mncrpt .container { max-width: 980px; }
            .mncrpt .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
            img.radioimage-select { padding: 7px; border: solid 2px #ffffff; margin: 7px 1px; cursor: pointer; box-shadow: none; }
            img.radioimage-select:hover { border: solid 2px #a5c1e5; }
            img.radioimage-select.radioimage-checked { border: solid 2px #7db8d9; background-color: #f4f8fb; }
    </style> -->
  <?php
  
  // Text above payment box
  $custom_text  = "<p class='lead'>Demo Text - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>";
  $custom_text .= "<p class='lead'>Please contact us for any questions on aaa@example.com</p>";
   
  // Display payment box 	
  echo $box->display_cryptobox_bootstrap($coins, $def_coin, $def_language, $custom_text, 70, 200, true, "default", "default", 250, "", "ajax", true);
  

  // You can setup method='curl' in function above and use code below on this webpage -
  // if successful bitcoin payment received .... allow user to access your premium data/files/products, etc.
  // if ($box->is_paid()) { ... your code here ... }
  if($box->is_paid()){
    
  }

 ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script src="<?php echo base_url().'assets/crypto/js/' ?>support.min.js" crossorigin="anonymous"></script> 
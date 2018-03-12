<div class="login">
  <!-- Login -->
  
  <div class="login__block active" id="l-login">
    
    <div class="login__block__header">
      <i class="zmdi zmdi-account-circle"></i>
      <?php echo lang('login_heading');?>
      <p ><?php echo lang('login_subheading');?></p>
    </div>

    <div class="login__block__body">
      <?php echo form_open("auth/login");?>
      <div  class="form-group form-group--float form-group--centered">
        <?php  echo form_input($identity);?>
        <input type="button" id="bt_sendVF" value="发送验证码" onclick="sendVFcode()" />
        <span style="display:none" id="notget"><a href="#" onclick="resend()">未收到？再次发送</a></span>
        <i class="form-group__bar"></i>
      </div>
      <div class="form-group form-group--float form-group--centered form-password">
        <?php echo form_input($password);?>
        <i class="form-group__bar"></i>
      </div>
      <div hidden="true" class="form-group form-group--float form-group--centered">
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
        <label><?php echo lang('login_remember_label', 'remember');?></label>
        <i class="form-group__bar"></i>
      </div>
      <div hidden="true" class="form-group form-group--float form-group--centered">
        <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
      </div>
      <?php echo form_submit('submit', lang('login_submit_btn'), array('class' => 'btn btn-danger btn--icon-text waves-effect btn-block'));?>
        <div id="infoMessage" ><?php echo $message;?></div>
    </div>
  </div>
</div>
<input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
<script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/auth.js"></script>
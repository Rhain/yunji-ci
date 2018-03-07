<div class="login">
  <!-- Login -->
  <div class="login__block active" id="l-login">
    <div id="infoMessage" ><?php echo $message;?></div>
    <div class="login__block__header">
      <i class="zmdi zmdi-account-circle"></i>
      <?php echo lang('login_heading');?>
      <p hidden="true"><?php echo lang('login_subheading');?></p>
    </div>

    <div class="login__block__body">
      <?php echo form_open("auth/login");?>
      <div hidden="true" class="form-group form-group--float form-group--centered">
        <input type="text" class="form-control">
        <?php echo lang('login_identity_label', 'identity');?>
        <label><?php  echo form_input($identity);?></label>
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
    </div>
  </div>
</div>
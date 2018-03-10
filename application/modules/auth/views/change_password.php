<header class="content__title">
    <h1>设置 | 更改密码</h1>
    <small>将旧密码更改成新密码.</small>
</header>

      <div class="card">
            <div class="card-header">
                  <h2 class="card-title">更改密码</h2>
                  <div id="infoMessage"><?php echo $message;?></div>
            </div>
            <div class="card-block">
            <?php echo form_open("auth/change_password");?>
                  <div class="row">
                        <div class="col-sm-6">
                              <div class="form-group">
                                    <?php echo form_input($old_password);?>
                                    <i class="form-group__bar"></i>
                              </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                    <?php echo form_input($new_password);?>
                                    <i class="form-group__bar"></i>
                              </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                    <?php echo form_input($new_password_confirm);?>
                                    <i class="form-group__bar"></i>
                              </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                    <?php echo form_input($user_id);?>
                                    <?php echo form_submit('submit', lang('change_password_submit_btn'), array('class' => 'btn btn-danger btn--icon-text waves-effect btn-block'));?>
                              </div>
                        </div>
                  </div>
            <?php echo form_close();?>
            </div>
      </div>

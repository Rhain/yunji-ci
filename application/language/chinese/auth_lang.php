<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Author: Daniel Davis
*         @ourmaninjapan
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.09.2013
*
* Description:  English language file for Ion Auth example views
*
*/

// Errors
$lang['error_csrf'] = '安全检查未通过';

// Login
$lang['login_heading']         = '登录';
$lang['login_subheading']      = '请通过邮箱/用户名登录';
$lang['login_identity_label']  = 'Email/用户名:';
$lang['login_password_label']  = '密码:';
$lang['login_remember_label']  = '记住我:';
$lang['login_submit_btn']      = '登录';
$lang['login_forgot_password'] = '忘记密码?';
$lang['login_need_email']      =  '请输入用户名或者邮箱';
$lang['login_need_password']   =  '请输入密码';

// Index
$lang['index_heading']           = '用户';
$lang['index_subheading']        = '以下是用户列表.';
$lang['index_fname_th']          = '姓';
$lang['index_lname_th']          = '名';
$lang['index_email_th']          = 'Email';
$lang['index_groups_th']         = '分组';
$lang['index_status_th']         = '状态';
$lang['index_action_th']         = '操作';
$lang['index_active_link']       = '可用';
$lang['index_inactive_link']     = '不可用';
$lang['index_create_user_link']  = '创建一个新用户';
$lang['index_create_group_link'] = '创建一个新分组';

// Deactivate User
$lang['deactivate_heading']                  = '注销用户';
$lang['deactivate_subheading']               = '是否确认要注销用户 \'%s\'';
$lang['deactivate_confirm_y_label']          = '是:';
$lang['deactivate_confirm_n_label']          = '否:';
$lang['deactivate_submit_btn']               = '提交';
$lang['deactivate_validation_confirm_label'] = '确认';
$lang['deactivate_validation_user_id_label'] = '用户 ID';

// Create User
$lang['create_user_heading']                           = '创建用户';
$lang['create_user_subheading']                        = '请在下方输入用户信息.';
$lang['create_user_fname_label']                       = '姓:';
$lang['create_user_lname_label']                       = '名:';
$lang['create_user_company_label']                     = '公司名称:';
$lang['create_user_identity_label']                    = 'ID:';
$lang['create_user_email_label']                       = '邮箱:';
$lang['create_user_phone_label']                       = '手机:';
$lang['create_user_password_label']                    = '密码:';
$lang['create_user_password_confirm_label']            = '确认密码:';
$lang['create_user_submit_btn']                        = '创建用户';
$lang['create_user_validation_fname_label']            = '姓';
$lang['create_user_validation_lname_label']            = '名';
$lang['create_user_validation_identity_label']         = 'ID';
$lang['create_user_validation_email_label']            = '邮箱';
$lang['create_user_validation_phone_label']            = '手机';
$lang['create_user_validation_company_label']          = '公司名称';
$lang['create_user_validation_password_label']         = '密码';
$lang['create_user_validation_password_confirm_label'] = '确认密码';

// Edit User
$lang['edit_user_heading']                           = '编辑用户';
$lang['edit_user_subheading']                        = '请在下方输入用户信息';
$lang['edit_user_fname_label']                       = '姓:';
$lang['edit_user_lname_label']                       = '名:';
$lang['edit_user_company_label']                     = '公司名称:';
$lang['edit_user_email_label']                       = 'Email:';
$lang['edit_user_phone_label']                       = '手机:';
$lang['edit_user_password_label']                    = '密码: (如果要更改密码)';
$lang['edit_user_password_confirm_label']            = '确认密码: (如果要更改密码)';
$lang['edit_user_groups_heading']                    = '分组成员';
$lang['edit_user_submit_btn']                        = '保存用户';
$lang['edit_user_validation_fname_label']            = '姓';
$lang['edit_user_validation_lname_label']            = '名';
$lang['edit_user_validation_email_label']            = '电子邮箱';
$lang['edit_user_validation_phone_label']            = '手机';
$lang['edit_user_validation_company_label']          = '公司名称';
$lang['edit_user_validation_groups_label']           = '分组';
$lang['edit_user_validation_password_label']         = '密码';
$lang['edit_user_validation_password_confirm_label'] = '确认密码';

// Create Group
$lang['create_group_title']                  = '创建分组';
$lang['create_group_heading']                = '创建分组';
$lang['create_group_subheading']             = '请在下方输入分组信息.';
$lang['create_group_name_label']             = '分组名称:';
$lang['create_group_desc_label']             = '描述:';
$lang['create_group_submit_btn']             = '创建分组';
$lang['create_group_validation_name_label']  = '分组名称';
$lang['create_group_validation_desc_label']  = '描述';

// Edit Group
$lang['edit_group_title']                  = '编辑分组';
$lang['edit_group_saved']                  = '分组已保存';
$lang['edit_group_heading']                = '编辑分组';
$lang['edit_group_subheading']             = '请在下方输入分组信息.';
$lang['edit_group_name_label']             = '分组名称:';
$lang['edit_group_desc_label']             = '描述:';
$lang['edit_group_submit_btn']             = '保存分组';
$lang['edit_group_validation_name_label']  = '分组名称';
$lang['edit_group_validation_desc_label']  = '描述';

// Change Password
$lang['change_password_heading']                               = '更改密码';
$lang['change_password_old_password_label']                    = '旧密码:';
$lang['change_password_new_password_label']                    = '新密码 (至少 %s 个字符长):';
$lang['change_password_new_password_confirm_label']            = '再次输入新密码:';
$lang['change_password_submit_btn']                            = '更改';
$lang['change_password_validation_old_password_label']         = '旧密码';
$lang['change_password_validation_new_password_label']         = '新密码';
$lang['change_password_validation_new_password_confirm_label'] = '确认新密码';

// Forgot Password
$lang['forgot_password_heading']                 = '忘记密码';
$lang['forgot_password_subheading']              = '请输入你的 %s 这样我们可以向你邮箱发布重置密码邮件.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = '提交';
$lang['forgot_password_validation_email_label']  = '电子邮箱';
$lang['forgot_password_identity_label'] = 'Identity';
$lang['forgot_password_email_identity_label']    = '电子邮箱';
$lang['forgot_password_email_not_found']         = '该邮箱地址不存在.';
$lang['forgot_password_identity_not_found']         = '该用户名不存在.';

// Reset Password
$lang['reset_password_heading']                               = '更改密码';
$lang['reset_password_new_password_label']                    = '新密码 (至少 %s 个字符长):';
$lang['reset_password_new_password_confirm_label']            = '确认新密码:';
$lang['reset_password_submit_btn']                            = '更改';
$lang['reset_password_validation_new_password_label']         = '新密码';
$lang['reset_password_validation_new_password_confirm_label'] = '确认新密码';

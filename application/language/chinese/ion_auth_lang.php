<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - English
*
* Author: Ben Edmunds
*         ben.edmunds@gmail.com
*         @benedmunds
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.14.2010
*
* Description:  English language file for Ion Auth messages and errors
*
*/

// Account Creation
$lang['account_creation_successful']            = '帐号创建成功';
$lang['account_creation_unsuccessful']          = '无法创建帐号';
$lang['account_creation_duplicate_email']       = 'Email 被占用或者不合法';
$lang['account_creation_duplicate_identity']    = 'Identity 被占用或者不合法';
$lang['account_creation_missing_default_group'] = '默认用户组未设置';
$lang['account_creation_invalid_default_group'] = '默认用户组名不合法';


// Password
$lang['password_change_successful']          = '密码修改成功';
$lang['password_change_unsuccessful']        = '无法修改密码';
$lang['forgot_password_successful']          = '重置密码邮件已发送';
$lang['forgot_password_unsuccessful']        = '无法发送重置密码链接邮件';

// Activation
$lang['activate_successful']                 = '账户已激活';
$lang['activate_unsuccessful']               = '无法激活账户';
$lang['deactivate_successful']               = '账户未激活';
$lang['deactivate_unsuccessful']             = '无法暂停账户';
$lang['activation_email_successful']         = '激活邮件已发送，请检查你邮箱';
$lang['activation_email_unsuccessful']       = '无法发送激活邮件';
$lang['deactivate_current_user_unsuccessful']= '无法激活自己.';

// Login / Logout
$lang['login_successful']                    = '登录成功';
$lang['login_unsuccessful']                  = '非法登录';
$lang['login_unsuccessful_not_active']       = '账户未激活';
$lang['login_timeout']                       = '账户暂时被锁.请稍后重试.';
$lang['logout_successful']                   = '登出成功';

// Account Changes
$lang['update_successful']                   = '账户信息更新成功';
$lang['update_unsuccessful']                 = '无法更新账户信息';
$lang['delete_successful']                   = '用户已被删除';
$lang['delete_unsuccessful']                 = '无法删除用户';

// Groups
$lang['group_creation_successful']           = '分组创建成功';
$lang['group_already_exists']                = '分组名字被占用';
$lang['group_update_successful']             = '分组详情已更新';
$lang['group_delete_successful']             = '分组已删除';
$lang['group_delete_unsuccessful']           = '无法删除分组';
$lang['group_delete_notallowed']             = '不能删除管理员的分组';
$lang['group_name_required']                 = '分组名称必填';
$lang['group_name_admin_not_alter']          = '不能更改管理员的分组名';

// Activation Email
$lang['email_activation_subject']            = '帐号激活';
$lang['email_activate_heading']              = '%s 的帐号已激活';
$lang['email_activate_subheading']           = '请点击这个链接到 %s.';
$lang['email_activate_link']                 = '激活你的账户';

// Forgot Password Email
$lang['email_forgotten_password_subject']    = '忘记密码找回';
$lang['email_forgot_password_heading']       = '为 %s 重置密码';
$lang['email_forgot_password_subheading']    = '请点击链接到 %s.';
$lang['email_forgot_password_link']          = '重置密码';

// New Password Email
$lang['email_new_password_subject']          = '新密码';
$lang['email_new_password_heading']          = ' %s 的新密码';
$lang['email_new_password_subheading']       = '你的密码已经设置成: %s';

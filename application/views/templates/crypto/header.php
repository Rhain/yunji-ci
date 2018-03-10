<!DOCTYPE html>
<html lang="en">
<head>
    <title>小猪-以太坊宠物</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>vendors/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
    <input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>css/app.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/' ?>css/fontello.css">

    <script src="<?php echo base_url().'assets/' ?>vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/jquery-ui.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/common.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/item-index.js"></script>
</head>
<body data-ma-theme="red">

    <header>
    <div class="page-loader">
            <div class="page-loader__spinner">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
        <nav class="navbar navbar-top navbar-light fixed-top">
            <div class="container">
                <div class="header-index d-flex">
                    <a class="navbar-brand" href="<?php echo base_url() ?>">
                        <img class="logo-home" src="<?php echo base_url() . 'assets/images/crypto-logo.png' ?>" />
                    </a>

                    
                    <a style="position:absolute;right:100px;top:5px;z-index:999;" href="<?php echo base_url() ?>" class="filter-btn">
                       首页
                    </a>
                    <a style="position:absolute;right:50px;top:5px;z-index:999;" href="<?php echo base_url() ?>auth/login" class="filter-btn">
                       登陆
                    </a>
                    <a style="position:absolute;right:1px;top:5px;z-index:999;" href="<?php echo base_url() ?>auth/create_user" class="filter-btn">
                       注册
                    </a>
                </div>
            </div>
        </nav>
    </header>
    
    <main id="main" class="main">
        
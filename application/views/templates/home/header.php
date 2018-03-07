<!DOCTYPE html>
<html lang="en">
<head>
    <title>SmartStore - XStore Alpha</title>
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
            <div class="container-mobile">
                <div class="header-index d-flex">
                    <a class="navbar-brand" href="<?php echo base_url() ?>">
                        <img class="logo-home" src="<?php echo base_url() . 'assets/images/logo.png' ?>" />
                    </a>

                    <form class="search" >
                        <div class="search__inner">
                            <input type="text" class="search__text" placeholder="Search the eyeglasses">
                            <i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
                        </div>
                    </form>

                    <a onclick="openNav()" class="filter-btn">
                        <i class="zmdi zmdi-filter-list zmdi-hc-2x"></i>
                    </a>
                </div>
                <div class="header-details">
                    <a href="<?php 
                    $from = isset($_GET['from'])?"?from=".$_GET['from']."&now=".$_GET['now']:"";
                    echo base_url().$from;
                    ?>"><=Go Back</a>
                </div>
                <input type="hidden" id="hd_from" value="<?php echo isset($_GET['from'])?$_GET['from']:""; ?>"/>
                <input type="hidden" id="back_url" value="<?php echo isset($_GET['now'])?$_GET['now']:""; ?>" />
            </div>
        </nav>

        <div id="mySidenav" class="sidenav filter scroll-bar">
            <div class="sidenav-heading">
                <h3>Filters <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="zmdi zmdi-close-circle-o"></i></a></h3>
                <small>In here, you can filter a poduct.</small>
            </div>

            <div class="sidenav-main">
                <div class="sidenav-main-category">
                    <label class="sidenav-title"><strong>CATEGORY</strong></label>
                    <ul>
                        <li>
                            <label class="custom-control custom-radio">
                                <input id="cate1" name="category" type="radio" class="custom-control-input" value="sunglasses">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Sunglasses</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-radio">
                                <input id="cate2" name="category" type="radio" class="custom-control-input" value="optical">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Optical Eyeglasses</span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="sidenav-main-material">
                    <label class="sidenav-title"><strong>MATERIAL</strong></label>
                    <div class="row">
                        <div class="col col-lg-6">
                            <ul>
                                <li>
                                    <label class="custom-control custom-radio">
                                        <input id="material1" name="material" type="radio" class="custom-control-input" value="none">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">None</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-control custom-radio">
                                        <input id="material2" name="material" type="radio" class="custom-control-input" value="acetate">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Acetate</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-control custom-radio">
                                        <input id="material3" name="material" type="radio" class="custom-control-input" value="alloy">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Alloy</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-control custom-radio">
                                        <input id="material4" name="material" type="radio" class="custom-control-input" value="tr">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Tr</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col col-lg-6">
                            <ul>
                                <li>
                                    <label class="custom-control custom-radio">
                                        <input id="material5" name="material" type="radio" class="custom-control-input" value="plastic">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Plastic</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-control custom-radio">
                                        <input id="material6" name="material" type="radio" class="custom-control-input" value="titanium">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Titanium</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-control custom-radio">
                                        <input id="material7" name="material" type="radio" class="custom-control-input" value="wood">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Wood</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sidenav-main-price">
                    <label class="sidenav-title"><strong>PRICE</strong></label>
                    <ul>
                        <li>
                            <label class="custom-control custom-radio">
                                <input name="price" type="radio" class="custom-control-input" value="asc">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Low to High</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-radio">
                                <input name="price" type="radio" class="custom-control-input" value="desc">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">High to Low</span>
                            </label>    
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- <nav class="navbar navbar-top navbar-light fixed-top" id="filter_div" style="display:none;">
                <tr><td>Brand</td>
                    <td><input type="radio" name="brand" value="none" ><label>None</label></td>
                    <?php
                        //foreach($brands as $brand){
                          //  echo '<td><input type="radio" name="brand" value="'.$brand.'"><label>'.$brand.'</label></td>';
                        //}
                    ?>
                </tr>
        </nav> -->
    </header>
    
    <main id="main" class="main">
        
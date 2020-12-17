<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>KANTHA WORLD</title>
        <!-- Bootstrap Core CSS -->
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon.png">
        <link href="<?php echo base_url(); ?>assets/web/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/web/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/web/popins-font/stylesheet.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/web/open-sans-font/stylesheet.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>assets/web/slick/slick.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/web/slick/slick-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/web/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/web/slider/css/reset.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/web/slider/css/fractionslider.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/web/slider/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/web/css/animate.css" media="all"  type="text/css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/web/css/devs-kantha.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/web/css/jquery-picZoomer.css" rel="stylesheet">

        <style>
            .brands-title:before {
                padding-right: 20px;
                content:  url("<?php echo base_url(); ?>assets/images/arrow-img.png");
                font-size:25px;
                color: #00b357
            }
            .brands-title:after {
                padding-left: 20px;
                content:  url("<?php echo base_url(); ?>assets/images/arrow-img-right.png");

                font-size:25px;
                color: #00b357
            }
        </style>
    </head>

    <body id="page-top" class="index bounceOutUp">
        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand brand_logo" href="<?php echo base_url(); ?>">
                        <img src="<?php echo base_url(); ?>assets/web/contents/images/logo.png" class="img-responsive">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="devs-top-menu">
                        <ul class="navbar-right">

                            <li>
                                <div class="search">
                                    <input type="text" class="form-control input-sm devs-serach" maxlength="64" placeholder="Search" />
                                    <button type="submit" class="btn btn-primary sear-button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </li>

                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a></li>

                            <li>

                            <?php

                                 $customer_data = $this->session->customer_data['current_user_id'];

                                if(!empty($customer_data)) { ?>
                                    <a href="<?php echo base_url(); ?>cart/wishlistView">
                                <?php } else{ ?>
                                    <a href="<?php echo base_url(); ?>Customer/add">
                                <?php  } ?>
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    <span class="badge devs-badge">
                                <?php
                                    echo count($wishdata);
                                ?>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url() ?>Cart/cartView">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span  class="badge devs-badge">
                                           <?php
                                                $this->load->library('cart');
                                               echo $rows = count($this->cart->contents());
                                            ?>
                                        </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a class="" href="<?php echo base_url(); ?>">HOME</a>
                        </li>

                       

                        <li>
                            <a class="" href="<?php echo base_url(); ?>customdesign/">CUSTOM DESIGN</a>
                        </li>

                         <?php
                            $customer_data = $this->session->customer_data['current_user_id'];
                            //$data = count($customer_data);
                        ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <?php if(!empty($customer_data)) {
                                    echo  'My Account'; } else{
                                        echo 'Customer';
                                        } ?>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu sub-menu-drop">


                              <?php  if( $customer_data> 0  ){ ?>
                                <li><a href="<?php echo base_url();  ?>Customer/customerView"> Profile</a></li>
                                <li><a href="<?php echo base_url();  ?>Customer/CustomerLogout"> logout</a></li>
                                <?php  } else  { ?>

                                     <li><a href="<?php echo base_url();  ?>Customer/Add"> Sign In | Sign Up</a>
                                  <?php    }  ?>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url();  ?>login/sellerlogin">Seller</a>
                        </li>
    
                        <li>
                            <a href="<?php echo base_url();  ?>login/designerlogin">Designer</a>
                        </li>

                        <li>
                            <a href="#">CONTACT</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

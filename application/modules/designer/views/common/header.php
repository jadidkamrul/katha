
<!DOCTYPE html>
<html class=" ">
    <head>
        <!--
         * @Package: Complete Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 2.2
         * This file is part of Complete Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Designer Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="<?php echo base_url(); ?>assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?php echo base_url(); ?>assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?php echo base_url(); ?>assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?php echo base_url(); ?>assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->


<link href="<?php echo base_url(); ?>assets/plugins/morris-chart/css/morris.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo base_url(); ?>assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen"/>

        <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->


        <!-- CORE CSS TEMPLATE - START -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->



    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
<div class='page-topbar '>
    <div class='logo-area'>
<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="">
    </div>
    <div class='quick-area'>
        <div class='pull-left'>
            <ul class="info-menu left-links list-inline list-unstyled">
                <li class="sidebar-toggle-wrap">
                    <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class='pull-right'>
            <ul class="info-menu right-links list-inline list-unstyled">
                <li class="profile">
                    <a href="#" data-toggle="dropdown" class="toggle">


                     <?php
                            $user = $this->ion_auth->user()->row();
                            $user->user_image;

                            ?>
                     <img src="<?php echo base_url(); ?>assets/uploads/<?php echo $user->user_image; ?>" alt="user-image" class="img-circle img-inline">
                         <span>
                            <?php
                            $user = $this->ion_auth->user()->row();
                           echo  $user->username;
                            ?>
                         <i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul class="dropdown-menu profile animated fadeIn">
                        <li>
                            <a href="<?php echo base_url(); ?>designer/settings">
                                <i class="fa fa-wrench"></i>
                                Settings
                            </a>
                        </li>

                        <li class="last">
                            <a href="<?php echo base_url(); ?>designer/logout">
                                <i class="fa fa-lock"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END TOPBAR -->
<!-- START CONTAINER -->
<div class="page-container row-fluid container-fluid">
    <!-- SIDEBAR - START -->
<div class="page-sidebar fixedscroll">
    <!-- MAIN MENU - START -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper">
        <!-- USER INFO - START -->
        <div class="profile-info row">
            <div class="profile-image col-xs-4">
                <a href="<?php echo base_url(); ?>designer/settings">
                   <img src="<?php echo base_url(); ?>assets/uploads/<?php echo $user->user_image; ?>" alt="user-image" class="img-circle img-inline">
                </a>
            </div>

            <div class="profile-details col-xs-8">
                <h3>
                    <a href="<?php echo base_url(); ?>designer/dashboard/">
                        <?php

                            $user = $this->ion_auth->user()->row();
                           echo  $user->username;
                        ?></a>

                    <!-- Available statuses: online, idle, busy, away and offline -->
                    <span class="profile-status online"></span>
                </h3>
                <p class="profile-title">Designer</p>
            </div>
        </div>
        <!-- USER INFO - END -->
        <ul class='wraplist'>


                    <li class="open">
                    <a href="<?php echo base_url(); ?>Dashboard/dashboard">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                    <a href="javascript:;">
                    <i class="fa fa-cubes"></i>
                    <span class="title">Design</span>
                        <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu" >
                            <li>
                            <a class="" href="<?php echo base_url(); ?>designer/Designs/alldesigns" >All Design</a>
                            </li>
                            <li>
                            <a class="" href="<?php echo base_url(); ?>designer/Designs/adddesigns" >Add Design</a>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                    <a href="<?php echo base_url(); ?>designer/settings">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Settings</span>
                        </a>
                    </li>
        </ul>

    </div>
    <!-- MAIN MENU - END -->

</div>
<!--  SIDEBAR - END -->

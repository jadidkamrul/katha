<style type="text/css">
  .breadcrumb>li+li:before{
    color: black!important;
  }
</style>
    <section class="page-tittle-bg" style="margin-top:100px;">
        <div class="container">
            <div class="">
                <div class="page-tittle-pro">
                    <h1 style="font-size: 18px;">Customer Profile</h1>
                    <ul class="breadcrumb">
                        <li><a style="font-size: 12px;" href="#">Customer</a></li>
                        <li  style="font-size: 12px;" class="active"> Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

        <link rel="stylesheet" type="text/css" href="<?php echo  base_url() ?>assets/css/style_custmer.css">
        <div class="row">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3" id="navigation">
                        <div class="logo">
                            <h2 style="padding: 10px;color: #122143;"><?php echo  $this->session->customer_data['current_customer_name'];?></h2>
                        </div>
                        <div class="navi">
                            <ul>
                                <li class="active">

                                     <a href="<?php echo base_url(); ?>Customer/customerView">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span class="hidden-xs hidden-sm">My Profile</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="<?php echo base_url(); ?>Customer/customeredit">
                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                        <span class="hidden-xs hidden-sm">Setting</span>
                                    </a>
                                </li>


                                <li>
                                     <a href="<?php echo base_url(); ?>customer/customer_orderlist">
                                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                        <span class="hidden-xs hidden-sm">Order List</span>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>

                    <div class="col-md-9" style="border-left: 1px solid #f5f5f5;padding: 20px;">

                        <div class="user-dashboard">
                            <h1>Personal information</h1>
                            <div>
                                <div>
                                    <div class="row">
                                        <div class="" align="center"> </div>

                                            <table class="table table-user-information">
                                                <tbody>
                                                    <tr>
                                                        <td>Name:</td>
                                                        <td><?php echo  $this->session->customer_data['current_customer_name'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td><?php  echo  $this->session->customer_data['current_customer_email']; ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Phone</td>
                                                        <td><?php  echo  $this->session->customer_data['current_customer_phone']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td> Address</td>
                                                        <td><?php  echo  $this->session->customer_data['current_customer_address']; ?></td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                            <a href="<?php echo base_url(); ?>Customer/customeredit" class="btn btn-primary" style="border-radius: 0px !important; margin-top: 10px; height: 45px !important; margin-bottom: 15px; padding: 12px;">Edit Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

    <section class="" style="margin-top:100px;">
        <div class="container">

        </div>
    </section>

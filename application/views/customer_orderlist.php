    <section class="page-tittle-bg" style="margin-top:100px;">
        <div class="container">
            <div class="">
                <div class="page-tittle-pro">
                    <h1>Order DETAILS</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Order</a></li>
                        <li class="active">Order Details</li>
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
                                <li>

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


                                <li class="active">
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
                            <div>
                                <div>
                                    <div class="row">
                                        <div class="" align="center"> </div>


                                                <table class="table table-user-information">
                                              <thead>
                                                <tr>
                                                  <th>Product Name</th>
                                                  <th>Quantity</th>
                                                  <th>Price</th>
                                                  <th>Total</th>
                                                 <th>Date</th>

                                                </tr>
                                              </thead>

                                              <tbody>
                                                <?php

                                                foreach($customer_orders as $order): ?>
                                                  <tr>
                                                    <td><?php echo $order['product_name']; ?></td>
                                                    <td><?php echo $order['quantity']; ?></td>
                                                    <td><?php echo $order['price']; ?></td>
                                                    <td><?php echo $order['quantity'] *  $order['price'] ; ?></td>
                                                    <td><?php echo $order['date']; ?></td>
                                                  </tr>


                                                <?php endforeach; ?>
                                              </tbody>
                                          </table>
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

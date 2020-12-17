
    <section class="page-tittle-bg" style="margin-top:100px;">
        <div class="container">
            <div class="">
                <div class="page-tittle-pro">
                    <h1>Customer Profile</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Customer  -- </a></li>
                        <li class="active"> Details</li>
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

                    <div class="navi">
                      <div class="logo">
                          <h2 style="padding: 10px;color: #122143;"><?php echo  $this->session->customer_data['current_customer_name'];?></h2>
                      </div>
                        <ul>
                          <li>

                               <a href="<?php echo base_url(); ?>Customer/customerView">
                                  <i class="fa fa-home" aria-hidden="true"></i>
                                  <span class="hidden-xs hidden-sm">My Profile</span>
                              </a>
                          </li>
                            <li class="active">
                                <a href="#">
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
                    <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->

                    <div class="user-dashboard">

                                <h1>Edit Personal information</h1>

                              <?php foreach($customer_edit_data as $customer_data){ ?>
                            <form action ="<?php echo base_url(); ?>/Customer/edit_customer" method="post" enctype="multipart/form-data">
                              <div class="row">
                                 <input type="hidden" name="id" value="<?php echo $customer_data['serial']; ?>">

                                <div class="form-group col-md-12">
                                    <label for="email">Customer Name</label>
                                    <input type="text" name="cname" value="<?php echo $customer_data['name']; ?>" class="form-control" style="border-radius: 0px !important; margin-top: 10px; height: 45px !important; margin-bottom: 15px;" id="field-15970">

                                </div>

                                 <div class="form-group col-md-12">
                                    <label for="pwd">Customer Email</label>
                                    <input type="text" name="cemail" value="<?php echo $customer_data['email']; ?>" class="form-control" style="border-radius: 0px !important; margin-top: 10px; height: 45px !important; margin-bottom: 15px;" id="field-15970">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="pwd">Customer Address</label>
                                     <input type="text" name="caddress" value="<?php echo $customer_data['address']; ?>" class="form-control" style="border-radius: 0px !important; margin-top: 10px; height: 45px !important; margin-bottom: 15px;" id="field-15970">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="pwd">Customer phone</label>
                                    <input type="text" name="cphone" value="<?php echo $customer_data['phone']; ?>" class="form-control" style="border-radius: 0px !important; margin-top: 10px; height: 45px !important; margin-bottom: 15px;" id="field-15970">
                                </div>
                              </div>
                                 <input type="submit" class="btn btn-primary" value="Save" style="border-radius: 0px !important; margin-top: 10px; height: 45px !important; margin-bottom: 15px;">

                            </form>

                            <?php } ?>



                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>

      </div>
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('[data-toggle="offcanvas"]').click(function() {
                    $("#navigation").toggleClass("hidden-xs");
                });
            });
        </script>

    </body>
</html>

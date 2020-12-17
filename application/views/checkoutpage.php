
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/checkout/style.css">
    <section class="page-tittle-bg" style="margin-top:100px;">
        <div class="container">
            <div class="">
                <div class="page-tittle-pro">
                    <h1>Checkout Summary</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">View Details</li>        
                    </ul>
                </div>
            </div>
        </div>
    </section>
<section>
<div style="margin-top: 30px;" class="col-md-6">
    <div class="container">
        <?php 
            $customer_data = $this->session->userdata('customer_data');
            if ($customer_data>0) { ?>
                <?php
                    $customer_data = $this->session->userdata('customer_data');
                    $c_id = $customer_data['current_user_id'];
                    $c_name = $customer_data['current_customer_name'];
                    $c_email = $customer_data['current_customer_email'];
                    $c_address = $customer_data['current_customer_address'];
                    $c_phone = $customer_data['current_customer_phone'];
                    $grand_total = 0;
                    if ($cart = $this->cart->contents()):
                        foreach ($cart as $item):
                            $grand_total = $grand_total + $item['subtotal'];
                        endforeach;
                    endif;
                ?>
            <div class="col-md-6">
                <form  class="form-horizontal" name="billing" method="post" action="<?php echo base_url() . 'Cart/save_order' ?>" >
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <table class="table table-striped" style="font-weight: bold;">
                                <tr>
                                    <td>
                                        <label for="id_email">Total Tk:</label></td>
                                    <td>
                                        <input type="email" class="form-control" id="exampleInputEmail3" readonly="" placeholder="$<?php echo number_format($grand_total, 2); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="id_first_name">Name:</label></td>
                                    <td>
                                        <input type="text" class="form-control" value="<?php echo $c_name; ?>" id="exampleInputEmail3" name="name" required="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="id_last_name">Address</label></td>
                                    <td>
                                        <input type="text" class="form-control" value="<?php echo $c_address; ?>" id="exampleInputEmail3" name="address" required=""   placeholder="Address">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="id_address_line_1">Mobile No:</label></td>
                                    <td>
                                        <input type="text" class="form-control" id="exampleInputEmail3" value="<?php echo $c_phone; ?>" name="phone"  required="" placeholder="Phone">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="id_address_line_2">Email</label></td>
                                    <td>
                                        <input type="email" class="form-control" value="<?php echo $c_email; ?>" id="exampleInputEmail3" name="email"  required="" placeholder="Email">
                                    </td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>
                                    <?php echo "<a class ='fg-button teal' id='back' href=" . base_url() . "Cart/cartview>Back</a>";  ?>
                                    <input type="submit" class ='btn btn-success' value="Place Order" /></td>
                                </tr> 
                            </table>
                        </div>
                    </div>
                </form>
            </div>
            <?php  } else{ ?>


                    <div class="col-md-6">
                        <h1 style="font-size: 20px; margin-bottom: 15px;">Login with User and Password</h1>
                        <section class="box ">
                            <div class="content-body">
                                <div class="row">
                                    <form action ="<?php echo base_url(); ?>Customer/customer_login_data_check" method="post" enctype="multipart/form-data">
                                        
                                            <div class="form-group">
                                                <label class="form-label form_lable" for="field-15970">Customer Email</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="email" name="cemail" class="form-control form_control" id="field-15970">
                                                </div>
                                            </div>
                                               
                                            <div class="form-group">
                                                <label class="form-label form_lable" for="field-15970">Customer Pass</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="password" name="cpasword" class="form-control form_control" id="field-15970">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30 row">
                                                <div class="text-left">
                                                <button type="submit" class="btn submit-btn">Login</button>
                                                <button type="button" class="btn cancle-btn">Cancel</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </section>


        
            <div class="title row">Registration ( New User )</div>
                <section class="box ">
                    <div class="content-body">
                        <div class="row">
                            <form action ="<?php echo base_url(); ?>/Customer/add_customer" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label class="form-label form_lable" for="field-15970">Customer Name</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="text" name="cname" class="form-control form_control" id="field-15970">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label form_lable" for="field-15970">Customer Email</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="text" name="cemail" class="form-control form_control" id="field-15970">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label form_lable" for="field-15970">Customer Pass</label>
                                    <div class="controls">
                                        <input type="text" name="cpasword" class="form-control form_control" id="field-15970">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label form_lable" for="field-15970">Customer Address</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="text" name="caddress" class="form-control form_control" id="field-15970">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label form_lable" for="field-15970">Customer Phone</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="text" name="cphone" class="form-control form_control" id="field-15970">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30 row">
                                    <div class="text-left">
                                    <button type="submit" class="btn submit-btn">Registration</button>
                                    <button type="button" class="btn cancle-btn">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>


                <?php } ?>
                <div class="col-md-6">
                    <div class="checkout">
                        <div class="shopping-cart">
                            <div class="shopping-cart-header">
                                Order Summary
                            </div> <!--end shopping-cart-header -->
                            <?php 
                                $this->load->library('cart');
                                $cart_check=$this->cart->contents(); 
                                $cart = $this->cart->contents();
                                foreach ($cart as $item){ 
                            ?>
                            <ul style="border-top: 2px solid #fffafa;"  class="shopping-cart-items ">
                                <div class="col-md-4">
                                    <?php echo $item['name']; ?>
                                </div>
                                <div class="col-md-4">
                                     <?php echo $item['qty']; ?>
                                </div>
                                <div class="col-md-4">
                                    tk <?php echo $item['price']; ?>
                                </div>
                            </ul>
                            <hr>
                        <?php } ?>

                        <?php 
                            $cart = $this->cart->contents();
                            $grand_total = 0;
                            foreach ($cart as $item){
                                $grand_total = $grand_total + $item['subtotal']; 
                            } 
                        ?>
                            <div style="float: right" class="shopping-cart-total">
                                <span class="lighter-text">Total:</span>
                                <span class="main-color-text">tk  <?php echo $grand_total; ?></span>
                            </div>
                      </div>
                      
                    </div>
                </div>
            </div>

</div>

   <section style="margin-top:100px;">
        <div class="container">
           
        </div>
    </section>
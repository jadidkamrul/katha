<section class="page-tittle-bg" style="margin-top:100px;">
    <div class="container">
        <div class="">
            <div class="page-tittle-pro">
                <h1>Cart Details</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Cart</a></li>
                    <li class="active">Billing info</li>        
                </ul>
            </div>
        </div>
    </div>
</section>
        <section>


            <div class="container">
                <?php

                    $customer_data = $this->session->userdata('customer_data');
               
                     $c_id = $customer_data['current_user_id'];
                     $c_name = $customer_data['current_customer_name'];
                     $c_email = $customer_data['current_customer_email'];
                     $c_address = $customer_data['current_customer_address'];
                     $c_phone = $customer_data['current_customer_phone'];
                 
                   // $c_id = $customer_data['current_customer_name'];
                    $grand_total = 0;
                    // Calculate grand total.
                    if ($cart = $this->cart->contents()):
                        foreach ($cart as $item):
                            $grand_total = $grand_total + $item['subtotal'];
                        endforeach;
                    endif;
                ?>
    
             
                    <div class="user-dashboard">
                        <div id='mainContentWrapper'>
                            <div class="col-md-6 col-md-offset-3">
                                <div class="shopping_cart">
                   <form  class="form-horizontal" name="billing" method="post" action="<?php echo base_url() . 'Cart/save_order' ?>" >
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                          
                                                <div class="panel-body">
                                                    <b>Help us keep your account safe and secure, please verify your billing
                                                        information.</b>
                                                    <br/><br/>
                                                    <table class="table table-striped" style="font-weight: bold;">
                                                        <tr>
                                                            <td style="width: 175px;">
                                                                <label for="id_email">Total Tk:</label></td>
                                                            <td>
<input type="email" class="form-control" id="exampleInputEmail3" readonly="" placeholder="$<?php echo number_format($grand_total, 2); ?>">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 175px;">
                                                                <label for="id_first_name">Name:</label></td>
                                                            <td>
    
<input type="text" class="form-control" value="<?php echo $c_name; ?>" id="exampleInputEmail3" name="name" required="">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 175px;">
                                                                <label for="id_last_name">Address</label></td>
                                                            <td>

<input type="text" class="form-control" value="<?php echo $c_address; ?>" id="exampleInputEmail3" name="address" required=""   placeholder="Address">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 175px;">
                                                                <label for="id_address_line_1">Mobile No:</label></td>
                                                            <td>
                            <input type="text" class="form-control" id="exampleInputEmail3" value="<?php echo $c_phone; ?>" name="phone"  required="" placeholder="Phone">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 175px;">
                                                                <label for="id_address_line_2">Email</label></td>
                                                            <td>
                            <input type="email" class="form-control" value="<?php echo $c_email; ?>" id="exampleInputEmail3" name="email"  required="" placeholder="Email">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                          <td></td>
                                                          <td>
                                                            <?php echo "<a class ='fg-button teal' id='back' href=" . base_url() . "Home>Back</a>";  ?>
                                                            <input type="submit" class ='fg-button teal' value="Place Order" /></td>
                                                        </tr> 
                                                    </table>
                                                </div>
                                                <tr>
                              
                                            </div>
                                        </div>
                                       <!--   <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <div style="text-align: center; width:100%;">
                                                        <a style="width:100%;" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class=" btn btn-success" 
                                                    onclick="$(this).fadeOut(); $('#payInfo').fadeIn();">Continue
                                                            to Billing Information»
                                                        </a>
                                                    </div>
                                                </h4>
                                            </div>
                                        </div> -->
                                        <div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        

            





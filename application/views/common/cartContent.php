<style type="text/css">
  .breadcrumb>li+li:before{
    color: black!important;
  }
</style>
    <section class="page-tittle-bg" style="margin-top:100px;">
        <div class="container">
            <div class="">
                <div class="page-tittle-pro">
                    <h1>CART DETAILS</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">View Details</li>        
                    </ul>
                </div>
            </div>
        </div>
    </section>



        <div class="container" style="margin-top: 100px;">      

            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <div class="row">
                            <div class="col-xs-6">
                                <h5><span class="glyphicon glyphicon-shopping-cart"></span> <b>Kantha</b> Shopping Cart</h5>
                            </div>
                            <div class="col-xs-6">
                                <a href="<?php echo base_url(); ?>Home" class="btn btn-primary btn-sm btn-block">
                                    <span class="glyphicon glyphicon-share-alt"></span> Continue shopping
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
                $this->load->library('cart');
                $cart_check=$this->cart->contents(); 
            ?> 
            <?php if($cart_check) { ?>
               <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Qty</th>
                            <th class="text-center">Amount</th>
                            <th class="col-sm-2 col-md-2">Cancel Product</th>
                        </tr>
                    </thead>
            <?php
                   echo form_open('Cart/update_cart');
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()){
                 
                        $grand_total = 0;
                        $i = 1;
                        // echo '<pre>';
                        // print_r($cart);

                    foreach ($cart as $item){ 
                        //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        //  Will produce the following output.
                        // <input type="hidden" name="cart[1][id]" value="1" />
                        
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                        ?>
                        <tr>
                            <td class="col-sm-1 col-md-1" style="text-align: center"><?php echo $i++; ?></td>
                            <td class="col-sm-1 col-md-1" style="text-align: center"><?php echo $item['name']; ?></td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">tk <?php echo $item['price']; ?></td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                            </td>
                                <?php $grand_total = $grand_total + $item['subtotal']; ?>
                             <td class="col-sm-1 col-md-1" style="text-align: center">tk <?php echo $item['subtotal']; ?></td>
                            <td style="text-align: center">
                                <a  type="button" class="btn btn-danger" href="<?php echo base_url().'cart/remove/'.$item['rowid']; ?>">
                                    <span  class="glyphicon glyphicon-remove"></span>
                                </a>
                            </td>
                        </tr>
                     <?php } ?>
                                <tbody>
                                    <tr>
                                        <td colspan="4" style="text-align: right;"><strong>Order Total: </strong></td>
                                        <td style="text-align: left"><b>tk  <?php echo $grand_total; ?></b></td>
                                         <td style="text-align: center" >
                                            <input type="button" class ='btn btn-danger btn-default' value="Clear Cart" onclick="clear_cart()">
                                        </td>
                                    </tr>
                                                        
                                    <tr>
                                        <td colspan="3" style="text-align: center" > 
                                            <button type="submit" class="btn btn-primary btn-sm btn-block">
                                                <span class="glyphicon glyphicon-edit"></span> Update Cart
                                            </button>
                                        </td>
                                        <?php // "clear cart" button call javascript confirmation message ?>
                                       <td></td>
                                        <td colspan="3" style="text-align: center;">
                                <a href="<?php echo base_url(); ?>cart/Checkout" class="btn btn-success btn-sm btn-block">
                                                Checkout <span class="glyphicon glyphicon-play"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php echo form_close(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                   <?php } } else{ ?>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Name</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Qty</th>
                                        <th class="text-center">Amount</th>
                                       
                                        <th> </th>
                                    </tr>
                                </thead>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    
                                </tr>

                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td  colspan="3"> <h2 style="color:red;">Cart Has No Product</h2></td>
                                        <td></td>
                                        <td style="text-align: center"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class="col-md-2" style="text-align: center" >
                                            <a href="<?php echo base_url(); ?>Home" class="btn btn-primary">
                                                Continue Shopping 
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                    <?php } ?>

                    <script type="text/javascript">
                        // To conform clear all data in cart.
                        function clear_cart() {
                            var result = confirm('Are you sure want to clear all bookings?');
                            if (result) {
                                window.location = "<?php echo base_url(); ?>Cart/remove/all";
                            } else {
                                return false; // cancel button
                            }
                        }
                    </script>
                

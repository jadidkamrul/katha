<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">
            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
              <h1 class="title">Orders</h1><!-- PAGE HEADING TAG - END -->                           
            </div>
            <div class="pull-right hidden-xs">
              <ol class="breadcrumb">
                <li>
                    <a href="index.html"><i class="fa fa-home"></i>Home</a>
                </li>
                <li>
                    <a href="eco-invoices.html">Orders</a>
                </li>
                <li class="active">
                    <strong>All Orders</strong>
                </li>
              </ol>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->

<div class="col-lg-12">
    <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">All Orders</h2>
                <div class="actions panel_actions pull-right">
                	<a class="box_toggle fa fa-chevron-down"></a>
                    <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                    <a class="box_close fa fa-times"></a>
                </div>
            </header>

            <div class="content-body">
              <div class="row">
                <div class="col-xs-12 table-responsive">
            <!-- ********************************************** -->
                <table id="example" class="display table table-hover table-condensed">
                    <thead>
                      <tr>
                        <th>Customer Name</th>
                        <th>Customer Address</th>
                        <th>Customer Email</th>
                        <th>Customer Phone</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php foreach($processingorder as $order): ?>
                        <tr>
                          <td><?php echo $order['name']; ?></td>
                          <td><?php echo $order['address']; ?></td>
                          <td><?php echo $order['email']; ?></td>
                          <td><?php echo $order['phone']; ?></td>
                          <td><?php echo $order['quantity']; ?></td>
                          <td><?php echo $order['price']; ?></td>
                          <td><?php echo $order['quantity'] *  $order['price'] ; ?></td>
                          <td><?php echo $order['date']; ?></td>
                          
                          <td>


                              <a  href="<?php echo base_url(); ?>admin/order/cancel/<?php echo $order['o_id']; ?>" class="btn btn-danger btn-sm">Cancel</a> 


                          </td>

                        </tr>

                       
                      <?php endforeach; ?>
                    </tbody>
                </table>
            <!-- ********************************************** -->
            </div>
        </div>
        </div>
      </section>
      </div>

<!-- MAIN CONTENT AREA ENDS -->
    </section>
    </section>

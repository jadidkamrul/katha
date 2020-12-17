
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


  <form action="<?php echo base_url(); ?>admin/report/view" method="post">
    <div class="col-lg-4">
     <div class="form-group">
        <label class="form-label" >Date From</label> 
        <div class="controls">
          <input type="text" name="from_date" value="" class="form-control datepicker" data-format="yyyy-mm-dd" >
        </div>
      </div>
    </div>

    <div class="col-lg-2"></div>

    <div class="col-lg-4">
     <div class="form-group">
        <label class="form-label" >Date To</label>
        
        <div class="controls">
            <input type="text" name="to_date" value="" class="form-control datepicker" data-format="yyyy-mm-dd" >
        </div>
      </div>
    </div>
    <input type="submit" name="submit">
  </form>

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
                    <th>Date</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    
                  </tr>
                </thead>
                    <?php if(!empty($reports)):foreach ( $reports as $report) { ?>

                <tbody>
                    <tr>
                      <td><?php echo $report['date'] ?></td>
                      <td><?php echo $report['quantity'] ?></td>
                      <td><?php echo $report['price'] ?></td>
                    </tr> 
                </tbody>
                    <?php  } endif; ?>
            </table>
            <!-- ********************************************** -->
        </div>
    </div>
    </div>
        </section></div>
<!-- MAIN CONTENT AREA ENDS -->
    </section>
    </section>


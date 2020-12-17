<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
              <h1 class="title">Customer</h1>
            </div>

                  <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="eco-invoices.html">Customer</a>
                        </li>
                        <li class="active">
                            <strong>All Customers</strong>
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
                <h2 class="title pull-left">All Customers</h2>
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
                    <th>Action</th>
                  </tr>
                </thead>


                <tbody>
                  <?php foreach($designorderdata as $customer): ?>
                    <tr>
<td>
            <img src="<?php echo base_url(); ?>assets/images/<?php echo $customer['custom_image']; ?>" 
            style="height:50px; width: 50px;"></td>
      
                      <td>

                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal<?php echo $customer['customo_id']; ?>">
                          Delete
                        </button>
                      </td></tr>



                      <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $customer['customo_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete ?</h4>
      </div>
      <div class="modal-body">
        Delete Product ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="<?php echo base_url(); ?>admin/Customer/delete/<?php echo $customer['customo_id']; ?>"class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>



                  <?php endforeach; ?>
                </tbody>
            </table>
            <!-- ********************************************** -->




        </div>
    </div>
    </div>
        </section></div>






<!-- MAIN CONTENT AREA ENDS -->
    </section>
    </section>

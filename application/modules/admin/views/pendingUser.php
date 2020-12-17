



<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START --><h1 class="title">Users</h1><!-- PAGE HEADING TAG - END -->                            </div>

                            <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="eco-users.html">Users</a>
                        </li>
                        <li class="active">
                            <strong>All Users</strong>
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
            <h2 class="title pull-left">All Users</h2>
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
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Added On</th>
                                    <th>Added On</th>
                                </tr>
                            </thead>
                        <?php foreach ($pendingUser as  $value) : ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $value['username']; ?></td>
                                    <td><?php echo $value['email']; ?></td>
                                    <td><?php echo $value['first_name']; ?></td>
                                    <td><?php echo $value['last_name']; ?></td>
                                    <td><?php echo $value['company']; ?></td>
                                    <td><?php echo $value['phone']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>admin/users/useractive/<?php echo $value['id']; ?>" class="btn btn-primary btn-sm">Pending</a>
                                    </td>
                                </tr>
                      <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $value['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
        <a href="<?php echo base_url(); ?>admin/users/delete/<?php echo $value['id']; ?>"class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>










                            </tbody>

                        <?php endforeach; ?>
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

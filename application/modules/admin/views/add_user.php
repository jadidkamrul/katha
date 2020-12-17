<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>
    <div class='col-xs-12'>
        <div class="page-title">
            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Add a User</h1><!-- PAGE HEADING TAG - END -->                            
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="crm-users.html">Users</a>
                    </li>
                    <li class="active">
                        <strong>Add User</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->
    <?php if ($this->session->flashdata('successmsg')) { ?>
    <div class="alert alert-info text-center">
    <?php echo $this->session->flashdata('successmsg'); ?>
    </div>
    <?php } ?>

    <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger text-center">
    <?php echo $this->session->flashdata('error'); ?>
    </div>
    <?php } ?>
    <div class="col-xs-12">
    <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">Basic Info</h2>
                <div class="actions panel_actions pull-right">
                	<a class="box_toggle fa fa-chevron-down"></a>
                    <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                    <a class="box_close fa fa-times"></a>
                </div>
            </header>
            <div class="content-body">
    <div class="row">
    <form action ="<?php echo base_url(); ?>admin/Users/add" method="post" id="userform" enctype="multipart/form-data">
        <div class="col-xs-12 col-sm-9 col-md-8">

			<div class="form-group">
                <label class="form-label" >Name</label>
                <span class="desc"></span>
                <div class="controls">
                    <input type="text" name="username" value="" class="form-control" >
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" >Date of Birth</label>
                
                <div class="controls">
                    <input type="text" name="date_of_birth" value="" class="form-control datepicker" data-format="mm/dd/yyyy" >
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" >Gender</label>
                <span class="desc"></span>
                    <select name="gender" class="form-control">
                        <option value="v"></option>
                        <option value="male" >Male</option>
                        <option value="female" >Female</option>
                    </select>
            </div>

             <div class="form-group">
                <label class="form-label" >User Type</label>
                <span class="desc"></span>
                    <select name="group" class="form-control">
                        <option value="v"></option>
                        <option value="2" >selller</option>
                        <option value="3" >designer</option>
                    </select>
            </div>

            <div class="form-group">
                <label class="form-label" >User Profile Image</label>
                <span class="desc"></span>
                <div class="controls">
                    <input type="file" class="form-control" name="userfile" >
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" > User Details</label>
                <div class="controls">
                    <textarea name="user_details" class="form-control autogrow" cols="5" ></textarea>
                </div>
            </div>
 <!--        </div>
    </div>
 -->

<!--     <header class="panel_header">
        <h2 class="title pull-left">User Account Info</h2>
        <div class="actions panel_actions pull-right">
        </div>
    </header> -->
    <!-- <div class="content-body">
<div class="row"> 

            <div class="col-xs-12 col-sm-9 col-md-8">-->

                <div class="form-group">
                    <label class="form-label" >Email</label>
                    <span class="desc"></span>
                    <div class="controls">
                        <input type="text" name="email" value="" class="form-control" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" >Phone</label>
                    <span class="desc"></span>
                    <div class="controls">
                        <input type="text" name="phone" value="" class="form-control"  >
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" >Password</label>
                    <span class="desc"></span>
                    <div class="controls">
                        <input type="password" name="password" value="" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" >Confirm Password</label>
                    <span class="desc"></span>
                    <div class="controls">
                        <input type="password" name="confirm-password" value="" class="form-control" id="field-21">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" >Address</label>
                    <span class="desc"></span>
                    <div class="controls">
                        <textarea name="user_address" class="form-control autogrow" cols="5" ></textarea>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                <div class="text-left">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn">Cancel</button>
                </div>
            </div>
        </form>
</div>


</div>


    </div>
        </section>



      </div>






<!-- MAIN CONTENT AREA ENDS -->
    </section>
    </section>

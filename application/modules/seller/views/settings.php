<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>
    <div class='col-xs-12'>
        <div class="page-title">
            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">User Profile Settings</h1>
                <!-- PAGE HEADING TAG - END -->                           
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

    <?php if ($this->session->flashdata('errormsg')) { ?>
    <div class="alert alert-danger text-center">
    <?php echo $this->session->flashdata('errormsg'); ?>
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
    <form action ="<?php echo base_url() ?>seller/Settings/userUpdate" method="post" id='settingform' enctype="multipart/form-data">

        <?php foreach ($userinfo as $info) {  ?>
            
        <div class="col-xs-12 col-sm-9 col-md-8">
                        <div class="form-group">
                <label class="form-label" for="field-11662">User Name</label>
                <span class="desc"></span>
                <div class="controls">
                    <input type="text" name="username" value="<?php echo $info['username']; ?>" class="form-control" id="field-11662">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" >Email</label>
                <span class="desc"></span>
                <div class="controls">
                    <input type="text" name="email" value="<?php echo $info['email']; ?>" class="form-control" readonly >
                </div>
            </div>
        
               <div class="form-group">
                <label class="form-label" >User Profile Image</label>
                <span class="desc"></span>
                <div class="controls">
                    <input type="file" class="form-control" name="userfile" >
                </div>
            </div>
           
            <div class="form-group">
                <label class="form-label" >Phone</label>
                <span class="desc"></span>
                <div class="controls">
                    <input type="text" name="phone" value="<?php echo $info['phone']; ?>" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                    <div class="text-left">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn">Cancel</button>
                </div>
            </div>
            <?php } ?>
        </form>
    </div>


    </div>
        </section></div>



<!-- MAIN CONTENT AREA ENDS -->
    </section>
    </section>
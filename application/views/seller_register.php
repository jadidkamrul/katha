<style type="text/css">
  .breadcrumb>li+li:before{
    color: black!important;
  }
</style>
    <section class="page-tittle-bg" style="margin-top:100px;">
        <div class="container">
            <div class="">
                <div class="page-tittle-pro">
                    <h1>Seller Registration</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Seller</a></li>
                        <li class="active">Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<section>
    <div class="container">
    
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

        <div class="col-md-6 col-md-offset-3 border">
            <div class="title row"><center>Registration ( New Seller )</center></div>
            <section class="box ">
                <div class="content-body">
                    <div class="row">
                        <form action ="<?php echo base_url(); ?>/login/seller_add" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label form_lable" for="field-15970">Name</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="text" name="username" class="form-control form_control" id="field-15970">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label form_lable" for="field-15970">Email</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="text" name="email" class="form-control form_control" id="field-15970">
                                    </div>
                                </div>

                              

                                 <div class="form-group">
                                    <label class="form-label form_lable" for="field-15970">Designer Password</label>
                                    <div class="controls">
                                        <input type="password" name="password" class="form-control form_control" id="field-15970">
                                    </div>
                                </div>

                                


                                  <div class="form-group">
                                    <label class="form-label form_lable" for="field-15970">Confirm Password</label>
                                    <div class="controls">
                                        <input type="password" name="confirm-password" class="form-control form_control" id="field-15970">
                                    </div>
                                </div>


                                <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30 row">
                                    <div class="text-left">
                                    <button type="submit" class="btn submit-btn">Registration</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>

    </div>
</section>

<style>
   .border{
        border: 3px solid red;
        padding: 30px;
        border-color: #009999;
    }
    .title{
        background-color: #009999;
        padding: 10px;
        color: #ffffff;
    }
</style>

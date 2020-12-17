<style type="text/css">
  .breadcrumb>li+li:before{
    color: black!important;
  }
</style>
    <section class="page-tittle-bg" style="margin-top:100px;">
        <div class="container">
            <div class="">
                <div class="page-tittle-pro">
                    <h1>Customer Add</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Customer</a></li>
                        <li class="active">Signup | Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<section>
    <div class="container">
      <?php if ($this->session->flashdata('errormsg')) { ?>
    <div class="alert alert-danger text-center">
    <?php echo $this->session->flashdata('errormsg'); ?>
    </div>
    <?php } ?>

        <div class="col-md-4 col-md-offset-1 border">
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

         <div class="col-md-1 hidden-xs">
             <div class="login-devider"><h2>OR</h2></div>
         </div>

        <div class="col-md-4 border ">
                     <div class="title row">Login with User and Password</div>
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

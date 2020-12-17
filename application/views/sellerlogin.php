

<style type="text/css">
  .breadcrumb>li+li:before{
    color: black!important;
  }
</style>
    <section class="page-tittle-bg" style="margin-top:100px;">
        <div class="container">
            <div class="">
                <div class="page-tittle-pro">
                    <h1>Seller Login</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Seller</a></li>
                        <li class="active">Login</li>
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

        <div class="col-md-6 col-md-offset-3 border">
                     <div class="title row">Seller Login with User and Password</div>
            <section class="box ">
                <div class="content-body">
                    <div class="row">
 							<form action="<?php echo base_url(); ?>seller/login/authentication" method="post">
                                <div class="form-group">
                                    <label class="form-label form_lable" for="field-15970">Seller Email</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="email" name="email" class="form-control form_control" id="field-15970">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label form_lable" for="field-15970">Seller Pass</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="password" name="password" class="form-control form_control" id="field-15970">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30 row">
                                    <div class="text-left">
                                    <button type="submit" class="btn submit-btn">Login</button>

                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-6 col-md-offset-4"></br>
        	<a class="btn btn-success btn-lg" href="<?php echo base_url(); ?>login/sellerAdd"><i class="icon-edit icon-white"></i>Click Here For Registration</a>
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

<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START --><h1 class="title">Edit Product</h1><!-- PAGE HEADING TAG - END -->                            </div>

            <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="eco-products.html">Products</a>
                        </li>
                        <li class="active">
                            <strong>Edit Product</strong>
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
        <form action ="<?php echo base_url(); ?>admin/Designparts/edit_design_category" method="post" enctype="multipart/form-data">
                <?php foreach($designcategory as $designcategory): ?>
            <input type="hidden" name="id" value="<?php echo $this->uri->segment(4); ?>">
                <div class="col-xs-12 col-sm-9 col-md-8">
                    <div class="form-group">
                        <label class="form-label" for="field-18157">Category Name</label>
                        <span class="desc"></span>
                        <div class="controls">
                            <input type="text" name="designcatname" class="form-control" id="field-18157" 
                            value="<?php echo $designcategory['designcategoryname'] ?>">
                        </div>
                    </div>


                <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                     	<div class="text-left">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn">Cancel</button>
                    </div>
                </div>
          <?php endforeach; ?>
        </form>
    </div>


    </div>
        </section>


      </div>



<!-- MAIN CONTENT AREA ENDS -->
    </section>
    </section>

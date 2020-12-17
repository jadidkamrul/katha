<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>
    <div class='col-xs-12'>
        <div class="page-title">
            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Add a Product</h1><!-- PAGE HEADING TAG - END -->                           
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="eco-products.html">Products</a>
                    </li>
                    <li class="active">
                        <strong>Add Product</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->
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
        <form action ="<?php echo base_url(); ?>designer/products/add" method="post" enctype="multipart/form-data">
            <div class="col-xs-12 col-sm-9 col-md-8">
                <div class="form-group">
                    <label class="form-label" for="field-18157">Product SKU</label>
                    <span class="desc"></span>
                    <div class="controls">
                        <input type="text" name="sku" class="form-control" id="field-18157">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="field-15970">Product Name</label>
                    <span class="desc"></span>
                    <div class="controls">
                        <input type="text" name="name" class="form-control" id="field-15970">
                    </div>
                </div>


                   <div class="form-group">
                            <label class="form-label" >Category Select</label>
                            <span class="desc"></span>
                                <select class="form-control" name="category">
                                         <option value="">Please Select Category</option>
                                    <?php foreach ($category as $categoryy) { ?>
                                   
                                    <option value="<?php echo $categoryy['cat_id']; ?>" ><?php echo $categoryy['catname']; ?></option>

                                    <?php } ?>
                                </select>
                        </div>


                <div class="form-group">
                    <label class="form-label" >Status</label>
                    <span class="desc"></span>
                        <select class="form-control" name="status">
                            <option value=""></option>
                            <option value="in stock" >In Stock</option>
                            <option value="out of stock">Out of Stock</option>
                        </select>
                </div>

                <div class="form-group">
                    <label class="form-label" >Image</label>
                    <span class="desc"></span>
                                                <div class="controls">
                        <input type="file" class="form-control" name="userfile[]" >

                    </div>
                </div>


                <div class="form-group">
                    <label class="form-label" for="field-122174">Product Price</label>
                    <span class="desc"></span>
                    <div class="controls">
                        <input type="text" name="price" class="form-control" id="field-122174">
                    </div>
                </div>





                <div class="form-group">
                    <label class="form-label" for="field-128053">Quantity</label>
                    <span class="desc"></span>
                    <div class="controls">
                        <input type="text" name="quantity" class="form-control" id="field-128053">
                    </div>
                </div>


                <div class="form-group">
                    <label class="form-label" >Brief</label>
                    <span class="desc">e.g. "Enter any size of text description here"</span>
                    <div class="controls">
                        <textarea name="details" class="form-control autogrow" cols="5" ></textarea>
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
        </section>


      </div>



<!-- MAIN CONTENT AREA ENDS -->
    </section>
    </section>

<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">
            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Update Product</h1><!-- PAGE HEADING TAG - END -->                            
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
                            <strong>Update Product</strong>
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
    <form action ="<?php echo base_url(); ?>admin/products/edit_products" id="productform" method="post" enctype="multipart/form-data">
        <?php foreach($products as $product): ?>
          <input type="hidden" name="id" value="<?php echo $this->uri->segment(4); ?>">
        <div class="col-xs-12 col-sm-9 col-md-8">
                        <div class="form-group">
                <label class="form-label" for="field-18157">Product SKU</label>
                <span class="desc"></span>
                <div class="controls">
                    <input type="text" name="sku" class="form-control" id="field-18157" value="<?php echo $product['product_sku'] ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="field-15970">Product Name</label>
                <span class="desc"></span>
                <div class="controls">
                    <input type="text" name="name" class="form-control" id="field-15970" value="<?php echo $product['product_name'] ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" >Status</label>
                <span class="desc"></span>
                <select class="form-control" name="status">
                    <option value="" disabled=""></option>
                    <option value="in stock" <?php if($product['product_status'] == "in stock"){ echo "selected";} ?> >In Stock</option>
                    <option value="out of stock" <?php if($product['product_status'] == "out of stock"){ echo "selected";} ?>>Out of Stock</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label" >Image</label>
                <span class="desc"></span>
                <div class="controls">
                    <input type="file" class="form-control" name="userfile[]" multiple >
                </div>
            </div>

                <?php 
                    $where=array('p_i_id' => $product['product_id']);
                    $iamge_data=$this->prime_model->get_data('product_images','',$where);
                    foreach ($iamge_data as $product_image) { 
                ?>

            <?php if(!empty($product_image)): ?>

                <div class="controls">
                    <a href="<?php echo base_url(); ?>admin/products/productimgdelete/<?php echo $product_image['img_id']; ?>"> <i class="fa fa-times-circle-o" aria-hidden="true"></i></a>
                <img src="<?php echo base_url(); ?>assets/uploads/<?php echo $product_image['image']; ?>" style="height:50px;50px;">
                <?php endif; } ?>

            <div class="form-group">
                <label class="form-label" for="field-122174">Product Price</label>
                <span class="desc"></span>
                <div class="controls">
                    <input type="text" name="price" class="form-control" id="field-122174" value="<?php echo $product['product_price'] ?>">
                </div>
            </div>


            <div class="form-group">
                <label class="form-label" for="field-128053">Quantity</label>
                <span class="desc"></span>
                <div class="controls">
                    <input type="text" name="quantity" class="form-control" id="field-128053" value="<?php echo $product['product_quantity'] ?>">
                </div>
            </div>


            <div class="form-group">
                <label class="form-label" >Description</label>
                <div class="controls">
                    <textarea name="details" class="form-control autogrow" cols="5" >
                        <?php echo $product['product_desc'] ?></textarea>
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

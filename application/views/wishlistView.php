
<style type="text/css">
  .breadcrumb>li+li:before{
    color: black!important;
  }
</style>
    <section class="page-tittle-bg" style="margin-top:100px;">
        <div class="container">
            <div class="">
                <div class="page-tittle-pro">
                    <h1>Wishlist View</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Wishlist</a></li>
                        <li class="active">View</li>        
                    </ul>
                </div>
            </div>
        </div>
    </section>
        <section>
            <div class="container">
                <div class="row">
                    <h2 class="brands-title wow slideInLeft" style="padding-bottom: 50px;">Wish List</h2>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="FEATURED" style="overflow: hidden;">
                                    <div class="row">
                                    <?php    foreach ($wishdata as  $product) {  ?>
                                        <div class="col-md-3">            
                                            <div class="thumbnail">
                                            <a class="remove-btn" href="<?php echo base_url(); ?>cart/wishdelete/<?php echo $product['product_id'] ; ?>">
                                <i class="fa fa-times" aria-hidden="true"></i></a>
                                                <div class="caption devs-product-caption">
                                                    <br><br><br>
                                                    <div class="devs-cart-function" style="margin-bottom: 10px;">
                                                        <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                                        <a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                        <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="devs-cart-function devs-social-icon" style="margin-top: 10px">
                                                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                        <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                    </div>
                									 <a href="<?php echo base_url(); ?>Home/ProductDetails/<?php echo $product['product_id'] ; ?>" class="btn btn-primary btn-block devs-coston-button" style="margin-top:40%;">BUY NOW</a>
                                                 
                                                </div>
                                                
                                                <?php 
                                                    $where=array('p_i_id' => $product['p_id']);
                                                    $image_data=$this->Home_model->get_data('product_images','',$where);
                                                    foreach ($image_data as $product_image) {}  ?>
                                                    <img style="height: 225px;" src="<?php echo base_url(); ?>assets/uploads/<?php echo $product_image['image']; ?>">
                                                <div class="devs-rating-star">
                                                    <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="product-discription">
                                                    <h2><?php echo $product['product_name']; ?></h2>
                                                    <p>BDT: <span><?php echo $product['product_price']; ?></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php  $product_image['image'] = NULL; } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    
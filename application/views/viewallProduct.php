
  <section class="page-tittle-bg" style="margin-top:100px;">
        <div class="container">
            <div class="">
                <div class="page-tittle-pro">
                    <h1>PRODUCT DETAILS</h1>
                    <ul class="breadcrumb">
                        <li style="font-size: 13px;"><a href="#">Home</a></li>
                        <li style="font-size: 13px;"class="active">View Details</li>        
                    </ul>
                </div>
            </div>
        </div>
    </section>
        <section>
            <div class="container">
                <div role="tabpanel" class="tab-pane active" id="FEATURED" style="overflow: hidden;">
                    <div class="row">
                    <?php    foreach ($allproduct as  $product) {  ?>
                        <div class="col-md-3">            
                            <div class="thumbnail">
                                <div class="caption devs-product-caption">
                                    <br><br><br>
                                    <div class="devs-cart-function" style="margin-bottom: 10px;">
                                        <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                    </div>
                                   <div class="devs-cart-function devs-social-icon" style="margin-top: 10px">

                            <script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+<?php echo base_url(); ?>Home/ProductDetails/<?php echo $product['product_id'] ; ?>+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>

                                <a href="http://www.facebook.com/share.php?u=<?php echo base_url(); ?>Home/ProductDetails/<?php echo $product['product_id'] ; ?>" 
                                onclick="return fbs_click()" target="_blank">
                                 <i class="fa fa-facebook" aria-hidden="true"></i>

                            </a>
                <a class="twitter-share-button"  href="https://twitter.com/intent/tweet?text=<?php echo base_url(); ?>Home/ProductDetails/<?php echo $product['product_id'] ; ?>"  data-size="large"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                            <a onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="https://plus.google.com/share?url=<?php echo base_url(); ?>Home/ProductDetails/<?php echo $product['product_id'] ; ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>

                         </div>
                                     <a href="<?php echo base_url(); ?>Home/ProductDetails/<?php echo $product['product_id'] ; ?>" class="btn btn-primary btn-block devs-coston-button" style="margin-top:40%;">View</a>
                                </div>

                                <?php 
                                    $where=array('p_i_id' => $product['product_id']);
                                    $image_data=$this->Home_model->get_data('product_images','',$where);
                                    foreach ($image_data as $product_image) {
                                    }
                                ?>
                                <img style=" width: 243px; height: 225px; " src="<?php echo base_url(); ?>assets/uploads/<?php echo $product_image['image']; ?>">
                                <div class="devs-rating-star">
                                    <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                </div>
                                <div class="product-discription">
                                    <h2><?php echo $product['product_name']; ?></h2>
                                    <p><span style="color:#009999;">৳</span> : <span><?php echo $product['product_price']; ?></span></p>
                                </div>
                            </div>
                        </div>
                    <?php $product_image['image'] = NULL; } ?>
                    </div>
               
            </div>
        </div>
    </section>
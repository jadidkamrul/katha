
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


 <section>
    <div class="container">
        <div class="row">
            <!-- TH1 -->
            <div class="col-sm-3 col-xs-12">
                <div class="devs-thumbnail">
                    <a href="<?php echo base_url(); ?>Home/categoryAll/<?php echo $category[0]['cat_id']; ?>">
                        <div class="caption">
                            <h1  class="">
                            <?php
                                if (!empty( $category[0]['catname'] ))
                                echo $category[0]['catname'];
                            ?>
                            </h1>
                        </div>
     <img style="height: 415px;" src="<?php echo base_url(); ?>assets/uploads/<?php echo $category[0]['cat_image']; ?>" alt="..." class="img-responsive" >
                    </a>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="devs-thumbnail" style="margin-bottom: 15px;">
                            <a href="<?php echo base_url(); ?>Home/categoryAll/<?php echo $category[1]['cat_id']; ?>" class="">
                                <div class="caption category-small">
                                    <h1 class="">
                                         <?php
                                            if (!empty( $category[1]['catname'] ))
                                            echo $category[1]['catname'];
                                        ?>
                                    </h1>
                                </div>
                                <img src="<?php echo base_url(); ?>assets/uploads/<?php echo $category[1]['cat_image']; ?>" alt="..." class="img-responsive" style="height: 192px; width: 100%;">
                            </a>
                        </div>
                    </div>


                    <div class="col-sm-5" style="margin-bottom: 15px;">
                        <div class="devs-thumbnail">
                            <a href="<?php echo base_url(); ?>Home/categoryAll/<?php echo $category[2]['cat_id']; ?>" class="">
                                <div class="caption category-small">
                                    <h1 class="">
                                        <?php
                                            if (!empty( $category[2]['catname'] ))
                                          echo  $category[2]['catname']; ?>
                                    </h1>
                                </div>
                                <img src="<?php echo base_url(); ?>assets/uploads/<?php echo $category[2]['cat_image']; ?>" alt="..." class="img-responsive" style="height: 192px; width: 100%;">
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-5">

                        <div class="devs-thumbnail" style="margin-top: 15px;">
                            <a href="<?php echo base_url(); ?>Home/categoryAll/<?php echo $category[3]['cat_id']; ?>" class="">
                                <div class="caption category-small">
                                    <h1 class="">
                                        <?php
                                            if (!empty( $category[3]['catname'] ))
                                            echo $category[3]['catname'];
                                        ?>
                                     </h1>
                                </div>
                                <img src="<?php echo base_url(); ?>assets/uploads/<?php echo $category[3]['cat_image']; ?>" alt="..." class="img-responsive" style="height: 192px; width: 100%;">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-7">

                        <div class="devs-thumbnail" style="margin-top: 15px;">
                            <a href="<?php echo base_url(); ?>Home/categoryAll/<?php echo $category[4]['cat_id']; ?>" class="">
                                <div class="caption category-small">
                                    <h1 class="">
                                    <?php
                                        if (!empty( $category[4]['catname'] ))
                                        echo $category[4]['catname'];
                                    ?>
                                    </h1>
                                </div>
                                <img src="<?php echo base_url(); ?>assets/uploads/<?php echo $category[4]['cat_image']; ?>" alt="..." class="img-responsive" style="height: 192px; width: 100%;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="devs-thumbnail">
                    <a href="<?php echo base_url(); ?>Home/categoryAll/<?php echo $category[5]['cat_id']; ?>" class="">
                        <div class="caption">
                            <h1 class="">
                                <?php
                                    if (!empty( $category[5]['catname'] ))
                                    echo $category[5]['catname'];
                                ?>
                            </h1>
                        </div>
                        <img style="height:415px" src="<?php echo base_url(); ?>assets/uploads/<?php echo $category[5]['cat_image']; ?>" alt="..." class="img-responsive">
                    </a>
                </div>
            </div>
            <!-- TH6 -->
        </div><!--/row -->
    </div>
</section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="devs-service_text">
                      <img src="<?php echo base_url(); ?>assets/web/contents/icon/rokek-icon.png" style="height: 30px;">
                        <a href="">
                            FREE SHIPPING
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="devs-service_text">
                        <img src="<?php echo base_url(); ?>assets/web/contents/icon/gear-icon.png" style="height: 30px;">
                        <a href="">
                                24/7 COSTOMER SERVICE
                            </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="devs-service_text">
                        <img src="<?php echo base_url(); ?>assets/web/contents/icon/refresh-icon.png" style="height: 30px;">
                        <a href="">
                                MONEY BACK GUARANTEE!
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section>
            <div class="container">
                <div class="row">
                    <h2 class="brands-title wow slideInLeft" style="padding-bottom: 50px;">PRODUCTS</h2>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="card">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#FEATURED" aria-controls="home" role="tab" data-toggle="tab">FEATURED</a>
                                </li>
                                <li role="presentation">
                                    <a href="#BEST_SELLING" aria-controls="profile" role="tab" data-toggle="tab">BEST SELLING</a>
                                </li>
                                <li role="presentation">
                                    <a href="#TOP_RATED" aria-controls="messages" role="tab" data-toggle="tab">TOP RATED</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="FEATURED" style="overflow: hidden;">
                                    <div class="row">
                                    <?php    foreach ($products as  $product) {  ?>
                                        <div class="col-md-3">
                                            <div class="thumbnail">
                                                <div class="caption devs-product-caption">
                                                    <br><br><br>
                                                    <div class="devs-cart-function" style="margin-bottom: 10px;">
                                                        <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>

                                                        <a href="<?php echo base_url(); ?>cart/wishlist/<?php  echo $product['product_id'];?>">
                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                        </a>
                                                       
                                                        <a href="<?php echo site_url();?>cart/add_to_cart/<?php echo $product['product_id'] ; ?>">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
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

                                                        $id=$product['product_id'];
                                                        $data['rating']  = $this->Home_model->totalrating($id);
                                                        $data['totalrow']  = $this->Home_model->totalrow($id);
                                                        if(!empty($data['rating'][0]->rating && $data['totalrow'][0]->p_id)){
                                                        $star = $data['rating'][0]->rating / $data['totalrow'][0]->p_id;
                                                        }
                                                        else{
                                                            $star= 0;
                                                        }
                                                        $where=array('p_i_id' => $product['product_id']);
                                                        $image_data=$this->Home_model->get_data('product_images','',$where);

                                                        foreach ($image_data as $product_image) {
                                                        }
                                                    ?>

                                     <img style=" width: 243px; height: 225px; " src="<?php echo base_url(); ?>assets/uploads/<?php echo $product_image['image']; ?>">

                                    <div class="devs-rating-star">
                                        <?php
                                            for($i = 1; $i<=$star; $i++) {
                                                if(!empty($star) && $i<=$star){
                                                    echo '<a><i class="fa fa-star" aria-hidden="true"></i></a>';
                                                }
                                            }
                                        ?>
                                    </div>
                                                <div class="product-discription">
                                                    <h2><?php echo $product['product_name']; ?></h2>
                                                    <p><span style="color:#009999;">৳</span> : <span><?php echo $product['product_price']; ?></span></p>
                                                </div>
                                            </div>
                                        </div>

                                    <?php $product_image['image'] = NULL; } ?>

                                    </div>
                                    <a style="float: right;" href="<?php echo base_url(); ?>Home/viewallproduct">View All Product</a>
                                </div>



                                <div role="tabpanel" class="tab-pane" id="BEST_SELLING">
                                    <div class="row">

                                    <?php foreach ($products_sell_count as $sell_count) { ?>


                                        <div class="col-md-3">
                                            <div class="thumbnail">
                                                <div class="caption devs-product-caption">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
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
                                                    <a href="<?php echo base_url(); ?>Home/ProductDetails/<?php echo $sell_count['product_id'] ; ?>" class="btn btn-primary btn-block devs-coston-button" style="margin-top:40%;">View</a>
                                                </div>
                                            <?php
                                                $where=array('p_i_id' => $sell_count['product_id']);
                                                $image_data=$this->Home_model->get_data('product_images','',$where);
                                                foreach ($image_data as $sell_count_image) { }?>
                                <img style="height: 225px;" src="<?php echo base_url(); ?>assets/uploads/<?php if(!empty($sell_count_image['image'])){ echo $sell_count_image['image']; } ?>">
                                                <div class="devs-rating-star">
                                                    <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="product-discription">
                                                    <h2><?php echo $sell_count['product_name']; ?></h2>
                                                    <p><span style="color:#009999;">৳</span>: <span><?php echo $sell_count['product_price']; ?></span></p>
                                                </div>
                                            </div>
                                        </div>

                                    <?php $sell_count_image['image'] =NULL;   }   ?>

                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="TOP_RATED">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="thumbnail">
                                                <div class="caption devs-product-caption">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
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
                                                    <a href="" class="btn btn-primary btn-block devs-coston-button" style="margin-top:40%;">View</a>
                                                </div>
                                                <img src="<?php echo base_url(); ?>assets/web/contents/kantha/kantha (18).jpg" alt="..." class="img-responsive" style="height: 200px;">
                                                <div class="devs-rating-star">
                                                    <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="product-discription">
                                                    <h2>Pink Nakshi Kantha</h2>
                                                    <p><span style="color:#009999;">৳</span>: <span>3000</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3" style="padding-right: 0px;">
                        <div class="top-designer-sec">
                            <h1 class="client-heading">Top Designer</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum</p>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row top-rated-designer-sec">
                            <div class="one-time slider1">
                                <div class="col-md-3">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url(); ?>assets/web/contents/images/costomer.png" class="img-responsive" style="width: 100%;">
                                        <div class="profile-iamge-pra">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url(); ?>assets/web/contents/images/costomer1.png" class="img-responsive" style="width: 100%;">
                                        <div class="profile-iamge-pra">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url(); ?>assets/web/contents/images/11.png" class="img-responsive" style="width: 100%;">
                                        <div class="profile-iamge-pra">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url(); ?>assets/web/contents/images/costomer3.png" class="img-responsive" style="width: 100%;">
                                        <div class="profile-iamge-pra">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url(); ?>assets/web/contents/images/costomer3.png" class="img-responsive"style="width: 100%;">
                                        <div class="profile-iamge-pra">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row top-rated-designer-sec">
                            <div class="two-time slider1">
                            <?php foreach ($top_seller as $top_sellers) { ?>
                                <div class="col-md-3">
                                    <div class="profile-image">
                                        <img style="height: 225px; width: 243px;" src="<?php echo base_url(); ?>assets/uploads/<?php echo $top_sellers['user_image']; ?>">
                                        <div class="profile-iamge-pra">
                                            <p><?php echo $top_sellers['username']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-left: 0px;">
                        <div class="top-designer-sec">
                            <h1 class="client-heading">Top SEllers</h1>
                            <p style="text-align: justify;">We used these types of lists to help us find hot selling items on Kantha World, and then find reliable suppliers who were offering these items at low prices.Whish seller are top for selling in kantha world </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div>
                        <h2 class="brands-title" style="padding-bottom: 50px;">BRANDS</h2>
                    </div>
                    <ul id="flexiselDemo3">
                        <li><img src="<?php echo base_url(); ?>assets/web/contents/logo/blogo1.png" /></li>
                        <li><img src="<?php echo base_url(); ?>assets/web/contents/logo/blogo2.png" /></li>
                        <li><img src="<?php echo base_url(); ?>assets/web/contents/logo/blogo2.png" /></li>
                        <li><img src="<?php echo base_url(); ?>assets/web/contents/logo/blogo2.png" /></li>
                        <li><img src="<?php echo base_url(); ?>assets/web/contents/logo/blogo2.png" /></li>
                        <li><img src="<?php echo base_url(); ?>assets/web/contents/logo/blogo2.png" /></li>
                        <li><img src="<?php echo base_url(); ?>assets/web/contents/logo/blogo2.png" /></li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            <div class="parallax-black">
                <div class="parallax-overlay-black">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                                    <div class="carousel-inner">
                                        <div class="active item">
                                            <div class="profile-circle" ><img src="<?php echo base_url(); ?>assets/web/contents/images/costomer.png" class="img-circle img-responsive"></div>
                                            <blockquote class="blockquote">
                                                <p>111111111111111111111111111111.</p>
                                            </blockquote>
                                        </div>

                                        <div class="item">
                                            <div class="profile-circle" ><img src="<?php echo base_url(); ?>assets/web/contents/images/costomer.png" class="img-circle img-responsive"></div>
                                            <blockquote class="blockquote">
                                                <p>22222222222222222222222222222222222</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

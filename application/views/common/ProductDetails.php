<style type="text/css">
  .breadcrumb>li+li:before{
    color: black!important;
  }
</style>
<?php  foreach ($products as $product) {  ?>  
 <?php
                        $where=array('p_i_id' => $product['product_id']); 
                        $images=$this->Home_model->get_data('product_images','',$where);
                        foreach ($images as $image) {}
                        ?>
<!-- Open Graph data -->
<meta property="og:title" content="<?php echo $product['product_name']; ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo base_url().'Home/ProductDetails/'.$product['product_id'] ?>" />
<meta property="og:image" content="<?php echo base_url(); ?>assets/uploads/<?php echo $image['image']; ?>" />
<meta property="og:description" content="<?php echo word_limiter($product['product_desc'],10); ?>" />


 <?php } ?>

    <script src="<?php echo base_url(); ?>assets/web/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/jquery.picZoomer.js"></script> 
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

                <?php  foreach ($products as $product) {  ?> 
                    <div class="col-md-4">
                        <div class="picZoomer">

                        <?php
                        $where=array('p_i_id' => $product['product_id']); 
                        $images=$this->Home_model->get_data('product_images','',$where);
                        foreach ($images as $image) {}
                        ?>
                        <img src="<?php echo base_url(); ?>assets/uploads/<?php echo $image['image']; ?>" alt="..." class="img-responsive">
                        </div>
                        <ul class="piclist" style="margin-top: 15px;">

                    <?php
                        $where=array('p_i_id' => $product['product_id']); 
                        $images=$this->Home_model->get_data('product_images','',$where);
                        foreach ($images as $image){ ?>

    <li><img src="<?php echo base_url(); ?>assets/uploads/<?php echo $image['image']; ?>" alt="" class="img-responsive"></li>

                            <?php } ?>
                        </ul>
                    </div>

                    <div class="col-md-8">
                        <div class="row">
                            <div class="devs-product-name">
                                <h1><?php echo $product['product_name']; ?></h1>
                                <h2><?php echo $product['product_name']; ?></h2>
                            </div>
                            <hr>
                            <div class="card">


                                <ul class="nav nav-tabs single-product-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#description" aria-controls="home" role="tab" data-toggle="tab">DESCRIPTION</a></li>
                                    <li role="presentation"><a href="#REVIEW" aria-controls="messages" role="tab" data-toggle="tab">REVIEW</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="description" style="overflow: hidden;">
                                        <div>

                                            <p class="description-pra"><?php echo $product['product_desc']; ?>
                                            </p>
                                            <div class="rating">
                                                <div class="stars">

                                     <?php
                                      for($i = 1; $i<=$star;$i++) {
                                      
                                      if(!empty($star) && $i<=$star) {
                                      echo '<span class="fa fa-star"></span>';
                                      }
                                  }
                                      ?>
                                                    

                                                    <span class="review-no">reviews</span>
                                                </div>
                                            </div>

                                             <h4 class="curent-price">Price : 
                                                    <span><?php echo $product['product_price']; ?></span>
                                             </h4>
                                            <hr>


<a href="https://twitter.com/share?
  url=gsdfgsds
  related=twitterapi%2Ctwitter&
  hashtags=example%2Cdemo&
  text=custom%20share%20text">
Tweet
</a>





                                           <!--  <h5 class="sizes">sizes:
                                                <span class="size" data-toggle="tooltip" title="small">s</span>
                                                <span class="size" data-toggle="tooltip" title="medium">m</span>
                                                <span class="size" data-toggle="tooltip" title="large">l</span>
                                                <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                                            </h5> -->

                                           <!--  <h5 class="colors">colors:
                                                <span class="color orange" data-toggle="tooltip" title="Not In store"></span>
                                                <span class="color green"></span>
                                                <span class="color blue"></span>
                                            </h5> -->
                                            <hr>
                                            <div class="action">
                                                <div style="float: left;" class="cart">
                                                    <form action="<?php echo base_url(); ?>Cart/add_to_cart" method="post">
                                                        <input type="hidden" name="id" value="<?php echo $product['product_id']; ?>">
                                                        <input type="hidden" name="name" value="<?php echo $product['product_name']; ?>">
                                                        <input type="hidden" name="price" value="<?php echo $product['product_price']; ?>">
                                                        <input style="width: 40px; height: 33px;" type="number" name="quantity" value="1">

                                                        <input type="submit" name="action" value="Add to Cart" class="fg-button teal add-to-cart btn btn-default">
                                                    </form>
                                                </div>
                                                <div style=" padding-left:20px; padding-top:5px;float: left;" class="wish">
                                                   <form action="<?php echo base_url(); ?>Cart/Wishlist" method="post">
                                                    <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
                                                        <button style="background-color: #009999; margin-top: -4px; color:white; height: 32px;" type="submit">
                                                            <span class="fa fa-heart"></span>
                                                        </button> 
                                                    </form>
                                                </div>
                                                
                                       
                                            

                                            </div>
                                        </div>
                                    </div>





                                



    
      <div class="container">
      <div class="row">

                <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                  <a class="addthis_button_preferred_1"></a>
                  <a class="addthis_button_preferred_2"></a>
                  <a class="addthis_button_preferred_3"></a>
                  <a class="addthis_button_preferred_4"></a>
                  <a class="addthis_button_compact"></a>
                  <a class="addthis_counter addthis_bubble_style"></a>
                </div>
                
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57c56940584867a5"></script>



      </div>

      <div style="background-color:red; height:3px width:100; padding:3px"></div>
    </div>  








                        
                                    <div role="tabpanel" class="tab-pane" id="REVIEW">
                                        <div class="reviews-tab-desc">
                                            <!-- single comments -->
                                            <div class="media mt-30">
                                               
                                                 <!-- single comments -->
                                            <div class="media mt-30">
                                             
                                          

                                                <div class="media-body">
                                                <?php foreach ($customer_coment  as  $comments) { ?>
                                                    <div class="clearfix">
                                                        <div class="name-commenter pull-left">
                                                            <h6 class="media-heading">
                                                            <a href="#"> <?php echo $comments['name']; ?>
                                                                
                                                            </a></h6>

                                                             <p class="mb-10">

                                                             <?php 


                                                             $date=date_create( $comments['date']);
                                                            echo date_format($date,"d/m/Y h:i:s a");

                                                         ?>
                                                                 



                                                             </p>
                                                        </div>
                                                       <div class="pull-right">
                                                            <ul class="reply-delate">
                                                                <li><a href="#">Delate</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <p class="mb-0"> <?php echo $comments['coment']; ?></p>
                                               <?php  } ?>
                                                </div>
                                            </div>
                                                <div class="media-body">
                                                    <div class="clearfix">
                                                        <div class="name-commenter pull-left">
                                                            <div class="col-xs-12 col-sm-12 col-md-12 review-form-container-box">
                                                            <form method="post" action="<?php echo base_url(); ?>Home/reviewadd">
                                                              <input type="hidden" name="p_id" value="<?php echo $product['product_id']; ?>">
                                                                <div class="review-form-container">
                                                                    <div class="review-form-wrapper">
                                                                        <div class="review-form-title">Rating</div>
                                                                        <div class="rating">
                                                                            <div class="stars">
                                                                            <span class="star-rating star-5">
                                                                                <input type="radio" name="rating" value="1"><i></i>
                                                                                <input type="radio" name="rating" value="2"><i></i>
                                                                                <input type="radio" name="rating" value="3"><i></i>
                                                                                <input type="radio" name="rating" value="4"><i></i>
                                                                                <input type="radio" name="rating" value="5"><i></i>
                                                                            </span>
                                                                                <span class="review-no"> </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="review-form-wrapper">
                                                                         <div class="review-form-title" style="line-height: 50px;">Review</div>
                                                                         <div class="review-form-input">
                                                                            <textarea name="comment" rows="2" cols="70" id="comment" placeholder="Put Your Review Here"></textarea>
                                                                         </div>
                                                                    </div>
                                                                    <div class="review-form-wrapper" style="height: 60px;">
                                                                         <span class="review-button"></span>

                                            <?php                                          
                                                $customer_data = $this->session->customer_data['current_user_id'];
                                                 $data = count($customer_data);
                                               ?>
                                                   
                                                
                                                                    <input type="submit" name="submit">
                                                                    </div>

                                                                </div>
                                                            </form>
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
                    </div>  
               
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <h2 class="brands-title wow slideInLeft" data-wow-duration="2s" data-wow-delay="5s" style="padding-bottom: 50px; visibility: visible; animation-duration: 2s; animation-delay: 5s; animation-name: slideInLeft;">
                    RELATED PRODUCT</h2>
                </div>
                <div class="row">
        <?php 
            $catid = $product['p_category']; 
            $where=array('p_category' => $catid);
           $relatedproduct =  $this->Home_model->get_data('products','product_id',$where,4);
           //  echo '<pre>';
           // print_r($related);
           // die;
        ?>
        <?php foreach ($relatedproduct as $relatedproducts) {  ?>
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
                         <a href="<?php echo base_url() ?>Home/ProductDetails/<?php echo  $relatedproducts['product_id']; ?>" class="btn btn-primary btn-block devs-coston-button" style="margin-top:35%;">View</a>
                            </div>

                            <?php
                        $where=array('p_i_id' => $relatedproducts['product_id']); 
                        $images=$this->Home_model->get_data('product_images','',$where);

                        foreach ($images as $image) {
                        
                        }


                        ?>
                            <img src="<?php echo base_url(); ?>assets/uploads/<?php echo  $image['image']; ?>" alt="..." class="img-responsive" style="height: 200px;">
                            <div class="devs-rating-star">
                                <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                <a><i class="fa fa-star" aria-hidden="true"></i></a>
                                <a><i class="fa fa-star-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="product-discription">
                                <h2><?php echo  $relatedproducts['product_name']; ?></h2>
                                <p>BDT: <span><?php echo  $relatedproducts['product_price']; ?></span></p>
                            </div>
                        </div>
                    </div>

    <?php } ?>
    <?php } ?>
                </div>
            </div>
        </section>

<style type="text/css">
  .star-rating {
  font-size: 0;
  white-space: nowrap;
  display: inline-block;
  /* width: 250px; remove this */
  height: 25px;
  overflow: hidden;
  position: relative;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating i {
  opacity: 0;
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  /* width: 20%; remove this */
  z-index: 1;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating input {
  -moz-appearance: none;
  -webkit-appearance: none;
  opacity: 0;
  display: inline-block;
  /* width: 20%; remove this */
  height: 100%;
  margin: 0;
  padding: 0;
  z-index: 2;
  position: relative;
}
.star-rating input:hover + i,
.star-rating input:checked + i {
  opacity: 1;
}
.star-rating i ~ i {
  width: 40%;
}
.star-rating i ~ i ~ i {
  width: 60%;
}
.star-rating i ~ i ~ i ~ i {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i {
  width: 100%;
}
::after,
::before {
  height: 100%;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  text-align: center;
  vertical-align: middle;
}

.star-rating.star-5 {width: 125px;}
.star-rating.star-5 input,
.star-rating.star-5 i {width: 20%;}
.star-rating.star-5 i ~ i {width: 40%;}
.star-rating.star-5 i ~ i ~ i {width: 60%;}
.star-rating.star-5 i ~ i ~ i ~ i {width: 80%;}
.star-rating.star-5 i ~ i ~ i ~ i ~i {width: 100%;}
</style>

   <script type="text/javascript">
        $(function() {
            $('.picZoomer').picZoomer();
            $('.piclist li').on('click', function(event) {
                var $pic = $(this).find('img');
                $('.picZoomer-pic').attr('src', $pic.attr('src'));
            });
        });

    </script>


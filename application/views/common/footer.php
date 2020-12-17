<section>
 <div id="footer-back-image">
            <footer id="fotter">
                <div class="container">
                    <div class="col-md-12">

                        <div class="col-md-3">
                            <div class="footer_link_heading">
                                <h3 class="animated wow slideInRight">Kantha World</h3>
                            </div>
                            <div class="subscribation">
                                <p>Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.
                                    Curabitur eleifend ornare
                                    est eu ullamcorper.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer_link_heading">
                                <h3>CUSTOMER SERVICE</h3>
                            </div>
                            <div class="subscribation">
                                <p>+00000000</p>
                                <p>+1234567</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer_link_heading">
                                <h3> OUR PRODUCT</h3>
                            </div>
                            <div class="reasources_list">
                                <ul>
                                    <li><a href=""> <i class="fa fa-angle-right" aria-hidden="true"></i> NAKSHI KANTHA</a></li>
                                    <li><a href=""> <i class="fa fa-angle-right" aria-hidden="true"></i> PLAN KANTHA</a></li>
                                    <li><a href=""> <i class="fa fa-angle-right" aria-hidden="true"></i> CUSTOM DESIGN</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="">
                                <div class="footer_link_heading">
                                    <h3>NEWSLETTER</h3>
                                </div>
                                <div class="subscribation">
                                    <div class="subscribe" style="height: 43px;">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input class="form-control" style="height: 31px;" type="text" name="search" placeholder="Search" required/>
                                                <span class="input-group-btn">
                                                    <button class="btn submit-btn" type="submit" style="background: #009999;color: #fff;font-size: 12px;"><span style="margin-left:10px;">SUBMIT</span></button>
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="<?php echo base_url(); ?>assets/web/contents/images/payment.png">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </footer>
           
 
 <footer class="sticky_footer">
                <div class="container">
                    <div class="col-md-12">
                        <div class="copyright_box" style="margin: 0px 15px;">
                            <p class="copyright">Copyright © 2016 <b style="color: #009999">KANTHA WORLD</b> <span class="pull-right">Develpoed by <a>DevsZone</a></span></p> 
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!--MODAL-->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
</section>

        <script src="<?php echo base_url(); ?>assets/web/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/web/vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/web/js/jquery.picZoomer.js"></script>
        <script src="<?php echo base_url(); ?>assets/web/slider/js/jquery.fractionslider.js"></script>
        <script src="<?php echo base_url(); ?>assets/web/slider/js/main.js"></script>
        <script src="<?php echo base_url(); ?>assets/web/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/web/js/jqBootstrapValidation.js"></script>
        <script src="<?php echo base_url(); ?>assets/web/slick/slick.js"></script>
        <script src="<?php echo base_url(); ?>assets/web/js/jquery.flexisel.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/tshirt/js/fabric.js"></script>
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/tshirt/js/jquery.miniColors.min.js"></script>

	
	
        <style type="text/css">
            #footer-back-image {
    background-image: url(<?php echo base_url(); ?>assets/images/fotter-corner.png);
    background-repeat: no-repeat;
    overflow: hidden;
    padding: 20px;
        
}
</style>




        <script>
            new WOW().init();
        </script>
       

     

        
        <script type="text/javascript">
            
            $(document).ready(function() {
                $("[rel='tooltip']").tooltip();

                $('.thumbnail').hover(
                        function() {
                            $(this).find('.caption').slideDown(250); //.fadeIn(250)
                        },
                        function() {
                            $(this).find('.caption').slideUp(250); //.fadeOut(205)
                        }
                );
            });
            $(document).on('ready', function() {
                $('.one-time').slick({
                    dots: true,
                    infinite: true,
                    autoplay: true,
                    speed: 300,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]
                });

                $('.two-time').slick({
                    dots: true,
                    infinite: true,
                    autoplay: true,
                    speed: 300,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]

                });



            });
        </script>

        <script type="text/javascript">

            $(document).ready(function() {
                $("[rel='tooltip']").tooltip();
                $('.devs-thumbnail').hover(
                        function() {
                            $(this).find('.caption').slideDown(250); //.fadeIn(250)
                        },
                        function() {
                            $(this).find('.caption').slideUp(250); //.fadeOut(205)
                        }
                );
            });
        </script>
        <script>
            function buttonUp() {
                var valux = $('.sb-search-input').val();
                valux = $.trim(valux).length;
                if (valux !== 0) {
                    $('.sb-search-submit').css('z-index', '99');
                } else {
                    $('.sb-search-input').val('');
                    $('.sb-search-submit').css('z-index', '-999');
                }
            }

            $(document).ready(function() {
                var submitIcon = $('.sb-icon-search');
                var submitInput = $('.sb-search-input');
                var searchBox = $('.sb-search');
                var isOpen = false;

                $(document).mouseup(function() {
                    if (isOpen == true) {
                        submitInput.val('');
                        $('.sb-search-submit').css('z-index', '-999');
                        submitIcon.click();
                    }
                });

                submitIcon.mouseup(function() {
                    return false;
                });

                searchBox.mouseup(function() {
                    return false;
                });

                submitIcon.click(function() {
                    if (isOpen == false) {
                        searchBox.addClass('sb-search-open');
                        isOpen = true;
                    } else {
                        searchBox.removeClass('sb-search-open');
                        isOpen = false;
                    }
                });

            });

            $(window).load(function() {
                $("#flexiselDemo3").flexisel({
                    visibleItems: 6,
                    itemsToScroll: 1,
                    animationSpeed: 200,
                    infinite: true,
                    navigationTargetSelector: null,
                    autoPlay: {
                        enable: true,
                        interval: 5000,
                        pauseOnHover: true
                    },
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 3,
                            itemsToScroll: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2,
                            itemsToScroll: 2
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3,
                            itemsToScroll: 3
                        }
                    }
                });
            });
        </script>
    </body>
</html>

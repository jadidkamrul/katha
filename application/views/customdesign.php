<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/tshirt/css/jquery.miniColors.css" />
<style type="text/css">
    #image { display: none; }
    .footer {padding: 70px 0;margin-top: 70px;border-top: 1px solid #E5E5E5;background-color: whiteSmoke;}      
    body {padding-top: 60px;          }
    .color-preview {border: 1px solid #CCC;margin: 2px;zoom: 1;vertical-align: top;display: inline-block;
                    cursor: pointer;overflow: hidden;width: 20px;height: 20px;}
    .rotate { -webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);-o-transform:rotate(90deg);-ms-transform:rotate(90deg);       
    }.Arial{font-family:"Arial";}
    .Helvetica{font-family:"Helvetica";}
    .MyriadPro{font-family:"Myriad Pro";}
    .Delicious{font-family:"Delicious";}
    .Verdana{font-family:"Verdana";}
    .Georgia{font-family:"Georgia";}
    .Courier{font-family:"Courier";}
    .ComicSansMS{font-family:"Comic Sans MS";}
    .Impact{font-family:"Impact";}
    .Monaco{font-family:"Monaco";}
    .Optima{font-family:"Optima";}
    .HoeflerText{font-family:"Hoefler Text";}
    .Plaster{font-family:"Plaster";}
    .Engagement{font-family:"Engagement";}
    .fulll_con{
        background:white;
        display:block;
        text-align:center;
    }
    .bg-info{
        background-color:#009999!important;
    }
    .bg-info button{
        background-color:#009999!important;
        color:white;
    }
</style>

<body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">
    <!-- Navbar
      ================================================== -->
    <div class="preview container fulll_con">
        <section id="typography">

            <!-- Headings & Paragraph Copy -->
            <div class="row">     
                <div class="col-md-4">
                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Katha Parts</a> </li>    <p style="padding: 23px; text-align: right;">  <a href="#" id="toggle_fullscreen">Toggle Fullscreen</a>   </p>        
                            <!--  <li><a href="#tab2" data-toggle="tab">Gravatar</a></li> -->

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <div class="well">
                                    <select class="form-control">                        
                                        <option value="1" selected="selected">Select a Part  </option>
                                        <?php foreach ($designs as $design) { ?>
                                            <option value="<?php echo $design['d_id']; ?>">
                                                <?php echo $design['designcategoryname']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>                     
                                </div>



                                <!--div class="well">
                                          <ul class="nav">
                                                  <li class="color-preview" title="White" style="background-color:#ffffff;"></li>
                                                  <li class="color-preview" title="Dark Heather" style="background-color:#616161;"></li>
                                                  <li class="color-preview" title="Gray" style="background-color:#f0f0f0;"></li>
                                                  <li class="color-preview" title="Charcoal" style="background-color:#5b5b5b;"></li>
                                                  <li class="color-preview" title="Black" style="background-color:#222222;"></li>
                                                  <li class="color-preview" title="Heather Orange" style="background-color:#fc8d74;"></li>
                                                  <li class="color-preview" title="Heather Dark Chocolate" style="background-color:#432d26;"></li>
                                                  <li class="color-preview" title="Salmon" style="background-color:#eead91;"></li>
                                                  <li class="color-preview" title="Chesnut" style="background-color:#806355;"></li>
                                          </ul>
                                  </div-->  


                                <div id="res" style="height:500px;overflow-y:scroll;" class="well">

                                    .



                                </div>  


                            </div>           



                        </div>
                    </div>        
                </div>    
                <div class="col-md-7">        
                    <div align="center" style="min-height: 32px;">
                        <div class="clearfix">
                            <div class="btn-group inline pull-left" id="texteditor" style="display:none">             
                                <button id="font-family" class="btn dropdown-toggle" data-toggle="dropdown" title="Font Style"><i class="icon-font" style="width:19px;height:19px;"></i></button>                         
                                <ul class="dropdown-menu" role="menu" aria-labelledby="font-family-X">
                                    <li><a tabindex="-1" href="#" onclick="setFont('Arial');" class="Arial">Arial</a></li>
                                    <li><a tabindex="-1" href="#" onclick="setFont('Helvetica');" class="Helvetica">Helvetica</a></li>
                                    <li><a tabindex="-1" href="#" onclick="setFont('Myriad Pro');" class="MyriadPro">Myriad Pro</a></li>
                                    <li><a tabindex="-1" href="#" onclick="setFont('Delicious');" class="Delicious">Delicious</a></li>
                                    <li><a tabindex="-1" href="#" onclick="setFont('Verdana');" class="Verdana">Verdana</a></li>
                                    <li><a tabindex="-1" href="#" onclick="setFont('Georgia');" class="Georgia">Georgia</a></li>
                                    <li><a tabindex="-1" href="#" onclick="setFont('Courier');" class="Courier">Courier</a></li>
                                    <li><a tabindex="-1" href="#" onclick="setFont('Comic Sans MS');" class="ComicSansMS">Comic Sans MS</a></li>
                                    <li><a tabindex="-1" href="#" onclick="setFont('Impact');" class="Impact">Impact</a></li>
                                    <li><a tabindex="-1" href="#" onclick="setFont('Monaco');" class="Monaco">Monaco</a></li>
                                    <li><a tabindex="-1" href="#" onclick="setFont('Optima');" class="Optima">Optima</a></li>
                                    <li><a tabindex="-1" href="#" onclick="setFont('Hoefler Text');" class="Hoefler Text">Hoefler Text</a></li>
                                    <li><a tabindex="-1" href="#" onclick="setFont('Plaster');" class="Plaster">Plaster</a></li>
                                    <li><a tabindex="-1" href="#" onclick="setFont('Engagement');" class="Engagement">Engagement</a></li>
                                </ul>
                                <button id="text-bold" class="btn" data-original-title="Bold"><img src="<?php echo base_url(); ?>assets/tshirt/img/font_bold.png" height="" width=""></button>
                                <button id="text-italic" class="btn" data-original-title="Italic"><img src="<?php echo base_url(); ?>assets/tshirt/img/font_italic.png" height="" width=""></button>
                                <button id="text-strike" class="btn" title="Strike" style=""><img src="<?php echo base_url(); ?>assets/tshirt/img/font_strikethrough.png" height="" width=""></button>
                                <button id="text-underline" class="btn" title="Underline" style="">
                                    <img src="<?php echo base_url(); ?>assets/tshirt/img/font_underline.png"></button>
                                <a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Color"><input type="hidden" id="text-fontcolor" class="color-picker" size="7" value="#000000"></a>
                                <a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Border Color"><input type="hidden" id="text-strokecolor" class="color-picker" size="7" value="#000000"></a>
                                  <!--- Background <input type="hidden" id="text-bgcolor" class="color-picker" size="7" value="#ffffff"> --->
                            </div>                
                            <div class="pull-right" align="" id="imageeditor" style="display:none">
                                <div class="btn-group bg-info"  >                         
                                    <button class="btn" id="bring-to-front" title="Bring to Front"><i class="fa fa-fast-backward rotate" style="height:19px;"></i></button>
                                    <button class="btn" id="send-to-back" title="Send to Back"><i class="fa fa-fast-forward rotate" style="height:19px;"></i></button>
                                    <button id="flip" type="button" class="btn" title="Show Back View"><i class="fa fa-retweet" style="height:19px;"></i></button>
                                    <button id="remove-selected" class="btn" title="Delete selected item"><i class="fa fa-trash" style="height:19px;"></i></button>
                                </div>
                            </div>        
                        </div>                        
                    </div>                
                    <!--  EDITOR      --> 

                    <div id="shirtDiv" class="page" style="width: 100%; height: 650px; position: relative; background-color: rgb(255, 255, 255);">

                        <div  id="drawingArea" style="position: absolute; margin:30px 0; width:  100%;  height: 603px; border: 2px dotted #009999;">  




                            <!--  this  style  for drag drop area -->
                            <canvas height="603px" width="640px" id="tcanvas"  class="hover" style="-webkit-user-select: none;">

                            </canvas>
                        </div>
                    </div>



                    <div  class="btn-group pull-right">
                        <button type="submit" class="btn btn-danger dropdown-toggle btn-md"  aria-haspopup="true" onclick="save()" aria-expanded="false">Order Design
                        </button>
                    </div>



                    <!--          <div id="shirtBack" class="page" style="width: 530px; height: 630px; position: relative; background-color: rgb(255, 255, 255); display:none;">-->
                    <!--            <img src="img/crew_back.png"></img>-->
                    <!--            <div id="drawingArea" style="position: absolute;top: 100px;left: 160px;z-index: 10;width: 200px;height: 400px;">          -->
                    <!--              <canvas id="backCanvas" width=200 height="400" class="hover" style="-webkit-user-select: none;"></canvas>-->
                    <!--            </div>-->
                    <!--          </div>            -->

                    <!--  /EDITOR   -->
                </div>


                <div class="col-md-1">


                </div>



            </div>

        </section>
    </div><!-- /container -->
    <script src="<?php echo base_url(); ?>assets/web/vendor/jquery/jquery.min.js"></script> 
    <script type="text/javascript">

                   $(document).ready(function () {
                       $("[rel='tooltip']").tooltip();
                       $('.devs-thumbnail').hover(
                               function () {
                                   $(this).find('.caption').slideDown(250); //.fadeIn(250)
                               },
                               function () {
                                   $(this).find('.caption').slideUp(250); //.fadeOut(205)
                               }
                       );
                   });


                   $('select').on('change', function () {
                       var id = this.value;
                       $("#avatarlist").html('');
                       $.ajax({
                           type: "GET",
                           contentType: "application/json; charset=utf-8",
                           dataType: "JSON",
                           data: {id: id},
                           url: '<?php echo base_url(); ?>customdesign/catdata',
                           success: function (response) {


                               var picture = ''
                               $.each(response, function (index, value) {


                                   picture = '<div id="avatarlist"><img style="cursor:pointer;" class="img-polaroid img-responsive" src="<?php echo base_url(); ?>assets/uploads/' + value.image + ' "></div>';

                                   $("#res").append(picture);
                               })

                           }
                       });
                   })



                   function save() {
                       var canvas = document.getElementById("tcanvas");
                       var img = canvas.toDataURL("image/png");
                       $.ajax({
                           type: "POST",
                           data: {img: img},
                           url: "<?php echo site_url('customdesign/order_design') ?>",
                           dataType: "HTML",
                           success: function (data)
                           {
                               $("#typography").html(data);

                           },
                           error: function (jqXHR, textStatus, errorThrown)
                           {
                               alert('Error deleting data');
                           }
                       });

                   }
                   ;




                   $('#toggle_fullscreen').on('click', function () {

                       if (
                               document.fullscreenElement ||
                               document.webkitFullscreenElement ||
                               document.mozFullScreenElement ||
                               document.msFullscreenElement
                               ) {
                           if (document.exitFullscreen) {
                               document.exitFullscreen();
                           } else if (document.mozCancelFullScreen) {
                               document.mozCancelFullScreen();
                           } else if (document.webkitExitFullscreen) {
                               document.webkitExitFullscreen();
                           } else if (document.msExitFullscreen) {
                               document.msExitFullscreen();
                           }
                       } else {
                           element = $('.fulll_con').get(0);
                           if (element.requestFullscreen) {
                               element.requestFullscreen();
                           } else if (element.mozRequestFullScreen) {
                               element.mozRequestFullScreen();
                           } else if (element.webkitRequestFullscreen) {
                               element.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                           } else if (element.msRequestFullscreen) {
                               element.msRequestFullscreen();
                           }
                       }
                   });


    </script>   

 <script type="text/javascript" src="<?php echo base_url(); ?>assets/tshirt/js/tshirtEditor.js"></script>

</body>

<!------   custom  design   js  -->




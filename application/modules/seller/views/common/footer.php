</div>
    <!-- END CONTAINER -->
<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


<!-- CORE JS FRAMEWORK - START -->
<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>
<script>window.jQuery||document.write('<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"><\/script>');</script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datepicker/js/datepicker.js" type="text/javascript"></script> <script src="../assets/plugins/autosize/autosize.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
<!-- CORE JS FRAMEWORK - END -->


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


<!-- CORE TEMPLATE JS - START -->
<script src="<?php echo base_url(); ?>assets/js/scripts.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS - END -->

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>


<script type="text/javascript">
    $(document).ready(function () {

        $('#productform').validate({
            rules: {
                sku: { required: true, },
                name: {  required: true, minlength: 5 },
                category: { required: true, },
                status: { required: true, },
                price: { required: true, },
                quantity: { required: true, }
            },
            submitHandler: function (form) { 
                return true; 
            }
        });

         $('#settingform').validate({
            rules: {
                userfile: { required: true,},
            },
            submitHandler: function (form) {
                return true;
            }
         });

    });
</script>




<!-- General section box modal start -->
<div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog animated bounceInDown">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Section Settings</h4>
            </div>
            <div class="modal-body">

                Body goes here...

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                <button class="btn btn-success" type="button">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->
</body>
</html>

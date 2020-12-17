<section>
    <div class="container">
        <div class="col-xs-3"></div>
        <div class="col-xs-6">
            <section class="box ">
                <div class="content-body">
                    <div class="row">
                        <form action ="<?php echo base_url(); ?>Customer/customer_login_data_check" method="post" enctype="multipart/form-data">
                            <div class="col-xs-12 col-sm-9 col-md-8">
                            
                                <div class="form-group">
                                    <label class="form-label" for="field-15970">Customer Email</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="email" name="cemail" class="form-control" id="field-15970">
                                    </div>
                                </div>
                                   
                                <div class="form-group">
                                    <label class="form-label" for="field-15970">Customer Pass</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="password" name="cpasword" class="form-control" id="field-15970">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                                    <div class="text-left">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>


        
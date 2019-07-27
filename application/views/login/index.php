<!doctype html>
    <html>
        <head>
    
            <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
          
            <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
        
            <link href="<?php echo base_url('assets/css/plugins/morris/morris-0.4.3.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/plugins/timeline/timeline.css');?>" rel="stylesheet">
        
            
            <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
            <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
            <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>"></script>
            <script>
                    tinymce.init({selector:'textarea'});
            </script>
        </head>
        <body>
            <!--<img src="<?php echo base_url('assets/img/3.jpg');?>" height="140px" width="100%">-->
            <!-- Static navbar -->
            <div class="navbar navbar-default" style="background:rgba(25,25,112,0.1);">
                <div class="container">
                <div class="navbar-header" style="color: grey; ">
                    <h3><i class="glyphicon glyphicon-home" ></i></h3>
                </div>
                </div>
            </div>

            
            <div class="container" style="max-width: 60%; border-width: 2px; border-style: solid; color: #FFF; background:rgba(25,25,112,0.1); padding-right: 5% ">
                
                <div class="row">
                    
                    <div class="col-md-6 " style="text-align: center;">
                        <div style="margin-top: 60px">
                       
                          
                         </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 20px" >
                        <div class="panel panel-default" style="min-width: 325px">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-lock"></span> Login
                            </div>
                            <form action="<?php echo base_url('login/proses'); ?>" method="post">
                            <div class="panel-body" style="width: 100%; margin-left: 7.5%" >
                                <div style="width: 90%">
                                <?php echo $this->session->flashdata('notification');?>
                                </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">
                                            Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nip" class="form-control" id="inputEmail3" placeholder="username" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">
                                            Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <div class="checkbox">
                                                <label style="color: black;">
                                                    <input type="checkbox"/>
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group last">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-success btn-sm">
                                                Sign in</button>
                                                 <button type="reset" class="btn btn-default btn-sm">
                                                Reset</button>
                                        </div>
                                    </div>
                                                </div>
                            <div class="panel-footer">
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    
            
            
            <!-- Core Scripts - Include with every page -->
            <script src="<?php echo base_url('assets/js/holder.js');?>"></script>
    
            <script src="<?php echo base_url('assets/js/application.js');?>"></script>
            <script src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"></script>
            <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
            <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js');?>"></script>
            <script src="<?php echo base_url('assets/js/plugins/morris/raphael-2.1.0.min.js');?>"></script>
            <script src="<?php echo base_url('assets/js/plugins/morris/morris.js');?>"></script>
            <script src="<?php echo base_url('assets/js/sb-admin.js');?>"></script>
            <script src="<?php echo base_url('assets/js/demo/dashboard-demo.js');?>"></script>   
        </body>
    </html>
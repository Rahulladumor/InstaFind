<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Modern | Login - Sign up</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url();?>assets/business/assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>assets/business/assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>assets/business/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/business/assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/business/assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/> 
        <link href="<?php echo base_url();?>assets/business/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>  
        <link href="<?php echo base_url();?>assets/business/assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>  
        <link href="<?php echo base_url();?>assets/business/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/business/assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/business/assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/business/assets/plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css"/>    
        
        <!-- Theme Styles -->
        <link href="<?php echo base_url();?>assets/business/assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/business/assets/css/themes/white.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/business/assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="<?php echo base_url();?>assets/business/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="<?php echo base_url();?>assets/business/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
        <body class="page-forgot">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="index.html" class="logo-name text-lg text-center">Modern</a>
                                <p class="text-center m-t-md">Enter your e-mail address below to reset your password</p>
                                <form class="m-t-md" method="POST" id="forgotform" >
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    <a href="<?php echo site_url("business/owner_con/index"); ?>" class="btn btn-default btn-block m-t-md">Back</a>
                                </form>
                                <p class="text-center m-t-xs text-sm">2015 &copy; Modern by Steelcoders.</p>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <!-- Javascripts -->
        <script src="<?php echo base_url();?>assets/business/assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url();?>assets/business/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url();?>assets/business/assets/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo base_url();?>assets/business/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url();?>assets/business/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/business/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url();?>assets/business/assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url();?>assets/business/assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url();?>assets/business/assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="<?php echo base_url();?>assets/business/assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="<?php echo base_url();?>assets/business/assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo base_url();?>assets/business/assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="<?php echo base_url();?>assets/business/plugins/dropzone/dropzone.min.js"></script>
        <script src="<?php echo base_url();?>assets/business/assets/js/modern.min.js"></script>
        <script src="<?php echo base_url('assets/admin')?>/assets/js/jquery-3.2.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $(document).on("submit","#forgotform",function(e){
                    e.preventDefault();
                    var email=$("#email").val();
                    $.ajax({
                        url: '<?php echo site_url("business/owner_con/forgot_email"); ?>',
                        type: "POST",
                        data: {'email':email},
                        success: function(data){
                            alert(data);
                            window.location.reload();
                        },
                        error: function(){
                            alert("error....");
                        }
                    });
                });
            });
        </script>
    </body>
</html>
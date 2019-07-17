<!DOCTYPE html>
<html>
    <head>
        
         <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>assets/cityadmin/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->           
        
    </head>
       <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <strong style="color:white;    font-size: 20px;text-align:center; "><?php echo @$data; ?></strong>
                <div class="login-body">

                    <div class="login-title"><strong>Forgot</strong> to your account</div>
                        
                        <form class="m-t-md" method="POST" id="forgotform" >
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            <a href="<?php echo site_url("cityadmin/login/index"); ?>" class="btn btn-default btn-block m-t-md">Back</a>
                        </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2014 AppName
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
        <!-- Javascripts -->
        <script src="<?php echo base_url('assets/admin')?>/assets/js/jquery-3.2.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $(document).on("submit","#forgotform",function(e){
                    e.preventDefault();
                    var email=$("#email").val();
                    $.ajax({
                        url: '<?php echo site_url("cityadmin/login/forgot_email"); ?>',
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
</html>


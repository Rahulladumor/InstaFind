
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Insta-find</title>            
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
                 &nbsp;&nbsp;&nbsp;&nbsp;<h1 style="color: white;">INSTA-FIND</h1>
                <strong style="color:white;    font-size: 20px;text-align:center; "><?php echo @$data; ?></strong>
                <div class="login-body">
                    <div class="login-title"><strong>Sign Up</strong> to your account</div>
                    <form  class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo site_url('cityadmin/register/register_cityadmin');?>">
                         <div class="form-group">
                        <div class="col-md-12">
                            <input type="text"  name="name" class="form-control" placeholder="Name"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="email" class="form-control" placeholder="E-mail"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control" placeholder="Password"/>


                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="file" class="form-control" name="image" />
                        </div>
                    </div>
                   <div class="form-group">
                                        
                        <div class="col-md-12">                                                                                
                            <select class="form-control select" data-style="btn-success" style="color: #9EA1A3;background: #3B444C" name="city">
                                <!-- <option selected="">Select City</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                 <option>Option 5</option>
                                -->
                                <option selected>--Select City</option>
                                <?php

                                    foreach($cityname as $row)
                                    {
                                        echo '<option value="'.$row->name.'">'.$row->name.'</option>';

                                    }
                                ?>
                            </select>
                        </div>
                    </div>         
                    <div class="form-group">
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block" type="submit">Sign Up</button>
                        </div>
                    </div>
                    <div class="login-subtitle">
                        Don't have an account yet? <a href="<?php echo site_url("cityadmin/login"); ?>">Log In</a>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2018 Instafind
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>







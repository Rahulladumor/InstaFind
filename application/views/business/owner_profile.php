<script src="<?php echo base_url('assets/admin')?>/assets/js/jquery-3.2.1.min.js"></script>
<script>
    function show_business()
    {
        $.ajax({
            url: "<?php echo site_url("business/owner_con/get_owner_by_id"); ?>",
            type: "POST",
            success: function(data){
                var ob=JSON.parse(data);
                $("#u_fname").val(ob.name).css("color","black");
                $("#u_email").val(ob.email).css("color","black");
                $("#u_password").val(ob.password).css("color","black");
                $("#u_contact").val(ob.contact).css("color","black");
                $('#u_image').attr({src:"<?php echo base_url('upload/owner/'); ?>"+ob.image});
            },
            error: function(){
                alert("errrrror");
            }
        });
    }
    $(document).ready(function(){
        $("font").css("color","white");
        show_business();
        $(document).on("click","#edit_name",function(e){
            e.preventDefault();
            $("#u_fname").removeAttr("disabled");
            $("#i_name").removeClass("fa-pencil");
            $("#i_name").addClass("fa-check iname");
        });
        $(document).on("click",".iname",function(e){
            e.preventDefault();
            var name=$("#u_fname").val();
            $.ajax({
                url: '<?php echo site_url("business/owner_con/update_owner_name") ?>',
                data: {"name":name},
                type: 'POST',
                success: function(data){
                    $('#u_fname').attr('disabled', 'disabled');
                    $("#i_name").addClass('fa-pencil');
                    $("#i_name").removeClass('fa-check iname');
                    show_cityadmin();
                },
                error: function(){
                    alert("ee");
                }
            });
        });

        $(document).on("click","#edit_email",function(e){
            e.preventDefault();
            $("#u_email").removeAttr("disabled");
            $("#i_email").removeClass("fa-pencil");
            $("#i_email").addClass("fa-check iemail");
        });
        $(document).on("click",".iemail",function(e){
            e.preventDefault();
            var email=$("#u_email").val();
            $.ajax({
                url: '<?php echo site_url("business/owner_con/update_owner_email") ?>',
                data: {"email":email},
                type: 'POST',
                success: function(data){
                    $('#u_email').attr('disabled', 'disabled');
                    $("#i_email").addClass('fa-pencil');
                    $("#i_email").removeClass('fa-check iemail');
                    show_cityadmin();
                },
                error: function(){
                    alert("ee");
                }
            });
        });

        $(document).on("click","#edit_address",function(e){
            e.preventDefault();
            $("#u_contact").removeAttr("disabled");
            $("#i_add").removeClass("fa-pencil");
            $("#i_add").addClass("fa-check iadd");
        });
        $(document).on("click",".iadd",function(e){
            e.preventDefault();
            var contact=$("#u_contact").val();
            $.ajax({
                url: '<?php echo site_url("business/owner_con/update_owner_contact") ?>',
                data: {"contact":contact},
                type: 'POST',
                success: function(data){
                    $('#u_contact').attr('disabled', 'disabled');
                    $("#i_add").addClass('fa-pencil');
                    $("#i_add").removeClass('fa-check iadd');
                    show_cityadmin();
                },
                error: function(){
                    alert("ee");
                }
            });
        });     

        $(document).on("click","#edit_image",function(e){
            e.preventDefault();
            $("#owner_image").click();
            $("#cancel_image").removeAttr("hidden");
            $("#i_image").removeClass("fa-plus-circle");
            $("#i_image").addClass("fa-check iaddimg");
        });

        $(".toggle-password").click(function(e) 
        {
            e.preventDefault();
            $(this).toggleClass("fa-eye fa-eye-slash");
            //var input = $($("#v_password").attr("toggle"));
                if ($("#u_password").attr("type") == "password") {
                    $("#u_password").attr("type", "text");
                } 
                else 
                {
                    $("#u_password").attr("type", "password");
                }
        });

        $(document).on("click",".iaddimg",function(e){
            e.preventDefault();
            var image=$("#u_image").val();
            alert(image);
        });

    });
</script>
<?php $this->load->view("business/business_header"); ?>
            <section class="aside-layout-section padding-top-70 padding-bottom-40">
            <div class="container"><!-- section container -->
                <div class="row"><!-- row -->
                    <div class="col-md-12 col-sm-8 col-xs-12 main-wrap"><!-- content area column -->
                        <div class="listing-single padding-bottom-40">
                            <div class="single-listing-wrap">
                                <div class="single-listing-scroller  bgwhite shadow-1">
                                    <!-- declare a slideshow -->
                                    <!-- empty element for pager links -->
                                    <div id="adv-custom-pager" class="center external">
                                        <hr>
                                        <hr>
                                        <hr>
                                        <h3><font>User Profile</font></h3>
                                    </div>
                                </div>
                                <div class="listing-contact-detail-wrap">
                                    <div class="listing-contact-section-table">
                            <form method="POST" enctype="multipart/form-data">
                                <div>
                                    <div id="user-profile-1" class="user-profile row">
                                        <div class="col-xs-12 col-sm-3" style="position: relative;">
                                            <div>
                                                <span class="profile-picture">
                                                    <img id="u_image" accept="Documents/*" src="" style="border-radius: 30%;"  height="200" width="200" align="right">
                                        <script>
                                          var loadFile = function(event) {
                                            var output = document.getElementById('u_image');
                                            console.log(output);
                                            output.src = URL.createObjectURL(event.target.files[0]);
                                          };
                                        </script>
                                                    <button id="edit_image" style="border: none;background: none;position: absolute;top: 80%;left: 80%;"><i id="i_image" style="font-size: 40px;color: #478FCA;" class="fa fa-plus-circle"></i></button>
                                                    <button hidden="" id="cancel_image" style="border: none;background: none;position: absolute;top: 80%;left: 23%;"><i id="ic_image" style="font-size: 40px;color: #dd5a43;" class="fa fa-times-circle"></i></button>
                                                </span>

                                                <div class="space-4"></div>

                                                
                                            </div>                  
                                        </div>                                  
                                        <div class="col-xs-12 col-sm-9">
                                            <div class="space-12"></div>
                                                <div class="form-group">
                                                    

                                                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1" style="padding-top:8px;"><font> Admin Name </label>
                                                    <div class="col-sm-9" style="padding-bottom: 20px;padding-right: 5px;position: relative;">
                                                        <div class="listing-form-field col-sm-13">
                                                            <input class="input-lg form-control" type="text" id="u_fname" name="user_name" placeholder="Name" autocomplete="off" style="width: 200px;" disabled />
                                                            <button id="edit_name" style="border: none;background: none;position: absolute;top: 1%;left: 29%;"><i id="i_name" style="font-size: 25px;color: #478FCA;line-height: 1.5;" class="fa fa-pencil"></i></button>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1" style="padding-top:8px;"><font> Email</font> </label>

                                                    <div class="col-sm-9" style="padding-bottom: 20px;padding-right: 5px;position: relative;">
                                                        <div class="listing-form-field col-sm-13">
                                                            <input class="input-lg form-control" type="text" id="u_email" name="user_name" style="width: 200px;" autocomplete="off" placeholder="Email" disabled />
                                                            <button id="edit_email" style="border: none;background: none;position: absolute;top: 1%;left: 29%;"><i id="i_email" style="font-size: 25px;color: #478FCA;line-height: 1.5;" class="fa fa-pencil"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1" style="padding-top:5px;"><font> Password </font></label>

                                                    <div class="col-sm-9" style="padding-bottom: 20px;padding-right: 5px;position: relative;">
                                                        <div class="listing-form-field col-sm-13">
                                                            <input class="input-lg form-control" type="password" id="u_password" name="user_name" style="width: 200px;" placeholder="Password" autocomplete="off" disabled />
                                                            <button id="edit_password" style="border: none;background: none;position: absolute;top: 1%;left: 29%;"><i id="i_pass" style="font-size: 25px;color: #478FCA;line-height: 1.5;" class="fa fa-eye toggle-password"></i></button>
                                                        </div>
                                                    </div>  
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1" style="padding-top:8px;"><font> Contact </font></label>

                                                    <div class="col-sm-9" style="padding-bottom: 20px;padding-right: 5px;position: relative;">
                                                        <div class="listing-form-field col-sm-13">
                                                            <input class="input-lg form-control" type="text" id="u_contact" name="user_name" style="width: 200px;" placeholder="Contact" autocomplete="off" disabled />
                                                            <button id="edit_address" style="border: none;background: none;position: absolute;top: 1%;left: 29%;"><i id="i_add" style="font-size: 25px;color: #478FCA;line-height: 1.5;" class="fa fa-pencil"></i></button>
                                                        </div>
                                                    </div> 
                                                    <input type="file" onchange="loadFile(event)" name="image" id="owner_image" style="opacity: 0;"> 
                                                </div>
                                                
                                            <div class="space-20"></div>                                            
                                            <div class="hr hr2 hr-double"></div>

                                            <div class="space-6"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- content area end --> 
                </div>
            </div><!-- section container end -->
</section>
<?php $this->load->view("business/business_footer");?>
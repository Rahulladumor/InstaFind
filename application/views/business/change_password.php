<?php $this->load->view("business/business_header"); ?>
<hr><hr><hr>
                  <div class="page-header">
                     <h1>
                     	<i class="ace-icon fa fa-unlock-alt"></i>
                        <font style="color: white;">Change Password</font> 
                     </h1>
                  </div>
                  <form method="POST">
                   	<div class="row">
                        <div class="col-xs-3">
                            <input type="password" class="input-lg form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off">
							<div style="margin-left: 40px;">
								<span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span><font> 8 Characters Long</font><br>
								<span id="ucase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span><font> One Uppercase Letter</font><br>
								<span id="lcase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span><font> One Lowercase Letter</font><br>
								<span id="num" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span><font> One Number</font>
							</div>
							<div class="col-sm-10">
								<input type="submit" id="changebtn" class="btn btn-danger disabled" data-loading-text="Changing Password..." value="Change Password" style="width: 505px;">
							</div>
                        </div><!-- /.span -->
                        
                        <div class="row">
                           	<div class="col-xs-3">
                            	<input type="password" class="input-lg form-control" name="password2" id="password2" placeholder="Repeat Password" autocomplete="off">
								<div class="row">
									<div class="col-sm-12">
										<span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> <font>Passwords Match</font>
										<input type="hidden" id="owner_id" value="<?php echo @$owner_info["owner_id"]; ?>">
									</div>
								</div>
                           </div><!-- /.span -->
                    	</div><!-- /.row -->
                	</div><!-- /.row -->
                </form>
<?php $this->load->view("business/business_footer"); ?>
<script src="<?php echo base_url('assets/admin')?>/assets/js/jquery-3.2.1.min.js"></script>
<script>
	$("font").css("color","white");
	$("input[type=password]").keyup(function(){
   var ucase = new RegExp("[A-Z]+");
	var lcase = new RegExp("[a-z]+");
	var num = new RegExp("[0-9]+");
	
	if($("#password1").val().length >= 8){
		$("#8char").removeClass("glyphicon-remove");
		$("#8char").addClass("glyphicon-ok");
		$("#8char").css("color","#00A41E");
	}else{
		$("#8char").removeClass("glyphicon-ok");
		$("#8char").addClass("glyphicon-remove");
		$("#8char").css("color","#FF0004");
	}
	
	if(ucase.test($("#password1").val())){
		$("#ucase").removeClass("glyphicon-remove");
		$("#ucase").addClass("glyphicon-ok");
		$("#ucase").css("color","#00A41E");
	}else{
		$("#ucase").removeClass("glyphicon-ok");
		$("#ucase").addClass("glyphicon-remove");
		$("#ucase").css("color","#FF0004");
	}
	
	if(lcase.test($("#password1").val())){
		$("#lcase").removeClass("glyphicon-remove");
		$("#lcase").addClass("glyphicon-ok");
		$("#lcase").css("color","#00A41E");
	}else{
		$("#lcase").removeClass("glyphicon-ok");
		$("#lcase").addClass("glyphicon-remove");
		$("#lcase").css("color","#FF0004");
	}
	
	if(num.test($("#password1").val())){
		$("#num").removeClass("glyphicon-remove");
		$("#num").addClass("glyphicon-ok");
		$("#num").css("color","#00A41E");
	}else{
		$("#num").removeClass("glyphicon-ok");
		$("#num").addClass("glyphicon-remove");
		$("#num").css("color","#FF0004");
	}
	
	if($("#password1").val() == $("#password2").val())
	{
		if($("#password2").val()=='')
		{
			$("#pwmatch").removeClass("glyphicon-ok");
			$("#pwmatch").addClass("glyphicon-remove");
			$("#pwmatch").css("color","#FF0004");
		}
		else{
			$("#pwmatch").removeClass("glyphicon-remove");
			$("#pwmatch").addClass("glyphicon-ok");
			$("#pwmatch").css("color","#00A41E");
			$("#changebtn").removeClass("btn-danger disabled");
			$("#changebtn").addClass("btn-primary");

		}
		
	}else{
		$("#pwmatch").removeClass("glyphicon-ok");
		$("#pwmatch").addClass("glyphicon-remove");
		$("#pwmatch").css("color","#FF0004");
		$("#changebtn").removeClass("btn-primary");
		$("#changebtn").addClass("btn-danger disabled");
	}
	});

	$(document).ready(function(){
		$(document).on('click','#changebtn',function(e){
			e.preventDefault();
			var password=$('#password2').val();
			var aid=$("#owner_id").val();
			$.ajax({
				url: '<?php echo site_url('business/owner_con/change_password/'); ?>'+aid,
				data: {'password':password},
				type: 'POST',
				success: function(data){
					$('#password1').val('');
					$('#password2').val('');
					$("#changebtn").removeClass("btn-primary");
					$("#changebtn").addClass("btn-danger disabled");
					$("#8char").removeClass("glyphicon-ok");
					$("#8char").addClass("glyphicon-remove");
					$("#8char").css("color","#FF0004");
					$("#ucase").removeClass("glyphicon-ok");
					$("#ucase").addClass("glyphicon-remove");
					$("#ucase").css("color","#FF0004");
					$("#lcase").removeClass("glyphicon-ok");
					$("#lcase").addClass("glyphicon-remove");
					$("#lcase").css("color","#FF0004");
					$("#num").removeClass("glyphicon-ok");
					$("#num").addClass("glyphicon-remove");
					$("#num").css("color","#FF0004");
					$("#pwmatch").removeClass("glyphicon-ok");
					$("#pwmatch").addClass("glyphicon-remove");
					$("#pwmatch").css("color","#FF0004");
					alert(data);
					window.location="logout_owner";
				},
				error: function(){
					alert("Cant Password Change......oops!")
				}
			});
		});
	});
</script>
<?php $this->load->view('user/header'); ?>

<div class="sc-page padding-top-70 padding-bottom-70"><!--sc-page-->
<form method="POST" enctype="multipart/form-data" id="regform">
	<div class="listing-form-field col-sm-13">
		<input class="form-field bgwhite" type="text" id="fname" name="user_name" placeholder="name" autocomplete="off"  />
	</div>
	<div class="listing-form-field col-sm-13">
		<input class="form-field bgwhite" type="email" id="oemail" name="user_email" placeholder="email" autocomplete="off" />
	</div>
	<div class="listing-form-field col-sm-13">
		<input class="form-field bgwhite" type="password" id="password" name="user_password" placeholder="password"  autocomplete="off"/>
	</div>
	<div class="listing-form-field col-sm-13">
		<input class="form-field bgwhite" type="password" id="confpassword" name="user_confirm_password" placeholder="confirm password" autocomplete="off" />
	</div>
	<div class="listing-form-field col-sm-13">
		<input class="form-field bgwhite" id="address" type="text" name="user_address" placeholder="Address" autocomplete="off" />
	</div>
	<div class="listing-form-field col-sm-13">
		<input class="form-field bgwhite" id="contact" type="text" name="user_contact" placeholder="Contact" autocomplete="off" />
	</div>
	<div class="listing-form-field col-sm-13">
		 <!-- <input class="form-field bgwhite" type="" name="user_confirm_password" placeholder="confirm password" />  -->
		<input type="file" name="image" id="image">
	</div>
	<div class="listing-form-field clearfix margin-top-10 margin-bottom-20">
		<!-- <input type="checkbox" id="checkbox-1-2" class="regular-checkbox" /><label for="checkbox-1-2"></label> -->
		<!-- <label class="checkbox-lable">i agree with</label> -->
		<!-- <a href="#">terms & conditions</a> -->
	</div>
	<div class="listing-form-field">
		<input style="background-color:#dd5a43;" class="form-field submit bgblue-1 btn" type="submit"  value="create account" id="reg_user" />
	</div>
</form>
</div><!--/sc-page-->

<?php $this->load->view('user/footer'); ?>
<!-- <script>
	$(document).ready({
		// ===========================Validation Register==================
    		$("#fname").keyup(function(){
				var name=new RegExp("^[a-zA-Z]+$");
				if(name.test($("#fname").val()))
				{
					$("#reg_user").css("transition",".8s");
					$("#fname").css("border-color","green");
					$("#fname").css("border-width","2px");
					$("#oemail").removeAttr("disabled");
					// $("#reg_user").removeAttr("disabled");
					// $("#reg_user").css("background-color","#08C2F3");
					$("#oemail").keyup(function(){
	    			
	    			var email=new RegExp("^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$");
					if(email.test($("#oemail").val()))
					{
						$("#reg_user").css("transition",".8s");
						$("#oemail").css("border-color","green");
						$("#oemail").css("border-width","2px");
						$("#password").removeAttr("disabled");
						// $("#reg_user").removeAttr("disabled");
						// $("#reg_user").css("background-color","#08C2F3");

						$("#password").keyup(function(){
						var ucase = new RegExp("[A-Z]+");
						var lcase = new RegExp("[a-z]+");
						var num = new RegExp("[0-9]+");
						
						if($("#password").val().length >= 8)
						{
							$("#reg_user").css("transition",".8s");
							$("#password").css("border-color","green");
							$("#password").css("border-width","2px");
							// $("#reg_user").removeAttr("disabled");
							// $("#reg_user").css("background-color","#08C2F3");
						}
						else
						{
							$("#reg_user").css("transition",".8s");
							$("#password").css("border-color","red");
							$("#password").css("border-width","2px");
							$("#reg_user").attr("disabled","disabled");
							$("#reg_user").css("background-color","#dd5a43");
						}
						
						if(ucase.test($("#password").val()))
						{
							$("#reg_user").css("transition",".8s");
							$("#password").css("border-color","green");
							$("#password").css("border-width","2px");
							// $("#reg_user").removeAttr("disabled");
							// $("#reg_user").css("background-color","#08C2F3");
						}
						else
						{
							$("#reg_user").css("transition",".8s");
							$("#password").css("border-color","red");
							$("#password").css("border-width","2px");
							$("#reg_user").attr("disabled","disabled");
							$("#reg_user").css("background-color","#dd5a43");
						}
						
						if(lcase.test($("#password").val()))
						{
							$("#reg_user").css("transition",".8s");
							$("#password").css("border-color","green");
							$("#password").css("border-width","2px");
							// $("#reg_user").removeAttr("disabled");
							// $("#reg_user").css("background-color","#08C2F3");
						}
						else
						{
							$("#reg_user").css("transition",".8s");
							$("#password").css("border-color","red");
							$("#password").css("border-width","2px");
							$("#reg_user").attr("disabled","disabled");
							$("#reg_user").css("background-color","#dd5a43");
						}
						
						if(num.test($("#password").val()))
						{
							$("#reg_user").css("transition",".8s");
							$("#password").css("border-color","green");
							$("#password").css("border-width","2px");
							$("#confpassword").removeAttr("disabled");
							// $("#reg_user").removeAttr("disabled");
							// $("#reg_user").css("background-color","#08C2F3");
							
							$("#confpassword").keyup(function(){
							if($("#password").val() == $("#confpassword").val())
							{
								if($("#confpassword").val()=='')
								{
									$("#reg_user").css("transition",".8s");
									$("#confpassword").css("border-color","red");
									$("#confpassword").css("border-width","2px");
									$("#reg_user").attr("disabled","disabled");
									$("#address").attr("disabled","disabled");
									$("#reg_user").css("background-color","#dd5a43");
								}
								else
								{
									$("#reg_user").css("transition",".8s");
									$("#confpassword").css("border-color","green");
									$("#confpassword").css("border-width","2px");
									$("#address").removeAttr("disabled");
									// $("#reg_user").removeAttr("disabled");
									// $("#reg_user").css("background-color","#08C2F3");
									$("#address").keyup(function(){
									var name=new RegExp("^[a-zA-Z]+$");
									if(name.test($("#address").val()))
									{
										$("#reg_user").css("transition",".8s");
										$("#address").css("border-color","green");
										$("#address").css("border-width","2px");
										$("#image").removeAttr("disabled");
										$("#reg_user").removeAttr("disabled");
										$("#contact").removeAttr("disabled");
										$("#reg_user").css("background-color","#08C2F3");
									}
									else
									{
										$("#reg_user").css("transition",".8s");
										$("#address").css("border-color","red");
										$("#address").css("border-width","2px");
										$("#reg_user").attr("disabled","disabled");
										$("#image").attr("disabled","disabled");
										$("#reg_user").css("background-color","#dd5a43");
									}
									});
								}
								
							}
							else
							{
								$("#reg_user").css("transition",".8s");
								$("#confpassword").css("border-color","red");
								$("#confpassword").css("border-width","2px");
								$("#reg_user").attr("disabled","disabled");
								$("#address").attr("disabled","disabled");
								$("#reg_user").css("background-color","#dd5a43");
							}
						});
						}
						else
						{
							$("#reg_user").css("transition",".8s");
							$("#password").css("border-color","red");
							$("#password").css("border-width","2px");
							$("#reg_user").attr("disabled","disabled");
							$("#confpassword").attr("disabled","disabled");
							$("#reg_user").css("background-color","#dd5a43");
						}
						});
					}
					else
					{
						$("#reg_user").css("transition",".8s");
						$("#oemail").css("border-color","red");
						$("#oemail").css("border-width","2px");
						$("#reg_user").attr("disabled","disabled");
						$("#password").attr("disabled","disabled");
						$("#reg_user").css("background-color","#dd5a43");
					}
			});
				}
				else
				{
					$("#reg_user").css("transition",".8s");
					$("#fname").css("border-color","red");
					$("#fname").css("border-width","2px");
					$("#reg_user").attr("disabled","disabled");
					$("#oemail").attr("disabled","disabled");
					$("#reg_user").css("background-color","#dd5a43");
				}
			});
	});
</script> -->
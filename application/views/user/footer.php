<!--================================ FOOTER AREA ==========================================-->
		
		<footer class="footer style-1 padding-top-60 bg222">
			<div class="container">
				<div class="footer-main padding-bottom-10">
					<div class="row">
						<h5>Subscribe</h5>
						<div class="listing-form-field">
							<input class="form-field bgwhite" type="text" name="subscribe" placeholder="xyz@gmail.com" id="subsemail" style="width: 500px;">
							<input class="form-field submit bggrey-1" type="button" id="subscription" value="Subscribe" style="width: 300px;color: black;">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="footer-widget-title">
								<h5>LATEST NEWS</h5>
							</div>
							<div class="footer-logo">
								<a href="#"><img src="<?php echo base_url();?>assets/user/images/logoi.png" alt="footer logo"></a>
							</div>
							<div class="footer-intro">
								<p>Some of the other services that can be of assistance to you for leisure, health and home convenience are - Courier Service, Laundry Service, AC Repair, Thyrocare, Metropolis, Order Mineral Water, Book a Table, Doctor's Appointment, Order Food Online, etc.

								With an endless number of things under the sun, you can be sure this will be your 'One Stop Shop' to find everything and more.
								</p>
								<a href="about.html">read more</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="footer-widget-title">
								<h5>recent Businesses</h5>
							</div>
							<?php foreach ($last_records as $value) { ?>
							<div class="footer-recent-post-widget">
								<div class="footer-recent-post clearfix">
									<div class="footer-recent-post-figure">
										<img src="<?php if($value['image'][0]!='h'){ echo base_url("upload/business/"),$value['image']; } else { echo $value['image']; }?>" alt="recent post"/>
									</div>
									<div class="footer-recent-post-content">
										<div class="footer-recent-post-title">
											<a href="#"><?php echo $value['name']; ?></a>
										</div>
										<div class="footer-recent-post-disc">
											<p>Welcome to listing</p>
										</div>
										<div class="footer-recent-post-caption">
											<p class="date">07 Sep, 2017</p>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="footer-widget-title">
								<h5>Photo Gallary</h5>
							</div>
							<div class="footer-flikr-widget">
								<ul class="flikr-list clearfix">
									<li><a href="#"><img src="<?php echo base_url();?>assets/user/images/news/flikr/01.jpg" alt="flikr photo"></a></li>
									<li><a href="#"><img src="<?php echo base_url();?>assets/user/images/news/flikr/02.jpg" alt="flikr photo"></a></li>
									<li><a href="#"><img src="<?php echo base_url();?>assets/user/images/news/flikr/03.jpg" alt="flikr photo"></a></li>
									<li><a href="#"><img src="<?php echo base_url();?>assets/user/images/news/flikr/04.jpg" alt="flikr photo"></a></li>
									<li><a href="#"><img src="<?php echo base_url();?>assets/user/images/news/flikr/05.jpg" alt="flikr photo"></a></li>
									<li><a href="#"><img src="<?php echo base_url();?>assets/user/images/news/flikr/06.jpg" alt="flikr photo"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .container end -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row clearfix">
						<div class="col-md-8 col-sm-12 col-xs-12 pull-right margin-bottom-20">
							<nav class="footer-menu wsmenu clearfix">
								<ul class="wsmenu-list pull-right">
								  <li><a href="#" class="">Home</a></li>
								  <li><a href="#">features <span class="arrow"></span></a></li>
								  <li><a href="#">categories <span class="arrow"></span></a></li>
								  <li><a href="#">listings <span class="arrow"></span></a></li>
								  <li><a href="#">pages <span class="arrow"></span></a></li>
								  <li><a href="#">Contact Us <span class="arrow"></span></a></li>
								</ul>
							</nav>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12 pull-left margin-bottom-20">
							<div class="footer-copyright">
								<p>&copy; 2018 All Rights Reserved @ Instafind</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	
	<!--================================MODAL WINDOWS FOR REGISTER AND LOGIN FORMS ===========================================-->
	<!-- Modal login form -->
	<div class = "modal fade" id = "login" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true">
	   <div class = "listing-modal-1 modal-dialog">
		  <div class = "modal-content">
			 <div class = "modal-header">
				<button type = "button" id="login-close" class = "close" data-dismiss = "modal" aria-hidden = "true">&times;</button>
				<h4 class = "modal-title" id = "myModalLabel"> LOGIN</h4>
			 </div>
			 <div class = "modal-body" id="login-body">
				<div class=" listing-login-form">
					<form method="POST" id="loginform">
						<div class="listing-form-field">
							<i class="fa fa-user blue-1"></i>
							<input class="form-field bgwhite" type="text" name="user_name" placeholder="username" id="username" />
						</div>
						<div class="listing-form-field">
							<i class="fa fa-lock blue-1"></i>
							<input class="form-field bgwhite" type="password" name="user_pass" placeholder="password" id="userpass"  />
						</div>
						<div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
							<input type="checkbox" id="checkbox-1-1" class="regular-checkbox" /><label for="checkbox-1-1"></label>
							<label class="checkbox-lable">Remember me</label>
							<a href id="forgot-pass">forgot password?</a>
						</div>
						<div class="listing-form-field">
							<input class="form-field submit bgblue-1" type="submit" id="loginbtn"  value="login" />
						</div>
					</form>
					<div class="bottom-links">
						<p>not a member?<a href="#">create account</a></p>
					</div>
				</div>
			 </div>
			 <div class = "modal-body" id="forgot-body" hidden>
				<div class=" listing-login-form">
					<form method="POST" id="forgotpassform">
						<div class="listing-form-field">
							<i class="fa fa-envelope blue-1"></i>
							<input class="form-field bgwhite" type="email" name="user_pass" placeholder="Email" id="userforemail" autocomplete="off"  />
						</div>
						<div class="listing-form-field">
							<input class="form-field submit bgred-1" type="submit" id="forgotpassbtn"  value="SEND ME!!!" />
						</div>
					</form>
					<div class="bottom-links">
						<a href id="back-to-login">back to login</a>
					</div>
				</div>
			 </div>
		  </div><!-- /.modal-content -->
	   </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- Modal registration form -->
	<div class = "modal fade" id = "register" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true">
	   <div class = "modal-dialog">
		  <div class = "modal-content">
			 <div class = "modal-header">
				<button type = "button" id="modalcls" class = "close" data-dismiss = "modal" aria-hidden = "true">&times;</button>
				<h4 class = "modal-title">registration</h4>
			 </div>
			 <div class = "modal-body">
				<div class=" listing-register-form"> 
					<form method="POST" enctype="multipart/form-data" id="regform">
						<div class="listing-form-field col-sm-13">
							<input class="form-field bgwhite" type="text" id="fname" name="user_name" placeholder="name" autocomplete="off"/>
						</div>
						<div class="listing-form-field col-sm-13">
							<input class="form-field bgwhite" type="email" id="email" name="user_email" placeholder="email" autocomplete="off" disabled />
						</div>
						<div class="listing-form-field col-sm-13">
							<input class="form-field bgwhite" type="password" id="password" name="user_password" placeholder="password" disabled autocomplete="off"/>
						</div>
						<div class="listing-form-field col-sm-13">
							<input class="form-field bgwhite" type="password" id="confpassword" name="user_confirm_password" placeholder="confirm password" autocomplete="off" disabled/>
						</div>
						<div class="listing-form-field col-sm-13">
							<input class="form-field bgwhite" id="address" type="text" name="user_address" placeholder="Address" autocomplete="off" disabled/>
						</div>
						<div class="listing-form-field col-sm-13">
							 <!-- <input class="form-field bgwhite" type="" name="user_confirm_password" placeholder="confirm password" />  -->
							<input type="file" name="image" id="image" disabled>
						</div>
						<div class="listing-form-field clearfix margin-top-10 margin-bottom-20">
							<!-- <input type="checkbox" id="checkbox-1-2" class="regular-checkbox" /><label for="checkbox-1-2"></label> -->
							<!-- <label class="checkbox-lable">i agree with</label> -->
							<!-- <a href="#">terms & conditions</a> -->
						</div>
						<div class="listing-form-field">
							<input style="background-color:#dd5a43;" class="form-field submit bgblue-1 btn" type="submit"  value="create account" id="reg_user"  />
						</div>
					</form>
					<div class="bottom-links">
						<p>login with social network</p>
						<div class="listing-form-social">
							<ul>
								<li><a class="bgblue-4 white" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="bgblue-1 white" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="bgred-2 white" href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div> 
			 </div>
		  </div><!--/.modal-content -->
	   </div><!-- /.modal-dialog -->
	</div>
	
	<!--================================JQuery===========================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/user/js/jquery-1.11.3.min.js"></script> 
	<!-- <script src="<?php //echo base_url();?>assets/user/js/jquery.js"></script>  -->
	<!-- jquery 1.11.2 -->
	<!-- <script src="<?php //echo base_url()?>assets/user/js/jquery-3.2.1.min.js"></script> -->
	<script src="<?php echo base_url();?>assets/user/js/jquery.easing.min.js"></script>
	<script src="<?php echo base_url();?>assets/user/js/modernizr.custom.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
	
	<!--================================BOOTSTRAP===========================================-->
       <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
	<script src="<?php echo base_url();?>assets/user/bootstrap/js/bootstrap.min.js"></script>	
	
	<!--================================NAVIGATION===========================================-->
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/user/js/menu.js"></script>
	
	<!--================================SLIDER REVOLUTION===========================================-->
		
	<script type="text/javascript" src="<?php echo base_url();?>assets/user/assets/revolution_slider/js/revolution-slider-tool.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/user/assets/revolution_slider/js/revolution-slider.js"></script>
	
	<!--================================MAP===========================================-->
		
	<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBueyERw9S41n4lblw5fVPAc9UqpAiMgvM&amp;sensor=false"></script> -->
	<!-- <script type="text/javascript" src="<?php echo base_url();?>assets/user/js/map.js"></script> -->
	<!-- map with geo locations -->
	
	<!-- <script type="text/javascript" src="<?php echo base_url();?>assets/user/js/jquery.mapit.js"></script> -->
	<!-- <script src="<?php echo base_url();?>assets/user/js/initializers.js"></script> -->
	
	<!--================================OWL CARESOUL=============================================-->
		
	<script src="<?php echo base_url();?>assets/user/js/owl.carousel.js"></script>
    <script src="<?php echo base_url();?>assets/user/js/triger.js" type="text/javascript"></script>
		
	<!--================================FunFacts Counter===========================================-->
		
	<script src="<?php echo base_url();?>assets/user/js/jquery.countTo.js"></script>
	
	<!--================================jquery cycle2=============================================-->
	
	<script src="<?php echo base_url();?>assets/user/js/jquery.cycle2.min.js" type="text/javascript"></script>	
	
	<!--================================waypoint===========================================-->
		
	<script type="text/javascript" src="<?php echo base_url();?>assets/user/js/jquery.waypoints.min.js"></script><!-- Countdown JS FILE -->
	
	<!--================================RATINGS===========================================-->	
	
	<script src="<?php echo base_url();?>assets/user/js/jquery.raty-fa.js"></script>
	<script src="<?php echo base_url();?>assets/user/js/rate.js"></script>
	<!--================================ testimonial ===========================================-->
	<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			
			<div class="rg-image-wrapper">
				<div class="rg-image"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
						<h5></h5>
						<div class="caption-metas">
							<p class="position"></p>
							<p class="orgnization"></p>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</script>	
	<script type="text/javascript" src="<?php echo base_url();?>assets/user/assets/testimonial/js/jquery.tmpl.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/user/assets/testimonial/js/jquery.elastislide.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/user/assets/testimonial/js/gallery.js"></script>
	<!--================================ video===========================================-->
	<script src="<?php echo base_url();?>assets/user/assets/html5lightbox/html5lightbox.js"></script>

	<!--================================custom script===========================================-->
		
	<script type="text/javascript" src="<?php echo base_url();?>assets/user/js/custom.js"></script> 
	<!-- <script src="<?php echo base_url('assets/admin')?>/assets/js/jquery-3.2.1.min.js"></script>   -->
	<!-- <script src="<?php //echo base_url();?>assets/user/bootstrap/js/bootstrap.min.js"></script> -->
    <script>
    	function load_business()
    	{
    		$.ajax({
    			url: "<?php echo site_url("user/login_con/load_business"); ?>",
    			type: 'POST',
    			success: function(data){
    				//alert(data);
    				var ob=JSON.parse(data);
    				var html_content='';
    				var images1='';
    				var aaa='';
    				$.each(ob,function(key,value){
    					if(value.image[0]!='h')
    					{
    						aaa='<?php echo base_url("upload/business/");?>'+value.image;
    					}
    					else
    					{
    						aaa=value.image;
    					}
    					html_content+='<div class="item col-md-3 col-sm-6 col-xs-12">'+
    					'<form method="POST"  class="myform" name="claimform" target="_blank">'+
										'<div class="listing-item clearfix">'+
											'<div alt="listing item" class="figure">'+
												'<img alt="" src="'+aaa+'">'+
												'<div class="listing-overlay">'+
													'<div class="listing-overlay-inner rgba-bgyallow-1">'+
														'<div class="overlay-content">'+
															'<ul class="listing-links">'+
																'<li><a class="bgwhite nohover" href="#"><i class="fa fa-heart green-1 "></i></a></li>'+
																'<li><a class="bgwhite nohover" href="single-listing.html"><i class="fa fa-shopping-cart blue-1"></i></a></li>'+
																'<li><a class="bgwhite nohover" href="#"><i class="fa fa-share yallow-1"></i></a></li>'+
															'</ul>'+
														'</div>'+
													'</div>'+
												'</div>'+
											'</div>'+
											'<div class="listing-content clearfix">'+
												'<div class="listing-meta-cat">'+
													'<a class="bgyallow-1" href="#"><i class="fa fa-suitcase white"></i></a>'+
												'</div>'+
												'<div class="listing-title">'+
													'<h6><a href="javascript:void(0);" class="placename" onclick="demo(this)" value="'+value.name+'">'+value.name+'<br>'+'</a></h6>'+
												'</div>'+
												'<div class="listing-disc"><a style="font-size: 15px;" href="#"><i class="fa fa-map-marker"></i>'+value.address+'</a></div>'+
												'<div class="listing-location pull-left">'+
													'<a href="#"><i class="fa fa-map-marker"></i>'+value.address+'</a>'+
													'</div>'+

													'<div class="listing-disc"><a style="font-size: 20px;color:red;" href="#"><i class="fa fa-user" ></i>User Comments :<br> '+  value.uname+'</a></div>'+


													'<div class="listing-disc"><a style="font-size: 15px;color:black;" href="#"><i class="fa fa-comment" style="font-size:24px;color:black"></i> '+ value.comment+'</a></div>'+

												'<div class="star-rating pull-right">'+
													'<div class="score-callback" data-score="5"></div>'+
												'</div>'+
											'</div>'+
											'<div class="pull-left" style="align:center;padding-left:300px;padding-top:10px;"><a href="javascript:void(0)" style="padding: 20px;color: white;font-size: 20px;border-radius: 10%;width: 120px;" class="view-profile white bgred-1 claimed">Claimed</a></div>'+
											'<input type="hidden" name="bname" value="'+value.name+'" >'+
											'<input type="hidden" name="badd" value="'+value.address+'">'+
											'<input type="hidden" name="cornot" value="Claimed">'+
											'<input type="hidden" name="contact" value="'+value.contact+'">'+
											'<input type="hidden" name="bid" value="'+value.business_id+'">'+
											'<input type="hidden" name="placeid" value="'+value.place_id+'">'+
											'<input type="hidden" name="description" value="'+value.description+'">'+


											
											'<input type="hidden" name="image[]" value="<?php echo base_url("upload/business/");?>'+value.image+'">'+
										'</div>'+
									'</form></div>';
    				});

    				$("#content").html(html_content);
    			},
    			error: function(){
    				alert("No load_business");
    			}
    		});
    	}
    	$(document).ready(function(){
    		load_business();
		    $(document).on("click","#subscription",function(e){
		    	e.preventDefault();
		    	var email=$("#subsemail").val();
		    	var date=new Date().toISOString().slice(0,10);
		    	$.ajax({
		    		url: '<?php echo site_url("user/home_con/subscribe_now"); ?>',
		    		type: 'POST',
		    		data: {"email":email,"date":date},
		    		success: function(data){
		    			alert("Thank you for subscribe...");
		    			$("#subsemail").val('');
		    		},
		    		error: function(){
		    			alert("Not subsubscribe");
		    		}
		    	});
		    });
    		// $(document).on("submit","#searchform",function(e){
    		// 	e.preventDefault();
    		// 	var searchitem=$("#pac-input").val();
    		// 	window.location.href='?keyword='+searchitem;

    		// });
    		// ===========================Validation Register==================
    		$("#fname").keyup(function(){
				var name=new RegExp("^[a-zA-Z]+$");
				if(name.test($("#fname").val()))
				{
					$("#reg_user").css("transition",".8s");
					$("#fname").css("border-color","green");
					$("#fname").css("border-width","2px");
					$("#email").removeAttr("disabled");
					// $("#reg_user").removeAttr("disabled");
					// $("#reg_user").css("background-color","#08C2F3");
					$("#email").keyup(function(){
	    			
	    			var email=new RegExp("^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$");
					if(email.test($("#email").val()))
					{
						$("#reg_user").css("transition",".8s");
						$("#email").css("border-color","green");
						$("#email").css("border-width","2px");
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
						$("#email").css("border-color","red");
						$("#email").css("border-width","2px");
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
					$("#email").attr("disabled","disabled");
					$("#reg_user").css("background-color","#dd5a43");
				}
			});
			// ================================================================
			$(document).on("blur","#email",function(){
				var email=$("#email").val();
				$.ajax({
					url: '<?php echo site_url('user/register_con/check_registered_email'); ?>',
					data: {"email":email},
					type: "POST",
					success: function(data){
						if(data==1)
						{
							$("#email").val('');
							//$('#email').focus(function() {
							  alert("This email is already registered try another.....");
							//});
						}
					},
					error: function(){
						alert("error in checking");
					}
				});
			});

			//===================================Registration===============================
    		$(document).on("submit","#regform",function(e){
    			e.preventDefault();

    			var formData= new FormData($(this)[0]);
    			$(".preloader2").show();
    			$(".preloader").hide();
    			$.ajax({
    				url: '<?php echo site_url('user/register_con/register_user'); ?>',
    				type: 'POST',
    				data: formData,
    				asyc: false,
    				cache: false,
		            contentType: false,
		            enctype: 'multipart/form-data',
		            processData: false,
    				success: function(data){
    					alert(data);
    					$("#regform")[0].reset();
    					$("#fname").css("border","1px solid #eee");
		    			$("#email").css("border","1px solid #eee");
		    			$("#password").css("border","1px solid #eee");
		    			$("#confpassword").css("border","1px solid #eee");
		    			$("#address").css("border","1px solid #eee");
						$("#email").attr("disabled","disabled");
						$("#password").attr("disabled","disabled");
						$("#confpassword").attr("disabled","disabled");
						$("#address").attr("disabled","disabled");
						$("#image").attr("disabled","disabled");
						$("#reg_user").attr("disabled","disabled");
						$("#reg_user").css("background-color","#dd5a43");
						window.location.reload();
    					//$("#reg_user").attr("data-dismiss","modal");
    				},
    				error: function(){
    					alert("Not register......")
    				}
    			}).done(function(){
    				$(".preloader2").hide();
    			});
    		});

    		$(document).on("click","#modalcls",function(){
    			$("#regform")[0].reset();
    			$("#fname").css("border","1px solid #eee");
		    	$("#email").css("border","1px solid #eee");
		    	$("#password").css("border","1px solid #eee");
		    	$("#confpassword").css("border","1px solid #eee");
		    	$("#address").css("border","1px solid #eee");
				$("#email").attr("disabled","disabled");
				$("#password").attr("disabled","disabled");
				$("#confpassword").attr("disabled","disabled");
				$("#address").attr("disabled","disabled");
				$("#image").attr("disabled","disabled");
				$("#reg_user").attr("disabled","disabled");
				$("#reg_user").css("background-color","#dd5a43");
    		});
    		//========================================================================

    		//==========================Login==================================

    		$(document).on("submit","#loginform",function(e){
    			e.preventDefault();
    			var formData= new FormData($(this)[0]);
    			$.ajax({
    				url: '<?php echo site_url("user/login_con/login_user"); ?>',
    				type: 'POST',
    				data: formData,
    				processData: false,
					contentType: false,
    				success: function(data){
    					if(data)
    					{
    						if(data=='2')
    						{
    							alert("U R Blocked....");	
    							window.location.reload();
    						}
    						else if(data=='1')
    						{
    							alert("U R in Pendding....");
    							window.location.reload();
    						}
    						else
    						{
    							var ob=JSON.parse(data);
	    						$(".profile").removeAttr("hidden");
	    						$("#logoutbtn").html(ob.name);
	    						$("#loginli").hide();
	    						$("#login-body").hide();
	    						window.location.reload();
    						}
    						
    					}
    					else
    					{
    						$(".profile").attr("hidden","hidden");	
    					}
    				},
    				error: function(){
    					alert("Error in login....");
    				}
    			});
    		});

    		//=================================================================
    		// $(document).on("click","#logoutbtn",function(){
    		// 	$.ajax({
    		// 		url: '',
    		// 		success: function(){
    		// 			alert(data);
    		// 		},
    		// 		error: function(){
    		// 			alert("errrrrrrror");
    		// 		}
    		// 	});
    		// });
    		//=================================================================

    		$(document).on("click","#forgot-pass",function(e){
    			e.preventDefault();
    			$("#login-body").hide();
    			$("#forgot-body").show();
    			$("#myModalLabel").html("Forgot Password");
    		});
    		$(document).on("click","#back-to-login",function(e){
    			e.preventDefault();
    			$("#login-body").show();
    			$("#forgot-body").hide();
    			$("#myModalLabel").html("Login");
    		});
    		$(document).on("click","#login-close",function(e){
    			e.preventDefault();
    			$("#loginform")[0].reset();
    			$("#login-body").show();
    			$("#forgot-body").hide();
    			$("#myModalLabel").html("Login");
    		});	
    	});
		function demo(thisObj){
			$(thisObj).parents('.item').find('.myform').attr("action","<?php echo site_url("user/home_con/load_single_list"); ?>");
			    			$(thisObj).parents('.item').find('.myform').submit();
		}
		function demo1(thisObj){
			$(thisObj).parents('.item').find('.myform').attr("action","<?php echo site_url("business/owner_con/add_business_claim"); ?>");
		    			$(thisObj).parents('.item').find('.myform').submit();
		}
		function demo2(thisObj){
			$(thisObj).parents('.item').find('.myform').attr("action","<?php echo site_url("user/home_con/load_single_list1"); ?>");
			    			$(thisObj).parents('.item').find('.myform').submit();
		}

		function give_cmt(){
			var cmt=$("#comment").val();
			var bid=$("#business_id").val();
			var uid=$("#user_id").val();
			var today = new Date();//.toISOString().slice(0,10);
			$.ajax({
				url: '<?php echo site_url("user/home_con/user_comment"); ?>',
				type:'POST',
				data:{"cmt":cmt,"bid":bid,"uid":uid,"today":today},
				success: function(data){
					if(data>0)
					{
						alert("thank you for comment us...");
						$("#comment").val('');
					}
				},
				error: function(){
					alert("no cmt");
				}
			});
		}

		function load_comments()
		{
			var cmt=$("#comment").val();
			var bid=$("#business_id").val();
			var uid=$("#user_id").val();
			var today = new Date();//.toISOString().slice(0,10);
			$.ajax({
				url: '<?php echo site_url("user/home_con/user_all_comment"); ?>',
				type:'POST',
				data:{"bid":bid},
				success: function(data){
					var ob=JSON.parse(data);
					var html='';
					$.each(ob,function(key,value){
						html+='<div class="media">'+
									'<img class="mr-3" src="<?php echo base_url("upload/user/");?>'+value.image+'" height="70" width="70" alt="owner" alt="Generic placeholder image" style="float:left;margin-right:10px; ">'+
									value.name+
									'<div class="media-body">'+
									'<input class="form-field bgwhite" type="text" value="'+value.comment+'" style="padding:15px 15px;border:1px solid #eee;margin-bottom:10px;box-shadow:none;" readonly/>'+
								  	'</div>'+
								'</div>';
					});
					$("#all_comment").html(html+'<a href="javascript:void(0);" onclick="load_comments();">View All Comments</a>');
				},
				error: function(){
					alert("no cmt");
				}
			});	
		}
    </script>

</body>
</html>
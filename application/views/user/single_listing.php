
<?php $this->load->view("user/header"); ?>

		<!--================================PAGE TITLE==========================================-->
		<!-- <div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30"> --><!-- section title -->
			<!-- h4 class="white">health & fitness</h4>
		</div> --><!-- section title end -->
		
		<!--================================listing SECTION==========================================-->
		
		<section class="aside-layout-section padding-top-70 padding-bottom-40">
			<div class="container"><!-- section container -->
				<div class="row"><!-- row -->
					<div class="col-md-9 col-sm-8 col-xs-12 main-wrap"><!-- content area column -->
						<div class="listing-single padding-bottom-40">
							<div class="single-listing-wrap">
								<div class="single-listing-scroller  bgwhite shadow-1">
									<!-- declare a slideshow -->
									<div class="cycle-slideshow" data-cycle-fx=scrollHorz data-cycle-timeout=0 data-cycle-pager="#adv-custom-pager" data-cycle-pager-template="<a href='#'><img src='{{src}}'></a>">
										<?php if($cornot!='Claimed')
												{ foreach($images as $img) 
												{?>
										<img src="<?php echo @$img ?>" height="500" width="870" alt="item">
										<!-- <input type="hidden" name="img[]" value="<?php //echo @$img; ?>"> -->
										<?php } } else { foreach ($dbimages as $value) { ?>
											<img src="<?php if($value['image'][0]!='h'){ echo base_url("upload/business/").@$value['image']; }else{ echo @$value['image'];  } ?>" height="500" width="870" alt="item">
										<?php	
										} ?>
										<?php } ?>
										<!-- <img src="<?php echo base_url("assets/user/"); ?>images/listings/details/03.jpg" alt="item">
										<img src="<?php echo base_url("assets/user/"); ?>images/listings/details/04.jpg" alt="item">
										<img src="<?php echo base_url("assets/user/"); ?>images/listings/details/05.jpg" alt="item">
										<img src="<?php echo base_url("assets/user/"); ?>images/listings/details/06.jpg" alt="item"> -->
										<a class="cat-tag bgblue-1 white" href="#"><i class="fa fa-heart"></i></a>
										<div class="listing-main-content">
											<h4><?php echo @$name; ?></h4>
											<p><i class="fa fa-map-marker yallow-1"></i><?php echo @$address; ?></p>
											<div hidden="" class="social">
												<ul>
													<li><a class="bggreen-1 white" href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a class="bgblue-1 white" href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a class="bgyallow-1 white" href="#"><i class="fa fa-linkedin"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- empty element for pager links -->
									<div id="adv-custom-pager" class="center external"></div>
								</div>
								<div class="listing-details">
									<div class="row tabs">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="tab-link current" data-tab="tab-1">
												<div class="link-top bgblue-1"></div>
												<i class="fa fa-home bgblue-1 white"></i>DISCRIPTION
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="tab-link" data-tab="tab-2">
												<div class="link-top bggreen-1"></div>
												<i class="fa fa-map-marker bggreen-1 white"></i>map view
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="tab-link" data-tab="tab-3">
												<div class="link-top bgyallow-1"></div>
												<i class="fa fa-star bgyallow-1 white"></i>REVIEWS
											</div>
										</div>
									</div>
									<div id="tab-1" class="tab-content current">
										<h5>DISCRIPTION</h5>
										<h6>For Business Comment Login Required....</h6>
										<p >
											<?php echo @$description; ?>
										</p>
									</div>
									<div id="tab-2" class="tab-content">
										<h5>MAP</h5>
										<?php if($id!=''){ ?>
										<input type="hidden" id="placeid" name="placeid" value="<?php echo @$id; ?>">
										<?php }else{ ?>
										<input type="hidden" name="placeid" id="placeid" value="<?php echo @$placeid; ?>">
										<?php } ?>
											<div id="map"></div>
											<script>
										      // Initialize the map.
										      function initMap() {
										        var map = new google.maps.Map(document.getElementById('map'), {
										          zoom: 20,
										          center: {lat: 21.1702, lng: 72.8311}
										        });
										        var geocoder = new google.maps.Geocoder;
										        var infowindow = new google.maps.InfoWindow;

										        // document.getElementById('submit').addEventListener('click', function() {
										          geocodePlaceId(geocoder, map, infowindow);
										        // });
										      }

										      // This function is called when the user clicks the UI button requesting
										      // a geocode of a place ID.
										      function geocodePlaceId(geocoder, map, infowindow) {
										        var placeId = document.getElementById("placeid").value;
										        geocoder.geocode({'placeId': placeId}, function(results, status) {
										          if (status === 'OK') {
										            if (results[0]) {
										              map.setZoom(20);
										              map.setCenter(results[0].geometry.location);
										              var marker = new google.maps.Marker({
										                map: map,
										                position: results[0].geometry.location
										              });
										              infowindow.setContent(results[0].formatted_address);
										              infowindow.open(map, marker);
										            } else {
										              window.alert('No results found');
										            }
										          } else {
										            window.alert('Geocoder failed due to: ' + status);
										          }
										        });
										      }
										    </script>
										    <script async defer
										    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA6bwHhdkDozdIUXkrtsQdhTEUbWVJEwg&callback=initMap">
										    </script>
									</div>
									<div id="tab-3" class="tab-content">
										<?php if($cornot=='Claimed'){ ?>
										<p>
											<input type="hidden" name="business_id" id="business_id" value="<?php echo @$bid,@$bbid; ?>">
											<div class="score-callback" data-score="0" style="cursor: pointer;margin-left: 200px;">
												
											</div>
											<div class="thankyo" style="cursor: pointer;margin-left: 200px;display: none;">
												<p>Thank you for wating us......</p>
											</div>
										</p>
										<?php }else{?>
										<p>
											This Business Not Claimed yet....
										</p>
										<?php } ?>
									</div>	
								</div>
								<!-- 234567543245676543456788887434567890 -->
								<div class="listing-contact-detail-wrap">
									<div class="listing-contact-section-title">
										<h5>contact</h5>
									</div>
									<div class="listing-contact-section-table">
										<div class="listing-contact-table-field">
											<ul>
												<li class="info">Address</li>
												<li class="details"><?php echo @$address; ?></li>
											</ul>
										</div>


										
										<?php if(@$contact!=''){?>
										<div class="listing-contact-table-field">

											<ul>
												<li class="info">Mobile</li>
												<li class="details"><?php echo @$contact; ?></li>
											</ul>
										</div>
										<?php } ?>
										<!-- <div class="listing-contact-table-field">
											<ul>
												<li class="info">Landline</li>
												<li class="details">009 (123) 123 32 56</li>
											</ul>
										</div> -->
										<!-- <div class="listing-contact-table-field">
											<ul>
												<li class="info">E-mail</li>
												<li class="details">designsvilla@gmail.com</li>
											</ul>
										</div> -->
										<?php if(@$websiteurl!=''){?>
										<div class="listing-contact-table-field">
											<ul>
												<li class="info">Website</li>
												<li class="details"><?php echo @$websiteurl; ?></li>
											</ul>
										</div>
										<?php } ?>
										<?php if(@$types!=''){?>
										<div class="listing-contact-table-field">
											<ul>
												<li class="info">Category</li>
												<li class="details"><?php echo @$types; ?></li>
											</ul>
										</div>
										<?php } ?>
										<?php if(@$country==''){?>
										<div class="listing-contact-table-field">
											<ul>
												<li class="info">Location</li>
												<li class="details"><?php $split = explode(" ", @$address);

													echo $split[count($split)-1];?> </li>
											</ul>
										</div>
										<?php }?>
										<div class="listing-contact-table-field">
											<ul>
												<li class="info">Tags</li>
												<li class="details">Private Business</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- 234567543245676543456788887434567890 -->
								<div class="listing-feature-section">
									<div class="listing-feature-section-title">
										<h5>FEATURES</h5>
									</div>
									<div class="row listing-feature-wrapper clearfix">
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="feature-field">
												<i class="fa fa-check bggreen-4 white"></i>
												<p>Air conditioning</p>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="feature-field">
												<i class="fa fa-check bggreen-4 white"></i>
												<p>Outdoor Seating</p>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="feature-field">
												<i class="fa fa-check bggreen-4 white"></i>
												<p>Takes Reservation</p>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="feature-field">
												<i class="fa fa-check bggreen-4 white"></i>
												<p>Wifi</p>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="feature-field">
												<i class="fa fa-times bgred-3 white"></i>
												<p>Accepts Credit Cards</p>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="feature-field">
												<i class="fa fa-check bggreen-4 white"></i>
												<p>Alcohol</p>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="feature-field">
												<i class="fa fa-check bggreen-4 white"></i>
												<p>Good for Groups</p>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="feature-field">
												<i class="fa fa-check bggreen-4 white"></i>
												<p>Delivery</p>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="feature-field">
												<i class="fa fa-check bggreen-4 white"></i>
												<p>Take out</p>
											</div>
										</div>
									</div>
								</div>
								
								<!-- <div class="listing-video-section bgwhite">
									<div class="listing-video-section-title">
										<h5>VIDEO</h5>
									</div>
									<div class="listing-video-wrapper clearfix">  
										<div class="video">
											<img class="video-banner" src="<?php echo base_url("assets/user/"); ?>images/video-cover.jpg" alt="video">
											<div class="video-btn">
												<a href="https://player.vimeo.com/video/102732914?title=0&amp;byline=0&amp;portrait=0&amp;color=11b1c2&amp;wmode=opaque" class="html5lightbox nohover" data-width="570" data-height="320" title="title here "><i class="fa fa-play blue-1 "></i></a>
											</div>
										</div>			
									</div>
								</div> -->
								
								<!-- <div class="listing-owner-section">
									<div class="listing-owner-section-title">
										<h5>owner information</h5>
									</div>
									<div class="listing-owner-wrapper clearfix">
										<div class="listing-owner-figure pull-left">
											<img src="<?php echo base_url("assets/user/"); ?>images/listings/owner/01.jpg" alt="owner">
										</div>
										<div class="listing-owner-content pull-right">
											<a class="user" href="#"><i class="fa fa-user bgblue-1 white"></i>Designsvilla</a>
											<a class="contact-number" href="#"><i class="fa fa-phone bgblue-1 white"></i>(010) 1234 5678</a>
											<a class="owner-adress" href="#"><i class="fa fa-map-marker bgblue-1 white"></i>Wiston 23rd street # 2 London, UK </a>
											<a class="view-profile white bgblue-1" href="#">view profile</a>
										</div>
									</div>
								</div> -->
								<?php if($this->session->userdata("one_id") && $cornot=='Claimed' ){ ?>
								<div class="listing-owner-section">
									<div class="listing-owner-section-title">
										<h5>Comment...</h5>
									</div>
									<div class="listing-owner-wrapper clearfix">
										<div class="listing-owner-figure pull-left" style="padding: 0;width: 50px;">
											<img src="<?php echo base_url("upload/user/"),@$userinfo['image']; ?>" height="50" width="50" alt="owner" style="margin-top: 30px;">
										</div>
										<div class="listing-owner-content">
											<a href="javascript:void(0);" >
											<i class="fa fa-comment bgblue-1 white" style="margin-top: 10px;" onclick="give_cmt();"></i>
												<div class="listing-form-field col-sm-6">
													<input class="form-field bgwhite" type="text" id="comment" name="user_comment" placeholder="comment..." autocomplete="off"  />
													<input type="hidden" name="user_id" id="user_id" value="<?php echo @$userinfo['user_id']; ?>">
												</div>
											</a>
											<!-- <a class="view-profile white bgblue-1" href="#" style="height: 50px;">Comment</a> -->
										</div>
									</div>
									<div class="listing-owner-wrapper clearfix" id="all_comment">
										<?php if(sizeof($cmt)>0){ foreach ($cmt as $value) { ?>
										<div class="media">
											<img class="mr-3" src="<?php echo base_url("upload/user/"),@$value['image']; ?>" height="70" width="70" alt="owner" alt="Generic placeholder image" style="float:left;margin-right:10px; ">
											<?php echo @$value['name']; ?>
											<div class="media-body">
										    <input class="form-field bgwhite" type="text" value="<?php echo @$value['comment']; ?>" style="padding:15px 15px;border:1px solid #eee;margin-bottom:10px;box-shadow:none;" readonly/>
										  	</div>
										</div>
										<?php }} ?>
										<a href="javascript:void(0);" onclick="load_comments();">View All Comments</a>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div><!-- content area end -->
					<div class="col-md-3 col-sm-4 col-xs-12"><!-- sidebar column -->
						<div class="sidebar sidebar-wrap">
							<div hidden="" class="sidebar-widget shadow-1">
								<div class="sidebar-widget-title">
									<h5><span class="bgred-1"></span>SEARCH LISTINGS</h5>
								</div>
								<div class="sidebar-widget-content listing-search-bar  clearfix">
									<div class="sidebar-listing-search-wrap">
										<form action="#">
											<p class="blue-1">SEARCH FOR :</p>
											<select class="sidebar-listing-search-select">
												<option>ALL CATEGORIES</option>
												<option>ALL CATEGORIES</option>
												<option>ALL CATEGORIES</option>
											</select>
											<input class="sidebar-listing-search-input" placeholder="Search" name="search" type="text" />
											<p class="blue-1">SEARCH NEAR :</p>
											<select class="sidebar-listing-search-select">
												<option>ALL CATEGORIES</option>
												<option>ALL CATEGORIES</option>
												<option>ALL CATEGORIES</option>
											</select>
											
											<input class="sidebar-listing-search-input" placeholder="Search" name="search" type="text" />
											<p>Search In Radius</p>
											<div id="slider-range-min"></div>
											<p><a href="#">Advanced Search</a></p>
											<div class="listing-search-btn">
												<input class="sidebar-listing-search-btn white bgblue-1" value="SEARCH" type="submit" />
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="sidebar-widget shadow-1">
								<div class="sidebar-widget-title">
									<h5><span class="bgyallow-1"></span>recent posts</h5>
								</div>
								<div class="sidebar-widget-content recent-post clearfix">
									<div class="recent-post-entry clearfix">
										<div class="recent-entry-figure">
											<img src="<?php echo base_url("assets/user/"); ?>images/news/thumb/70/01.jpg" alt="recent post"/>
										</div>
										<div class="recent-entry-content">
											<p class="recent-entry-title"><a href="#">Hello Dirctorium</a></p>
											<p class="recent-entry-disc">Welcome Dirctorium</p>
											<p class="recent-entry-meta date">07 Sep, 2015</p>
										</div>
									</div>
									<div class="recent-post-entry clearfix">
										<div class="recent-entry-figure">
											<img src="<?php echo base_url("assets/user/"); ?>images/news/thumb/70/02.jpg" alt="recent post"/>
										</div>
										<div class="recent-entry-content">
											<p class="recent-entry-title"><a href="#">Hello Dirctorium</a></p>
											<p class="recent-entry-disc">Welcome Dirctorium</p>
											<p class="recent-entry-meta date">07 Sep, 2015</p>
										</div>
									</div>
									<div class="recent-post-entry clearfix">
										<div class="recent-entry-figure">
											<img src="<?php echo base_url("assets/user/"); ?>images/news/thumb/70/03.jpg" alt="recent post"/>
										</div>
										<div class="recent-entry-content">
											<p class="recent-entry-title"><a href="#">Hello Dirctorium</a></p>
											<p class="recent-entry-disc">Welcome Dirctorium</p>
											<p class="recent-entry-meta date">07 Sep, 2015</p>
										</div>
									</div>
								</div>
							</div>
							
							<div class="sidebar-widget shadow-1" <?php if(sizeof($weeks)==0) echo "hidden"; ?>>
								<div class="sidebar-widget-title">
									<h5><span class="bggreen-1"></span>opening hours</h5>
								</div>
								<div class="sidebar-widget-content opening-hours  clearfix">
									<div class="sidebar-opening-hours-widget">
										<!-- <div class="opening-hours-field clearfix" <?php //if(@$open_status=="true") echo "style='border-color:green;'"; ?> >
											<span>sunday</span>
											<span>9:00 am ~ 02:00 pm</span>
										</div> -->
										<?php if(sizeof($weeks)>0){ foreach ($weeks as $day) { ?>
										<div class="opening-hours-field clearfix" <?php if(date('D', strtotime(date('Y-m-d')))==strpos($day,date('D', strtotime(date('Y-m-d')) )) && @$open_status=="true") {echo "style='border-color:green;'";} else {
											echo "style='border-color:red;'";				
										} ?>>
											<span><?php if(date('D', strtotime(date('Y-m-d')))==strpos($day,date('D', strtotime(date('Y-m-d')) )) && @$open_status=="true") echo "<i class='fa fa-circle green'></i>" ?><?php echo $day; ?></span>
											<!-- <span>9:00 am ~ 02:00 pm</span> -->
										</div>
												<?php } }?>
										<!-- <div class="opening-hours-field clearfix">
											<span>tuesday</span>
											<span>9:00 am ~ 02:00 pm</span>
										</div>
										<div class="opening-hours-field clearfix">
											<span>wednesday</span>
											<span>9:00 am ~ 02:00 pm</span>
										</div>
										<div class="opening-hours-field clearfix">
											<span>thursday</span>
											<span>9:00 am ~ 02:00 pm</span>
										</div>
										<div class="opening-hours-field clearfix">
											<span>friday</span>
											<span>9:00 am ~ 02:00 pm</span>
										</div>
										<div class="opening-hours-field clearfix">
											<span>saturday</span>
											<span>9:00 am ~ 02:00 pm</span>
										</div> -->
									</div>
								</div>
							</div>
							
							<!-- <div class="sidebar-widget shadow-1">
								<div class="sidebar-widget-title">
									<h5><span class="bgblue-1"></span>ADVERTISING</h5>
								</div>
								<div class="sidebar-widget-content advertise  clearfix">
									<div class="sidebar-image-ads">
										<a href="#"><img src="<?php echo base_url("assets/user/"); ?>images/01.jpg" alt="custom-image"></a>
									</div>
								</div>
							</div> -->
							<!-- <div class="sidebar-widget shadow-1">
								<div class="sidebar-widget-title">
									<h5><span class="bggreen-2"></span>Item tags</h5>
								</div>
								<div class="sidebar-widget-content tags  clearfix">
									<div class="sidebar-tag-cloud">
										<ul>
											<li><a href="#">food</a></li>
											<li><a href="#">Marriage</a></li>
											<li><a href="#">Electronics</a></li>
											<li><a href="#">car</a></li>
											<li><a href="#">house</a></li>
											<li><a href="#">events</a></li>
											<li><a href="#">business</a></li>
											<li><a href="#">job</a></li>
										</ul>
									</div>
								</div>
							</div> -->
						</div>
					</div>		
				</div>
			</div><!-- section container end -->
		</section>
		
		<!--================================SOCIAL CAROUSEL SECTION==========================================-->
		
		<section class="social-section  style-2">
			<div class="container"><!-- section container -->
				<div class="row social-wrap clearfix">
					<div class="col-md-2 col-sm-4 col-xs-12 social-connect pull-left">
						<h5>let's connect</h5>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-12 social-links">
						<ul class="pull-right clearfix">
							<li class="item">
								<a class="" href="#"><i class="fa fa-twitter-square"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class="" href="#"><i class="fa fa-linkedin-square"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class="" href="#"><i class="fa fa-facebook-square"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class=" " href="#"><i class="fa fa-skype"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class="" href="#"><i class="fa fa-pinterest-square"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class="" href="#"><i class="fa fa-apple"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class="" href="#"><i class="fa fa-instagram"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class="" href="#"><i class="fa fa-google-plus-square"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class="" href="#"><i class="fa fa-dribbble"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class="" href="#"><i class="fa fa-youtube-play"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class="" href="#"><i class="fa fa-tumblr-square"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class="" href="#"><i class="fa fa-bitbucket-square"></i></a>
							</li><!-- .ITEM -->
							<li class="item">
								<a class="" href="#"><i class="fa fa-windows"></i></a>
							</li><!-- .ITEM -->
						</ul>
					</div>
				</div>
			</div><!-- container end -->
		</section>
		
	
<?php $this->load->view("user/footer"); ?>
<script>
	$(document).ready(function(){
		$(document).on("click",".star-on",function(e){
			e.preventDefault();
			var rev= $('input[name="score"]').val();
			var review='';
			var bid=$("#business_id").val();
			if(rev==1)
			{
				review="Bad";
			}
			if(rev==2)
			{
				review="Poor";
			}
			if(rev==3)
			{
				review="Regular";
			}
			if(rev==4)
			{
				review="Good";
			}
			if(rev==5)
			{
				review="Gorgeous";
			}

			$.ajax({
				url: '<?php echo site_url("user/home_con/give_review"); ?>',
				type: 'POST',
				data: {"bid":bid,"star":rev,"review":review},
				success: function(data){
					alert("Thank you for review..");
					$(".score-callback").css("display","none");
					$(".thankyo").css("display","block");
				},
				error: function(){
					alert("No review");
				}
			});

		});
	});
</script>
<!-- <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #floating-panel {
        width: 440px;
      }
      #place-id {
        width: 250px;
      }
    </style>
     -->
    
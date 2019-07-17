<!--================================ STATIC HEADER SECTION==========================================-->
	<style type="text/css">
		.pac-container
		{
			z-index: 201!important;
		}
	</style>	
		<section class="static-section">
			<div class="container">
				<div class="static-header-content">
					<div class="static-header-text">
						<h4 class="white">WELCOME TO <span class="blue-1"> Insta Find </span></h4>
						<h2 class="white margin-bottom-30">AMAZING  <span class="yallow-1"> opportunity for explore your</span> Business</h2>
					</div>
					<div class="search-form-wrap2" >
						<form class="clearfix" action="#" id="search-frm">
							<div style="position: relative;" class="input-field-wrap pull-left">
								<input id="pac-input" class="search-form-input controls" name="keyword" placeholder="enter keyword" type="text"/>
							</div>
							<!-- <input id="pac-input" class="controls" type="text" placeholder="Search Box"> -->
    <div id="map" style="height: 150px;display: none;" ></div>
    <script>
      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 21.1702, lng: 72.8311},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();
          //console.log(places)
          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          var html_content = '';
          places.forEach(function(place) {
            //console.log(place)
            //console.log(place.place_id)
            //var is_claimed = check_business(place.place_id);
            //console.log(is_claimed);  
            var images1='';
            var types1='';
            var weeks='';
            var open_status='';
            var placeids=<?php echo json_encode($placeids); ?>;
    		var cornot='Claim';
    		var disabled='onclick="demo1(this)"';
    		var cl='class="view-profile white bgblue-1 claimed"';
    		console.log(place)
    		//console.log(placeids);
    		//console.log(placeids[102].place_id);
    		for(var k=0;k<placeids.length;k++)
    		{
				if(place.place_id==placeids[k].place_id)
				{
					//$('.claimed').attr("disabled","disabled");
					cornot="Claimed";	
					disabled='';		
					cl='class="view-profile white bgred-1 claimed"'		
				}	
    		}
    		console.log(cornot);
            if(place.opening_hours)
            {
            	open_status=place.opening_hours.open_now;
            }
            else
            {
            	open_status='';
            }
            //console.log(place.photos[0].getUrl({'maxWidth': 500, 'maxHeight': 500}))
            
            if(place.photos)
            {
            	var images = place.photos[0].getUrl({'maxWidth': 270, 'maxHeight': 220})+'">';
            	for(var k=0;k<place.photos.length;k++){
	              images1+='<input hidden name="image[]" value="'+place.photos[k].getUrl({'maxWidth': 500, 'maxHeight': 500})+'">';
	            }
            }
            else
            {
            	var images ='<?php echo base_url("assets/user/");?>images/listings/270x220/03.jpg">';
            	images1='';
            }

            if(place.formatted_phone_number)
            {
            	var contact_no='<a href="#"><i class="fa fa-map-marker"></i>'+place.formatted_phone_number+'</a>';
            	var contact_no1=place.formatted_phone_number;
            }
            else
            {
            	var contact_no='';
            	var contact_no1='';
            }

            if(place.address_components)
            {
            	var csc='<input type="hidden" name="country" value="'+place.address_components[5].long_name+'">'+
											'<input type="hidden" name="state" value="'+place.address_components[4].long_name+'">'+
											'<input type="hidden" name="city" value="'+place.address_components[3].long_name+'">';
            }
            else
            {
            	var csc="";
            }

            if(place.types)
            {
            	for(var k=0;k<place.types.length;k++){
	              types1 += place.types[k]+",";
	            }
            }
            if(place.website)
            {
            	var website=place.website;
            }
            else
            {
            	var website='';
            }
            
            if(place.opening_hours)
            {
            	if(place.opening_hours.weekday_text.length==0)
            	{
            		weeks='';
            	}
            	for(var k=0;k<place.opening_hours.weekday_text.length;k++){
	              weeks += '<input name="weeks[]" type="hidden" value="'+place.opening_hours.weekday_text[k]+'" >';
	            }
            	
            }
            else
            {
            	weeks='';
            }
         //    if(place.photos.length>1)
         //    {
	        //     for(var k=0;k<place.photos.length;k++){
	        //       images1+='<input hidden name="image[]" value="'+place.photos[k].getUrl({'maxWidth': 500, 'maxHeight': 500})+'">';
	        //     }
	        // }
	        // else
	        // {
	        // 	images1='';
	        // }
            var rating_html = '';
            var round = Math.floor(place.rating);
            var remain = place.rating-round;
            var cnt = 0;
            for(var j=1;j<=round;j++){
            	cnt++;
            	rating_html +='<i class="star-on fa fa-star" style="color:#f6e200;" title="bad" data-score="1"></i>';
            }
            if(remain>0){
            	cnt++;
            	rating_html +='<i class="star-on fa fa-star-half-o" title="bad" style="color:#f6e200;" data-score="1"></i>';	
            }
            for(var l=cnt;l<5;l++){
            	rating_html +='<i class="star-on fa fa-star-o" style="color:#f6e200;" title="bad" data-score="1"></i>';	
            }
            html_content+='<div class="item col-md-3 col-sm-6 col-xs-12">'+
            '<form method="POST"  class="myform" name="claimform" target="_blank" action="<?php echo site_url('business/owner_con/add_business_claim');?>" >'+
										'<div class="listing-item clearfix">'+
											'<div alt="listing item" class="figure">'+
												'<img alt="no" src="'+images+
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
													'<a class="bgyallow-1" style="margin-bottom: 20px;" href="#" ><i class="fa fa-suitcase white"></i></a>'+
												'</div>'+
												'<div class="listing-title">'+
													'<h6><a href="javascript:void(0);" class="placename" onclick="demo(this)" value="'+place.name+'">'+place.name+'<br>'+'</a></h6>'+
												'</div>'+
												'<div class="listing-disc"><a style="font-size: 15px;" href="#"><i class="fa fa-map-marker"></i>'+place.formatted_address+'</a></div>'+
												'<div class="listing-location pull-left">'+
													'<a href="#"><i class="fa fa-phone-square"></i>'+place.formatted_address+'</a>'+
													''+contact_no+'</a>'+
												'</div>'+
												'<div class="listing-location pull-left">'+
													contact_no+
												'</div>'+
												'<div class="star-rating pull-right">'+
													'<div class="score-callback1" data-score="5">'+rating_html+place.rating+'&nbsp;</div>'+
												'</div>'+
											'</div>'+
											'<div class="pull-left" style="align:center;padding-left:300px;padding-top:10px;"><a href="javascript:void(0);" '+disabled+' style="padding: 20px;color: white;font-size: 20px;border-radius: 10%;width: 120px;" '+cl+' >'+cornot+'</a>'+
											'</div>'+
											'<input type="hidden" name="bname" value="'+place.name+'">'+
											'<input type="hidden" name="badd" value="'+place.formatted_address+'">'+
											// '<input type="hidden" name="placeid" value="'+place.id+'">'+
											'<input type="hidden" name="websiteurl" value="'+website+'">'+
											'<input type="hidden" name="types" value="'+types1+'">'+
											'<input type="hidden" name="openstatus" value="'+open_status+'">'+
											'<input type="hidden" name="placeid1" value="'+place.place_id+'">'+
											'<input type="hidden" name="cornot" value="'+cornot+'">'+
											'<input type="hidden" name="contact" value="'+contact_no1+'">'+images1+weeks+
											csc+
										'</div>'+
									'</form></div>';
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          document.getElementById('content').innerHTML = html_content;
          map.fitBounds(bounds);
        });
      }
      $(document).ready(function(){
      	$('#search-frm').submit(function(e){
      		e.preventDefault();
      		$('html, body').animate({
		        scrollTop: $("#content").offset().top
		    }, 1000);
      	})	
      })
      
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA6bwHhdkDozdIUXkrtsQdhTEUbWVJEwg&libraries=places&callback=initAutocomplete"
         async defer></script>
         <!-- <div id="content"  >
           
         </div> -->
							<div class="select-field-wrap pull-left">
								<select class="search-form-select" name="categories" >
									<option class="options" value="all-categories">Country</option>
									<option class="options" value="america">India</option>
									
								</select>
							</div>
							<div class="submit-field-wrap pull-left">
								<input class="search-form-submit bgblue-1 white" name="key-word" type="submit"/>
							</div>
						</form>
					</div>
				
				</div>
			</div>
		</section>
		
		<!--================================SERVICES SECTION==========================================-->
		
		<section class="our-services">
			<div class="container">
				<div class="row services-wrap padding-bottom-70">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="service-box bgwhite shadow-2">
							<div class="service-tag">
								<img src="<?php echo base_url();?>assets/user/images/services-tag.png" alt="services tag"/>
							</div>
							<div class="service-icon">
								<i class="fa fa-search red-1"></i>
							</div>
							<div class="service-title">
								<h5>Find What You Want</h5>
							</div>
							<div class="service-disc">
								<p>Search and filter hundreds of listings, read reviews, explore photos and find the perfect spot. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="service-box bgwhite shadow-2">
							<div class="service-tag">
								<img src="<?php echo base_url();?>assets/user/images/services-tag.png" alt="services tag"/>
							</div>
							<div class="service-icon">
								<i class="fa fa-map-marker green-1"></i>
							</div>
							<div class="service-title">
								<h5>Choose What To Do</h5>
							</div>
							<div class="service-disc">
								<p>Search and filter hundreds of listings, read reviews, explore photos and find the perfect spot. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="service-box bgwhite shadow-2">
							<div class="service-tag">
								<img src="<?php echo base_url();?>assets/user/images/services-tag.png" alt="services tag"/>
							</div>
							<div class="service-icon">
								<i class="fa fa-globe blue-1"></i>
							</div>
							<div class="service-title">
								<h5>Explore New Places</h5>
							</div>
							<div class="service-disc">
								<p>Search and filter hundreds of listings, read reviews, explore photos and find the perfect spot. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!--================================FEATURE LISTING SECTION==========================================-->
				
		<!--================================CATEGOTY SECTION==========================================-->
		
		<section class="categories-section padding-top-70 padding-bottom-40">
			<div class="container"><!-- section container -->
				<div class="section-title-wrap margin-bottom-50"><!-- section title -->
					<h4><CENTER></CENTER>Classified Category</h4>
					<div class="title-divider">
						<div class="line"></div>
						<i class="fa fa-star-o"></i>
						<div class="line"></div>
					</div>
				</div><!-- section title end -->
				<div class="row category-section-wrap cat-style-1">
					<div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							<h5>Health & Fitness <i class="fa fa-heart blue-1"></i></h5>
							<div class="cat-list-wrap">
								<img src="<?php echo base_url(); ?>upload/category/health_fitness.jpeg" height="220" width="310">
							</div>
						</div>
					</div><!-- category column end -->
					<div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							<h5>hotels & travel <i class="fa fa-paper-plane green-1"></i></h5>
							<div class="cat-list-wrap">
								<img src="<?php echo base_url(); ?>upload/category/hotel.jpeg" height="220" width="310">
							</div>
						</div>
					</div><!-- category column end -->
					<div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							<h5>jobs <i class="fa fa-suitcase yallow-1"></i></h5>
							<div class="cat-list-wrap">
								<img src="<?php echo base_url(); ?>upload/category/health_fitness.jpeg" height="220" width="310">
							</div>
						</div>
					</div><!-- category column end -->
					<div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							<h5>beauty & spas <i class="fa fa-eye purpal-1"></i></h5>
							<div class="cat-list-wrap">
								<img src="<?php echo base_url(); ?>upload/category/beautyspa.jpeg" height="220" width="310">
							</div>
						</div>
					</div><!-- category column end -->
					<div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							<h5>Real estate <i class="fa fa-home green-2"></i></h5>
							<div class="cat-list-wrap">
								<img src="<?php echo base_url(); ?>upload/category/realestate.jpeg" height="220" width="310">
							</div>
						</div>
					</div><!-- category column end -->
					<div class="col-md-4 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							<h5>entertainment <i class="fa fa-female orange-1"></i></h5>
							<div class="cat-list-wrap">
								<img src="<?php echo base_url(); ?>upload/category/entertainment.jpeg" height="220" width="310">
							</div>
						</div>
					</div><!-- category column end -->
				</div>
			</div><!-- section container end -->
		</section>
		
		<!--================================LISTING SECTION ==========================================-->
		
		<section class="listing-section padding-bottom-40">
			<div class="container"><!-- section container -->
				<div class="section-title-wrap margin-bottom-50"><!-- section title -->
					<h4>BUSINESSES</h4>
					<div class="title-divider">
						<div class="line"></div>
						<i class="fa fa-star-o"></i>
						<div class="line"></div>
					</div>
				</div><!-- section title end -->
				<div class="add-listing-wrapper">
					<!-- <div class="add-listing-nav shadow-1">
						<div class="row clearfix">
							<div class="col-md-6 col-sm-6 col-xs-6 pull-left">
								<div class="listing-tabs">
									<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#latest-listing">Latest ads</a></li>
										<li><a data-toggle="tab" href="#recent-listing">Recent ads</a></li>
										<li><a data-toggle="tab" href="#popular-listing">popular ads</a></li>
									</ul>
									
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 pull-right">
								<div class="view-switcher">
									<ul>
										<li class="gridview active"><i class="fa fa-th"></i></li>
										<li class="listview"><i class="fa fa-th-list"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div> -->
					<div class="listing-main listview tab-content padding-top-50">
						  <div id="latest-listing" class="tab-pane active">
								<div class="listing-wrapper row"  id="content">
								</div>
							</div>
					</div>
				</div>
			</div><!-- section container end -->
		</section>
		
		<!--================================LOCATION SECTION==========================================-->
		
		<section class="location-section padding-top-70 padding-bottom-40 bgwhite">
			<div class="container"><!-- section container -->
				<div class="section-title-wrap margin-bottom-50"><!-- section title -->
					<h4>EXPLORE THE Events</h4>
					<div class="title-divider">
						<div class="line"></div>
						<i class="fa fa-star-o"></i>
						<div class="line"></div>
					</div>
				</div><!-- section title end -->
				<div class="location-wrapper style1">
					<div class="row">
						<?php foreach ($event as $value) { ?>
						<div class="col-md-4 col-sm-6 col-xs-12"><!--blog entry column-->
							<div class="location-entry">
								<div class="figure">
									<img src="<?php echo base_url("upload/event/"),$value['image1'];?>" width="370" height="414" alt="location"/>
									<div class="location-content-1 clearfix">
										<div class="location-icon">
											<i class="fa fa-map-marker bgblue-1 white"></i>
										</div>
										<div class="location-title-disc">
											<h5><a class="number-adds" href="#"><?php echo @$value['event_title']; ?></a></h5>
											<h5><a class="number-adds" href="javascript:void(0);"><?php echo @$value['start_date']." to ".@$value['end_date']; ?></a></h5>
											<input type="hidden" name="event_id" value="<?php echo @$value['event_id']; ?>">
										</div>
									</div>
								</div>
							</div>
						</div><!--blog entry column end-->
						<?php } ?>
					</div>
				</div>
			</div><!-- section container end -->
		</section>
		
		<!--================================FUNFACTS COUNTER SECTION==========================================-->
		
		<section id="funfact" class=" padding-top-150 padding-bottom-100" >
			<div class="container">
				<div class="row padding-bottom-20" id="funfact-1">
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-30 text-center clearfix">
						<div class="funfact-1 color-1  clearfix">
							<div class="fun-wrap">
								<div class="count" id="items" data-to="50" data-speed="4000"><?php echo $ttlbusiness;?></div>
								<div class="funfact-divider"></div>
								<div class="funfact"><p> Claimed Business</p></div>
							</div>
						</div>
					</div><!-- /.col-md-3 col -->
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-30 text-center clearfix">
						<div class="funfact-1 color-1  clearfix">
							<div class="fun-wrap">
								<div class="count" id="location" data-to="210" data-speed="4000"><?php echo $ttluser;?></div>
								<div class="funfact-divider"></div>
								<div class="funfact"><p> User</p></div>
							</div>
						</div>
					</div><!-- /.col-md-3 col -->  				
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-30 text-center clearfix">
						<div class="funfact-1 color-1  clearfix">
							<div class="fun-wrap">
								<div class="count" id="projects" data-to="795" data-speed="4000"><?php echo $ttlcomment;?></div>
								<div class="funfact-divider"></div>
								<div class="funfact"><p> Comment</p></div>
							</div>
						</div>
					</div><!-- /.col-md-3 col -->
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-30 text-center clearfix">
						<div class="funfact-1 color-1  clearfix">
							<div class="fun-wrap">
								<div class="count" id="events" data-to="158" data-speed="4000"><?php echo $ttlreview;?></div>
								<div class="funfact-divider"></div>
								<div class="funfact"><p> Review</p></div>
							</div>
						</div>
					</div><!-- /.col-md-3 col -->
				</div><!-- /#funfact-1 -->
			</div><!-- container end -->
		</section>
		
		
		<!--================================TESTIMONIAL SECTION==========================================-->
		
		<!-- <section class="testimonial-section bgwhite">
			<div class="container-fluid"><!-- section container
				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer
						<div class="es-carousel-wrapper">
							<div class="es-carousel">
								<ul class="clearfix" style="width: 214px; display: block; margin-left: 0px;">
									<li class="selected" style="margin-right: 3px; width: 120px;"><a href="#" style="border-width: 2px;"><img src="<?php echo base_url("assets/user/"); ?>images/testimonial/th1.jpg" data-large="images/testimonial/1.jpg" alt="image01" data-description="Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain. Completely synergize resource taxing via premier niche markets. Professionally cultivate one-to-one customer ." data-author="Adam Butler" data-position="CEO" data-orgnization=" Listing inc."></a></li>
									<li style="margin-right: 3px; width: 120px;"><a href="#" style="border-width: 2px;"><img src="<?php echo base_url("assets/user/"); ?>images/testimonial/th2.jpg" data-large="images/testimonial/2.jpg" alt="image02" data-description="Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain. Completely synergize resource taxing via premier niche markets." data-author="Adam Butler" data-position="CEO" data-orgnization=" Listing inc."></a></li>
									<li style="margin-right: 3px; width: 120px;"><a href="#" style="border-width: 2px;"><img src="<?php echo base_url("assets/user/"); ?>images/testimonial/th3.jpg" data-large="images/testimonial/3.jpg" alt="image03" data-description="Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain. Completely synergize resource taxing via premier niche markets. Professionally cultivate one-to-one customer ." data-author="Adam Butler" data-position="CEO" data-orgnization=" Listing inc."></a></li>	
								</ul>
							</div>
						<div class="es-nav"><span class="es-nav-prev" style="display: none;">Previous</span><span class="es-nav-next" style="display: none;">Next</span></div></div>
						<!-- End Elastislide Carousel Thumbnail Viewer
					</div><!-- rg-thumbs 
				<div class="rg-image-wrapper">     <div class="rg-image"><img src="<?php echo base_url("assets/user/"); ?>images/testimonial/1.jpg"></div>     <div class="rg-caption-wrapper">      <div class="rg-caption" style="">       <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain. Completely synergize resource taxing via premier niche markets. Professionally cultivate one-to-one customer .</p>       <h5>Adam Butler</h5>       <div class="caption-metas">        <p class="position">CEO</p>        <p class="orgnization"> Listing inc.</p>       </div>      </div>     </div>     <div class="clear"></div>    </div></div><!-- rg-gallery 
			</div><!-- section container end
		</section> -->
		
		
		<!--================================CALLOUT SECTION==========================================-->
		
		<section class="callout-section padding-top-70 padding-bottom-70 bgwhite">
			<div class="container"><!-- section container -->
				<div class="callout-wrapper">
					<div class="callout-1">
						<div class="callout-message"><!--blog entry column-->
							<h2 class="white">START YOUR new<span class="blue-1">BUSINESS</span></h2>
							<h4 class="white">AMAZING<span class="yallow-1">classified</span>Businesses</h4>
						</div><!--blog entry column end-->
						<!-- <div class="callout-btns"><!--blog entry column-->
							<!-- <a class="bgblue-1 white" href="#">Read More</a> -->
							<!-- <a class="bggreen-1 white" href="#">Purchase</a> -->
						</div> <!--blog entry column end-->
					</div>
				</div>
			</div><!-- section container end -->
		</section>
		
		
		<!--================================BLOG SECTION==========================================-->
		
		
		<!--================================ PARTNER SECTION ==========================================-->
		
		<section class="partner-section padding-top-70 padding-bottom-40">
			<div class="container"><!-- section container -->
				<div class="section-title-wrap margin-bottom-50"><!-- section title -->
					<h4>partners</h4>
					<div class="title-divider">
						<div class="line"></div>
						<i class="fa fa-star-o"></i>
						<div class="line"></div>
					</div>
				</div><!-- section title end -->
				
				<div class="row partner-wrap style-1 clearfix">
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 margin-bottom-30"><!-- .partner -->
						<div class="partner shadow-1 clearfix">
							<a href="#"><img src="<?php echo base_url();?>assets/user/images/partner/01.jpg" alt="partner"/></a>
						</div>
					</div><!-- partner end -->
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 margin-bottom-30"><!-- .partner -->
						<div class="partner shadow-1 clearfix">
							<a href="#"><img src="<?php echo base_url();?>assets/user/images/partner/02.jpg" alt="partner"/></a>
						</div>
					</div><!-- partner end -->
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 margin-bottom-30"><!-- .partner -->
						<div class="partner shadow-1 clearfix">
							<a href="#"><img src="<?php echo base_url();?>assets/user/images/partner/03.jpg" alt="partner"/></a>
						</div>
					</div><!-- partner end -->
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 margin-bottom-30"><!-- .partner -->
						<div class="partner shadow-1 clearfix">
							<a href="#"><img src="<?php echo base_url();?>assets/user/images/partner/04.jpg" alt="partner"/></a>
						</div>
					</div><!-- partner end -->
				</div><!-- .row partner end -->
			</div><!-- container end -->
		</section>
		
		<!--================================SOCIAL SECTION==========================================-->
		
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

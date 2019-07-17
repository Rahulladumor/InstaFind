<?php $this->load->view('admin/header');?> 

		<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						<!-- #section:basics/content.searchbox -->
						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->

						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<!-- #section:settings.skins -->
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<!-- /section:settings.skins -->

									<!-- #section:settings.navbar -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<!-- /section:settings.navbar -->

									<!-- #section:settings.sidebar -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<!-- /section:settings.sidebar -->

									<!-- #section:settings.breadcrumbs -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<!-- /section:settings.breadcrumbs -->

									<!-- #section:settings.rtl -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<!-- /section:settings.rtl -->

									<!-- #section:settings.container -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>

									<!-- /section:settings.container -->
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<!-- #section:basics/sidebar.options -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>

									<!-- /section:basics/sidebar.options -->
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									overview &amp; stats
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									Welcome to
									<strong class="green">
										Insta-find
										
									</strong>,
									the lightweight, feature-rich and easy to use Instafind.
								</div>

								<div class="row">
									<div class="space-6"></div>

									<div class="col-sm-5 infobox-container" style="width: 100%;">
										<!-- #section:pages/dashboard.infobox -->
										<div class="infobox infobox-green" style="height: 150px;margin-right: 10px;margin-bottom: 10px;margin-left: 0;">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-user"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><div class="counter" data-count="<?php echo $total_admin; ?>"></div></span>
												<div class="infobox-content">Total Admins</div>
											</div>
										</div>
										<div class="infobox infobox-green" style="height: 150px;margin-right: 10px;margin-bottom: 10px;margin-left: 0;">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-users"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><div class="counter" style="color:<?php echo "#A4".rand(0,999)."3";?>" data-count="<?php echo $total_user; ?>"></div></span>
												<div class="infobox-content">Total User</div>
											</div>
										</div>
										<div class="infobox infobox-green" style="height: 150px;margin-right: 10px;margin-bottom: 10px;margin-left: 0;">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-suitcase"></i>
											</div>


											<div class="infobox-data">
												<span class="infobox-data-number"><div class="counter" data-count="<?php echo $total_business; ?>"></div></span>
												<div class="infobox-content">Total Business</div>
												<br>
												<div class="infobox-content" style="float: left;">Active:&nbsp;&nbsp;</div>
												<div class="counter" data-count="<?php echo $total_active; ?>"></div>
												<br>
												<div class="infobox-content" style="float: left;">Block:&nbsp;&nbsp;</div>
												<div class="counter" data-count="<?php echo $total_block; ?>"></div>
											</div>
										</div>
										<div class="infobox infobox-green" style="height: 150px;margin-right: 10px;margin-bottom: 10px;margin-left: 0;">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-star"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><div class="counter" data-count="<?php echo $total_category; ?>"></div>
												</span>

												<div class="infobox-content">Total Category</div>
												<br>
												<div class="infobox-content" style="float: left;">Sub-Category:&nbsp;&nbsp;</div>
												<div class="counter" data-count="<?php echo $total_subcategory; ?>"></div>
											</div>
										</div>
										<div class="infobox infobox-green" style="height: 150px;margin-right: 10px;margin-bottom: 10px;margin-left: 0;">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><div class="counter" data-count="<?php echo $total_country; ?>"></div></span>
												<div class="infobox-content">Total Country</div>
												<br>
												<div class="infobox-content" style="float: left;">Total-State:&nbsp;&nbsp;</div>
												<div class="counter" data-count="<?php echo $total_state; ?>"></div>
												<br>
												<div class="infobox-content" style="float: left;">Total-city:&nbsp;&nbsp;</div>
												<div class="counter" data-count="<?php echo $total_city; ?>"></div>
											</div>
										</div>
										<div class="infobox infobox-green" style="height: 150px;margin-right: 10px;margin-bottom: 10px;margin-left: 0;">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><div class="counter" data-count="<?php echo $total_package; ?>" ></div></span>
												<div class="infobox-content">Total Packge</div>
											</div>
										</div>
										<div class="infobox infobox-green" style="height: 150px;margin-right: 10px;margin-bottom: 10px;margin-left: 0;">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-star"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><div class="counter" data-count="<?php echo $total_cityadmin; ?>"></div></span>
												<div class="infobox-content">Total City-admin</div>
											</div>
										</div>
										<div class="infobox infobox-green" style="height: 150px;margin-right: 10px;margin-bottom: 10px;margin-left: 0;">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-user"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><div class="counter" data-count="<?php echo $total_package; ?>"></div></span>
												<div class="infobox-content">Total Payment</div>
											</div>
										</div>
										<div class="infobox infobox-green" style="height: 150px;margin-right: 10px;margin-bottom: 10px;margin-left: 0;">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><div class="counter" data-count="<?php echo $total_event; ?>"></div></span>
												<div class="infobox-content">Total Events</div>
											</div>
										</div>
										<div class="infobox infobox-green" style="height: 150px;margin-right: 10px;margin-bottom: 10px;margin-left: 0;">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><div class="counter" data-count="<?php echo $total_comment; ?>"></div></span>
												<div class="infobox-content">Total Comments</div>
											</div>
										</div>
										<div class="infobox infobox-green" style="height: 150px;margin-right: 10px;margin-bottom: 10px;margin-left: 0;">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><div class="counter" data-count="<?php echo $total_subscriber; ?>"></div></span>
												<div class="infobox-content">Total Subscriber</div>
											</div>
										</div>

										<!-- /section:pages/dashboard.infobox.dark -->
									</div>

									
								</div><!-- /.row -->

								<!-- #section:custom/extra.hr -->
								<div class="hr hr32 hr-dotted"></div>

								<!-- /section:custom/extra.hr -->
								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<script>
				$('.counter').each(function() {
				  var $this = $(this),
				      countTo = $this.attr('data-count');
				  
				  $({ countNum: $this.text()}).animate({
				    countNum: countTo
				  },
				  {
				    duration: 3000,
				    easing:'linear',
				    step: function() {
				  //   	var colors = ['#00FF00','#FFFF00','#FF7F00','#FF0000'];
						// var random_color = colors[Math.floor(Math.random() * colors.length)];
						// $('.counter').css("color",random_color) ;
				      $this.text(Math.floor(this.countNum));
				    },
				    complete: function() {
				      $this.text(this.countNum);
				      //alert('finished');
				    }});  
				});
			</script>
<?php $this->load->view('admin/footer');?> 

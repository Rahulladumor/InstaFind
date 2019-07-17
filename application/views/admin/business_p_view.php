<?php
$this->load->view('admin/header');
//echo "<pre>";
?>
<div class="main-content">
            <div class="main-content-inner">
               <!-- #section:basics/content.breadcrumbs -->
               <div class="breadcrumbs" id="breadcrumbs">
                  <script type="text/javascript">
                     try{ace.settings.check(breadcrumbs , fixed)}catch(e){}
                  </script>

                  <ul class="breadcrumb">
                     <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                     </li>

                     <li>
                        <a href="#">Business</a>
                     </li>
                     <li class="active">Single Business</li>
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
                        Business
                        <small>
                           <i class="ace-icon fa fa-angle-double-right"></i>
                           Business Tables
                        </small>
                     </h1>
                  </div><!-- /.page-header -->
           

         
         <!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
   <form action="" method="POST">
<div class="form-group col-md-6">
  <label for="usr">Business ID:</label>
  <input type="text" class="form-control" id="usr" value="<?php echo @$data['business_id'];?>" readonly>
</div>

<div class="form-group col-md-6">
  <label for="usr">Category:</label>
  <input type="text" class="form-control" id="usr" value="<?php echo @$data['cat_name'];?>" readonly>
  <label for="usr">Sub-category:</label>
  <input type="text" class="form-control" id="usr" value="<?php echo @$data['scat_name'];?>" readonly>
</div>


  <div class="form-group col-md-6">
  <label for="usr">Business Name:</label>
  <input type="text" class="form-control" id="usr" value="<?php echo @$data['name'];?>" readonly>
</div>
 <div class="form-group col-md-6">
  <label for="comment">Address:</label>
  <textarea class="form-control" rows="5" id="comment"  readonly><?php echo @$data['address'];?></textarea>
</div>
 <div class="form-group col-md-6">
    <label for="email">Email:</label>
    <input value="<?php echo @$data['email'];?>" readonly type="email" class="form-control" id="email">
  </div>
  <div class="form-group col-md-6">
  <label for="usr">Contact:</label>
  <input type="text" value="<?php echo @$data['contact'];?>" readonly class="form-control" id="usr">
</div>
<div class="form-group col-md-6">
  <label for="usr">Business Start Date:</label>
  <input type="text" value="<?php echo @$data['buss_starting_date'];?>" readonly class="form-control" id="usr">
</div>


<div class="form-group col-md-6">
  <label for="usr">Opening hour:</label>
  <input type="text"  value="<?php echo @$data['op_hour'];?>" readonly class="form-control" id="usr">
</div>
<div class="form-group col-md-6">
  <label for="usr">Closing hour:</label>
  <input type="text" value="<?php echo @$data['cl_hour'];?>" readonly class="form-control" id="usr">
</div>

<div class="form-group col-md-6">
  <label for="comment">Description:</label>
  <textarea class="form-control" rows="5" id="comment"  readonly><?php echo @$data['description'];?></textarea>
</div>

<?php  foreach($b_image as $image1 )
{
  ?>

  <div class="form-group col-md-6"> 
  <label for="usr">Image:</label>
 <img height="200" width="200" src="<?php echo base_url('upload/business/').$image1['image']; ?>"  class="img-rounded" alt="Cinque Terre">
</div> 

<?php
}
 
?>
 --><!-- 
<div class="form-group col-md-6">
  <label for="usr">Image 2:</label>
  <img height="200" width="200" src="<?php echo base_url('upload/business/').$data['img2']; ?>" class="img-rounded" alt="Cinque Terre">
</div>
<div class="form-group col-md-6">
  <label for="usr">Image 3:</label>
  <img height="200" width="200" src="<?php echo base_url('upload/business/').$data['img3']; ?>" class="img-rounded" alt="Cinque Terre">
</div>
<div class="form-group col-md-6">
  <label for="usr">Image 4:</label>
  <img height="200" width="200" src="<?php echo base_url('upload/business/').$data['img4']; ?>" class="img-rounded" alt="Cinque Terre">
</div>
<div class="form-group col-md-6">
  <label for="usr">Image 5:</label>
 <img height="200" width="200" src="<?php echo base_url('upload/business/').$data['img5']; ?>" class="img-rounded" alt="Cinque Terre">
</div>
<div class="form-group col-md-6">
  <label for="usr">Image 6:</label>
  <img height="200" width="200" src="<?php echo base_url('upload/business/').$data['img6']; ?>" class="img-rounded" alt="Cinque Terre">
</div>
<div class="form-group col-md-6">
  <label for="usr">Image 7:</label>
 <img height="200" width="200" src="<?php echo base_url('upload/business/').$data['img7']; ?>" class="img-rounded" alt="Cinque Terre">
</div>
<div class="form-group col-md-6">
  <label for="usr">Image 8:</label>
  <img height="200" width="200" src="<?php echo base_url('upload/business/').$data['img8']; ?>" class="img-rounded" alt="Cinque Terre">
</div>
<div class="form-group col-md-6">
  <label for="usr">Image 9:</label>
  <img height="200" width="200" src="<?php echo base_url('upload/business/').$data['img9']; ?>" class="img-rounded" alt="Cinque Terre">
</div>
<div class="form-group col-md-6">
  <label for="usr">Image 10:</label>
  <img height="200" width="200" src="<?php echo base_url('upload/business/').$data['img10']; ?>" class="img-rounded" alt="Cinque Terre">
</div>

   
</form>
</div>
</body>
</html>

<?php

//$this->load->view('admin/footer');
?>
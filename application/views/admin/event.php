<?php $this->load->view("admin/header"); ?>
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
                        <a href="#">Tables</a>
                     </li>
                     <li class="active">Simple &amp; Dynamic</li>
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
                        Country
                        <small>
                           <i class="ace-icon fa fa-angle-double-right"></i>
                           Add &amp; View Table
                        </small>
                     </h1>
                  </div><!-- /.page-header -->
                  <div style="margin-bottom: 10px;">
                     <button style="border-radius: 10%;" id="addpackage" class="btn btn-info" data-toggle="modal" data-target="#addmodal"><i style="font-size: 30px;" class="ace-icon fa fa-plus-circle">Add</i></span>
                     </button>
                  </div>
                  <div class="row">
                     <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                           <div class="col-xs-12">
                              <!-- <table id="simple-table" class="table table-striped table-bordered table-hover" style="width: 60%;border: 0;">
                                 <thead>
                                    <tr>
                                       <th class="center">
                                          <label class="pos-rel">
                                             <input type="checkbox" class="ace" />
                                             <span class="lbl"></span>
                                          </label>
                                       </th>
                                       <th class="center bigger-120">ID</th>
                                       <th class="center bigger-120">Country</th>                 
                                       <th class="center bigger-120">Action</th>
                                    </tr>
                                 </thead>

                                 <tbody id="showdata">                           

                                 </tbody>
                                 
                              </table> -->
                              <div align="Left" id="pagination_link" style="margin-left: 200px;"></div>
                              <input type="hidden" id="cpage">
                           </div><!-- /.span -->
                        </div><!-- /.row -->

                        <div class="hr hr-18 dotted hr-double"></div>

                        <!-- PAGE CONTENT ENDS -->
                     </div><!-- /.col -->
                  </div><!-- /.row -->
               </div><!-- /.page-content -->
            </div>
         </div><!-- /.main-content -->
         <!-- =============================ADD MODAL=================================== -->
<form method="post" id="addform">
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" style="z-index: 9999;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><span>Add Country</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      	<div class="modal-body" style="height: 350px;">
        	<div class="form-group" style="padding-left: 120px;">
				<label class="col-sm-3 control-label no-padding-right" for="from-field-1">Event Title</label>

					<div class="col-sm-9" style="padding-bottom: 5px;">
						<input type="text" id="v_event" placeholder="Event title" name="v_event" class="col-xs-10 col-sm-7" />
					</div>
			</div>
			<div class="form-group" style="padding-left: 120px;">
				<label class="col-sm-3 control-label no-padding-right" for="from-field-1">Start-date</label>
        <div class="col-xs-8 col-sm-11">
                                <div class="input-group">
                                  <span class="input-group-addon">
                                    <i class="fa fa-calendar bigger-110"></i>
                                  </span>

                                  <input class="form-control" type="text" name="date-range-picker" id="id-date-range-picker-1">
                                </div>
                              </div>
					<div class="input-daterange input-group">
						<input type="text" class="input-sm form-control" name="start">
						<span class="input-group-addon">
							<i class="fa fa-exchange"></i>
						</span>

						<input type="text" class="input-sm form-control" name="end">
					</div>
			</div>    
			<div class="form-group" style="padding-left: 120px;">
				<label class="col-sm-3 control-label no-padding-right" for="from-field-1">End-date</label>

					<div class="col-sm-9" style="padding-bottom: 5px;">
						<input type="date" id="v_event" placeholder="Event title" name="v_event" class="col-xs-10 col-sm-7" />
					</div>
			</div>
			<div class="form-group" style="padding-left: 120px;">
				<label class="col-sm-3 control-label no-padding-right" for="from-field-1">Start-time</label>

					<div class="col-sm-9" style="padding-bottom: 5px;">
						<input type="time" id="v_event" placeholder="Event title" name="v_event" class="col-xs-10 col-sm-7" />
					</div>
			</div>
			<div class="form-group" style="padding-left: 120px;">
				<label class="col-sm-3 control-label no-padding-right" for="from-field-1">End-time</label>

					<div class="col-sm-9" style="padding-bottom: 5px;">
						<input type="time" id="v_event" placeholder="Event title" name="v_event" class="col-xs-10 col-sm-7" />
					</div>
			</div>
			<div class="form-group" style="padding-left: 120px;">
				<label class="col-sm-3 control-label no-padding-right" for="from-field-1">Price</label>

					<div class="col-sm-9" style="padding-bottom: 5px;">
						<input type="calender" id="v_event" placeholder="Event title" name="v_event" class="col-xs-10 col-sm-7" />
					</div>
			</div>
			<div class="form-group" style="padding-left: 120px;">
				<label class="col-sm-3 control-label no-padding-right" for="from-field-1">Location</label>

					<div class="col-sm-9" style="padding-bottom: 5px;">
						<input type="calender" id="v_event" placeholder="Event title" name="v_event" class="col-xs-10 col-sm-7" />
					</div>
			</div>
			<div class="form-group" style="padding-left: 120px;">
				<label class="col-sm-3 control-label no-padding-right" for="from-field-1">Description</label>

					<div class="col-sm-9" style="padding-bottom: 5px;">
						<input type="calender" id="v_event" placeholder="Event title" name="v_event" class="col-xs-10 col-sm-7" />
					</div>
			</div>
			<div class="form-group" style="padding-left: 120px;">
				<label class="col-sm-3 control-label no-padding-right" for="from-field-1">Helpline</label>

					<div class="col-sm-9" style="padding-bottom: 5px;">
						<input type="calender" id="v_event" placeholder="Event title" name="v_event" class="col-xs-10 col-sm-7" />
					</div>
			</div>
			<div class="form-group" style="padding-left: 120px;">
				<label class="col-sm-3 control-label no-padding-right" for="from-field-1">Image</label>

					<div class="col-sm-9" style="padding-bottom: 5px;">
						<input type="calender" id="v_event" placeholder="Event title" name="v_event" class="col-xs-10 col-sm-7" />
					</div>
			</div>

		</div>                    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="addbtn" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- ===============================ADD MODAL===================================== -->

<!-- =============================EDIT MODAL=================================== -->
<form method="post" id="editform">
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" style="z-index: 9999;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><span>Edit Country</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body" style="height: 70px;">
        <div class="form-group">
        	<label class="col-sm-3 control-label no-padding-right" for="from-field-1">Country Name</label>

          <div class="col-sm-9">
            <input type="text" id="v_country2" placeholder="Enter Country Name" name="v_country" class="col-xs-10 col-sm-5" />
          </div>
      	</div>    
    </div>                    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="editbtn" class="btn btn-primary">Edit</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- ===============================EDIT MODAL===================================== -->
<script src="<?php echo base_url('assets/admin')?>/assets/js/jquery-3.2.1.min.js"></script>
<script>
  function show_country(page)
  {
  	$.ajax({
  		url: '<?php echo site_url('admin/country_con/get_country/') ?>'+page,
  		type: 'post',
  		success: function(data){
        var ob=JSON.parse(data);
  			var html='';
  			$.each(ob.country_table,function(key,value){
  				html += '<tr align="center">'+
  						'<td style="line-height: 50px;"></td>'+
  						'<td style="line-height: 50px;">'+ value.country_id + '</td>'+
  						'<td style="line-height: 50px;">'+ value.name + '</td>'+
  						'<td>'+
                            '<button class="edit btn btn-primary" data-toggle="modal" data-target="#editmodal" style="border-radius: 30%;margin-right: 5px;" value="'+value.country_id+'">Edit</button>'+
                            '<button class="delete btn btn-danger" style="border-radius: 30%;" value="'+value.country_id+'">Delete</button>'+
                        '</td>'+
  						'</tr>';
  			});
       
  			$('#showdata').html(html);
        $('#pagination_link').html(ob.pagination_link);
  		},
  		error: function(){
  			alert("nodata");
  		}
  	});
  }

  $(document).on('change','#per_page',function(e){
    e.preventDefault();
    var per_page=$("#per_page").val();
    var page=$("#cpage").val();
    $.ajax({
      url: '<?php echo site_url('admin/country_con/get_country/') ?>'+page,
      data: {'per_page':per_page},
      type: 'POST',
      success: function(data){
        show_country(1);
        $('#cpage').val(1);
      },
      error: function(){
        alert('cant change');
      }
    });
  });

  $(document).on("click", ".pagination li a", function(event){
          event.preventDefault();
          var page = $(this).data("ci-pagination-page");
          $("#cpage").val(page);
          show_country(page);
  });
	$(document).ready(function(){
  		// ======================SHOW DATA================================
  		show_country(1);
      $('#cpage').val(1);
  		// ===============================================================

  		// =======================ADD DATA=================================
      	$(document).on('submit','#addform',function(e){
        	e.preventDefault();
        	var country=$('#v_country').val();
          var page=$('#cpage').val();
          if(country=='')
          {
            alert('Please Insert Some Value...');
            $('#addmodal').modal('show');
          }
          else
          {
          	$.ajax({
          		url: '<?php echo site_url('admin/country_con/add_country') ?>',
          		data: {'country_name':country},
          		type: 'POST',
          		success: function(data){
                $('#v_country').val('');
          			$('#addmodal').modal('hide');
                show_country(page);
          		},
          		error: function()
          		{
          			alert('error');
          		}
          	});
          }
	    });
      // ================================================================

      // ========================DELETE DATA=============================
      $(document).on('click','.delete',function(){
         var uid=$(this).val();
         var page=$('#cpage').val();
         $.ajax({
            url: '<?php echo site_url('admin/country_con/delete_country/');?>' + uid,
            success: function(data){
               //alert(data);
               show_country(page);
            },
            error: function(){
                alert('cant delete');
            }
         });
      });
      //==================================================================

      // ========================EDIT DATA==============================
      $(document).on('click','.edit',function(){
         var uid=$(this).val();
         $.ajax({
            url: '<?php echo site_url('admin/country_con/get_data_by_id/'); ?>'+uid,
            type: 'post',
            success: function(data){
                var ob=JSON.parse(data);
               $('#v_country2').val(ob.name);
               $('#editbtn').val(ob.country_id);
            },
            error: function(){
               alert("nok");
            }
         });
      });
      $(document).on('submit','#editform',function(e){
         e.preventDefault();
         var uid=$('#editbtn').val();
         var country=$('#v_country2').val();
         var page=$('#cpage').val();
         $.ajax({
            url: '<?php echo site_url('admin/country_con/update_admin/');?>'+uid,
            data: {'country_name':country},
            type: 'POST',
            success: function(data){
               $('#editmodal').modal('hide');
               show_country(page);
            },
            error: function(){
               alert('nok1');
            }
         });
      });
      // ================================================================
  	});
</script>
<?php $this->load->view("admin/footer"); ?>
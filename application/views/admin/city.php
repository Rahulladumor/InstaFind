<?php $this->load->view('admin/header'); ?>
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
                        City
                        <small>
                           <i class="ace-icon fa fa-angle-double-right"></i>
                           Add &amp; View Table
                        </small>
                     </h1>
                  </div><!-- /.page-header -->
                  <div style="margin-bottom: 10px;">
                     <button id="addcity" class="btn btn-app" data-toggle="modal" data-target="#addmodal">Add</button>
                  </div>
                  <div class="row">
                     <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                           <div class="col-xs-12">
                              <table id="simple-table" class="table table-striped table-bordered table-hover" style="width: 60%;border: 0;">
                                 <thead>
                                    <tr>
                                       <th class="center">
                                          <label class="pos-rel">
                                             <input type="checkbox" class="ace" />
                                             <span class="lbl"></span>
                                          </label>
                                       </th>
                                       <th class="center bigger-120">ID</th>
                                       <th class="center bigger-120">City</th>
                                       <th class="center bigger-120">State</th>
                                       <th class="center bigger-120">Action</th>
                                    </tr>
                                 </thead>

                                 <tbody id="showdata">                           

                                 </tbody>
                              </table>
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
        <h5 class="modal-title" id="exampleModalLongTitle"><span>Add City</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      	<div class="modal-body" style="height: 170px;">
        	<div class="form-group" style="padding-left: 120px;">
        <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Select Country</label>
          <div class="col-sm-9" style="padding-bottom: 5px;">
            <select id="country_list" style="width: 130px;">
              
            </select>
          </div>
      </div>
      <div class="form-group" style="padding-left: 120px;">
        <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Select State</label>
          <div class="col-sm-9" style="padding-bottom: 5px;">
            <select id="state_list" style="width: 130px;">
              
            </select>
          </div>
      </div>
          <div class="form-group" style="padding-left: 120px;">
				<label class="col-sm-3 control-label no-padding-right" for="from-field-1">City Name</label>
					<div class="col-sm-9" style="padding-bottom: 5px;">
						<input type="text" id="v_city" placeholder="Enter City" name="v_city" class="col-xs-10 col-sm-5" />
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
        <h5 class="modal-title" id="exampleModalLongTitle"><span>Edit City</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body" style="height: 70px;">
          <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="from-field-1">City Name</label>

          <div class="col-sm-9">
            <input type="text" id="v_city2" placeholder="Enter City Name" name="v_city" class="col-xs-10 col-sm-5" />
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
  function show_city(page)
  {
    $.ajax({
      url: '<?php echo site_url('admin/city_con/get_state/') ?>'+page,
      type: 'post',
      success: function(data){
        var ob=JSON.parse(data);
        var html='';
        $.each(ob.city_table,function(key,value){
          html += '<tr align="center">'+
              '<td style="line-height: 50px;"></td>'+
              '<td style="line-height: 50px;">'+ value.city_id + '</td>'+
              '<td style="line-height: 50px;">'+ value.name + '</td>'+
              '<td style="line-height: 50px;">'+ value.state_name + '</td>'+
              '<td>'+
                            '<button class="edit btn btn-primary" data-toggle="modal" data-target="#editmodal" style="border-radius: 30%;margin-right: 5px;" value="'+value.city_id+'">Edit</button>'+
                            '<button class="delete btn btn-danger" style="border-radius: 30%;" value="'+value.city_id+'">Delete</button>'+
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
  $(document).on("click", ".pagination li a", function(event){
    event.preventDefault();
    var page = $(this).data("ci-pagination-page");
    $('#cpage').val(page);
    show_city(page);
  });

  $(document).ready(function()
  {
      show_city(1);
      $('#cpage').val(1);

      $(document).on('click','#addcity',function(){
        $.ajax({
          url: '<?php echo site_url('admin/city_con/get_country'); ?>',
          type: 'POST',
          success: function(data){
            var ob=JSON.parse(data);
            var html= '<option value="" selected>Select Country</option>';
            var html2= '<option value="" selected>Select State</option>';
            $.each(ob,function(key,value){
              html += '<option value="'+value.country_id+'">'+value.name+' </option>';
            });

            $('#country_list').html(html);
            $('#state_list').html(html2);
          },
          error: function(){
              alert('Cant Get Countries... Sorry...');
          }
        });
      });

      $(document).on('change','#country_list',function(){
        var cid=$('#country_list').val();
        $.ajax({
          url: '<?php echo site_url('admin/city_con/get_state_by_cid/'); ?>'+cid,
          type: 'POST',
          success: function(data){
            var ob=JSON.parse(data);
            var html= '<option value="" selected>Select State</option>';
            $.each(ob,function(key,value){
              html += '<option value="'+value.state_id+'">'+value.name+' </option>';
            });

            $('#state_list').html(html);
          },
          error: function()
          {
            alert("cant load states....");
          }
        });
      });

      $(document).on('submit','#addform',function(e){
        e.preventDefault();
        var uid=$('#state_list option:selected').val();
        var c_name=$('#state_list option:selected').text();
        var v_state=$('#v_city').val();
        var page=$('#cpage').val();
        $.ajax({
          url: '<?php echo site_url('admin/city_con/add_city'); ?>',
          data: {'name':v_state,'state_id':uid},
          type: 'POST',
          success: function(data){
            $('#v_city').val('');
            $('#addmodal').modal('hide');
            show_city(page);
          },
          error: function(){
            alert("Error");
          }
        });
      });

      $(document).on('click','.edit',function(){
        var uid=$(this).val();
        $.ajax({
          url: '<?php echo site_url('admin/city_con/get_city_by_id/'); ?>'+uid,
          type: 'POST',
          success: function(data){
            var ob=JSON.parse(data);
            $('#v_city2').val(ob.name);
            $('#editbtn').val(ob.city_id);
          },
          error: function(){
            alert("Dont Get......");
          }
        });
      });
      $(document).on('submit','#editform',function(e){
        e.preventDefault();
        var uid=$('#editbtn').val();
        var city_name=$('#v_city2').val();
        var page=$('#cpage').val();
        $.ajax({
          url: '<?php echo site_url('admin/city_con/update_city/'); ?>'+uid,
          data: {'name':city_name},
          type: 'POST',
          success: function(data){
            $('#editmodal').modal('hide');
            show_city(page);            
          },
          error: function(){
            alert("Not Updated....");
          }
        });
      });

      $(document).on('click','.delete',function(){
        var uid=$(this).val();
        var page=$('#cpage').val();
        $.ajax({
          url: '<?php echo site_url('admin/city_con/delete_city/'); ?>'+uid,
          type: 'POST',
          success: function(data){
            show_city(page);
          },
          error: function(){
            alert("Not Deleted...")
          }
      });
      });
  });
</script>
<script>
  $(document).ready(function(){
             $('#country_list').change(function(){
                var bscat=$('#country_list').val();
                 
                if(bscat.trim()=='' || bscat=='')
                {
                    $('#country_list').css('border-color','red');
                    $('#country').text('Required');
                }else
                {
                    $('#country_list').css('border-color','green');
                    $('#country').text('');
                }
            }); 
            $('#state_list').change(function(){
                var bscat=$('#state_list').val();
                 
                if(bscat.trim()=='' || bscat=='')
                {
                    $('#state_list').css('border-color','red');
                    $('#state').text('Required');
                }else
                {
                    $('#state_list').css('border-color','green');
                    $('#state').text('');
                }
            });
            $('#v_city').blur(function(){
                var bname=$('#v_city').val();
                var rbname=/^[A-Za-z ]{3,20}$/; 
                if(bname.trim()=='')
                {
                    $('#v_city').css('border-color','red');
                    $('#city').text('Required');
                }else if(rbname.test(bname)==false)
                {
                    $('#v_city').css('border-color','red');
                    $('#city').text('Only Allow Alphabates Minimum 3 Character');
                }else
                {
                    $('#v_city').css('border-color','green');
                    $('#city').text('');
                }
            }); 
             $('#addform').submit(function(e){
             var country=$('#country_list').val();
                 
             var flag=[];
                if(country=='' || country.trim()=='' )
                {
                    $('#country_list').css('border-color','red');
                    flag.push('country_list');
                    return false;
                }
                else
                {
                    $('#country_list').css('border-color','green');
                }
                 var state=$('#state_list').val();
                  

                if(state=='' || state.trim()=='')
                {
                    $('#state_list').css('border-color','red');
                    flag.push('state_list');
                    return false;
                }
                else
                {
                    $('#state_list').css('border-color','green');
                }
                 var city=$('#v_city').val();
            
                if(city=='' || city.trim()=='')
                {
                    $('#v_city').css('border-color','red');
                    flag.push('v_city');
                    return false;
                }
                else
                {
                    $('#v_city').css('border-color','green');
                }
            });  
 });

</script>
<script>
  $(document).ready(function(){
            
            $('#v_city2').blur(function(){
                var bname=$('#v_city2').val();
                var rbname=/^[A-Za-z ]{3,20}$/; 
                if(bname.trim()=='')
                {
                    $('#v_city2').css('border-color','red');
                    $('#city2').text('Required');
                }else if(rbname.test(bname)==false)
                {
                    $('#v_city2').css('border-color','red');
                    $('#city2').text('Only Allow Alphabates Minimum 3 Character');
                }else
                {
                    $('#v_city2').css('border-color','green');
                    $('#city2').text('');
                }
            }); 
             $('#editform').submit(function(e){
            
                 var city=$('#v_city2').val();
            var flag=[];
                if(city=='' || city.trim()=='')
                {
                    $('#v_city2').css('border-color','red');
                    flag.push('v_city2');
                    return false;
                }
                else
                {
                    $('#v_city2').css('border-color','green');
                }
            });  
 });

</script>
<?php $this->load->view('admin/footer'); ?>
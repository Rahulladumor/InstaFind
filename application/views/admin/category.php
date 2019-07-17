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
                        <a href="#">Category</a>
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
                        Category
                        <small>
                           <i class="ace-icon fa fa-angle-double-right"></i>
                           Add &amp; View Table
                        </small>
                     </h1>
                  </div><!-- /.page-header -->
                  <div style="margin-bottom: 10px;">
                     <button style="border-radius: 10%;" id="addcategory" class="btn btn-info" data-toggle="modal" data-target="#addmodal"><i style="font-size: 30px;" class="ace-icon fa fa-plus-circle">Add</i></span>
                     </button>
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
                                       <th class="center bigger-120">Category</th>
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
        <h5 class="modal-title" id="exampleModalLongTitle"><span>Add Category</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      	<div class="modal-body" style="height: 100px;">
          <div class="form-group" style="padding-left: 120px;">
				<label class="col-sm-3 control-label no-padding-right" for="from-field-1">Category Type</label>
					<div class="col-sm-9" style="padding-bottom: 5px;">
						<input type="text" id="v_category" placeholder="Enter Category" name="v_category" class="col-xs-10 col-sm-7" />
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
        <h5 class="modal-title" id="exampleModalLongTitle"><span>Edit Category</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body" style="height: 70px;">
          <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Category Type</label>

          <div class="col-sm-9">
            <input type="text" id="v_category2" placeholder="Enter Country Name" name="v_category" class="col-xs-10 col-sm-5" />
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
  function show_category(page)
  {
    $.ajax({
      url: '<?php echo site_url('admin/category_con/get_category/') ?>'+page,
      type: 'post',
      success: function(data){
        var ob=JSON.parse(data);
        var html='';
        $.each(ob.category_table,function(key,value){
          html += '<tr align="center">'+
              '<td style="line-height: 50px;"></td>'+
              '<td style="line-height: 50px;">'+ value.cat_id + '</td>'+
              '<td style="line-height: 50px;">'+ value.type + '</td>'+
              '<td>'+
                            '<button class="edit btn btn-primary" data-toggle="modal" data-target="#editmodal" style="border-radius: 30%;margin-right: 5px;" value="'+value.cat_id+'">Edit</button>'+
                            '<button class="delete btn btn-danger" style="border-radius: 30%;" value="'+value.cat_id+'">Delete</button>'+
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
          $("#cpage").val(page);
          show_category(page);
});

  $(document).ready(function()
  {
      show_category(1);
      $('#cpage').val(1);

      $(document).on('submit','#addform',function(e){
        e.preventDefault();
        var v_category=$('#v_category').val();
        var page=$('#cpage').val();
        //alert(v_category);
        $.ajax({
          url: '<?php echo site_url('admin/category_con/add_category'); ?>',
          data: {'name':v_category},
          type: 'POST',
          success: function(data){
           // alert(data);
            $('#v_category').val('');
            $('#addmodal').modal('hide');
            show_category(page);            
          },
          error: function(){
            alert("Error");
          }
        });
      });

      $(document).on('click','.edit',function(){
        var uid=$(this).val();
        $.ajax({
          url: '<?php echo site_url('admin/category_con/get_category_by_id/'); ?>'+uid,
          type: 'POST',
          success: function(data){
            var ob=JSON.parse(data);
            $('#v_category2').val(ob.type);
            $('#editbtn').val(ob.cat_id);
          },
          error: function(){
            alert("Dont Get......");
          }
        });
      });
     
      $(document).on('submit','#editform',function(e){
        e.preventDefault();
        var uid=$('#editbtn').val();
        var category_name=$('#v_category2').val();
        var page=$('#cpage').val();
        $.ajax({
          url: '<?php echo site_url('admin/category_con/update_category/'); ?>'+uid,
          data: {'name':category_name},
          type: 'POST',
          success: function(data){
            $('#editmodal').modal('hide');
            show_category(page);            
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
          url: '<?php echo site_url('admin/category_con/delete_category/'); ?>'+uid,
          type: 'POST',
          success: function(data){
            show_category(page);
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
            $('#v_category').blur(function(){
                var bname=$('#v_category').val();
                var rbname=/^[A-Za-z ]{3,20}$/; 
                if(bname.trim()=='')
                {
                    $('#v_category').css('border-color','red');
                    $('#ename2').text('Required');
                }else if(rbname.test(bname)==false)
                {
                    $('#v_category').css('border-color','red');
                    $('#ename2').text('Only Allow Alphabates Minimum 3 Character');
                }else
                {
                    $('#v_category').css('border-color','green');
                    $('#ename2').text('');
                }
            });
             $('#addform').submit(function(e){
              // alert("asasa");
                var flag=[];
                var bname=$('#v_category').val();
                //alert(bname);
                
                

                if(bname=='' || bname.trim()=='')
                {
                 // alert(bname);
                    $('#v_category').css('border-color','red');
                    flag.push('v_category');
                    return false;
                    //flag.push('bname');
                }
                else
                {
                    $('#v_category').css('border-color','green');
                }

              });
      });
</script>
<script>
   $(document).ready(function(){
            $('#v_category2').blur(function(){
                var bname=$('#v_category2').val();
                var rbname=/^[A-Za-z ]{3,20}$/; 
                if(bname.trim()=='')
                {
                    $('#v_category2').css('border-color','red');
                    $('#ename3').text('Required');
                }else if(rbname.test(bname)==false)
                {
                    $('#v_category2').css('border-color','red');
                    $('#ename3').text('Only Allow Alphabates Minimum 3 Character');
                }else
                {
                    $('#v_category2').css('border-color','green');
                    $('#ename3').text('');
                }
            });
             $('#editform').submit(function(e){
              // alert("asasa");
                var flag=[];
                var bname=$('#v_category2').val();
                //alert(bname);
                
                

                if(bname=='' || bname.trim()=='')
                {
                 // alert(bname);
                    $('#v_category2').css('border-color','red');
                    flag.push('v_category2');
                    return false;
                    //flag.push('bname');
                }
                else
                {
                    $('#v_category2').css('border-color','green');
                }

              });
      });
</script>
<?php $this->load->view('admin/footer'); ?>
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
                        <a href="#">Subscriber</a>
                     </li>
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
                        Subscriber
                        <small>
                           
                           
                        </small>
                     </h1>
                  </div><!-- /.page-header -->
                  <div style="margin-bottom: 10px;">
                     <button style="border-radius: 10%;" id="addcategory" class="btn btn-info" data-toggle="modal" data-target="#addmodal">Send Mail</span>
                     </button>
                  </div>
                  <div class="row">
                     <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                           <div class="col-xs-12">
                              <table id="simple-table" class="table table-striped table-bordered table-hover">
                                 <thead>
                                    <tr>
                                       <th class="center">
                                          <label class="pos-rel">
                                             <input type="checkbox" class="ace" />
                                             <span class="lbl"></span>
                                          </label>
                                       </th>
                                       <th class="center bigger-120">ID</th>
                                       <th class="center bigger-120">Date</th>
                                       <th class="center bigger-120">Email</th>
                                       <th class="center bigger-120">Status</th>
                                       <th class="center bigger-120">Action</th>
                                    </tr>
                                 </thead>

                                 <tbody id="showdata">

                                 </tbody>                                 
                              </table>
                              <div align="Left" id="pagination_link" style="margin-left: 350px;"></div>
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
<form method="post" enctype="multipart/form-data" id="addform">
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" style="z-index: 9999;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><span>Add Admin</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: 200px;">
                           <div class="form-group" style="padding-left: 150px;">
                              <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Subject </label>

                              <div class="col-sm-9" style="padding-bottom: 10px;">
                                 <input type="text" id="v_subject" placeholder="Enter subject" name="v_subject" class="col-xs-10 col-sm-10" autocomplete="off" />
                              </div>
                           </div>

                           <div class="form-group" style="padding-left: 150px;">
                              <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Message </label>

                              <div class="col-sm-9" style="padding-bottom: 10px;">
                                 <textarea type="text" id="v_msg" rows="3" cols="20" placeholder="Enter your Email" name="v_msg" class="col-xs-10 col-sm-10"></textarea>
                              </div>
                           </div>                    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="addbtn" class="btn btn-primary">Send</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- ===============================ADD MODAL===================================== -->
<script src="<?php echo base_url('assets/admin')?>/assets/js/jquery-3.2.1.min.js"></script>
<script>
   function show_subscriber(page)
  {
   $.ajax({
      url: '<?php echo site_url('admin/subscribe_con/get_data/') ?>'+page,
      type: 'post',
      success: function(data){
        var ob=JSON.parse(data);
         var html='';
         $.each(ob.user_table,function(key,value){
            html += '<tr align="center">'+
                  '<td style="line-height: 50px;"></td>'+
                  '<td style="line-height: 50px;">'+ value.sub_id + '</td>'+
                  '<td style="line-height: 50px;">'+ value.sub_date + '</td>'+
                  '<td style="line-height: 50px;">'+ value.email + '</td>'+
                  '<td style="line-height: 50px;">'+ value.status + '</td>'+
                  '<td>'+
                            '<button class="approve btn btn-primary" style="border-radius: 30%;margin-right: 5px;" value="'+value.sub_id+'">Approve</button>'+
                            '<button class="block btn btn-danger" style="border-radius: 30%;" value="'+value.sub_id+'">Block</button>'+
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
          show_subscriber(page);
  });

   $(document).ready(function()
   {  
      show_subscriber(1);
      $('#cpage').val(1);
      
      // ========================APPROVE USER============================
      $(document).on('click','.approve',function(){
         var uid=$(this).val();
         var page=$("#cpage").val();
         $.ajax({
            url: '<?php echo site_url('admin/subscribe_con/approve_subscriber/');?>' + uid,
            success: function(resp){
               $('#showdata').html(resp.view);
               $('#pagination').html(resp.pagination);
               show_subscriber(page);
            },
            error: function(){

            }
         });
      });
      // ===============================================================

      // ========================BLOCK USER============================
      $(document).on('click','.block',function(){
         var uid=$(this).val();
         var page=$("#cpage").val();
         $.ajax({
            url: '<?php echo site_url('admin/subscribe_con/block_subscriber/');?>' + uid,
            success: function(resp){
               $('#showdata').html(resp.view);
               $('#pagination').html(resp.pagination);
               show_subscriber(page);
            },
            error: function(){

            }
         });
      });
      // ===============================================================

      // =======================Send Mail=================================
      $(document).on("click","#addbtn",function(e){
      	var subject=$("#v_subject").val();
      	var message=$("#v_msg").val();
      	$.ajax({
      		url: '<?php echo site_url("admin/subscribe_con/send_emails"); ?>',
      		type: 'POST',
      		data: {"subject":subject,"message":message},
      		success:function(data){
      			alert("all emails send successfully...");
      		},
      		error: function(){
      			alert("not send");
      		}
      	});
      });
      // ================================================================
   });
</script>
<?php $this->load->view("admin/footer"); ?>
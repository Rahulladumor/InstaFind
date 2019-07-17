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
                        <a href="#">Get Event</a>
                     </li>
                     <li class="active"></li>
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
                        Events
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
                                       <th class="center bigger-120">Title</th>
                                       <th class="center bigger-120">Start Date</th>
                                       <th class="center bigger-120">End Date</th>
                                       <th class="center bigger-120">Start Time</th>
                                       <th class="center bigger-120">End Time</th>
                                       <th class="center bigger-120">Price</th>
                                       <th class="center bigger-120">Location</th>
                                       <th class="center bigger-120">Description</th>
                                       <th class="center bigger-120">helpline</th>
                                       <th class="center bigger-120">Image 1</th>
                                       <!-- <th class="center bigger-120">Image 2</th> -->
                                       <!-- <th class="center bigger-120">Image 3</th>
                                       <th class="center bigger-120">Image 4</th>
                                       <th class="center bigger-120">Image 5</th> -->
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
        <h5 class="modal-title" id="exampleModalLongTitle"><span>Add Events</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body" style="height: 200px;">
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Event Title</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="text" id="v_eventtitle" placeholder="Event title" name="v_eventtitle" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Start Date</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="date" id="v_eventsdate" name="v_eventsdate" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">End Date</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="date" id="v_eventedate" name="v_eventedate" class="col-xs-10 col-sm-5" />
              </div>
          </div>
           <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Start Time</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="time" id="v_eventstime" name="v_eventstime" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">End Time</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="time" id="v_eventetime" name="v_eventetime" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          
           <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Price</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="text" id="v_eventprice" name="v_eventprice" class="col-xs-10 col-sm-5" />
              </div>
          </div>
           <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Location</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="text" id="v_eventlocation" name="v_eventlocation" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Description</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="text" id="v_edescription" placeholder="Description" name="v_edescription" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Help-line</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="text" id="v_ehelpline" name="v_ehelpline" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Image 1</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="file" id="v_eimg1" name="v_eimg1" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <!-- <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Image 2</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="file" id="v_eimg2" name="v_eimg2" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Image 3</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="file" id="v_eimg3" name="v_eimg3" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Image 4</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="file" id="v_eimg4" name="v_eimg4" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Image 5</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="file" id="v_eimg5" name="v_eimg5" class="col-xs-10 col-sm-5" />
              </div>
          </div> -->
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
        <h5 class="modal-title" id="exampleModalLongTitle"><span>Add Events</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body" style="height: 200px;">
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Event Title</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="text" id="v_eventtitle2" placeholder="Event title" name="v_eventtitle2" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Start Date</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="date" id="v_eventsdate2" name="v_eventsdate2" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">End Date</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="date" id="v_eventedate2" name="v_eventedate2" class="col-xs-10 col-sm-5" />
              </div>
          </div>
           <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Start Time</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="time" id="v_eventstime2" name="v_eventstime2" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">End Time</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="time" id="v_eventetime2" name="v_eventetime2" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          
           <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Price</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="text" id="v_eventprice2" name="v_eventprice2" class="col-xs-10 col-sm-5" />
              </div>
          </div>
           <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Location</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="text" id="v_eventlocation2" name="v_eventlocation2" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Description</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="text" id="v_edescription2" placeholder="Description2" name="v_edescription" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Help-line</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="text" id="v_ehelpline2" name="v_ehelpline2" class="col-xs-10 col-sm-5" />
              </div>
          </div>
           <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Image 1</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="file" id="v_eimg11" name="v_eimg11" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Image 2</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="file" id="v_eimg22" name="v_eimg22" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Image 3</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="file" id="v_eimg33" name="v_eimg33" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Image 4</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="file" id="v_eimg44" name="v_eimg44" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Image 5</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="file" id="v_eimg55" name="v_eimg55" class="col-xs-10 col-sm-5" />
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
</div>s
</form>
<!-- ===============================EDIT MODAL===================================== -->
<script src="<?php echo base_url('assets/admin')?>/assets/js/jquery-3.2.1.min.js"></script>
<!--  -->
<script>
  function show_package(page)
  {
    $.ajax({
      url: '<?php echo site_url('admin/event_con/get_event/') ?>'+page,
      type: 'post',
      success: function(data){
        var ob=JSON.parse(data);
        var html='';
        $.each(ob.event_table,function(key,value){
          html += '<tr align="center">'+
              '<td style="line-height: 50px;"></td>'+
              '<td style="line-height: 50px;">'+ value.event_id + '</td>'+
              '<td style="line-height: 50px;">'+ value.event_title + '</td>'+
              '<td style="line-height: 50px;">'+ value.start_date + '</td>'+
              '<td style="line-height: 50px;">'+ value.end_date + '</td>'+
              '<td style="line-height: 50px;">'+ value.start_time + '</td>'+
              '<td style="line-height: 50px;">'+ value.end_time + '</td>'+
              '<td style="line-height: 50px;">'+ value.price + '</td>'+
              '<td style="line-height: 50px;">'+ value.location + '</td>'+
              '<td style="line-height: 50px;">'+ value.description + '</td>'+
              '<td style="line-height: 50px;">'+ value.helpline + '</td>'+
              '<td style="line-height: 50px;"><img src="<?php echo base_url("upload/event/"); ?>'+ value.image1 + '" height="50" width="50"></td>'+
              // '<td style="line-height: 50px;">'+ value.image2 + '</td>'+
              // '<td style="line-height: 50px;">'+ value.image3 + '</td>'+
              // '<td style="line-height: 50px;">'+ value.image4 + '</td>'+
              // '<td style="line-height: 50px;">'+ value.image5 + '</td>'+
              '<td>'+
                            '<button class="edit btn btn-primary" data-toggle="modal" data-target="#editmodal" style="border-radius: 30%;margin-right: 5px;" value="'+value.event_id+'">Edit</button>'+
                            '<button class="delete btn btn-danger" style="border-radius: 30%;" value="'+value.event_id+'">Delete</button>'+
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
          show_package(page);
});

  $(document).ready(function()
  {
      show_package(1);
      $('#cpage').val(1);

      $(document).on('submit','#addform',function(e){
        e.preventDefault(); 
        var formData = new FormData($(this)[0]);
        $.ajax({
          url: '<?php echo site_url('admin/event_con/add_event'); ?>',
          data:formData,
          async: false,
           cache: false,
           contentType: false,
           enctype: 'multipart/form-data',
           processData: false,
          type: 'POST',
          success: function(data){
            $('#v_eventtitle').val('');
            $('#v_eventsdate').val('');
            $('#v_eventedate').val('');
            $('#v_eventstime').val('');
            $('#v_eventetime').val('');
            $('#v_eventprice').val('');
            $('#v_eventlocation').val('');
            $('#v_edescription').val('');
            $('#v_ehelpline').val('');
            $('#v_eimg1').val('');
            $('#v_eimg2').val('');
            $('#v_eimg3').val('');
            $('#v_eimg4').val('');
            $('#v_eimg5').val('');
            $('#addmodal').modal('hide');
            show_package(page);            
          },
          error: function(){
            alert("Error");
          }
        });
      });

      $(document).on('click','.edit',function(){
        var eid=$(this).val();
        $("#editbtn").val(eid);
        $.ajax({
          url: '<?php echo site_url('admin/event_con/get_event_by_id/'); ?>'+eid,
          type: 'POST',
          success: function(data){
            var ob=JSON.parse(data);
            $('#v_eventtitle2').val(ob.event_title);
            $('#v_eventsdate2').val(ob.start_date);
            $('#v_eventedate2').val(ob.end_date);
            $('#v_eventstime2').val(ob.start_time);
            $('#v_eventetime2').val(ob.end_time);
            $('#v_eventprice2').val(ob.price);
            $('#v_eventlocation2').val(ob.location);
            $('#v_edescription2').val(ob.description);
            $('#v_ehelpline2').val(ob.helpline);
            $('#v_eimg11').val(ob.image1);
            $('#v_eimg22').val(ob.image2);
            $('#v_eimg33').val(ob.image3);
            $('#v_eimg44').val(ob.image4);
            $('#v_eimg55').val(ob.image5);

            $('#editbtn').val(ob.event_id);
          },
          error: function(){
            alert("Dont Get......");
          }
        });
      });
     
      $(document).on('submit','#editform',function(e){
        e.preventDefault();
        var eid=$('#editbtn').val();
        var v_etitle1=$('#v_eventtitle2').val();
        var v_sdate1=$('#v_eventsdate2').val();
        var v_edate1=$('#v_eventedate2').val();
        var v_stime1=$('#v_eventstime2').val();
        var v_etime1=$('#v_eventetime2').val();
        var v_price1=$('#v_eventprice2').val();
        var v_location1=$('#v_eventlocation2').val();
        var v_description1=$('#v_edescription2').val();
        var v_helpline1=$('#v_ehelpline2').val();
        var v_img11=$('#v_eimg11').val();
        var v_img22=$('#v_eimg22').val();
        var v_img33=$('#v_eimg33').val();
        var v_img44=$('#v_eimg44').val();
        var v_img55=$('#v_eimg55').val();
        var page=$('#cpage').val();
        $.ajax({
          url: '<?php echo site_url('admin/event_con/update_event/'); ?>'+eid,
           data: {'event_title':v_etitle1,'start_date':v_sdate1,'end_date':v_edate1,'start_time':v_stime1,'end_time':v_etime1,'price':v_price1,'location':v_location1,'description':v_description1,'helpline':v_helpline1,'image1':v_img11,'image2':v_img22,'image3':v_img33,'image4':v_img44,'image5':v_img55},
          type: 'POST',
          success: function(data){
            $('#editmodal').modal('hide');
            show_package(page);            
          },
          error: function(){
            alert("Not Updated....");
          }
        });
      });

      $(document).on('click','.delete',function(){
        var eid=$(this).val();
        var page=$('#cpage').val();
        $.ajax({
          url: '<?php echo site_url('admin/event_con/delete_event/'); ?>'+eid,
          type: 'POST',
          success: function(data){
            show_package(page);
          },
          error: function(){
            alert("Not Deleted...")
          }
        });
      });
    });
</script>
<!-- <script>
   $(document).ready(function(){
             $('#v_pkgtype').blur(function(){
                var bscat=$('#v_pkgtype').val();
                 
                if(bscat.trim()=='' || bscat=='')
                {
                    $('#v_pkgtype').css('border-color','red');
                    $('#country1').text('Required');
                }else
                {
                    $('#v_pkgtype').css('border-color','green');
                    $('#country1').text('');
                }
            }); 
           
            $('#v_pkgprice').blur(function(){
                var bname=$('#v_pkgprice').val();
                var rbname=/^[A-Za-z ]{3,20}$/; 
                if(bname.trim()=='')
                {
                    $('#v_pkgprice').css('border-color','red');
                    $('#state1').text('Required');
                }else if(rbname.test(bname)==false)
                {
                    $('#v_pkgprice').css('border-color','red');
                    $('#state1').text('Only Allow Alphabates Minimum 3 Character');
                }else
                {
                    $('#v_pkgprice').css('border-color','green');
                    $('#state1').text('');
                }
            }); 
             $('#v_pkgdescription').blur(function(){
                var bname=$('#v_pkgdescription').val();
                var rbname=/^[A-Za-z ]{3,20}$/; 
                if(bname.trim()=='')
                {
                    $('#v_pkgdescription').css('border-color','red');
                    $('#state1').text('Required');
                }else if(rbname.test(bname)==false)
                {
                    $('#v_pkgdescription').css('border-color','red');
                    $('#state1').text('Only Allow Alphabates Minimum 3 Character');
                }else
                {
                    $('#v_pkgdescription').css('border-color','green');
                    $('#state1').text('');
                }
            });
              $('#v_pkgduration').blur(function(){
                var bname=$('#v_pkgduration').val();
                var rbname=/^[A-Za-z ]{3,20}$/; 
                if(bname.trim()=='')
                {
                    $('#v_pkgduration').css('border-color','red');
                    $('#state1').text('Required');
                }else if(rbname.test(bname)==false)
                {
                    $('#v_pkgduration').css('border-color','red');
                    $('#state1').text('Enter Minimum 3 Character');
                }else
                {
                    $('#v_pkgduration').css('border-color','green');
                    $('#state1').text('');
                }
            }); 
             $('#addform').submit(function(e){
             var country=$('#v_pkgtype').val();
                 
             var 
                if(country=='' || country.trim()=='' )
                {
                    $('#v_pkgtype').css('border-color','red');
                    flag.push('v_pkgtype');
                    return false;
                }
                else
                {
                    $('#v_pkgtype').css('border-color','green');
                }
                
                 var city=$('#v_pkgprice').val();
            
                if(city=='' || city.trim()=='')
                {
                    $('#v_pkgprice').css('border-color','red');
                    flag.push('v_pkgprice');
                    return false;
                }
                else
                {
                    $('#v_pkgprice').css('border-color','green');
                }
          
              var city=$('#v_pkgduration').val();
            
                if(city=='' || city.trim()=='')
                {
                    $('#v_pkgduration').css('border-color','red');
                    flag.push('v_pkgduration');
                    return false;
                }
                else
                {
                    $('#v_pkgduration').css('border-color','green');
                }
             
              var city=$('#v_pkgdescription').val();
            
                if(city=='' || city.trim()=='')
                {
                    $('#v_pkgdescription').css('border-color','red');
                    flag.push('v_pkgdescription');
                    return false;
                }
                else
                {
                    $('#v_pkgdescription').css('border-color','green');
                }
            });  
 });

</script>
<script>
   $(document).ready(function(){
             $('#v_pkgtype2').blur(function(){
                var bscat=$('#v_pkgtype2').val();
                 
                if(bscat.trim()=='' || bscat=='')
                {
                    $('#v_pkgtype2').css('border-color','red');
                    $('#country1').text('Required');
                }else
                {
                    $('#v_pkgtype2').css('border-color','green');
                    $('#country1').text('');
                }
            }); 
           
            $('#v_pkgprice2').blur(function(){
                var bname=$('#v_pkgprice2').val();
                var rbname=/^[A-Za-z ]{3,20}$/; 
                if(bname.trim()=='')
                {
                    $('#v_pkgprice2').css('border-color','red');
                    $('#state1').text('Required');
                }else if(rbname.test(bname)==false)
                {
                    $('#v_pkgprice2').css('border-color','red');
                    $('#state1').text('Only Allow Alphabates Minimum 3 Character');
                }else
                {
                    $('#v_pkgprice2').css('border-color','green');
                    $('#state1').text('');
                }
            }); 
             $('#v_pkgdescription2').blur(function(){
                var bname=$('#v_pkgdescription2').val();
                var rbname=/^[A-Za-z ]{3,20}$/; 
                if(bname.trim()=='')
                {
                    $('#v_pkgdescription2').css('border-color','red');
                    $('#state1').text('Required');
                }else if(rbname.test(bname)==false)
                {
                    $('#v_pkgdescription2').css('border-color','red');
                    $('#state1').text('Only Allow Alphabates Minimum 3 Character');
                }else
                {
                    $('#v_pkgdescription2').css('border-color','green');
                    $('#state1').text('');
                }
            });
              $('#v_pkgduration2').blur(function(){
                var bname=$('#v_pkgduration2').val();
                var rbname=/^[A-Za-z ]{3,20}$/; 
                if(bname.trim()=='')
                {
                    $('#v_pkgduration2').css('border-color','red');
                    $('#state1').text('Required');
                }else if(rbname.test(bname)==false)
                {
                    $('#v_pkgduration2').css('border-color','red');
                    $('#state1').text('Only Allow Alphabates Minimum 3 Character');
                }else
                {
                    $('#v_pkgduration2').css('border-color','green');
                    $('#state1').text('');
                }
            }); 
             $('#editform').submit(function(e){
             var country=$('#v_pkgtype2').val();
                 

                if(country=='' || country.trim()=='' )
                {
                    $('#v_pkgtype2').css('border-color','red');
                    flag.push('v_pkgtype2');
                    return false;
                }
                else
                {
                    $('#v_pkgtype2').css('border-color','green');
                }
                
                 var city=$('#v_pkgprice2').val();
            
                if(city=='' || city.trim()=='')
                {
                    $('#v_pkgprice2').css('border-color','red');
                    flag.push('v_pkgprice2');
                    return false;
                }
                else
                {
                    $('#v_pkgprice2').css('border-color','green');
                }
          
              var city=$('#v_pkgduration2').val();
            
                if(city=='' || city.trim()=='')
                {
                    $('#v_pkgduration2').css('border-color','red');
                    flag.push('v_pkgduration2');
                    return false;
                }
                else
                {
                    $('#v_pkgduration2').css('border-color','green');
                }
             
              var city=$('#v_pkgdescription2').val();
            
                if(city=='' || city.trim()=='')
                {
                    $('#v_pkgdescription2').css('border-color','red');
                    flag.push('v_pkgdescription2');
                    return false;
                }
                else
                {
                    $('#v_pkgdescription2').css('border-color','green');
                }
            });  
 });

</script> -->
<?php $this->load->view('admin/footer'); ?>
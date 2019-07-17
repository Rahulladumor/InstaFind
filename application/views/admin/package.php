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
                        <a href="#">Package</a>
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
                        Package
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
                                       <th class="center bigger-120">Type</th>
                                       <th class="center bigger-120">Price</th>
                                       <th class="center bigger-120">Description</th>
                                       <th class="center bigger-120">Duration (in month)</th>
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
        <h5 class="modal-title" id="exampleModalLongTitle"><span>Add Package</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body" style="height: 200px;">
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Package Type</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="text" id="v_pkgtype" placeholder="Package Type " name="v_pkgtype" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Price</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="text" id="v_pkgprice" placeholder="Package Price " name="v_pkgprice" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Description</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="text" id="v_pkgdescription" placeholder="Package Description " name="v_pkgdescription" class="col-xs-10 col-sm-5" />
              </div>
          </div>
          <div class="form-group" style="padding-left: 120px;">
            <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Duration(Month)</label>
              <div class="col-sm-9" style="padding-bottom: 5px;">
                <input type="text" id="v_pkgduration" placeholder="Package Duration " name="v_pkgduration" class="col-xs-10 col-sm-5" />
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
        <h5 class="modal-title" id="exampleModalLongTitle"><span>Edit Package</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body" style="height: 200px;">
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Name</label>

          <div class="col-sm-9">
            <input type="text" id="v_pkgtype2" placeholder="Package Type" name="v_pkgtype2" class="col-xs-10 col-sm-5" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Price</label>

          <div class="col-sm-9">
            <input type="text" id="v_pkgprice2" placeholder="Package Price" name="v_pkgprice2" class="col-xs-10 col-sm-5" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Description</label>

          <div class="col-sm-9">
            <input type="text" id="v_pkgdescription2" placeholder="Description" name="v_pkgdescription2" class="col-xs-10 col-sm-5" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="from-field-1">Duration</label>

          <div class="col-sm-9">
            <input type="text" id="v_pkgduration2" placeholder="Duration" name="v_pkgduration2" class="col-xs-10 col-sm-5" />
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
  function show_package(page)
  {
    $.ajax({
      url: '<?php echo site_url('admin/package_con/get_package/') ?>'+page,
      type: 'post',
      success: function(data){
        var ob=JSON.parse(data);
        var html='';
        $.each(ob.package_table,function(key,value){
          html += '<tr align="center">'+
              '<td style="line-height: 50px;"></td>'+
              '<td style="line-height: 50px;">'+ value.package_id + '</td>'+
              '<td style="line-height: 50px;">'+ value.pkg_type + '</td>'+
              '<td style="line-height: 50px;">'+ value.price + '</td>'+
              '<td style="line-height: 50px;">'+ value.description + '</td>'+
              '<td style="line-height: 50px;">'+ value.duration + '</td>'+
              '<td>'+
                            '<button class="edit btn btn-primary" data-toggle="modal" data-target="#editmodal" style="border-radius: 30%;margin-right: 5px;" value="'+value.package_id+'">Edit</button>'+
                            '<button class="delete btn btn-danger" style="border-radius: 30%;" value="'+value.package_id+'">Delete</button>'+
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
        var v_pkgtype=$('#v_pkgtype').val();
        var v_pkgprice=$('#v_pkgprice').val();
        var v_pkgdescription=$('#v_pkgdescription').val();
        var v_pkgduration=$('#v_pkgduration').val();
        var page=$('#cpage').val();
        //alert(v_category);
        $.ajax({
          url: '<?php echo site_url('admin/package_con/add_package'); ?>',
          data: {'pkg_type':v_pkgtype,'price':v_pkgprice,'description':v_pkgdescription,'duration':v_pkgduration},
          type: 'POST',
          success: function(data){
           // alert(data);
            $('#v_pkgtype').val('');
            $('#v_pkgprice').val('');
            $('#v_pkgdescription').val('');
            $('#v_pkgduration').val('');
            $('#addmodal').modal('hide');
            show_package(page);            
          },
          error: function(){
            alert("Error");
          }
        });
      });

      $(document).on('click','.edit',function(){
        var uid=$(this).val();
        $.ajax({
          url: '<?php echo site_url('admin/package_con/get_package_by_id/'); ?>'+uid,
          type: 'POST',
          success: function(data){
            var ob=JSON.parse(data);
            $('#v_pkgtype2').val(ob.pkg_type);
            $('#v_pkgprice2').val(ob.price);
            $('#v_pkgdescription2').val(ob.description);
            $('#v_pkgduration2').val(ob.duration);

            $('#editbtn').val(ob.package_id);
          },
          error: function(){
            alert("Dont Get......");
          }
        });
      });
     
      $(document).on('submit','#editform',function(e){
        e.preventDefault();
        var pid=$('#editbtn').val();
        var package_name=$('#v_pkgtype2').val();
        var package_price=$('#v_pkgprice2').val();
        var package_description=$('#v_pkgdescription2').val();
        var package_duration=$('#v_pkgduration2').val();
        var page=$('#cpage').val();
        $.ajax({
          url: '<?php echo site_url('admin/package_con/update_package/'); ?>'+pid,
          data: {'name':package_name,'price':package_price,'description':package_description,'duration':package_duration},
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
        var pid=$(this).val();
        var page=$('#cpage').val();
        $.ajax({
          url: '<?php echo site_url('admin/package_con/delete_package/'); ?>'+pid,
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
<script>
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
                 
             var flag=[];
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
              var flag=[];

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

</script>
<?php $this->load->view('admin/footer'); ?>
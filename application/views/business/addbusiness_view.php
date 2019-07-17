  <script type="text/javascript" src="<?php echo base_url();?>assets/cityadmin/js/plugins/jquery/jquery.min.js"></script>
<style type="text/css">
            .fa-pencil:before {
                content: "\f040";
                line-height: 1.9;
            }
            .fa-phone:before {
                content: "\f040";
                line-height: 1.9;
            }

            .fa-calendar:before {
                content: "\f040";
                line-height: 1.9;
            }
        </style>  
                            <form class="form-horizontal" action="<?php echo site_url('business/business_con/add_business');?>" method="post" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <strong><center>ADD BUSINESS</center></strong> 
                                    <!-- <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul> -->
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                                                           
            
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Business Name:</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input  value="<?php echo @$claimb['name'],@$name;?>" type="text" class="form-control" name="b_name" id="bname" required=""/>
                                                <input type="hidden" name="placeid" value="<?php echo @$placeid;?>">
                                            </div>                                            
                                             <span id="ebname"></span>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Contact No:</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input  value="<?php echo @$claimb['contact'],@$contact;?>" type="text" class="form-control" name="contact" id="contact" required=""/>
                                            </div>   
                                             <span id="econtact"></span>                                         
                                            <!-- <span class="help-block">This is sample of text field</span> -->
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">E-mail:</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input value="<?php echo @$claimb['email'];?>" type="text" class="form-control" name="email" id="email" required=""/>
                                            </div>   
                                             <span id="eemail"></span>                                         
                                           <!--  <span class="help-block">This is sample of text field</span> -->
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Address:</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <!-- <span class="input-group-addon"><span class="fa fa-pencil"></span></span> -->
                                                <input value="<?php echo @$claimb['badd1'],@$address;?>" type="text" class="form-control" name="add_1" placeholder="Address line 1" id="add1" required=""/>&nbsp;
                                                <span id="eadd1"></span> 
                                                <input  value="<?php echo @$claimb['badd2'];?>" type="text" class="form-control" name="add_2" placeholder="Address line 2" required="" id="add2"/>
                                            </div>
                                               <span id="eadd2"></span>                                         
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Country:</label>
                                        <div class="col-md-2 col-xs-12">                                                                                            
                                            <select class="form-control select" id="country" name="country" id="country" required="">
                                               
                                            </select>
                                           
                                        </div>
                                        <span id="ecountry"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">State:</label>
                                        <div class="col-md-2 col-xs-12">                                                                                            
                                            <select class="form-control select" id="state" name="state" required="">
                                               
                                            </select>
                                           
                                        </div>
                                         
                                         <span id="estate"></span>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">City:</label>
                                        <div class="col-md-2 col-xs-12">                                                                                            
                                            <select class="form-control select" id="city"  name="city" required="">
                                               
                                            </select>
                                           
                                        </div>
                                        <span id="ecity"></span>
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Zip Code:</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                <input value="<?php echo @$claimb['zipcode'];?>" type="text" class="form-control" name="zipcode" placeholder="Zipcode" id="zipcode" required="" />
                                            </div>
                                            <span id="ezipcode"></span>           
                                           <!--  <span class="help-block">Password field sample</span> -->
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Business Starting Date:</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="date" class="form-control datepicker"  name="b_s_date" id="bsdate" required="">                                            
                                            </div>
                                            <span id="ebsdate"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Opning Hour:</label>
                                        <div class="col-md-1 col-xs-12" style="display: flex;">
                                        
                                                                         
                                            <select class="form-control select" name="op_h" style="width: 100px;" id="oph" required="">
                                                <option selected="" value=""> HH </option>
                                                <option value="1"> 1 </option>
                                                <option value="2"> 2 </option>
                                                <option value="3"> 3 </option>
                                                <option value="4"> 4 </option>
                                                <option value="5"> 5 </option>
                                                <option value="6"> 6 </option>
                                                <option value="7"> 7 </option>
                                                <option value="8"> 8 </option>
                                                <option value="9"> 9 </option>
                                                <option value="10"> 10 </option>
                                                <option value="11"> 11 </option>
                                                <option value="12"> 12 </option>
                                               
                                            </select>
                                            <select class="form-control select" name="op_m" style="width: 100px;" id="opm" required="">
                                                <option selected="" value=""> MM </option>
                                                <option value="00"> 00 </option>
                                                <option value="10"> 10 </option>
                                                <option value="20"> 20 </option>
                                                <option value="30"> 30 </option>
                                                <option value="40"> 40</option>
                                                <option value="50"> 50 </option>
                                                
                                            </select> 
                                            <select class="form-control select" name="op_ampm" style="width: 100px;" id="opampm" required="">
                                            
                                            <option value="AM">AM</option>
                                            <option value="PM">PM</option>
                                            </select>
                                            
                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span id="eoptime"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Closing Hour:</label>
                                        <div class="col-md-1 col-xs-12" style="display: flex;" >
                                        
                                                                         
                                            <select class="form-control select" name="cl_h" style="width: 100px;" id="clh" required="">
                                                <option selected="" value=""> HH </option>
                                                <option value="1"> 1 </option>
                                                <option value="2"> 2 </option>
                                                <option value="3"> 3 </option>
                                                <option value="4"> 4 </option>
                                                <option value="5"> 5 </option>
                                                <option value="6"> 6 </option>
                                                <option value="7"> 7 </option>
                                                <option value="8"> 8 </option>
                                                <option value="9"> 9 </option>
                                                <option value="10"> 10 </option>
                                                <option value="11"> 11 </option>
                                                <option value="12"> 12 </option>
                                               
                                            </select>
                                            <select class="form-control select" name="cl_m" style="width: 100px;" id="clm" required="">
                                                <option selected="" value=""> MM </option>
                                                <option value="00"> 00 </option>
                                                <option value="10"> 10 </option>
                                                <option value="20"> 20 </option>
                                                <option value="30"> 30 </option>
                                                <option value="40"> 40</option>
                                                <option value="50"> 50 </option>
                                                
                                            </select> 
                                            <select class="form-control select" name="cl_ampm" style="width: 100px;" id="clampm" required="">
                                              
                                            <option value="AM">AM</option>
                                            <option value="PM">PM</option>
                                            </select>
                                            
                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span id="eclampm"></span>
                                    </div>
                                   <!--  <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Opning Hour:</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group bootstrap-timepicker">
                                             <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                              <input type="text" class="form-control timepicker" name="op_h" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Closing Hour:</label>
                                        <div class="col-md-5">
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control timepicker"/>
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                            </div>
                                        </div>
                                    </div> -->
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Business Category:</label>
                                        <div class="col-md-4 col-xs-12">                                                                                            
                                            <select class="form-control select" id="category" name="b_cate" required="" >
                                                
                                            </select>
                                           
                                        </div>
                                        <span id="ebcate"></span>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Business Subs Category:</label>
                                        <div class="col-md-4 col-xs-12">                                                                                            
                                            <select class="form-control select" id="subcat" name="b_s_cate" required="">
                                               
                                            </select>
                                           
                                        </div>
                                        <span id="bscate"></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Description:</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" rows="5" id="description" name="description" required=""></textarea>
                                            
                                        </div>
                                        <span id="edescription"></span>
                                    </div>
                                    

                                    <!-- <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">File:</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" name="img[]" multiple="multiple" />
                                            
                                        </div>
                                    </div> -->

                                    <?php if(isset($images)) { foreach ($images as $value) { ?>
                                        <input type="hidden" name="img1[]" value="<?php echo $value; ?>">
                                    <?php    
                                    }}else{?>
                                        <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">File:</label>
                                        <div class="col-md-6 col-xs-12"> 
                                            <input type="file" name="img[]" multiple="multiple" />
                                            
                                        </div>
                                    </div>                                        
                                    <?php } ?>
                                    
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <button class="btn btn-primary pull-right" type="submit" name="submit">Submit</button>
                                </div>
                            </div>
                            </form>


     


       <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>assets/cityadmin/css/theme-default.css"/>
       <script type="text/javascript" src="<?php echo base_url();?>assets/cityadmin/js/plugins/bootstrap/bootstrap.min.js"></script>  
       <script type="text/javascript" src="<?php echo base_url();?>assets/cityadmin/js/plugins/jquery/jquery-ui.min.js"></script>
       <script type='text/javascript' src='<?php echo base_url();?>assets/cityadmin/js/plugins/bootstrap/bootstrap-datepicker.js'></script>  
        <script type="text/javascript" src="<?php echo base_url('assets/business/');?>assets/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/business/');?>assets/js/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/business/');?>assets/js/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/business/');?>assets/js/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/business/');?>assets/js/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/business/');?>assets/js/jquery.tagsinput.min.js"></script>
      
        <script type='text/javascript' src='<?php echo base_url();?>assets/cityadmin/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="<?php echo base_url();?>assets/cityadmin/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/cityadmin/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/cityadmin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/cityadmin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='<?php echo base_url();?>assets/cityadmin/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="<?php echo base_url();?>assets/cityadmin/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/cityadmin/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/cityadmin/js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/cityadmin/js/plugins.js"></script>
        <script src="<?php echo base_url('assets/admin')?>/assets/js/jquery-3.2.1.min.js"></script>        
       <script>
  function load_country(){
      $.ajax({
        url: "<?php echo site_url("business/business_con/fill_country"); ?>",
        type: "POST",
        success: function(data){
            var ob=JSON.parse(data);
            var html = '<option value="" selected> Select</option>';

            $.each(ob,function(key,value){
              html += '<option value="'+value.country_id+'">'+value.name+'</option>';
            });

            $("#country").html(html);
        },
        error: function(){
          alert("no country");
        }
      });
  }
  function load_category(){
      $.ajax({
        url: "<?php echo site_url("business/business_con/fill_category"); ?>",
        type: "POST",
        success: function(data){
            var ob=JSON.parse(data);
            var html = '<option value="" selected> Select</option>';

            $.each(ob,function(key,value){
              html += '<option value="'+value.cat_id+'">'+value.type+'</option>';
            });

            $("#category").html(html);
        },
        error: function(){
          alert("no cat");
        }
      });
  }
  $(document).ready(function(){
      load_country();
      load_category();
    $(document).on("change","#country",function(e){
      e.preventDefault();
      var country_id=$("#country").val();

      $.ajax({
        url: "<?php echo site_url("business/business_con/fill_state/"); ?>"+country_id,
        type: "POST",
        success: function(data){
          //alert(data);
            var ob=JSON.parse(data);
            //alert(ob);
            var html = '<option value="" selected> Select</option>';
            $.each(ob,function(key,value){

              html += '<option value="'+value.state_id+'">'+value.name+'</option>';
            });
            $("#state").html(html);

        },
        error: function(){
          alert("no state");
        }
      });
    });

    $(document).on("change","#state",function(e){
      e.preventDefault();
      var state_id=$("#state").val();

      $.ajax({
        url: "<?php echo site_url("business/business_con/fill_city/"); ?>"+state_id,
        type: "POST",
        success: function(data){
          //alert(data);
            var ob=JSON.parse(data);
            //alert(ob);
            var html = '<option value="" selected> Select</option>';

            $.each(ob,function(key,value){
              html += '<option value="'+value.city_id+'">'+value.name+'</option>';
            });
            $("#city").html(html);

        },
        error: function(){
          alert("no city");
        }
      });
    });

    $(document).on("change","#category",function(e){
      e.preventDefault();
      var category_id=$("#category").val();

      $.ajax({
        url: "<?php echo site_url("business/business_con/fill_subcat/"); ?>"+category_id,
        type: "POST",
        success: function(data){
            var ob=JSON.parse(data);
            //alert(ob);
            var html = '<option value="" selected> Select</option>';

            $.each(ob,function(key,value){
              html += '<option value="'+value.scat_id+'">'+value.type+'</option>';
            });
            $("#subcat").html(html);

        },
        error: function(){
          alert("no subcat");
        }
      });
    });
  });
</script>

<script>
  $(document).ready(function(){
            $('#bname').blur(function(){
                var bname=$('#bname').val();
                var rbname=/^[A-Za-z ]{3,20}$/; 
                if(bname.trim()=='')
                {
                    $('#bname').css('border-color','red');
                    $('#ebname').text('Required');
                }else if(rbname.test(bname)==false)
                {
                    $('#bname').css('border-color','red');
                    $('#ebname').text('Invalid');
                }else
                {
                    $('#bname').css('border-color','green');
                    $('#ebname').text('');
                }
            });


            $('#contact').blur(function(){
                var contact=$('#contact').val();
                var rcontact=/^(\+\d{2,4})?\s?(\d{10})$/ ; 
                if(contact.trim()=='')
                {
                    $('#contact').css('border-color','red');
                    $('#econtact').text('Required');
                }else if(rcontact.test(contact)==false)
                {
                    $('#contact').css('border-color','red');
                    $('#econtact').text('Invalid');
                }else
                {
                    $('#contact').css('border-color','green');
                    $('#econtact').text('');
                }
            });
             $('#email').blur(function(){
                var email=$('#email').val();
                 var remail=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; 
                if(email.trim()=='')
                {
                    $('#email').css('border-color','red');
                    $('#eemail').text('Required');
                }else if(remail.test(email)==false)
                {
                    $('#email').css('border-color','red');
                    $('#eemail').text('Invalid');
                }else
                {
                    $('#email').css('border-color','green');
                    $('#eemail').text('');
                }
            });
              $('#add1').blur(function(){
                var add1=$('#add1').val();
                 var radd1=/^[#.0-9a-zA-Z\s,-]+$/; 
                if(add1.trim()=='')
                {
                    $('#add1').css('border-color','red');
                    $('#eadd1').text('Required');
                }else if(radd1.test(add1)==false)
                {
                    $('#add1').css('border-color','red');
                    $('#eaddl').text('Invalid');
                }else
                {
                    $('#add1').css('border-color','green');
                    $('#eaddl').text('');
                }
            });
            $('#add2').blur(function(){
                var add2=$('#add2').val();
                 var radd2=/^[a-zA-Z\s,-]+$/; 
                if(add2.trim()=='')
                {
                    $('#add2').css('border-color','red');
                    $('#eadd2').text('Required');
                }else if(radd2.test(add2)==false)
                {
                    $('#add2').css('border-color','red');
                    $('#eadd2').text('Invalid');
                }else
                {
                    $('#add2').css('border-color','green');
                    $('#eadd2').text('');
                }
            });

              $('#country').change(function(){
                var con=$('#country').val();
                 
                if(con.trim()=='' || con=='')
                {
                    $('#country').css('border-color','red');
                    $('#ecountry').text('Required');
                }else
                {
                    $('#country').css('border-color','green');
                    $('#ecountry').text('');
                }
            });

            $('#state').change(function(){
                var state=$('#state').val();
                 
                if(state.trim()=='' || state=='')
                {
                    $('#state').css('border-color','red');
                    $('#estate').text('Required');
                }else
                {
                    $('#state').css('border-color','green');
                    $('#estate').text('');
                }
            });


           $('#city').change(function(){
                var city=$('#city').val();
                 
                if(city.trim()=='' || city=='')
                {
                    $('#city').css('border-color','red');
                    $('#ecity').text('Required');
                }else
                {
                    $('#city').css('border-color','green');
                    $('#ecity').text('');
                }
            });

                $('#bsdate').change(function(){
                var bdate=$('#bsdate').val();
                 
                if(bdate.trim()=='' || bdate=='')
                {
                    $('#bsdate').css('border-color','red');
                    $('#ebsdate').text('Required');
                }else
                {
                    $('#bsdate').css('border-color','green');
                    $('#ebsdate').text('');
                }
            });

            $('#oph').change(function(){
                var con=$('#oph').val();
                 var conm=$('#opm').val();
                 var conam=$('#opampm').val();
                if(con.trim()=='' || con=='')
                {
                    $('#oph').css('border-color','red');
                    $('#eoptime').text('Required');
                }else if(conm.trim()=='' || conm==''){
                    $('#oph').css('border-color','green');
                    $('#opm').css('border-color','red');
                    $('#eoptime').text('Required');
                }
                else if(conam.trim()=='' || conam==''){
                    $('#oph').css('border-color','green');
                    $('#opm').css('border-color','red');
                    $('#opampm').css('border-color','red');
                    $('#eoptime').text('Required');
                }else
                {
                    $('#oph').css('border-color','green');
                    $('#eoptime').text('');
                }
            });
            $('#opm').change(function(){
                var con=$('#opm').val();
                 
                if(con.trim()=='' || con=='')
                {
                    $('#opm').css('border-color','red');
                    $('#eoptime').text('Required');
                }else
                {
                    $('#opm').css('border-color','green');
                    $('#eoptime').text('');
                }
            });
            $('#opampm').change(function(){
                var con=$('#opampm').val();
                 
                if(con.trim()=='' || con=='')
                {
                    $('#opampm').css('border-color','red');
                    $('#eoptime').text('Required');
                }else
                {
                    $('#opampm').css('border-color','green');
                    $('#eoptime').text('');
                }
            });

             $('#clh').change(function(){
                var con=$('#clh').val();
                 var conm=$('#clm').val();
                 var conam=$('#clampm').val();
                if(con.trim()=='' || con=='')
                {
                    $('#clh').css('border-color','red');
                    $('#ecltime').text('Required');
                }else if(conm.trim()=='' || conm==''){
                    $('#clh').css('border-color','green');
                    $('#clm').css('border-color','red');
                    $('#ecltime').text('Required');
                }
                else if(conam.trim()=='' || conam==''){
                    $('#clh').css('border-color','green');
                    $('#clm').css('border-color','red');
                    $('#clampm').css('border-color','red');
                    $('#ecltime').text('Required');
                }else
                {
                    $('#clh').css('border-color','green');
                    $('#ecltime').text('');
                }
            });
            $('#clm').change(function(){
                var con=$('#clm').val();
                 
                if(con.trim()=='' || con=='')
                {
                    $('#clm').css('border-color','red');
                    $('#eclampm').text('Required');
                }else
                {
                    $('#clm').css('border-color','green');
                    $('#eclampm').text('');
                }
            });
            $('#clampm').change(function(){
                var con=$('#clampm').val();
                 
                if(con.trim()=='' || con=='')
                {
                    $('#clampm').css('border-color','red');
                    $('#eclampm').text('Required');
                }else
                {
                    $('#clampm').css('border-color','green');
                    $('#eclampm').text('');
                }
            });

            $('#zipcode').blur(function(){
                var zip=$('#zipcode').val();
                 var rzip=/^[1-9][0-9]{5}$/; 
                if(zip.trim()=='')
                {
                    $('#zipcode').css('border-color','red');
                    $('#ezipcode').text('Required');
                }else if(rzip.test(zip)==false)
                {
                    $('#zipcode').css('border-color','red');
                    $('#ezipcode').text('Invalid');
                }else
                {
                    $('#zipcode').css('border-color','green');
                    $('#ezipcode').text('');
                }
            });

              $('#bsdate').blur(function(){
                var bsdate=$('#bsdate').val();
                 /*var rbsdate=; */
                if(contact.trim()=='')
                {
                    $('#bsdate').css('border-color','red');
                    $('#ebsdate').text('Required');
                }else if(rbsdate.test(bsdate)==false)
                {
                    $('#bsdate').css('border-color','red');
                    $('#ebsdate').text('Invalid');
                }else
                {
                    $('#bsdate').css('border-color','green');
                    $('#ebsdate').text('');
                }
            });


              $('#category').change(function(){
                var bcat=$('#category').val();
                 //alert(bcat);
                if(bcat.trim()=='' || bcat=='')
                {
                    $('#category').css('border-color','red');
                    $('#ebcate').text('Required');
                }else
                {
                    $('#category').css('border-color','green');
                    $('#ebcate').text('');
                }
            });

            $('#subcat').change(function(){
                var bscat=$('#subcat').val();
                 
                if(bscat.trim()=='' || bscat=='')
                {
                    $('#subcat').css('border-color','red');
                    $('#bscate').text('Required');
                }else
                {
                    $('#subcat').css('border-color','green');
                    $('#bscate').text('');
                }
            });

              $('#description').blur(function(){
                var desc=$('#description').val();
                var rdesc=/^[a-zA-Z0-9'\.\-\s,]*$/; 
                if(desc.trim()=='')
                {
                    $('#description').css('border-color','red');
                    $('#edescription').text('Required');
                }else if(rdesc.test(desc)==false)
                {
                    $('#description').css('border-color','red');
                    $('#edescription').text('Invalid');
                }else
                {
                    $('#description').css('border-color','green');
                    $('#edescription').text('');
                }
            });

                 
            $('#image').change(function(){
                var img=$('#image').val();
                 
                if(img.trim()=='' || img=='')
                {
                    $('#imgae').css('border-color','red');
                    $('#eimage').text('Required');
                }else
                {
                    $('#image').css('border-color','green');
                    $('#eimage').text('');
                }
            });




           

          $('#addbusiness').submit(function(e){
              // alert("asasa");
                var flag=[];
                var bname=$('#bname').val();
                //alert(bname);
                
                

                if(bname=='' || bname.trim()=='')
                {
                 // alert(bname);
                    $('#bname').css('border-color','red');
                    flag.push('bname');
                    return false;
                    //flag.push('bname');
                }
                else
                {
                    $('#bname').css('border-color','green');
                }
                
                  var contact=$('#contact').val();
                  var rcontact=/^(\+\d{2,4})?\s?(\d{10})$/; 

                if(contact=='' || contact.trim()=='' || rcontact.test(contact)==false )
                {
                    $('#contact').css('border-color','red');
                    flag.push('contact');
                    return false;
                }
                else
                {
                    $('#contact').css('border-color','green');
                }
                var add1=$('#add1').val();
                var radd1=/^[#.0-9a-zA-Z\s,-]+$/;

                if(add1=='' || add1.trim()=='' || radd1.test(add1)==false )
                {
                    $('#add1').css('border-color','red');
                    flag.push('add1');
                    return false;
                }
                else
                {
                    $('#add1').css('border-color','green');
                }
               var add2=$('#add2').val();
                 var radd2=/^[a-zA-Z\s,-]+$/; 

                if(add2=='' || add2.trim()=='' || radd2.test(add2)==false )
                {
                    $('#add2').css('border-color','red');
                    flag.push('add2');
                    return false;
                }
                else
                {
                    $('#add2').css('border-color','green');
                }
                 var country=$('#country').val();
                 

                if(country=='' || country.trim()=='' )
                {
                    $('#country').css('border-color','red');
                    flag.push('country');
                    return false;
                }
                else
                {
                    $('#country').css('border-color','green');
                }
                 var state=$('#state').val();
                  

                if(state=='' || state.trim()=='')
                {
                    $('#state').css('border-color','red');
                    flag.push('state');
                    return false;
                }
                else
                {
                    $('#state').css('border-color','green');
                }
                 var city=$('#city').val();
            
                if(city=='' || city.trim()=='')
                {
                    $('#city').css('border-color','red');
                    flag.push('city');
                    return false;
                }
                else
                {
                    $('#city').css('border-color','green');
                }
                 var zipcode=$('#zipcode').val();
                 var rzipcode=/^[1-9][0-9]{5}$/;
                if(zipcode=='' || zipcode.trim()=='' || rzipcode.test(zipcode)==false )
                {
                    $('#zipcode').css('border-color','red');
                    flag.push('zipcode');
                    return false;
                }
                else
                {
                    $('#zipcode').css('border-color','green');
                }
                 var oph=$('#oph').val();
                 var opm=$('#opm').val();
                 var clh=$('#clh').val();
                 var clm=$('#clm').val();
                  

               
        
                

                if(oph=='HH' || opm=='MM'|| clh=='HH' || clm=='MM')
                {
                    $('#oph').css('border-color','red');
                    $('#opm').css('border-color','red');
                    $('#clh').css('border-color','red');
                    $('#clm').css('border-color','red');
                    flag.push('oph');
                    flag.push('opm');
                    flag.push('clh');
                    flag.push('clm');
                    return false;
                }
                else
                {
                    $('#oph').css('border-color','green');
                    $('#oph').css('border-color','green');
                    $('#oph').css('border-color','green');
                    $('#oph').css('border-color','green');
                }

                var bcate=$('#bsdate').val();
                if(bsdate=='' || bsdate.trim()=='')
                {
                    $('#bsdate').css('border-color','red');
                    flag.push('bsdate');
                    return false;
                }
                else
                {
                    $('#bsdate').css('border-color','green');
                }

                var bscate=$('#subcat').val();
                if(bscate=='' || bscate.trim()=='')
                {
                    $('#subcat').css('border-color','red');
                    flag.push('subcat');
                    return false;
                }
                else
                {
                    $('#subcat').css('border-color','green');
                }
                 var descp=$('#description').val();
                if(descp=='' || descp.trim()=='')
                {
                    $('#description').css('border-color','red');
                    flag.push('description');
                    return false;
                }
                else
                {
                    $('#description').css('border-color','green');
                }
               
               
                

          });
 });
</script>
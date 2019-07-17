
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>ADD BUSINESS</title>
<link href="<?php echo base_url();?>assets/business/assets/css/addbusiness4.css" rel="stylesheet" type="text/css" />
<link type="text/css" media="print" rel="stylesheet" href="<?php echo base_url();?>assets/business/assets/css/addbusiness3.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/business/assets/css/addbusiness2.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/business/assets/css/addbusiness.css"/>
<style type="text/css">
    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px;
    }
    body, html{
        margin:0;
        padding:0;
        background:#fff;
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:690px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: false;
    }

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-label.form-label-auto {
        
        display: inline-block;
        float: left;
        text-align: right;
      
      }
    /* Injected CSS Code */
</style>

<script src="<?php echo base_url();?>assets/business/assets/js/addbusiness1.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/business/assets/js/addbusiness2.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/business/assets/js/addbusiness3.js" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.setConditions([{"action":[{"field":"13","visibility":"Show","id":"action_0_1527112420684"}],"id":"1527112409618","index":"0","link":"Any","priority":"0","terms":[{"field":"11","operator":"equals","value":"Others, please specify below."}],"type":"field"}]);
   JotForm.init(function(){
      setTimeout(function() {
          $('input_5').hint('ex: myname@example.com');
       }, 20);

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("25", true, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("25", true, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
      JotForm.setupRichArea(8);
      JotForm.alterTexts({"alphabetic":"This field can only contain letters","alphanumeric":"This field can only contain letters and numbers.","confirmClearForm":"Are you sure you want to clear the form","email":"Enter a valid e-mail address","incompleteFields":"There are incomplete required fields. Please complete them.","lessThan":"Your score should be less than","numeric":"This field can only contain numeric values","pleaseWait":"Please wait...","required":"This field is required.","uploadExtensions":"You can only upload following files:","uploadFilesize":"File size cannot be bigger than:"});
    /*INIT-END*/
});

   JotForm.prepareCalculationsOnTheFly([null,null,{"name":"submitForm","qid":"2","text":"Submit Registration","type":"control_button"},{"name":"address3","qid":"3","text":"Address","type":"control_address"},{"name":"businessOwner","qid":"4","text":"Business Owner","type":"control_fullname"},{"name":"email","qid":"5","text":"E-mail","type":"control_email"},{"name":"businessName","qid":"6","text":"Business Name","type":"control_textbox"},null,{"name":"message","qid":"8","text":"Description","type":"control_textarea"},null,{"name":"clickTo","qid":"10","text":"Register Your Business","type":"control_head"},{"description":"","name":"typeOf","qid":"11","subLabel":"","text":"Type of Business","type":"control_dropdown"},{"name":"contactNumber","qid":"12","text":"Contact Number","type":"control_phone"},null,null,null,null,null,null,null,null,null,null,null,null,{"description":"","name":"date","qid":"25","text":"Business Start Date","type":"control_datetime"},null,{"description":"","name":"time","qid":"27","text":"Opning Hour","type":"control_time"},{"description":"","name":"time28","qid":"28","text":"Closing Hour","type":"control_time"},{"description":"","name":"image129","qid":"29","subLabel":"","text":"Image 1","type":"control_fileupload"},{"description":"","name":"image1","qid":"30","subLabel":"","text":"Image 3","type":"control_fileupload"},{"description":"","name":"image131","qid":"31","subLabel":"","text":"Image 4","type":"control_fileupload"},{"description":"","name":"image132","qid":"32","subLabel":"","text":"Image 5","type":"control_fileupload"},{"description":"","name":"image133","qid":"33","subLabel":"","text":"Image 5","type":"control_fileupload"},{"description":"","name":"image134","qid":"34","subLabel":"","text":"Image 6","type":"control_fileupload"},{"description":"","name":"image135","qid":"35","subLabel":"","text":"Image 7","type":"control_fileupload"},{"description":"","name":"image136","qid":"36","subLabel":"","text":"Image 8","type":"control_fileupload"},{"description":"","name":"image137","qid":"37","subLabel":"","text":"Image 9","type":"control_fileupload"},{"description":"","name":"image10","qid":"38","subLabel":"","text":"Image 10","type":"control_fileupload"},{"description":"","name":"image2","qid":"39","subLabel":"","text":"Image 2","type":"control_fileupload"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,{"name":"submitForm","qid":"2","text":"Submit Registration","type":"control_button"},{"name":"address3","qid":"3","text":"Address","type":"control_address"},{"name":"businessOwner","qid":"4","text":"Business Owner","type":"control_fullname"},{"name":"email","qid":"5","text":"E-mail","type":"control_email"},{"name":"businessName","qid":"6","text":"Business Name","type":"control_textbox"},null,{"name":"message","qid":"8","text":"Description","type":"control_textarea"},null,{"name":"clickTo","qid":"10","text":"Register Your Business","type":"control_head"},{"description":"","name":"typeOf","qid":"11","subLabel":"","text":"Type of Business","type":"control_dropdown"},{"name":"contactNumber","qid":"12","text":"Contact Number","type":"control_phone"},null,null,null,null,null,null,null,null,null,null,null,null,{"description":"","name":"date","qid":"25","text":"Business Start Date","type":"control_datetime"},null,{"description":"","name":"time","qid":"27","text":"Opning Hour","type":"control_time"},{"description":"","name":"time28","qid":"28","text":"Closing Hour","type":"control_time"},{"description":"","name":"image129","qid":"29","subLabel":"","text":"Image 1","type":"control_fileupload"},{"description":"","name":"image1","qid":"30","subLabel":"","text":"Image 3","type":"control_fileupload"},{"description":"","name":"image131","qid":"31","subLabel":"","text":"Image 4","type":"control_fileupload"},{"description":"","name":"image132","qid":"32","subLabel":"","text":"Image 5","type":"control_fileupload"},{"description":"","name":"image133","qid":"33","subLabel":"","text":"Image 5","type":"control_fileupload"},{"description":"","name":"image134","qid":"34","subLabel":"","text":"Image 6","type":"control_fileupload"},{"description":"","name":"image135","qid":"35","subLabel":"","text":"Image 7","type":"control_fileupload"},{"description":"","name":"image136","qid":"36","subLabel":"","text":"Image 8","type":"control_fileupload"},{"description":"","name":"image137","qid":"37","subLabel":"","text":"Image 9","type":"control_fileupload"},{"description":"","name":"image10","qid":"38","subLabel":"","text":"Image 10","type":"control_fileupload"},{"description":"","name":"image2","qid":"39","subLabel":"","text":"Image 2","type":"control_fileupload"}]);}, 20); 
</script>
</head>
<body>
  <!-- class="jotform-form" name="form_81427079265462" id="81427079265462" accept-charset="utf-8"-->
<form  action="<?php  echo site_url('business/business_con/add_business');?>" method="post" enctype="multipart/form-data" >
  <input type="hidden" name="formID" value="81427079265462" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_10" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h1 id="header_10" class="form-header" data-component="header">
              Register Your Business
            </h1>
            <div id="subHeader_10" class="form-subHeader">
              Please provide all required details to register your business with us
            </div>
          </div>
        </div>
      </li>
      <!-- <li class="form-line jf-required" data-type="control_fullname" id="id_4">
        <label class="form-label form-label-right form-label-auto" id="label_4" for="first_4">
          Business Owner
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_4" class="form-input jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" id="first_4" name="q4_businessOwner[first]" class="form-textbox validate[required]" size="10" value="" data-component="first" required="" />
              <label class="form-sub-label" for="first_4" id="sublabel_first" style="min-height:13px"> First Name </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" id="last_4" name="q4_businessOwner[last]" class="form-textbox validate[required]" size="15" value="" data-component="last" required="" />
              <label class="form-sub-label" for="last_4" id="sublabel_last" style="min-height:13px"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
       --><li class="form-line jf-required" data-type="control_textbox" id="id_6">
        <label class="form-label form-label-right form-label-auto" id="label_6" for="input_6">
          Business Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_6"  class="form-input jf-required">
          <input type="text" id="input_6" name="b_name" data-type="input-textbox" class="form-textbox validate[required]" size="47" value="" placeholder=" " data-component="textbox" required="" />
        </div>
      </li>
      <!-- <li class="form-line jf-required" data-type="control_phone" id="id_12">
        <label class="form-label form-label-right form-label-auto" id="label_12" for="input_12_area">
          Contact Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_12" class="form-input jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" id="input_12_area" name="q12_contactNumber[area]" class="form-textbox validate[required]" size="3" value="" data-component="areaCode" required="" />
              <span class="phone-separate">
                 -
              </span>
              <label class="form-sub-label" for="input_12_area" id="sublabel_area" style="min-height:13px"> Area Code </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" id="input_12_phone" name="q12_contactNumber[phone]" class="form-textbox validate[required]" size="8" value="" data-component="phone" required="" />
              <label class="form-sub-label" for="input_12_phone" id="sublabel_phone" style="min-height:13px"> Phone Number </label>
            </span>
          </div>
        </div>
      </li> -->
      <li class="form-line jf-required" data-type="control_textbox" id="id_6">
        <label class="form-label form-label-right form-label-auto" id="label_6" for="input_6">
          Contact Number:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_6" name="b_name" class="form-input jf-required">
          <input type="text" name="contact" id="input_6" data-type="input-textbox" class="form-textbox validate[required]" size="47" value="" placeholder=" " data-component="textbox" required="" />
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_email" id="id_5">
        <label class="form-label form-label-right form-label-auto" id="label_5" for="input_5">
          E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input jf-required">
          <input type="email" id="input_5" name="email" class="form-textbox validate[required, Email]" size="32" value="" placeholder="ex: myname@example.com" data-component="email" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_address" id="id_3">
        <label class="form-label form-label-right form-label-auto" id="label_3" for="input_3undefined">
          Address
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_3" class="form-input jf-required">
          <table summary="" class="form-address-table" border="0" cellPadding="0" cellSpacing="0">
            <tbody>
              <tr>
                <td colSpan="2">
                  <span class="form-sub-label-container" style="vertical-align:top">
                    <input type="text" id="input_3_addr_line1" name="add_1" class="form-textbox validate[required] form-address-line" value="" data-component="address_line_1" required="" />
                    <label class="form-sub-label" for="input_3_addr_line1" id="sublabel_3_addr_line1" style="min-height:13px"> Street Address </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td colSpan="2">
                  <span class="form-sub-label-container" style="vertical-align:top">
                    <input type="text" id="input_3_addr_line2" name="add_2" class="form-textbox form-address-line" size="46" value="" data-component="address_line_2" required="" />
                    <label class="form-sub-label" for="input_3_addr_line2" id="sublabel_3_addr_line2" style="min-height:13px"> Street Address Line 2 </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="form-sub-label-container" style="vertical-align:top">
                    <select class="form-dropdown validate[required] form-address-country" name="country" id="input_3_country" data-component="country" required="">
                      
                     
                    </select>
                    <label class="form-sub-label" for="input_3_country" id="sublabel_3_country" style="min-height:13px"> Country </label>
                  </span>
                </td>
                <td>
                  <span class="form-sub-label-container" style="vertical-align:top">
                    <!-- <input type="text" id="input_3_state" name="q3_address3[state]" class="form-textbox validate[required] form-address-state" size="22" value="" data-component="state" required="" />
                     -->
                     <select name="state" id="state">
                       
                     </select>
                     <label class="form-sub-label" for="input_3_state" id="sublabel_3_state" style="min-height:13px"> State </label>
                  </span>
                </td>
                
              </tr>
              <tr>
                <td width="50%">
                  <span class="form-sub-label-container" style="vertical-align:top">
                    <!-- <input type="text" id="input_3_city" name="q3_address3[city]" class="form-textbox validate[required] form-address-city" size="21" value="" data-component="city" required="" />
                     -->
                     <select name="city" id="city">
                       
                     </select>
                     <label class="form-sub-label" for="input_3_city" id="sublabel_3_city" style="min-height:13px"> City </label>
                  </span>
                </td>
                
                <td width="50%">
                  <span class="form-sub-label-container" style="vertical-align:top">
                    <input type="text" id="input_3_postal" name="zipcode" class="form-textbox form-address-postal" size="10" value="" data-component="zip" required="" />
                    <label class="form-sub-label" for="input_3_postal" id="sublabel_3_postal" style="min-height:13px"> Postal / Zip Code </label>
                  </span>
                </td>
                
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_datetime" id="id_25">
        <label class="form-label form-label-right form-label-auto" id="label_25" for="lite_mode_25">
          Business Start Date
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_25" class="form-input jf-required">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[required, limitDate]" id="day_25" name="" size="2" data-maxlength="2" value="" required="" />
                <span class="date-separate">
                   -
                </span>
                <label class="form-sub-label" for="day_25" id="sublabel_day" style="min-height:13px"> Day </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[required, limitDate]" id="month_25" name="q25_date[month]" size="2" data-maxlength="2" value="" required="" />
                <span class="date-separate">
                   -
                </span>
                <label class="form-sub-label" for="month_25" id="sublabel_month" style="min-height:13px"> Month </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[required, limitDate]" id="year_25" name="q25_date[year]" size="4" data-maxlength="4" value="" required="" />
                <label class="form-sub-label" for="year_25" id="sublabel_year" style="min-height:13px"> Year </label>
              </span>
            </div>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text"  name="b_s_date "class="form-textbox validate[required, limitDate, validateLiteDate]" id="lite_mode_25" size="12" data-maxlength="12" data-age="" value="" required="" data-format="ddmmyyyy" data-seperator="-" placeholder="dd-mm-yyyy" />
              <label class="form-sub-label" for="lite_mode_25" id="sublabel_litemode" style="min-height:13px"> Date </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <img class="showAutoCalendar" alt="Pick a Date" id="input_25_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle" data-component="datetime" />
              <label class="form-sub-label" for="input_25_pick" style="min-height:13px">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_time" id="id_27">
        <label class="form-label form-label-right form-label-auto" id="label_27" for="input_27_hourSelect">
          Opning Hour
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_27" class="form-input jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <select class="time-dropdown form-dropdown validate[required]" id="input_27_hourSelect" name="op_h" data-component="time-hour" required="">
                <option>  </option>
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
              <span class="date-separate">
                 :
              </span>
              <label class="form-sub-label" for="input_27_hourSelect" id="sublabel_hour" style="min-height:13px"> Hour </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <select class="time-dropdown form-dropdown validate[required]" id="input_27_minuteSelect" name="op_m" data-component="time-minute" required="">
                <option>  </option>
                <option value="00"> 00 </option>
                <option value="10"> 10 </option>
                <option value="20"> 20 </option>
                <option value="30"> 30 </option>
                <option value="40"> 40 </option>
                <option value="50"> 50 </option>
              </select>
              <label class="form-sub-label" for="input_27_minuteSelect" id="sublabel_minutes" style="min-height:13px"> Minutes </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <select class="time-dropdown form-dropdown validate[required]" id="input_27_ampm" name="op_ampm" data-component="time-ampm" required="">
                <option value="AM"> AM </option>
                <option selected="" value="PM"> PM </option>
              </select>
              <label class="form-sub-label" for="input_27_ampm" style="min-height:13px">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_time" id="id_28">
        <label class="form-label form-label-right form-label-auto" id="label_28" for="input_28_hourSelect">
          Closing Hour
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_28" class="form-input jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <select class="time-dropdown form-dropdown validate[required]" id="input_28_hourSelect" name="cl_h" data-component="time-hour" required="">
                <option>  </option>
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
              <span class="date-separate">
                 :
              </span>
              <label class="form-sub-label" for="input_28_hourSelect" id="sublabel_hour" style="min-height:13px"> Hour </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <select class="time-dropdown form-dropdown validate[required]" id="input_28_minuteSelect" name="cl_m" data-component="time-minute" required="">
                <option>  </option>
                <option value="00"> 00 </option>
                <option value="10"> 10 </option>
                <option value="20"> 20 </option>
                <option value="30"> 30 </option>
                <option value="40"> 40 </option>
                <option value="50"> 50 </option>
              </select>
              <label class="form-sub-label" for="input_28_minuteSelect" id="sublabel_minutes" style="min-height:13px"> Minutes </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <select class="time-dropdown form-dropdown validate[required]" id="input_28_ampm" name="cl_ampm" data-component="time-ampm" required="">
                <option value="AM"> AM </option>
                <option selected="" value="PM"> PM </option>
              </select>
              <label class="form-sub-label" for="input_28_ampm" style="min-height:13px">  </label>
            </span>
          </div>
        </div>
      </li>   
      <li class="form-line jf-required" data-type="control_dropdown" id="id_11">
        <label class="form-label form-label-right form-label-auto" id="label_11" for="input_11">
          Business Category 
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_11" class="form-input jf-required">
          <select class="form-dropdown validate[required]" id="input_11" name="b_cate" style="width:150px" data-component="dropdown" required="">
            
          </select>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_11">
        <label class="form-label form-label-right form-label-auto" id="label_11" for="input_11">
           Sub-Category 
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_11" class="form-input jf-required">
          <select class="form-dropdown validate[required]" id="subcat" name="b_s_cate" style="width:150px" data-component="dropdown" required="">
            
          </select>
        </div>
      </li>
      
      <li class="form-line jf-required" data-type="control_textarea" id="id_8">
        <label class="form-label form-label-right form-label-auto" id="label_8" for="input_8">
          Description
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_8" class="form-input jf-required">
          <div class="form-textarea-limit">
            <span>
              <textarea id="input_8" class="form-textarea validate[required]" name="description" cols="40" rows="6" style="min-width:353px;min-height:150px;background-color:white" data-richtext="Yes" data-component="textarea" required=""></textarea>
              <div class="form-textarea-limit-indicator">
                <span data-limit="200" type="Letters" data-minimum="-1" data-typeminimum="None" id="input_8-limit">
                  0/200
                </span>
              </div>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fileupload" id="id_29">
        <label class="form-label form-label-right form-label-auto" id="label_29" for="input_29">
          Image 1
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_29" class="form-input jf-required">
          <input type="file" id="input_29" name="img[]" class="form-upload validate[required]" data-imagevalidate="yes" data-file-accept=" jpg, jpeg, png" data-file-maxsize="10854" data-file-minsize="0" data-file-limit="" data-component="fileupload" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fileupload" id="id_39">
        <label class="form-label form-label-right form-label-auto" id="label_39" for="input_39">
          Image 2
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_39" class="form-input jf-required">
          <input type="file" id="input_39" name="img[]" class="form-upload validate[required]" data-imagevalidate="yes" data-file-accept=" jpg, jpeg, png" data-file-maxsize="10854" data-file-minsize="0" data-file-limit="" data-component="fileupload" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fileupload" id="id_30">
        <label class="form-label form-label-right form-label-auto" id="label_30" for="input_30">
          Image 3
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_30" class="form-input jf-required">
          <input type="file" id="input_30" name="img[]" class="form-upload validate[required]" data-imagevalidate="yes" data-file-accept=" jpg, jpeg, png" data-file-maxsize="10854" data-file-minsize="0" data-file-limit="" data-component="fileupload" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fileupload" id="id_31">
        <label class="form-label form-label-right form-label-auto" id="label_31" for="input_31">
          Image 4
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_31" class="form-input jf-required">
          <input type="file" id="input_31" name="img[]" class="form-upload validate[required]" data-imagevalidate="yes" data-file-accept=" jpg, jpeg, png" data-file-maxsize="10854" data-file-minsize="0" data-file-limit="" data-component="fileupload" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fileupload" id="id_32">
        <label class="form-label form-label-right form-label-auto" id="label_32" for="input_32">
          Image 5
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_32" class="form-input jf-required">
          <input type="file" id="input_32" name="img[]" class="form-upload validate[required]" data-imagevalidate="yes" data-file-accept=" jpg, jpeg, png" data-file-maxsize="10854" data-file-minsize="0" data-file-limit="" data-component="fileupload" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fileupload" id="id_34">
        <label class="form-label form-label-right form-label-auto" id="label_34" for="input_34">
          Image 6
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_34" class="form-input jf-required">
          <input type="file" id="input_34" name="img[]" class="form-upload validate[required]" data-imagevalidate="yes" data-file-accept=" jpg, jpeg, png" data-file-maxsize="10854" data-file-minsize="0" data-file-limit="" data-component="fileupload" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fileupload" id="id_35">
        <label class="form-label form-label-right form-label-auto" id="label_35" for="input_35">
          Image 7
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_35" class="form-input jf-required">
          <input type="file" id="input_35" name="img[]" class="form-upload validate[required]" data-imagevalidate="yes" data-file-accept=" jpg, jpeg, png" data-file-maxsize="10854" data-file-minsize="0" data-file-limit="" data-component="fileupload" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fileupload" id="id_36">
        <label class="form-label form-label-right form-label-auto" id="label_36" for="input_36">
          Image 8
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_36" class="form-input jf-required">
          <input type="file" id="input_36" name="img[]" class="form-upload validate[required]" data-imagevalidate="yes" data-file-accept=" jpg, jpeg, png" data-file-maxsize="10854" data-file-minsize="0" data-file-limit="" data-component="fileupload" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fileupload" id="id_37">
        <label class="form-label form-label-right form-label-auto" id="label_37" for="input_37">
          Image 9
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_37" class="form-input jf-required">
          <input type="file" id="input_37" name="img[]" class="form-upload validate[required]" data-imagevalidate="yes" data-file-accept=" jpg, jpeg, png" data-file-maxsize="10854" data-file-minsize="0" data-file-limit="" data-component="fileupload" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fileupload" id="id_38">
        <label class="form-label form-label-right form-label-auto" id="label_38" for="input_38">
          Image 10
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_38" class="form-input jf-required">
          <input type="file" id="input_38" name="img[]" class="form-upload validate[required]" data-imagevalidate="yes" data-file-accept=" jpg, jpeg, png" data-file-maxsize="10854" data-file-minsize="0" data-file-limit="" data-component="fileupload" required="" />
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
            <button id="input_2" type="" class="form-submit-button" data-component="button">
              Submit Registration
            </button>
            <input SUBMIT
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
 <!--  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <input type="hidden" id="simple_spc" name="simple_spc" value="81427079265462" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "81427079265462-81427079265462";
  </script>
   -->
</form>
<script src="<?php echo base_url();?>assets/business/assets/js/addbusiness.js" type="text/javascript"></script></body>
</html>
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

            $("#input_3_country").html(html);
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

            $("#input_11").html(html);
        },
        error: function(){
          alert("no cat");
        }
      });
  }
  $(document).ready(function(){
      load_country();
      load_category();
    $(document).on("change","#input_3_country",function(e){
      e.preventDefault();
      var country_id=$("#input_3_country").val();

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

    $(document).on("change","#input_11",function(e){
      e.preventDefault();
      var category_id=$("#input_11").val();

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
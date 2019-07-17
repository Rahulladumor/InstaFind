<?php $this->load->view("business/business_header"); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/admin')?>/assets/css/font-awesome.css" />
<div class="container">
<form enctype="multipart/form-data" action="<?php echo site_url('business/business_con/update_business');?>" method="POST">
<div class="form-group col-md-12" style="height: 80px;">
  
</div>

<div class="form-group col-md-12">
  <label for="usr">Business ID:</label>
  <input name="bid" style="color: black;" type="text" class="form-control" id="usr" value="<?php echo @$data['business_id'];?>" readonly>
</div>

<div class="form-group Category col-md-12" style="padding-left: 0;padding-right: 0;">
  <div class="col-md-3">
  <label for="usr">Category:</label>
  <input style="color: black;width: 200px;" readonly type="text" class="form-control" id="usr" value="<?php echo @$data['cat_name'];?>">
  </div>
  <div class="col-md-2">
  <label for="usr">Sub-category:</label>
  <input style="color: black;width: 200px;" readonly type="text" class="form-control" id="usr" value="<?php echo @$data['scat_name'];?>">
  </div>
</div>


  <div class="form-group col-md-6">
  	<label for="usr">Business Name:</label>
    <input style="color: black;" type="text" class="form-control" id="usr" value="<?php echo @$data['name'];?>"  name="bussname"> 
    </div>
 <div class="form-group col-md-6">
  <label for="comment">Address:</label>
  <textarea name="bussinessaddress" style="color: black;" class="form-control" rows="5" id="comment" ><?php echo @$data['address'];?></textarea>
</div>
 <div class="form-group col-md-6">
    <label for="email">Email:</label>
    <input name="bussemail" style="color: black;" value="<?php echo @$data['email'];?>"  type="email" class="form-control" id="email">
  </div>
  <div class="form-group col-md-6">
  <label for="usr">Contact:</label>
  <input name="busscontact" style="color: black;" type="text" value="<?php echo @$data['contact'];?>" class="form-control" id="usr">
</div>
<div class="form-group col-md-12">
  <label for="usr">Business Start Date:</label>
  <input style="color: black;" readonly type="text" value="<?php echo @$data['buss_starting_date'];?>" class="form-control" id="usr">
</div>

<div class="form-group col-md-6">
  <label for="usr">Opening hour:</label>
  <input readonly style="color: black;" type="text"  value="<?php echo @$data['op_hour'];?>"  class="form-control" id="usr">
</div>
<div class="form-group col-md-6">
  <label for="usr">Closing hour:</label>
  <input  readonly style="color: black;" type="text" value="<?php echo @$data['cl_hour'];?>" class="form-control" id="usr">
</div>

<div class="form-group col-md-12">
  <label for="comment">Description:</label>
  <textarea name="bussdescription" style="color: black;" class="form-control" rows="5" id="comment"  ><?php echo @$data['description'];?></textarea>
</div>
<div class="form-group col-md-12">
<label for="usr">Image:</label>
</div>
<?php  foreach($b_image as $image1 )
{
  ?>

  <div class="form-group col-md-3" style="float: left;"> 
 <img height="200" width="200" src="<?php if($image1['image'][0]!='h'){ echo base_url('upload/business/').$image1['image'];} else { echo $image1['image']; } ?>"  class="img-rounded" alt="Not Found">
</div><?php
}
 
?>
<div class="form-group col-md-12">
  <label for="comment">Add more images:</label>
  <input type="file" name="img[]" multiple="multiple"><br>
  <button class="btn btn-primary pull-left" type="submit" name="submit">UPDATE</button>
</div>
<div class="panel-footer">
    
</div>
</form>

</div>
<div class="form-group col-md-12" style="height: 80px;">
</div>
<?php $this->load->view("business/business_footer"); ?>

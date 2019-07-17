<?php $this->load->view("cityadmin/header"); ?>
<div class="container">
<form action="" method="POST">
  <div class="row">
<div class="form-group col-md-12">
  <label for="usr">Business ID:</label>
  <input style="color: black;" type="text" class="form-control" id="usr" value="<?php echo @$data['business_id'];?>" readonly>
</div>

<div class="form-group Category col-md-12" style="padding-left: 0;padding-right: 0;">
  <div class="col-md-3">
  <label for="usr">Category:</label>
  <input style="color: black;width: 200px;" type="text" class="form-control" id="usr" value="<?php echo @$data['cat_name'];?>" readonly>
  </div>
  <div class="col-md-2">
  <label for="usr">Sub-category:</label>
  <input style="color: black;width: 200px;" type="text" class="form-control" id="usr" value="<?php echo @$data['scat_name'];?>" readonly>
  </div>
</div>


  <div class="form-group col-md-6">
  	<label for="usr">Business Name:</label>
    <input style="color: black;" type="text" class="form-control" id="usr" value="<?php echo @$data['name'];?>" readonly> 
    </div>
 <div class="form-group col-md-6">
  <label for="comment">Address:</label>
  <textarea style="color: black;" class="form-control" rows="5" id="comment"  readonly><?php echo @$data['address'];?></textarea>
</div>
 <div class="form-group col-md-6">
    <label for="email">Email:</label>
    <input style="color: black;" value="<?php echo @$data['email'];?>" readonly type="email" class="form-control" id="email">
  </div>
  <div class="form-group col-md-6">
  <label for="usr">Contact:</label>
  <input style="color: black;" type="text" value="<?php echo @$data['contact'];?>" readonly class="form-control" id="usr">
</div>
<div class="form-group col-md-12">
  <label for="usr">Business Start Date:</label>
  <input style="color: black;" type="text" value="<?php echo @$data['buss_starting_date'];?>" readonly class="form-control" id="usr">
</div>

<div class="form-group col-md-6">
  <label for="usr">Opening hour:</label>
  <input style="color: black;" type="text"  value="<?php echo @$data['op_hour'];?>" readonly class="form-control" id="usr">
</div>
<div class="form-group col-md-6">
  <label for="usr">Closing hour:</label>
  <input style="color: black;" type="text" value="<?php echo @$data['cl_hour'];?>" readonly class="form-control" id="usr">
</div>

<div class="form-group col-md-12">
  <label for="comment">Description:</label>
  <textarea style="color: black;" class="form-control" rows="5" id="comment"  readonly><?php echo @$data['description'];?></textarea>
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
</form>
</div>
</div>
<?php $this->load->view("cityadmin/footer"); ?>
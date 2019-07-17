<?php $this->load->view("business/business_header"); ?>
<style>
body{
	background-color: white;
}
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
    width: 100%;
}

.col-sm-2{
	margin: 25px 0px;
	height: 300px;
}
.page-header {
    margin: 0 0 12px;
    border-bottom: 1px dotted #e2e2e2;
    padding-bottom: 16px;
    padding-top: 7px;
}
</style>
<link rel="stylesheet" href="<?php echo base_url('assets/admin')?>/assets/css/font-awesome.css" />
<br>
<br>
<br>
<div class="page-header"><center><h1><b>Business-List</b></h1></center></div>

	<?php
	foreach ($blist as $business) {
		?>
				
		<div class="col-sm-2" >
    			<div class="card imgover">
    				<a href="<?php echo site_url('business/show_con/get_b_id/'.$business['business_id']) ?>">
		 			 <img src="<?php  if($business['image'][0]!='h'){ echo base_url('upload/business/').@$business['image']; } else { echo $business['image']; } ?>" alt="image" style="width:100%;border-radius: 50%" width="200" height="200">
		 			 <div class="container">
		    			<center>
		   					<div class="location text-sm-center"><h4><b><?php echo $business['name'];?></b></h4> <i class="fa fa-map-marker"></i> <?php echo $business['address'];?> </div>
		   					<br>
		   					</a>
		   					<?php if($business['payment']==0){?>
		   					<div class="location text-sm-center">
		   						<a href="<?php echo site_url("business/business_con/show_packages/");echo $business['business_id']."/".$business['name']."/".$business['contact']; ?>"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#paymentmodal" >Payment</button></a>
		   					</div>
		   					<?php } ?>
		    			</center>
		  			</div>
				</div> 
    	</div>
    <?php } ?>
<?php $this->load->view("business/business_footer"); ?>
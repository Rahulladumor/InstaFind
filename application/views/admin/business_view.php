<?php
$this->load->view('admin/header');
?>
<style>
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
<div class="container">
<div class="page-header"><center><h1>Business-Details...</h1></center></div>
<div class="row">

	<?php
	foreach ($blist as $business) {
		?>
				
		<div class="col-sm-2" >
    	<a href="<?php echo site_url('admin/business_con/get_b_id/'.$business['business_id']) ?>">
    	<div class="card imgover">
		  <img src="<?php echo base_url('upload/business/').$business['image']; ?>" alt="image" style="width:100%;border-radius: 50%" width="200" height="200">
		  <div class="container">
		    <center>
		    <div class="location text-sm-center"><h4><b><?php echo $business['name'];?></b></h4> <i class="fa fa-map-marker"></i> <?php echo $business['address'];?> </div>
		    </center>
		  </div>

		</div>
		</a>                  
    	</div>
    <?php } ?>
	<!-- 
	<div class="col-sm-2">
    	<div class="card">
		  <img src="img_avatar.png" alt="Avatar" style="width:100%">
		  <div class="container">
		    <h4><b>John Doe</b></h4> 
		    <p>Architect & Engineer</p> 
		  </div>
		</div>                  
    </div>
    <div class="col-sm-2">
    	<div class="card">
		  <img src="img_avatar.png" alt="Avatar" style="width:100%">
		  <div class="container">
		    <h4><b>John Doe</b></h4> 
		    <p>Architect & Engineer</p> 
		  </div>
		</div>                  
    </div>
    <div class="col-sm-2">
    	<div class="card">
		  <img src="img_avatar.png" alt="Avatar" style="width:100%">
		  <div class="container">
		    <h4><b>John Doe</b></h4> 
		    <p>Architect & Engineer</p> 
		  </div>
		</div>                  
    </div>
        <div class="col-sm-2">
    	<div class="card">
		  <img src="img_avatar.png" alt="Avatar" style="width:100%">
		  <div class="container">
		    <h4><b>John Doe</b></h4> 
		    <p>Architect & Engineer</p> 
		  </div>
		</div>                  
    </div>
        <div class="col-sm-2">
    	<div class="card">
		  <img src="img_avatar.png" alt="Avatar" style="width:100%">
		  <div class="container">
		    <h4><b>John Doe</b></h4> 
		    <p>Architect & Engineer</p> 
		  </div>
		</div>                  
    </div>
</div>
</div> -->

<?php
$this->load->view('admin/footer');
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.imgover').mouseover(function(){
			$(this).css('height','300px');
			
		})

		$('.imgover').mouseout(function(){
			$(this).css('height','262px');
		})
	});
</script>
<script src="<?php echo base_url('assets/admin')?>/assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	function check_ab()
	{
		var status=$(".block").val();
		if(status)
		{
			$(this).removeClass("block");
			$(this).addClass("approve");
		}
		else
		{
			$(this).removeClass("approve");
			$(this).addClass("block");
		}
	}
	$(document).ready(function(){
		check_ab();
		$('.imgover').mouseover(function(){
			$(this).css('height','300px');
			
		})

		$('.imgover').mouseout(function(){
			$(this).css('height','262px');
		})

		$(document).on("change",".block",function(e){
			e.preventDefault();
			$(this).removeClass("block");
			$(this).addClass("approve");
			
			var status="active";
			var id=$(this).val();
			//alert(status);
			$.ajax({
				url: '<?php echo site_url("cityadmin/dashboard_con/status_update/"); ?>'+id,
				type: 'POST',
				data: {"active":status},
				success: function(data){
					// alert(data);
				},
				error: function(){
					alert("error111");
				}
			});
		});

		$(document).on("change",".approve",function(e){
			e.preventDefault();
			$(this).removeClass("approve");
			$(this).addClass("block");
			var status="blocked";
			var id=$(this).val();
			//alert(status);		
			$.ajax({
				url: '<?php echo site_url("cityadmin/dashboard_con/status_update/"); ?>'+id,
				type: 'POST',
				data: {"active":status},
				success: function(data){
					// alert(data);
				},
				error: function(){
					alert("error111");
				}
			});
		});

	});
</script>
<?php $this->load->view("cityadmin/header"); ?>
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
			Blcok
			<label class="switch">
	           &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" value="<?php echo $business['business_id']; ?>" <?php if($business['active']=='active'){echo "checked ","class='approve'";}else{echo "class='block'";} ?>/>
	            <span></span>&nbsp;&nbsp;&nbsp;
	        </label>
	        Approve    
    		<a href="<?php echo site_url('cityadmin/dashboard_con/get_b_id/'.$business['business_id']) ?>">
    			<div class="card imgover">
		 			 <img src="<?php if($business['image'][0]!='h'){ echo base_url('upload/business/').$business['image'];}else{echo $business['image'];} ?>" alt="image" style="width:100%;border-radius: 50%" width="200" height="200">
		 			 <div class="container">
		    			<center>
		   					<div class="location text-sm-center"><h4><b><?php echo $business['name'];?></b></h4> <i class="fa fa-map-marker"></i> <?php echo $business['address'];?> </div>
		    			</center>
		  			</div>
				</div>
			</a> 

    	</div>
    <?php } ?>
<?php $this->load->view("cityadmin/footer"); ?>

<?php $this->load->view("cityadmin/header"); ?>
<center>
	<h1>Owner details</h1>
</center>
<table border="1" bgcolor="pink" width="70%" align="center">
	
		<tr>
			<th>Owner ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Business</th>
			<th>Contact</th>
			<th>Image</th>
		</tr>
	

<?php 
	foreach ($ownerlist as  $value) {
		?>
		<tr align="center">
		<td><?php echo $value['owner_id']?></td>
		<td><?php echo $value['name']?></td>
		<td><?php echo $value['email']?></td>
		<td><?php echo $value['bname']?></td>
		<td><?php echo $value['contact']?></td>
		<td> <img height="50" width="50" src="<?php echo base_url("upload/owner/").$value['image']; ?>" style="border-radius:30%;" ></td>
		</tr>
	<?php
	}
?>
</table>
<?php $this->load->view("cityadmin/footer"); ?>
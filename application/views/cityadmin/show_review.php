<?php $this->load->view("cityadmin/header"); ?>
<center>
	<h1>Review details</h1>
</center>
<table border="1" bgcolor="pink" width="70%" align="center">
	
		<tr align="center">
			<th>Review ID</th>
			<th>User</th>
			<th>Business</th>
			<th>Review</th>
			<th>Star</th>
		</tr>
	

<?php 
	foreach ($reviewlist as  $value) {
		?>
		<tr align="center">
		<td><?php echo $value['rev_id']?></td>
		<td><?php echo $value['uname']?></td>
		<td><?php echo $value['bname']?></td>
		<td><?php echo $value['review']?></td>
		<td><?php echo $value['star']?></td>
		
		</tr>
	<?php
	}
?>
</table>
<?php $this->load->view("cityadmin/footer"); ?>
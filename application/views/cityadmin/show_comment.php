<?php $this->load->view("cityadmin/header"); ?>
<center>
	<h1>User Comment</h1>
</center>
<table border="1"   bgcolor="pink" width="70%" align="center">
	
		<tr >
			<th>Comment ID</th>
			<th>Business</th>
			<th>User</th>
			<th>Comment</th>
			
		</tr>
	

<?php 
	foreach ($commentlist as  $value) {
		?>
		<tr align="center">
		<td><?php echo $value['cmt_id']?></td>
		<td><?php echo $value['bname']?></td>
		<td><?php echo $value['uname']?></td>
		<td><?php echo $value['comment']?></td>
		
		</tr>
	<?php
	}
?>
</table>
<?php $this->load->view("cityadmin/footer"); ?>
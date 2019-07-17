
<?php foreach($result as $row){?>                           
<tr>
   <td></td>
   <td><?php echo $row['id']; ?></td>
   <td><?php echo $row['name']; ?></td>
   <td><?php echo $row['email']; ?></td>
   <td><?php echo $row['password']; ?></td>
   <td><img style="border-radius: 30%;" height="50" width="50" src="<?php echo base_url('upload/').$row['image']; ?>"></td></td>
   <td> 
   		<button class="edit btn btn-primary" data-toggle="modal" data-target="#editmodal" style="border-radius: 30%;margin-right: 5px;" value="<?php echo $row['id']; ?>">Edit</button> 
   		<button class="delete btn btn-danger" style="border-radius: 30%;margin-right: 5px;" value="<?php echo $row['id']; ?>">Delete</button>
   </td>
</tr>
<?php }?>

                                 
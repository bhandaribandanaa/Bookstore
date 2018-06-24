<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>admin  info table</title>
</head>
	<center>
	<table border="2" width="30%">

	<tr>
		<td>Sn no.</td>
		<td>Username</td>
		<td>Password</td>
		<th colspan="2">Action</th>
	<tr>
<?php
	$i=1;	
	foreach($records as $r){
?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $r->username;?></td>
		<td><?php echo $r->password;?></td>
		<td><button><a href="admin_controller/edituser/?id=<?php echo $r->id;?>">Edit</a></button></td>
		<td><button><a href="admin_controller/deleteuser/?id=<?php echo $r->id;?>">Delete</a></button>
		</td>
<?php
	$i++;
}
?>
</tr>
</table>
</center>
</html>

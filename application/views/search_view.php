<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>admin  info table</title>
</head>
	<center>
	<table border="2" width="30%">

	<tr>
	<!-- 	<td>Sn no.</td> -->
		<td>Username</td>
		<!-- <td>Password</td>
		<th colspan="2">Action</th> -->
	<tr>
<?php
	// $i=1;	
	foreach($results as $val):
		?>
	<tr>
		<td><?= $val->username;?></td>
		<!-- <td><?= $val->password;?></td> -->
			
	<tr>
		<?php endforeach;?>
	<!-- </tr> -->
</table>
</center>
</html>

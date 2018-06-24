<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Update user</title> 
   </head>
	
   <body>
      <center>
      <form method="POST" action="http://localhost/interface-bookstore/index.php/admin_controller/updateuser"/>
      
      Username:<input type="text" name="username" value="<?php echo $records->username;?>"/><br/><br/>
      Password:<input type="text" name="password" value="<?php echo $records->password;?>"/><br/><br/>
      <input type="hidden" name="id" value="<?php echo $records->id ?>">
      <input type="submit" name="submit" value="Update"/>
      </center>        
 </form>
   </body>
	
</html>
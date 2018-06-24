<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Login</title> 
   </head>
	
   <body>
      <center>
      <form method="POST" action="http://localhost/interface-bookstore/index.php/admin_controller/adduser"/>
      Username:    <input type="text" name="name" id="name" placeholder="enter your name" /><br/><br/>
      password:    <input type="text" name="password" id="password" placeholder="enter your password" /><br/><br/>
      <input type="submit" name="submit" value="Login"/>
      </center>        
 </form>
   </body>
	
</html>
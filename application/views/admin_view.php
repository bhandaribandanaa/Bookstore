<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Login</title> 
   </head>
	
   <body>
      <center>
        <form method="POST" action="http://localhost/interface-bookstore/index.php/admin_controller/search"/>
         <?php
    echo form_open('search/search');

    echo form_input(array('name'=>'search'));

    echo form_submit('search_submit','Search');


?> 
</form>
      <form method="POST" action="http://localhost/interface-bookstore//admin_controller/recaptcha"/>
      Username:    <input type="text" name="name" id="name" placeholder="enter your name" /><br/><br/>
      password:    <input type="text" name="password" id="password" placeholder="enter your password" /><br/><br/>
     <div class="g-recaptcha" data-sitekey="6LdmimUUAAAAAEu00_LJIlL9EG12_nwioFiekmuh"></div>
      <input type="submit" name="submit" value="Login"/>


 </form>
   </body>
	
</html>
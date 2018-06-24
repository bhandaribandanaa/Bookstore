<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Login</title> 
   </head>
   <div class="ch-container">
    <div class="row">
      <?php include("common/sidebar.php");?>
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Add Category</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add Category</h2>
            
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
             </div>
   <body>

      <center>
      <form method="POST" action="http://localhost/practise/index.php/admin/category_controller/addbookcategory"/>
      <div class="form-group">
                        <label for="exampleInputEmail1">Category title:</label>
                        <input type="text" class="form-control" name=" category_title" id="category_title" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sub category:</label>
                        <input type="text" class="form-control" name="subcategory_title" id="subcategory_title"  required>
                    </div> 
               <button type="submit" name='add' value="Add Category" class="btn btn-primary">ADD CATEGORY</button>&nbsp;
               <button type="clear" class="btn btn-default">Clear</button>
                </form>
   </body>
	
</html>
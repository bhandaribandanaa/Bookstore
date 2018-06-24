
<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Update Book Category</title> 
   </head><div class="ch-container">
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
            <a href="#">Add Slider</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Slider</h2>
				
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            
                <form role="form" action=http://localhost/practise/index.php/admin/slider_controller/updateslider"/> method="POST">
                    <div class="form-group">

                        <label for="exampleInputEmail1">Slider Text:</label>
                        <input type="text" class="form-control" name="slider-text" id="slider-text" value="<?php echo $records->slider-text;?>" required>
                    </div>
                    <div class="form-group">

                        <label for="exampleInputEmail1">Slider Image</label>
                        <input type="text" class="form-control" name="userimage" id="userimage" value="<?php echo $records->image;?>" required>
                    </div>
                    
					<input type="hidden" name="id" value="<?php echo $records->id ?>">
					<button type="submit" name='update' value="UPDATE" class="btn btn-primary">UPDATE</button>&nbsp;
					<button type="clear" class="btn btn-default">Clear</button>
                </form>
                </body>
    
</html>
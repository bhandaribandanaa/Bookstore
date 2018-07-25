

<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
     <meta charset="utf-8">
    <title>BookStore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="<?=site_url('css/bootstrap-cerulean.min.css');?>" rel="stylesheet">

    <link href="<?=site_url('css/charisma-app.css');?>" rel="stylesheet">
    
    

    <!-- jQuery -->
    <script src="<?=site_url('bower_components/jquery/jquery.min.js');?>"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

      <meta charset = "utf-8"> 
      <title>Update Book Category</title> 
   </head><div class="ch-container">
    <div class="row">
        <?php include("common/header.php");?>
      <?php include("common/sidebar.php");?>
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <!-- <li>
            <a href="#">Add </a>
        </li> -->
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Order</h2>
                
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            
                <form role="form" action="<?=site_url('admin/order_controller/updatestatus');?>" method="POST">
                    <div class="form-group">

                        <label for="exampleInputEmail1">Status</label>
                        <select name="status">
                <option value="In Progress">In Progress</option>
                <option value="Canceled">Canceled</option>
                <option value="Delivered">Delivered</option>

            </select>
                    </div>
                    
                    <input type="hidden" name="order_id" value="<?php echo $order->or_id ?>">
                    <button type="submit" name='update' value="UPDATE" class="btn btn-primary">UPDATE</button>&nbsp;
                    <button type="clear" class="btn btn-default">Clear</button>
                </form>
                 <hr>

   

      

    <footer class="row">
        <?php
  $this->load->view('admin/common/footer');
  ?>
        
    </footer>

</div><!--/.fluid-containe
                </body>
                <hr>

   

      

    

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->


<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>
    
</html>




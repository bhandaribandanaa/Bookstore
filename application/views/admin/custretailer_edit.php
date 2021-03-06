<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
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

</head>

<body>
    <!-- topbar starts -->
 <?php   
$this->load->view('admin/common/header');
$this->load->view('admin/common/sidebar');

?>
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Edit Customer/Retailer</a>
        </li>
    </ul>
</div>



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Update Customer/Retailer</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form role="form" action="<?=site_url('admin/custretailer_controller/updateuser')?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>FullName:</label>
                        <input type="text" class="form-control" name="fullname" id="fullname"  value="<?php echo $records->fullname;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address:</label>
                        <input type="text" class="form-control" name="address" id="address"  value="<?php echo $records->address;?>" required>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">PhoneNumber:</label>
                        <input type="text" class="form-control" name="phone" id="phone"  value="<?php echo $records->phone;?>" required>
                    </div>  
                    <div class="form-group">
                        <label for="exampleInputEmail1">UserName:</label>
                        <input type="text" class="form-control" name="username" id="username"  value="<?php echo $records->username;?>" required>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password:</label>
                        <input type="text" class="form-control" name="password" id="password"  value="<?php echo $records->password;?>" required>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $records->email;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image:</label>
                        <input type="file" class="form-control" name="image" id="image"  value="<?php echo $records->image;?>" required>
                    </div> 
                    <input type="hidden" name="resetpassword" id="resetpassword" value="<?php echo $records->resetpassword;?>">
                    <input type="hidden" name="status" id="status" value="<?php echo $records->status;?>">
                    <input type="hidden" name="token" id="token" value="<?php echo $records->token;?>">
                    <input type="hidden" name="id" value="<?php echo $records->id;?>">
                    <button type="submit" name='update' value="UPDATE" class="btn btn-primary">UPDATE</button>&nbsp;
                     <button type="submit" name='update' value="UPDATE" class="btn btn-primary">CLEAR</button>
                    
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    

            <!--End mc_embed_signup-->
        </div>

    </div>
    <!-- Ad ends -->

    <hr>

   

      

    <footer class="row">
        <?php
  $this->load->view('admin/common/footer');
  ?>
        
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->


<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>


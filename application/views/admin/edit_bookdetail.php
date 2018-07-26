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
            <a href="http://localhost/interface-bookstore/admin/dashboard">Home</a>
        </li>
        <li>
            <a href="http://localhost/interface-bookstore/admin/book_detail/editdetail/">EditBookDetail</a>
        </li>
    </ul>
</div>



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Update Book Detail</h2>

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
                <form role="form" action="<?=site_url('admin/book_detail/updatedetail')?>" method="POST" enctype="multipart/form-data">
                    
                     <div class="form-group">
                        <label>ISBN</label>
                        <input type="text" class="form-control" name="isbn" id="isbn" value="<?php echo $records->isbn;?>" required> 
                    </div>
                     <div class="form-group">
                        <label>BOOK TITLE</label>
                        <input type="text" class="form-control" name="book_title" id="book_title" value="<?php echo $records->book_title;?>" required>
                    </div>
                    <div class="form-group">
                            
                        <label>CATEGORY</label>

                        <select class="form-control" placeholder="category" id="cat_id" name="category">  
                        
                            <option value=""> Select a Category</option>
                            <?php
                                $i=1;   
                                foreach($category as $r){
                            ?>
                            <option value="<?php echo $r->cat_id;?>"><?php echo $r->cat_title;?></option>
                            <?php
                            $i++;
                            }
                        ?>
                            
                        </select>
                        
                    </div>
                    <div class="form-group">
                    
                        <label>SUB-CATEGORY</label>
                        <select class="form-control" placeholder="subcategory" id="subcat_id" name="subcategory">  
                        
                            <option value="0"> Select a Sub-Category</option>
                            <?php
                                $i=1;   
                                foreach($subcategory as $s){
                            ?>
                            <option value="<?php echo $s->subcat_id;?>"><?php echo $s->subcat_title;?></option>
                         <?php
                            $i++;
                            }
                        ?>   
                            
                        </select>
                        
                    </div>
                     <div class="form-group">
                        <label>BOOK AUTHOR</label>
                        <input type="text" class="form-control" name="book_author" id="book_author" value="<?php echo $records->book_author;?>" required>
                    </div>
                     <div class="form-group">
                        <label>BOOK PUBLISHER</label>
                        <input type="text" class="form-control" name="book_publisher" id="book_publisher" value="<?php echo $records->book_publisher;?>" required>
                    </div>
                     <div class="form-group">
                        <label>BOOK STOCK</label>
                        <input type="text" class="form-control" name="book_stock" id="book_stock" value="<?php echo $records->book_stock;?>" required>
                    </div>
                    <div class="form-group">
                        <label>PUBLICATION DATE</label>
                        <input type="DATE" class="form-control" name="publication_date" id="publication_date" value="<?php echo $records->publication_date;?>" required>
                    </div>
                    <div class="form-group">
                        <label>DESCRIPTION</label>
                        <input type="text" class="form-control" name="description" id="description" value="<?php echo $records->description;?>" required>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Image:</label>
                        <input type="file" class="form-control" name="image" id="image" value="<?php echo $records->image;?>" required>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Price:</label>
                        <input type="text" class="form-control" name="price" id="price" value="<?php echo $records->price;?>" required>
                    </div>
                   
                    <input type="hidden" name="book_id" value="<?php echo $records->book_id;?>">
                    <button type="submit" name='update' value="UPDATE" class="btn btn-primary">UPDATE</button>&nbsp;
                    
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


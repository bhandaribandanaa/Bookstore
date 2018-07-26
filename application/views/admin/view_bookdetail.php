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
    
      <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

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
                <a href="http://localhost/interface-bookstore/admin/dashboard/">Home</a>
            </li>
            <li>
                <a href="http://localhost/interface-bookstore/admin/book_detail/viewdetail/">View Book Detail</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> View Book Detail</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="alert alert-info">Showing the List of book detail<a href="" target="_blank"></a></div>
     <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id='datatable'>
    <thead>
    <tr>
    <th>ID</th>
        <th>ISBN</th>
         <th>book title</th>
          <th>category id</th>
          <th>subcategory id</th>
           <th>book author</th>
        <th>book publisher</th>
        <th>book stock</th>
        <th>publication date</th>
        <th>description</th>
        <th>image</th>
        <th>price</th>   

        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i=1;   
    foreach($records as $r){
?>
    <tr>
        <td><?php echo $i; ?></td>
        
       <td><?php echo $r->isbn; ?></td>
            <td><?php echo $r->book_title; ?></td>
            <td><?php echo $r->cat_id; ?></td>
            <td><?php echo $r->subcat_id; ?></td>
            <td><?php echo $r->book_author; ?></td>
            <td><?php echo $r->book_publisher?></td>
            <td><?php echo $r->book_stock; ?></td>
            <td><?php echo $r->publication_date; ?></td>
            <td><div style="width: 250px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;"><?php echo $r->description; ?></div></td>
            <td class="center"><?php $k= $r->image; ?><img src="<?php echo base_url().'/uploads/bookdetail/'.$k ?>" height="150" width="100"></td>
            <td><?php echo $r->price; ?></td>
            <td class="center">
            <a class="btn btn-info" href="editdetail/?book_id=<?php echo $r->book_id;?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');" href="deletedetail/?book_id=<?php echo $r->book_id;?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    <?php
    $i++;
}
?>
</tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

 <footer class="row">
        <?php
  $this->load->view('admin/common/footer');
  ?>
        
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="<?=site_url('js/jquery.dataTables.min.js')?>"></script>

<!-- library for cookie management -->


<!-- application script for Charisma demo -->
<script src="<?=site_url('js/charisma.js')?>"></script>
<script type="text/javascript">
    
    (function($){
        $('#datatable').dataTable();

    })(jQuery);
</script>


</body>
</html>


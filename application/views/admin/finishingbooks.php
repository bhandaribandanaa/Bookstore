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
                <a href="<?=site_url('admin/dashboard/');?>">Home</a>
            </li>
            <li>
                <a href="<?=site_url('admin/topseller_controller/finishingbooks');?>">View Finishing books</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-book"></i> View Finishing books</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="alert alert-info">Showing the List of Finishing Books<a href="" target="_blank"></a></div>
                            <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id='datatable'>
                                    <thead>
                                    <tr>
                                        <th>Sn No.</th>
                                        <th>Book title</th>
                                        <th>Quantity </th>
                                        <th>Actual Price</th>
                                        <th>Marked Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=1;   
                                    foreach($books as $b){
                                        if($b->book_stock==0){
                                            ?>
                                            <tr>
                                        <td style="background-color: #FF0000;"><?php echo $i; ?></td>
                                        <td style="background-color: #FF0000;"><?php echo $b->book_title;?></td>
                                        <td style="background-color: #FF0000;"><?php echo $b->book_stock;?>
                                            
                                        </td>                            
                                        <td style="background-color: #FF0000;"><?php echo $b->actual_price;?></td> 
                                        <td style="background-color: #FF0000;"><?php echo $b->price;?></td>

                                        <?php $i++; } 
                                        else { ?>
                                            <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $b->book_title;?></td>
                                            <td><?php echo $b->book_stock;?></td>                            <td><?php echo $b->actual_price;?></td> 
                                            <td><?php echo $b->price;?></td>

                                        <?php  $i++;  }                   ?>
                                    
                                    <?php
                                    
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



</body>
</html>



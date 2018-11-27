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
                <a href="<?=site_url('admin/topseller_controller/');?>">View Top Seller</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-book"></i> View Top Seller</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="alert alert-info">Showing the List of Top Seller Books<a href="" target="_blank"></a></div>
    <!-- Tab information -->
            <div class="col-sm-12 col-md-12" style="padding-top:30px; ">

                <div  class="tabbable-panel">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#tab1" data-toggle="tab">
                                    Revenue
                                </a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab">
                                    Chart
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                  <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id='datatable'>
                                    <thead>
                                    <tr>
                                        <th>Sn No.</th>
                                        <th>Book title</th>
                                        <th>Quantity </th>
                                        <th>Marked Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=1;   
                                    foreach($seller as $s){
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $s->book_title;?></td>
                                        <td><?php echo $s->quantity;?></td> 
                                        <td><?php echo $s->price;?></td>
                                    <?php
                                    $i++;
                                }
                                ?>
                                </tr>
                                    </tbody>
                                    </table>

                            </div>
                            <div class="tab-pane " id="tab2">
                                <canvas id="piechart" width="800" height="400"> Helo</canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- End of tab-->





     
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

<!-- Chart JS !-->
<script src="<?= site_url('bower_components/chartjs/Chart.min.js')?>"></script>
<script src="<?= site_url('bower_components/chartjs/helper.js')?>"></script>


</body>
</html>



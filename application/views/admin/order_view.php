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
                <a href="http://localhost/interface-bookstore/admin/dashboard">Home</a>
            </li>
            <li>
                <a href="http://localhost/interface-bookstore/admin/order_controller//">All Orders</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2>All Orders</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="alert alert-info">Showing all orders<a href="" target="_blank"></a></div>
     <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id='datatable'>
    <thead>
    <tr>
    <tr>
        <th>S.No.</th>
        <th>Customer</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Email</th>
        <th>Book</th>
        <th>Quantity</th>
        <th>Total Amount</th>
        <th>Payment Method</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i=1;   
    foreach($orders as $o){
?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $o->fullname;?></td>
        <td><?php echo $o->phone;?></td>
        <td><?php echo $o->address; ?></td>
        <td><?php echo $o->email;?></td>
        <td><?php echo $o->book_title;?></td>
        <td><?php echo $o->quantity;?></td>
        <td><?php echo $o->total_amount;?></td>
        <td><?php echo $o->method;?></td>

        <td><?php echo $o->status;?></td>

        <!-- <form>
            <select>
                <option>In Progress</option>
                <option>Canceled</option>
                <option>Delivered</option>

            </select> -->
        <!-- </form></td> -->


    
            <td class="center">
            <a class="btn btn-info" href="<?=site_url('admin/order_controller/editstatus/?id='.$o->or_id);?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit Status
            </a>
           <!--  <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');" href="<?=site_url('admin/order_controller/deletestatus/?id='.$o->or_id);?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a> -->
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


<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="http://localhost/interface-bookstore/admin/dashboard"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                       
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Accordion Menu</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Child Menu 1</a></li>
                                <li><a href="#">Child Menu 2</a></li>
                            </ul>
                        </li> 
                         <li><a class="ajax-link" href="<?=site_url('admin/book_detail/');?>"><i class="glyphicon glyphicon-plus"></i><span> Add BookDetail</span></a>
                        <li><a class="ajax-link" href="<?=site_url('admin/book_detail/viewdetail');?>"><i class="glyphicon glyphicon-eye-open"></i><span> View BookDetail</span></a>
                        </li>
                       <li><a class="ajax-link" href="<?=site_url('admin/category_controller');?>"><i class="glyphicon glyphicon glyphicon-plus"></i><span> Add bookcategory</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?=site_url('admin/category_controller/viewbookcategory');?>"><i class="glyphicon glyphicon-eye-open"></i><span> View bookcategory</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?=site_url('admin/subcategory_controller');?>"><i class="glyphicon glyphicon glyphicon-plus"></i><span> Add book subcategory</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?=site_url('admin/subcategory_controller/viewbookcategory');?>"><i class="glyphicon glyphicon-eye-open"></i><span> View book subcategory</span></a>
                        </li>
                        <!-- <li><a class="ajax-link" href="<?=site_url('admin/custretailer_controller');?>"><i class="glyphicon glyphicon-plus"></i><span>  Add customer</span></a>
                        </li> -->
                        <li><a class="ajax-link" href="<?=site_url('admin/custretailer_controller/viewuser');?>"><i class="glyphicon glyphicon-eye-open"></i><span> View customer</span></a>
                        </li>
                         <li><a class="ajax-link" href="<?=site_url('admin/ourteam_controller');?>"><i class="glyphicon glyphicon-plus"></i><span> Our Team</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?=site_url('admin/ourteam_controller/viewourteam');?>"><i class="glyphicon glyphicon-eye-open"></i><span> View Team</span></a>
                        </li>
                          <li><a class="ajax-link" href="<?=site_url('admin/order_controller/');?>"><i class="glyphicon glyphicon-eye-open"></i><span> Order</span></a>
                        <!-- <li><a class="ajax-link" href="<?=site_url('admin/slider_controller/viewslider');?>"><i class="glyphicon glyphicon-eye-open"></i><span> View slider</span></a>
                        </li> -->
                        
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->
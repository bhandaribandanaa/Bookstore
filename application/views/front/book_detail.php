
<?php 
    $this->load->view('front/header');
?>

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1><?php echo $records['book_title'];?></h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>TITLE</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
            _________________________________________________________ -->

                    <div class="col-md-9">
                        <p class="goToDescription"><a href="<?=site_url('front/shop_controller');?>" class="scroll-to text-uppercase">Go back to browsing other books.</a>
                        </p>

                        <div class="row" id="productMain">
                            <div class="col-sm-6">
                                <div id="mainImage">
                                    <img src="<?= site_url('uploads/bookdetail/'.$records['image']);?>" alt="<?= site_url('uploads/bookdetail/'.$records['image']);?>" class="img-responsive">
                                </div>

                                <!-- /.ribbon 

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                            </div>
                            <div class="col-sm-6">
                                <div class="box">
                                <form action="<?=site_url('front/cart_controller/add_to_cart');?>" method="post">
                                        <div class="sizes">
                                    
                                            <h3><?php echo $records['book_title'];?></h3>
                                            
                                        </div>

                                        <p class="price">Rs. <?php echo $records['price'];?></p>
                                        <input type="hidden" name="id" value="<?php echo $records['book_id'];?>" >
                                        <input type="hidden" name="book_title" value="<?php echo $records['book_title'];?>" >
                                        <input type="hidden" name="price" value="<?php echo $records['price'];?>" >
                                            <p  style="font-size:14px;float: left;"><b>Rate This Book:</b>&nbsp;&nbsp; </p>
                                             <?php 
                                 $this->load->view('front/rating_view'); ?>
                                
                            
                                        <p class="text-center">
                                            <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Stock:&nbsp;<?php echo $records['book_stock'];?></button>
                                            <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Add to cart</button>

                                        </p>

                                    </form>

                                </div>
                                    <p style="text-align: justify;"><?php echo $records['description'];?></p>
                            </div>
                            
                            

                        </div>
                       
                         <div class="col-sm-6">

                               
                            
                        <div class="box" >
                                <p style="font-size:14px"><b>Author:</b>&nbsp;&nbsp;<?php echo $records['book_author'];?> </p></div>
                        <div>
                                <p style="font-size:14px"><b>Publisher:</b>&nbsp;&nbsp; <?php echo $records['book_publisher'];?> </p></div>
                        <div class="box" >
                                <p style="font-size:14px"><b>ISBN:</b>&nbsp;&nbsp; <?php echo $records['isbn'];?> </p></div>
                        <div >
                                <p style="font-size:14px"><b>Publication Date:</b>&nbsp;&nbsp; <?php echo $records['publication_date'];?> </p></div>
                        </div>

                        </div>

                       

                        
                    </div>
                     <div class="box social" id="product-social">
                           <div class="box">
                               <p>Overall Rating</p>
                               <table border="2" width="30%">
                                   <tr>
                                       <td>Customer Name</td>
                                       <td>Book Title</td>
                                       <td>review</td>
                                       <td>rate</td>
                                   </tr>
                                   <?php
                                        $i=1;   
                                        foreach($rate as $rt){

                                    ?>
                                    <tr>
                                        <td><?php echo $rt->fullname;?></td>
                                        <td><?php echo $rt->title;?></td>
                                        
                                        <td><?php echo $rt->comment;?></td>
                                        <td>
                                           <div class='userrate'>
                                            <script type="text/javascript"> 
                                                $(document).ready(function(){
          // Below line will get stars images from img folder 
          $.fn.raty.defaults.path = '<?= base_url() ?>assets/front/img';
                                             $('.userrate').raty({ score: <?php echo $rt->rate;?>});
                                         });
                                        </script>
                                             
                                           </div> 
                                        </td>
                                    </tr>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                   
                               </table>
                           </div>
                        </div>

                    <!-- /.col-md-9 -->


                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
          _________________________________________________________ -->

                    
                    <!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** GET IT ***
_________________________________________________________ -->

    

        <!-- *** GET IT END *** -->


        <!-- *** FOOTER ***
_________________________________________________________ -->

        

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->
 
                               
<?php 
    $this->load->view('front/footer');
?>
<!--  jqury raty parts begins from here -->
<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

<!--For Raty-->
<script type="text/javascript" src="<?= base_url() ?>js/jquery.raty.min.js"></script>


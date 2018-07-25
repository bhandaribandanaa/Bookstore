<?php 
    $this->load->view('front/header.php');
?>

        

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

       <!--  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
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
        </div> -->

        <!-- *** LOGIN MODAL END *** -->

        

        <div id="content">
            <div class="container">

                <div class="row">


                    <!-- *** LEFT COLUMN ***
			_________________________________________________________ -->

                    <div class="col-sm-3">

                        <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                        
                        <?php 
                            $this->load->view('front/sidebar.php');
                        ?>

                        <!-- *** MENUS AND FILTERS END *** -->

                        
                        <!-- /.banner -->

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
			_________________________________________________________ -->

                    <div class="col-sm-9">

                        <p class="text-muted lead"></p>

                        <div class="row products" style=" display: flex; flex-flow: row wrap;">
                            <?php
                                $i=1;   
                                foreach($records as $r){
                            ?>

                            <div class="col-md-4 col-sm-5">
                                <div class="product">
                                    <div class="image">
                                        <a href="http://localhost/interface-bookstore/front/bookdetail_controller/?id=<?php echo $r->book_id?>">
                                            <img src="<?= site_url('uploads/bookdetail/'.$r->image);?>" alt="<?= site_url('uploads/bookdetail/'.$r->image);?>" height="250" width="200" class="img-responsive">
                                        </a>
                                    </div>

                                    <!-- /.image -->
                                    <div class="text">
                                        <h3><a href="http://localhost/interface-bookstore/front/bookdetail_controller/?id=<?php echo $r->book_id?>"><?php echo $r->book_title;?></a></h3> 
                                        <!-- <h5 class="price">By </h5>
                                        <h3><a href="http://localhost/interface-bookstore/front/bookdetail_controller/?id=<?php echo $r->book_id?>"> <?php echo $r->book_author;?></a></h3>
                                        
                                        <p class="price">NRs. <?php echo $r->price;?></p> -->
                                        <span style="display: inline-block;">
                                        <p class="buttons">
                                            <form action="<?=site_url('front/cart_controller/add_to_cart');?>" method="post" style="display: inline;">
                                                <input type="hidden" name="id" value="<?php echo $r->book_id;?>">
                                                <input type="hidden" name="book_title" value="<?php echo $r->book_title;?>">
                                                <input type="hidden" name="price" value="<?php echo $r->price;?>">

                                                <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i></button>
                                            </form>
                                            <form action="<?=site_url('front/wishlist_controller/add');?>" method="POST" style="display: inline;">
                                                <input type="hidden" id="book_id" name="book_id" value="<?php echo $r->book_id;?>">
                                            <button title="Add to wishlist" type="submit" class="btn btn-template-main" id="save"><span class="glyphicon glyphicon-heart"></span></button>
                                            </form>
                                        </p>
                                        </span>
                                    </div>
                                    <!-- /.text -->
                                </div>
                                <!-- /.product -->
                            </div>
                            <?php
                                $i++;
                            }
                         ?>                               
                            <!-- /.col-md-4 -->
                        </div>
                            <!-- /.col-md-4 -->
                        </div>
                        <!-- /.products -->

                        

                        <div class="pages">

                           

                            

                                <?php if(isset($links)){ ?>
                                    <?php echo $links; ?>
                                <?php }?>
                                 
                               <!--  <li><a href="#">&laquo;</a>
                                </li>
                                <li class="active"><a href="#">1</a>
                                </li>
                                <li><a href="#">2</a>
                                </li>
                                <li><a href="#">3</a>
                                </li>
                                <li><a href="#">4</a>
                                </li>
                                <li><a href="#">5</a>
                                </li>
                                <li><a href="#">&raquo;</a>
                                </li> -->
                        </div>


                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** GET IT ***
_________________________________________________________ -->

        <?php
        $this->load->view('front/footer.php')
        ?>
        <!-- *** GET IT END *** -->
</body>

</html>
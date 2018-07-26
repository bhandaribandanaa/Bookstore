
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
                    <div class="col-md-6">
                        <h1>Shopping cart</h1>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Shopping cart</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">
                      <?php
                        $total = 0;
                        $cart = $this->cart->contents();
                        //print_r($cart);
                        //exit();

                        if ($cart):
                        foreach ($cart as $item):
                        $total = $total + $item['subtotal'];
                        endforeach;
                        endif;
                        ?>
                    <div class="col-md-12">
                        <p class="text-muted lead">You currently have <?php echo $this->cart->total_items();?> item(s) in your cart.</p>
                    </div>


                    <div class="col-md-9 clearfix" id="basket">

                        <div class="box">

                            <form method="post" action="cart_controller/update_cart/">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Unit price</th>
                                                <th colspan="2">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                
                                            <tr>
                                                
                                                <?php
                                                $i=1;
                                                $total = 0;
                                                if($cart):
                                                foreach ($cart as $item):
                                                ?>
                                                <td><a href="#"><?php echo $item['name']; ?></a>
                                                </td>
                                                <td>
                                                <?php echo form_input(array('name' => $item['rowid'].'_quantity', 'value' => $item['qty'], 'type' => 'number')); ?>
                                                </td>
                                                <td>Rs. <?php echo $item['price'];?></td>
                                                <td>Rs. <?php $subtotal=$item['qty']*$item['price'];
                                                echo $subtotal ?></td>
                                                <td><a href="cart_controller/remove/<?php echo $item['rowid'];?>" title="Click Here to Delete"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                        <?php $i++; ?>

                                        <?php endforeach; 
                                        endif; ?>
                                        <tfoot>
                                            <tr>
                                                <th colspan="3">Total</th>
                                                <th colspan="2">Rs. <?php echo $this->cart->format_number($this->cart->total());?></th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                                <!-- /.table-responsive -->

                                <div class="box-footer">
                                    <div class="pull-left">
                                         <a href="<?=site_url('front/shop_controller/view');?>" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-default" href="">Update cart</button>
                                        <button class="btn btn-template-main"><a href="payment_controller">Proceed to checkout </a><i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>

                            </form>

                        </div>
                        <!-- /.box -->


                    </div>
                    <!-- /.col-md-9 -->

                   



					</span>
                                </div>
                                <!-- /input-group -->
                            </form>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

<?php
$this->load->view('front/footer');
?>
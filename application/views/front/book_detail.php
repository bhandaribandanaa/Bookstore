
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
                        <p class="goToDescription"><a href="<?=site_url('front/shop_controller/view');?>" class="scroll-to text-uppercase">Go back to browsing other books.</a>
                        </p>

                        <div class="row" id="productMain">
                            <div class="col-sm-6">
                                <div id="mainImage">
                                    <img src="<?= site_url('uploads/bookdetail/'.$records['image']);?>" alt="<?= site_url('uploads/bookdetail/'.$records['image']);?>" class="img-responsive">
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
                                <!-- /.ribbon 

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                /.ribbon -->

                            </div>
                            <div class="col-sm-6">
                                <div class="box">
                                <form action="<?=site_url('front/cart_controller/add_to_cart');?>" method="post">
                                        <div class="sizes">
                                    
                                            <h3><?php echo $records['book_title'];?></h3>
                                            
                                        </div>
                                        <div class="product-social">
                                            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="Check out this book available " data-via="interfacebookstore" data-hashtags="books" data-lang="en" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                            <!-- facebook -->
                                            <a href="http://www.facebook.com/sharer.php?u=http://localhost/interface-bookstore/front/bookdetail_controller/?id=<?php echo $records['book_title'];?>" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                        </div>
                                        <!-- gplus -->
                                        <a href="https://plus.google.com/share?url=http://localhost/interface-bookstore/front/bookdetail_controller/?id=<?php echo $records['book_title'];?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img
  src="https://www.gstatic.com/images/icons/gplus-64.png" alt="Share on Google+"/></a>

                                    <!-- pinterest-->
                                    <a href ="http://pinterest.com/pin/create/button/?url=http://localhost/interface-bookstore/front/bookdetail_controller/?id=<?php echo $records['book_id'];?>&media=<?= site_url('uploads/bookdetail/'.$records['image']);?>" alt="<?= site_url('uploads/bookdetail/'.$records['image']);?>" ></a>


                                        <p class="price">Rs. <?php echo $records['price'];?></p>
                                        <input type="hidden" name="id" value="<?php echo $records['book_id'];?>" >
                                        <input type="hidden" name="book_title" value="<?php echo $records['book_title'];?>" >
                                        <input type="hidden" name="price" value="<?php echo $records['price'];?>" >
                                           
                                
                            
                                        <p class="text-center">
                                            <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Stock:&nbsp;<?php echo $records['book_stock'];?></button>
                                            <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                            
                                        </p>

                                    </form>
                                   <div class="text-center">
                                    <input type="hidden" id="book_id" name="book_id" value="<?php echo $records['book_id'];?>">
                                    <?php if(is_userlogin()){?>
                                    <div class="btn btn-template-main" id="save"><span class="glyphicon glyphicon-heart"></span>Add to wishlist</div>
                                           
                                             <?php 
                                 $this->load->view('front/add_review'); ?>
                                </div>
                                <?php }else{?>
                                   <a href="<?=site_url('front/customer_controller');?>"> <div class="btn btn-template-main"><span class="glyphicon glyphicon-heart"></span>Add to wishlist</div></a>
                                   <a href="<?=site_url('front/customer_controller');?>"> <div class="btn btn-template-main"></span>Add Review</div></a>
                                <?php }?> 
                            </div>
                                    <p style="text-align: justify;"><?php echo $records['description'];?></p>
                            </div>

                            
                            

                        </div>
                       
                        

                        </div>

                       </div>


                     <div class="box social" id="product-social">

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?=site_url('assets/css/comment.css')?>">
<div class="container">
                                    
    <div class="row">
        <?php
                                        $i=1;   
                                        foreach($rate as $rt){

                                    ?>
        <div class="col-sm-8">
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                    <!-- <div class="pull-left image">
                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                    </div> -->
                    <div class="pull-left meta">
                        <div class="title h5">
                            <a href="#"><b><?php echo $rt->fullname;?></b></a>
                            rated this book <div class='userrate'>
                                            
                                        
                                           </div> 
                                           <script type="text/javascript"> 
                                                $(document).ready(function(){
          // Below line will get stars images from img folder 
          $.fn.raty.defaults.path = '<?= base_url() ?>assets/front/img';
                                             $('.userrate').raty({ score: <?php echo $rt->rate;?>});
                                         });
                                        </script>
                                           <br>
                                             <b>"<?php echo $rt->title;?>"</b>
                        
                                        
                </div> 
                
        </div>
        
    </div>
                                        <div class="post-description" id="post-description"> 
                                        <p><?php echo $rt->comment;?></p>    
                                    </div>
                                    <?php if( $rt->customer_id == $this->session->userdata('id')){ ?>
                                        <div>
                                 
                                    <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');" href="<?=site_url('front/review_controller/delete_review/?review_id='.$rt->review_id.'&book_id='.$rt->book_id);?>">
                <i class="glyphicon glyphicon-trash icon-white" title="Delete review"></i>
            </a>
        </div>
        <a type="button" class="btn btn-info" data-toggle="modal" data-target="#editreview<?php echo $rt->review_id;?>"><i class="glyphicon glyphicon-edit"></i></a>

        <!-- $this->load->view('front/edit_review'); -->

        <?php } ?>

</div>
<div class="modal fade" id="editreview<?php echo $rt->review_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Your Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=site_url('front/review_controller/update_review');?>" method="POST">
          <div class="form-group">
          <input class="form-control" type="text" name="title" id="title" value="<?php echo $rt->title;?>" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" type="text" name="comment" id="comment" required><?php echo $rt->comment;?></textarea>
          </div>
          <div class="form-group">
        <label> Rate this book:</label>
    <div id="star" >
    
    
  </div>
  <input type="hidden" name="score" id="score" value="<?php echo $rt->rate;?>" />
          </div>
          <input type="hidden" name="book_id" value="<?php echo $rt->book_id;?>" >
        <input type="hidden" name="review_id" value="<?php echo $rt->review_id;?>" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Review</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?= base_url() ?>js/jquery.raty.min.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
      // Below line will get stars images from img folder 
      $.fn.raty.defaults.path = '<?= base_url() ?>assets/front/img';
      $('#star').raty({
        click: function(score, evt) {
          // alert('score: ' + score); 
          document.getElementById("score").value = score;
         //  $.ajax({
         //   type: 'POST',
         //   url: '/rating_controller.php',
         //   data: {'score':score},
         //  success: function(data){ alert('your rating have been saved'); }         
         // });

    }

    });
                });

  </script>
</div>
                                    <?php
                                        $i++;
                                    }
                                    ?>
</div>



                        
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
 
                    <script type="text/javascript">
                        /*$('#save').on('click',function(){
                            //e.preventDefault();
                           // alert();
                            var book_id = $('#book_id').val();
                            //var cus_id = $('#customer_id').val();
                            // alert(book_id);
                            $.ajax({
                                type : "POST",
                                url  : "<?php echo site_url('front/wishlist_controller/add')?>",
                                data : {book_id: book_id}
                                })
                                .done(function(data){
                                   alert('Added to wishlist succesfully.');
                                }).fail(function(){
                                    alert('fail');
                                });
                        });
                         */
                         
                        $('#save').on('click',function(){
                            var book_id = $('#book_id').val();
                            $.post("<?php echo site_url('front/wishlist_controller/add')?>",{book_id: book_id})
                            .done(function(data){
                                if(data == 1)
                                    alert('Added to wishlist succesfully.');
                                else
                                    alert('Already in your wishlist!');
                            }).fail(function(){
                                alert('fail');
                            });
                        });

                        
                    </script>           
<?php 
    $this->load->view('front/footer');
?>
<!--  jqury raty parts begins from here -->
<!-- <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/css/bootstrap.css"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
<script src="<?= base_url() ?>assets/js/jquery-3.2.1.js"></script> -->


<!--For Raty-->
<script type="text/javascript" src="<?= base_url() ?>js/jquery.raty.min.js"></script>


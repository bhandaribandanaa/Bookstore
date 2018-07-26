<?php 
    $this->load->view('front/header.php');
?>


        <!-- *** LOGIN MODAL END *** -->

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Our team</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="shop_controller/view">Home</a>
                            </li>
                            <li>Our team</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <section>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                
                            </div>

                            <p class="lead">OUR TEAM MEMBER</p>
                        </div>
                    </div>

                    <div class="row">
                        <?php
                                $i=1;   
                                foreach($records as $r){
                            ?>
                        <div class="col-md-3 col-sm-3">
                            <div class="team-member" data-animate="fadeInUp">
                                <div class="image">
                                    <a href="team-member.html">
                                        <img src="<?= site_url('uploads/ourteam/'.$r->image);?>" alt="<?= site_url('uploads/ourteam/'.$r->image);?>" height="250" width="200"class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><a href="team-member.html"><?php echo $r->name;?></a></h3>
                               
                                <div class="social">
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </div>
                                <div class="text">
                                    <p></p>
                                </div>
                            </div>
                            <!-- /.team-member -->
                        </div>

                         <?php
                                $i++;
                            }
                         ?>
                        
                        
                    </div>
                    <!-- /.row -->

                    
            <!-- /.container -->

        
            <!-- /.bar -->

        </div>
        <!-- /#content -->

        <!-- *** GET IT ***
_________________________________________________________ -->

        
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

       
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



     <?php
        $this->load->view('front/footer.php')
        ?>


</body>

</html>
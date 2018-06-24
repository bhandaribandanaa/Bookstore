<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Book Store</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="<?=site_url('assets/front/css/animate.css');?>" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="<?=site_url('assets/front/css/style.default.css');?>" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="<?=site_url('assets/front/css/custom.css');?>" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="<?=site_url('assets/front/img/favicon.ico');?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?=site_url('assets/front/img/apple-touch-icon.png');?>" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?=site_url('assets/front/img/apple-touch-icon-57x57.png');?>" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?=site_url('assets/front/img/apple-touch-icon-72x72.png');?>" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=site_url('assets/front/img/apple-touch-icon-76x76.png');?>" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?=site_url('assets/front/img/apple-touch-icon-114x114.png');?>" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?=site_url('assets/front/img/apple-touch-icon-120x120.png');?>" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?=site_url('assets/front/img/apple-touch-icon-144x144.png');?>" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?=site_url('assets/front/img/apple-touch-icon-152x152.png');?>" />
</head>

<body>
    <div id="all">
<header>

            <!-- *** TOP ***
_________________________________________________________ -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>

                            <div class="login">
                                <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                                <a href="customer-register.html"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="<?=site_url('front/shop_controller');?>">
                                <img src="<?=site_url('assets/img/logo.png');?>" alt="Our Logo" class="hidden-xs hidden-sm" height="180%">
                                
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active">
                                    <a href="<?=site_url('front/shop_controller');?>" class="dropdown-toggle" >Home <b></b></a>
                                </li>
                                <?php if(!is_userlogin())
                                {?>
                                <li class="dropdown active">
                                    <a href="<?=site_url('front/customer_controller');?>" class="dropdown-toggle" >Register/Login<b></b></a>
                                </li>
                                <?php } ?>
                                
                                <!-- ========== FULL WIDTH MEGAMENU ================== -->
                                
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->

                                <li class="dropdown active">
                                    <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Team Member <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?=site_url('front/about_controller')?>">About Us</a>
                                        </li>
                                        <li><a href="<?=site_url("front/ourteam_controller")?>">Our Team</a>
                                        </li>                                      

                                    </ul>
                                </li>
                                <?php if(is_userlogin())
                                {?>
                                    <li class="dropdown active">
                                    <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Welcome <?php echo $this->session->userdata('username'); ?> <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="http://localhost/interface-bookstore/front/change_controller/changeuserinfo/?id=<?=$this->session->userdata('id'); ?>">Change User Info</a>
                                        </li>
                                        <li><a href="http://localhost/interface-bookstore/front/change_controller/changeuserpass/?id=<?= $this->session->userdata('id'); ?>">Change Username/Password</a>
                                        </li>
                                        <?php if($this->session->userdata('username')!= NULL){?> 
                                        <li><a href="<?= site_url('front/dashboard/logout') ?>">Logout</a>
                                        </li>
                                        <?php } ?>

                                    </ul>
                                </li>
                                <?php } ?>

                                
                            </ul>

                        </div>
                        <!--/.nav-collapse -->



                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->
            </header>
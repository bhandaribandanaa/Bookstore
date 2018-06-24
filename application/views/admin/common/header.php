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
    <title>Online Book Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="arya, bandana, sajja, mihika, manita,">

    <!-- The styles -->
    <link id="bs-css" href="<?= site_url('css/bootstrap-cerulean.min.css') ?>" rel="stylesheet">

    <link href="<?= site_url('css/charisma-app.css')?>" rel="stylesheet">
    <link href='<?= site_url('bower_components/fullcalendar/dist/fullcalendar.css')?>' rel='stylesheet'>
    <link href='<?= site_url('bower_components/fullcalendar/dist/fullcalendar.print.css')?>' rel='stylesheet' media='print'>
    <link href='<?= site_url('bower_components/chosen/chosen.min.css')?>' rel='stylesheet'>
    <link href='<?= site_url('bower_components/colorbox/example3/colorbox.css')?>' rel='stylesheet'>
    <link href='<?= site_url('bower_components/responsive-tables/responsive-tables.css')?>' rel='stylesheet'>
    <link href='<?= site_url('css/jquery.noty.css')?>' rel='stylesheet'>
    <link href='<?= site_url('css/noty_theme_default.css')?>' rel='stylesheet'>
    <link href='<?= site_url('css/elfinder.min.css')?>' rel='stylesheet'>
    <link href='<?= site_url('css/elfinder.theme.css')?>' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?= site_url('bower_components/jquery/jquery.min.js')?>"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>
<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="Online BookStore" src="img/logo20.png" class="hidden-xs"/>
                <span>BookStore</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"><?= $this->session->userdata('adminusername'); ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="http://localhost/practise/admin/change_controller/changeusername/?id=<?= $this->session->userdata('adminid'); ?>">Change Username</a></li>
                    <li class="divider"></li>
                    <li><a href="http://localhost/practise/admin/change_controller/changepassword/?id=<?= $this->session->userdata('adminid'); ?>">Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="<?= site_url('admin/dashboard/logout') ?>">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
             <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-cog"></i><span
                        class="hidden-sm hidden-xs"> Settings</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    
                    <li><a href="http://localhost/practise/admin/change_controller/changeusername/?id=<?= $this->session->userdata('adminid'); ?>">Change Username</a></li>
                    <li><a href="http://localhost/practise/admin/change_controller/changepassword/?id=<?= $this->session->userdata('adminid'); ?>">Change Password</a></li>
                </ul>
            </div>
            <!-- t
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Dropdown <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
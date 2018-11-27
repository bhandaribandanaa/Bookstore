<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to Online BookStore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="<?=site_url('css/bootstrap-cerulean.min.css');?>" rel="stylesheet">

    <link href="<?=site_url('css/charisma-app.css')?>" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?=site_url('bower_components/jquery/jquery.min.js')?>"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome to Online BookStore</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Password.
            </div>
            <?php if($this->session->userdata('invalid_user') != NULL && $this->session->userdata('invalid_user') === TRUE) { ?>
                <div class="alert alert-danger">
                    Invalid Username or Password.
                </div>
            <?php } ?>
            <form class="form-horizontal" id="login" action="<?= site_url('admin/login/validate_user');?>" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="clearfix"></div>
                    <p class="center col-md-5">

                   <!--        <center><div class="form-group">
                        <div id="example1" ></div></center> -->
                        <button type="submit" id="loginadmin" class="btn btn-primary">Login</button>
                        <input type="hidden" name="login" value="LOGIN">
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>

<script type="text/javascript">
     //javascript:alert(grecaptcha.getResponse(widgetId1));
   /*  function verifyCallback(response)
     {
        if(response)
        {
            
            $('#validcaptcha').val('valid');
        }
        else
        {
            $('#validcaptcha').val('invalid');
        }
     }*/
     $('#loginadmin').click(function(){
        if(grecaptcha.getResponse(widgetId1))
        {
            //alert('valid');s
            $('#login').submit();
        }
        else
        {
            alert('Invalid Captcha');
        }
     });
      var onloadCallback = function() {
        widgetId1 = grecaptcha.render('example1', {
          'sitekey' : '6LeHBWMUAAAAAI6E4vNdle8MRIZC80FynBElI61n',
          'theme' : 'light',
          // 'callback' : verifyCallback,
        });
      };
    </script>   

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>



</body>
</html>

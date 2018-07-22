<?php 
    $this->load->view('front/header.php');
//
?>


   
                                



        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1></h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">

                            <li><a href="<?=site_url('front/shop_controller/view');?>">Home</a>
                            </li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="clearfix">

            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-9 clearfix" id="customer-account">
                            <div class="heading">
                                <h3 class="text-uppercase">Change Information</h3>
                            </div>

<form role="form" id="changeUser" action="<?=site_url('front/change_controller/updateuserinfo') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>FullName:</label>
                        <input type="text" class="form-control" name="fullname" id="fullname"  value="<?php echo $records->fullname;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address:</label>
                        <input type="text" class="form-control" name="address" id="address"  value="<?php echo $records->address;?>" required>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">PhoneNumber:</label>
                        <input type="number" class="form-control" name="phone" id="phone"  value="<?php echo $records->phone;?>" required>
                    </div>  
                    <div class="form-group">
                        <label for="exampleInputEmail1">UserName:</label>
                        <input type="text" class="form-control" name="username" id="username"  value="<?php echo $records->username;?>" required>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" id="email"  value="<?php echo $records->email;?>" required>
                    </div> 
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="password" id="password"  value="<?php echo $records->password;?>" >
                    </div> 
                     <!--<div class="form-group">
                        <label for="exampleInputEmail1"> Confirm Password:</label>
                        <input type="password" class="form-control" name="passconf"  id="confirm_password"  required>
                    </div> -->
                    
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="image" id="image"  value="<?php echo $records->image;?>" required>
                    </div> 
                    <input type="hidden" name="resetpassword" id="resetpassword" value="<?php echo $records->resetpassword;?>">
                    <input type="hidden" name="status" id="status" value="<?php echo $records->status;?>">
                    <input type="hidden" name="token" id="token" value="<?php echo $records->token;?>">
                    <input type="hidden" name="id" value="<?php echo $records->id;?>">
                    <div class="form-group">
                        <div id="example1" ></div>
                    </div>
                    
                    <!-- <input type="hidden" id="validcaptcha" name="validcaptcha" value=""> -->

                    <button type="button" name='update' id="testbtn" value="UPDATE" class="btn btn-primary">UPDATE</button>

                </form>

                        </div>
                        <!-- /.box -->
</div>
            </div>
        </div>

                       

        <!-- *** FOOTER *** -->
<?php
        $this->load->view('front/footer.php')
        ?>
<!--_________________________________________________________ -->

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
     $('#testbtn').click(function(){
        if(grecaptcha.getResponse(widgetId1))
        {
            //alert('valid');
            $('#changeUser').submit();
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
          'callback' : verifyCallback,
        });
      };
    </script>   

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

</body>

</html>
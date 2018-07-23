<?php 
    $this->load->view('front/header.php');
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

<form   role="form" id="changepicture" action="<?=site_url('front/change_controller/updateuserpicture')?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="fullname" id="fullname"  value="<?php echo $records->fullname;?>" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="address" id="address"  value="<?php echo $records->address;?>" required>
                    </div> 
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="phone" id="phone"  value="<?php echo $records->phone;?>" required>
                    </div>  
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="username" id="username"  value="<?php echo $records->username;?>" >
                    </div> 
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="password" id="password"  value="<?php echo $records->password;?>" >
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="image" id="image"  value="<?php echo $records->image;?>" >
                    </div>  
                     <!--<div class="form-group">
                        <label for="exampleInputEmail1"> Confirm Password:</label>
                        <input type="password" class="form-control" name="passconf"  id="confirm_password"  required>
                    </div> -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Upload Profile Picture</label>
                        

                        <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> 
                <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                   <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="image"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]-->

                        <?//php } ?>   
                    </div> 
                    
                        <div class="form-group">
                        <div id="example1" ></div>
                    <input type="hidden" name="id" value="<?php echo $records->id;?>">
                    <button type="button" id="update" name='update' value="UPDATE" class="btn btn-primary">UPDATE</button>
                    
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
<script type="text/javascript">
 
$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
 
</script>
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
     $('#update').click(function(){
        if(grecaptcha.getResponse(widgetId1))
        {
            //alert('valid');s
            $('#changepicture').submit();
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
<!DOCTYPE html>
<html>
<head>
	<title>reCaptcha</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<?php
  echo '<h1>The form</h1>';
  echo form_open('captcha_controller/recaptcha');
  echo form_label('Name:','name').'<br />';
  echo form_error('name','<div style="color:red;">','</div>');
  echo form_input('name',set_value('name')).'<br />';
  echo form_error('g-recaptcha-response','<div style="color:red;">','</div>');
  echo '<div class="" id="example3" ></div>';
  echo form_submit('submit','Add');
  echo form_close();
  ?>
</body>
</html>
<script type="text/javascript">
      var verifyCallback = function(response) {
        alert(response);
      };
      var widgetId1;
      var widgetId2;
      var onloadCallback = function() {
        // Renders the HTML element with id 'example1' as a reCAPTCHA widget.
        // The id of the reCAPTCHA widget is assigned to 'widgetId1'.
        grecaptcha.render('example3', {
          'sitekey' : '6LeHBWMUAAAAAI6E4vNdle8MRIZC80FynBElI61n',
          'callback' : verifyCallback,
          'theme' : 'dark'
        });
      };
    </script>
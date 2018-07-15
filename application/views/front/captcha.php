<!DOCTYPE html>
<html>
<head>
	<title>reCaptcha</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<?php
  echo '<h1>The form</h1>';
  echo form_open();
  echo form_label('Name:','name').'<br />';
  echo form_error('name','<div style="color:red;">','</div>');
  echo form_input('name',set_value('name')).'<br />';
  echo form_error('g-recaptcha-response','<div style="color:red;">','</div>');
  echo '<div class="g-recaptcha" data-sitekey="6LeHBWMUAAAAAI6E4vNdle8MRIZC80FynBElI61n"></div>';
  echo form_submit('submit','Add');
  echo form_close();
  ?>


		<!-- <form action="<?=site_url('captcha_controller')?>">
			<label>Name: </label>
			<input type="text" id="name" name="name">
			<br>

		<button
			class="g-recaptcha"
			data-sitekey="6LeHBWMUAAAAAI6E4vNdle8MRIZC80FynBElI61n"
			data-callback="YourOnSubmitFn">
			Submit
		</button>
	</form> -->
</body>
</html>
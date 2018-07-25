<?php 
	$this->load->view('front/header');
?>
<br>
<br>
<br>
<br>

<div class="container">
	<div class="row">
		<div class="col-md-6">
		<form action="<?=site_url('front/email_controller/validatetoken')?>" method="post">
			<div class="form-group">
                                    <label for="Code">Enter Code:</label>
                                    <input type="text" class="form-control" name="token" id="token">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-main">Verify</button>
                                    <input type="hidden" name="verify" value="Verify">
                                </div>
		</form>
	</div>
	</div>
</div>
<br>
<br>
<br>
<br>

<?php
	$this->load->view('front/footer');
?>
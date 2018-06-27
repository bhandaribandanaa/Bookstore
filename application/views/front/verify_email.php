<?php 
	$this->load->view('front/header');
?>
<div class="container">
	<div class="row">
		<form action="<?=site_url('front/email_controller/validatetoken')?>" method="post">
			<div class="form-group">
                                    <label for="Code">Enter Code:</label>
                                    <input type="text" class="form-control" name="token" id="token">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i>Verify</button>
                                    <input type="hidden" name="verify" value="Verify">
                                </div>
		</form>
	</div>
</div>
<?php
	$this->load->view('front/footer');
?>
<?php 
    $this->load->view('front/header');
?>
<div class="container">
	<div class="row">
		<hr>
		<hr>
	Please <a href="http://localhost/interface-bookstore/front/email_controller/getemail/?id=<?=$this->session->userdata('id'); ?>">click here</a> to validate your email to continue your shopping. Thank You!
</div>
</div>
<?php
$this->load->view('front/footer');
?>
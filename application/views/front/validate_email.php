<?php 
    $this->load->view('front/header');
?>
<div class="content">
<div class="container">
	<div class="row">
		 <section class="bar background-gray no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Please Validate Your Email</h1>

                        <p class="lead">We care about your security. Please <a href="http://localhost/interface-bookstore/front/email_controller/getemail/?id=<?=$this->session->userdata('id'); ?>">click here</a> to validate your email to continue your shopping. It only takes a few seconds. Thank You!</p>

                    </div>
                </div>
            </div>
        </section>
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
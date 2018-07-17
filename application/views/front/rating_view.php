<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jquery Raty usage in PHP - Simple Star Rating Plugin</title>
</head>
<body>
	<form method="POST" action="http://localhost/interface-bookstore/front/rating_controller/insertrate">
		<label> Rate this book:</label>
		<div id="star" >
		
		
	</div>
	<input type="hidden" name="score" id="score" value= />
		<button type="submit" name="submit" value="Rate">Rate</button>
	</form>
	

</body>


<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

<!--For Raty-->
<script type="text/javascript" src="<?= base_url() ?>js/jquery.raty.min.js"></script>

<script type="text/javascript">

	$(document).ready(function(){
		  // Below line will get stars images from img folder 
		  $.fn.raty.defaults.path = '<?= base_url() ?>assets/front/img';
		  $('#star').raty({
		  	click: function(score, evt) {
		  		// alert('score: ' + score); 
		  		document.getElementById("score").value = score;
         //  $.ajax({
         //   type: 'POST',
         //   url: '/rating_controller.php',
         //   data: {'score':score},
         //  success: function(data){ alert('your rating have been saved'); }         
         // });

    }

		});
                });

	</script>

</html>


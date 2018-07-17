<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_review">
  Edit Review
</button> -->

<!-- Modal -->
<div class="modal fade" id="edit_review" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Your Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=site_url('front/review_controller/update_review');?>" method="POST">
        	<div class="form-group">
        	<input class="form-control" type="text" name="title" id="title" value="<?php echo $rate['title'];?>" required>
        	</div>
        	<div class="form-group">
        		<textarea class="form-control" type="text" name="comment" id="comment"  required><?php echo $rate['comment'];?></textarea>
        	</div>
        	<div class="form-group">
        		<label> Rate this book:</label>
		<div id="star" >
		
		
	</div>
	<input type="hidden" name="score" id="score" value="<?php echo $rate['rate'];?>" />
        	</div>
        	<input type="hidden" name="book_id" value="<?php echo $rate['book_id'];?>" >
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Post Review</button>
      </div>
      </form>
    </div>
  </div>
</div>
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
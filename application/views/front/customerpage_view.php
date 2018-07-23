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
                            <li><?php echo $customer['username']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

 <section style="margin-top:-55px; ">

 	<div class="container">
 	<!-- user information -->

 	<div class="row">

 		<div class="col-sm-8 col-md-8">

 			<!-- user information -->
	        <div class="col-sm-4 col-md-4">
	            <img src="<?= site_url('uploads/custretailer/'.$customer['image']);?>" alt="<?= site_url('uploads/custretailer/'.$customer['image']);?>" class="img-responsive img-circle">

	           <a href="http://localhost/interface-bookstore/front/change_controller/changeuserpicture/?id=<?= $this->session->userdata('id'); ?>"> <button class="btn btn-default" style="margin-left:30px; margin-top: 10px; ">Change picture</button></a>
	        </div>
	        <div class="col-sm-8 col-md-8">
	            <blockquote>
	                <p><?php echo $customer['fullname']; ?></p> <small><cite title="Source Title"><?php echo $customer['address']; ?><i class="glyphicon glyphicon-map-marker"></i></cite></small>
	            </blockquote>
	            <p> 
	            	<i class="glyphicon glyphicon-envelope"></i> <?php echo $customer['email']; ?>
	                <br/> 
	                <i class="glyphicon glyphicon-user"></i> <?php echo $customer['username']; ?>
	            </p>
	            <a href="http://localhost/interface-bookstore/front/change_controller/changeuserinfo/?id=<?= $this->session->userdata('id'); ?>"><button class="btn btn-primary">Edit Profile information</button></a>
	        </div>


		<!-- Tab information -->
			<div class="col-sm-12 col-md-12" style="padding-top:30px; ">

		      	<div  class="tabbable-panel">
		        	<div class="tabbable-line">
		          		<ul class="nav nav-tabs ">
		            		<li class="active">
		              			<a href="#tab1" data-toggle="tab">
		              				My Order
		              			</a>
		            		</li>
		            		<li>
              					<a href="#tab2" data-toggle="tab">
             						Review
             					</a>
            				</li>
		          		</ul>
		          		<div class="tab-content">
		            		<div class="tab-pane active" id="tab1">
		               			<?php 
		               			
		               			if (count($order) === 1){ 
		               				?>
		               					<p>You don't have any orders yet.</p>
		               					<?php } else { ?> 
		               			<p>
		               				
		               				<table class="table">
		               				<tr>
		               					<th>Book</th>
		               					<th>Quantity</th>
		               					<th>Total Amount</th>
		               					<th></th>
		               				</tr>
		               				<?php foreach(array_slice($order,1) as $order) { 
		               					?>
		               				<tr>
		               					<?php if($order->status!="Canceled"){ ?>
		               					<td><a href="<?=site_url('front/bookdetail_controller/?id='.$order->book_id);?>"><?php echo $order->book_title; ?></a></td>
		               					<td><?php echo $order->quantity; ?></td>
		               					<td><?php echo $order->total_amount; ?></td>
		               					<td><a href="<?=site_url('front/customerview_controller/cancel_order/?order_id='.$order->or_id);?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel this order?');" >Cancel Order?</a></td>
		               				</tr>
		               			<?php } ?>
		               				<?php } ?>
		               				</table>
		               			
		              			</p>
		              			<?php } ?>		           
		            		</div>
		            		<div class="tab-pane " id="tab2">
		               			<p>
		               			<?php 
		               			
		               			foreach ($reviews as $review) {
		               			
		               			 ?>
		               				<b>Book Name : </b>
		               				<a href="<?= site_url('front/bookdetail_controller/?id='.$review->book_id);?>"><?php echo $review->book_title; ?> </a> <br>
		               				<b>Title : </b>
		               				<?php echo $review->title;?> <br>
		               				<b>Comment : </b>
		               				<?php echo $review->comment;?> <br> <br> 
		               				<?php }?> 
		              			</p>		           
		            		</div>
		          		</div>
		        	</div>
		      	</div>
		  	</div>

		  	<!-- End of tab-->
		</div>

		<!-- wishlist information -->

		<div class="col-sm-4">
   			<div class="panel panel-primary">
    			<div class="panel-heading">
      				 Wishlist
    			</div>
	    		<div class="panel-body">
	    			<?php if (count($wishlist) == 0){?>
	        		No wishlist found
	        	<?php }else{
	        		foreach ($wishlist as $w): ?>

	        			<li><a href="<?=site_url('front/bookdetail_controller/?id='.$w->book_id);?>')"> <?php echo $w->book_title; ?></a>
	        				<div title="Delete from wishlist" class="delete"><i class="fa fa-trash"></i></div>
	        		<input type="hidden" class="book_id" value="<?=$w->book_id;?>">
	        			</li>
	        		<?php endforeach;
	        	}?>
	    		</div>
			</div>
  		</div> <!-- End of Wishlist-->
	</div>  <!-- End of row -->


	</div>

	        


<?php 
    $this->load->view('front/footer.php');
?>

</section>
<script type="text/javascript">
	$('.delete').on('click',function(){
                            var book_id = $('.book_id').val();
                            $.post("<?php echo site_url('front/wishlist_controller/delete')?>",{book_id: book_id})
                            .done(function(data){
                                    alert('Deleted from wishlist.');
                            }).fail(function(){
                                alert('fail');
                            });
                        });

</script>

 <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">BookStore</a> 2017</p>

        
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="<?= site_url('bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>


<!-- calender plugin -->
<script src='<?= site_url('bower_components/moment/min/moment.min.js')?>'></script>
<script src='<?= site_url('bower_components/fullcalendar/dist/fullcalendar.min.js')?>'></script>
<!-- data table plugin -->
<script src='<?= site_url('js/jquery.dataTables.min.js')?>'></script>

<!-- select or dropdown enhancer -->
<script src="<?= site_url('bower_components/chosen/chosen.jquery.min.js')?>"></script>
<!-- plugin for gallery image view -->
<script src="<?= site_url('bower_components/colorbox/jquery.colorbox-min.js')?>"></script>
<!-- notification plugin -->
<script src="<?= site_url('js/jquery.noty.js')?>"></script>
<!-- library for making tables responsive -->
<script src="<?= site_url('bower_components/responsive-tables/responsive-tables.js')?>"></script>
<!-- star rating plugin -->
<script src="<?= site_url('js/jquery.raty.min.js')?>"></script>
<!-- application script for Charisma demo -->
<script src="<?= site_url('js/charisma.js')?>"></script>
<script>
	(function($){
		$('#cat_id').change(function(){
			$('#subcat_id').html('<option>Loading..</option>');
			let cat_id = $(this).val();
			$.post( "<?= site_url('admin/category_controller/ajax_subcat')?>", { cat_id: cat_id })
		  	.done(function( data ) {
			    $('#subcat_id').html(data);
		  	});
		});

	})(jQuery);
</script>

</body>
</html>

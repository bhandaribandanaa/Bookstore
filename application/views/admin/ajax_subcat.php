<?php if(!empty($results)){
foreach ($results as $value) {
 	?>
<option value='<?= $value->subcat_id ?>'><?= $value->subcat_title ?></option>
<?php } } else { ?>
<option value=''>No results</option>
<?php } ?>
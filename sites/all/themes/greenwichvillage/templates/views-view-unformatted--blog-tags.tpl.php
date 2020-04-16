<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
  <p>
  
<?php $i=1; $gv_total = count($rows); foreach ($rows as $id => $row): ?>
    <?php 
		if($i<$gv_total)
			print $row.' . '; 
		else 
			print $row;
		$i++;
	?>
<?php endforeach; ?>
  </p>

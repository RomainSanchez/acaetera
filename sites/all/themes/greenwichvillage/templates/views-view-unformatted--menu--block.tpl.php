<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

    <div id="options" class="clearfix">
      <ul id="filters" class="option-set clearfix" data-option-key="filter">
	<?php $count_menu = count($rows)/2; $item_count = 1;?>
<?php foreach ($rows as $id => $row): ?>
<?php $dataoption1 = str_replace(' ', '', $row); ?>
		<?php if($item_count <= $count_menu) $item_align = 'alignleft'; else $item_align = 'alignright'; if($item_count==1) $item_active='selected'; else $item_active='notselected'; ?>
        <li class="gv_filter_menu <?php echo $item_align;?>"><a href="<?php print_r($GLOBALS['base_url']);?>/#filter=.<?php echo $dataoption1; ?>" class="<?php echo $item_active; ?>"><?php print $dataoption1; ?></a>
          <div class="menu-line"></div>
        </li>
		<?php $item_align = null; $item_count++; ?>
<?php endforeach; ?>
      </ul>
    </div>
    <!-- end nav -->
  


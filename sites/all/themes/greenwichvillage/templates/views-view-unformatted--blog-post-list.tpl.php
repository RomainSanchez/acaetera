<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($rows as $id => $row): ?>
  <p class="gv_our_blog_p">
    <?php print $row; ?>
  </p>
<?php endforeach; ?>

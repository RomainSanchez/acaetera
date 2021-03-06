<?php
/**
 * @file views-isotope.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
           $testclass='0';
           $testclass1='0';
?>
  <div id="content">
    <div class="container">
      <div id="container" class="clearfix">
    <?php $count = 0; ?>
    <?php foreach ( $rows as $id => $row ): ?>
      <?php
      // added for easy multi-color display 
      if ($count == 5) {
        $count = 0;
      }
      $classlist = '';
      $bgstyle = '';
      // pull out isotope-filter class if it exists
      
      if (strstr($row, '<div class="isotope-filter">')) {
        $rowparts = explode('<div class="isotope-filter">', $row);
        $filterclass = explode('</div>', $rowparts[1]);
        
        // check for commas and treat as an array for list of taxonomy terms
        if (strstr($filterclass[0], ',')) {
          $classes = explode(', ', $filterclass[0]);
		  foreach ($classes as $class) {
            $class = trim(strip_tags(strtolower($class)));
            $class = str_replace(' ', '-', $class);
            $class = str_replace('/', '-', $class);
            $class = str_replace('&amp;', '', $class);
			if($class == 'slider')
			$testclass='1';
			if($class == 'double')
			$testclass1='1';
            $classlist .= ' ' . $class; 

          }
        } else {
          //strip divs and normalize naming for just once
          $classlist = trim(strip_tags(strtolower($filterclass[0])));
          $classlist = str_replace(' ', '-', $classlist);
          $classlist = str_replace('/', '-', $classlist);
          $classlist = str_replace('&amp;', '', $classlist);  
        $row = $rowparts[0] . '</div>';

        }

        $row = $rowparts[0] . '</div>';

      }
      ?>
	  	  			<?php if($testclass == '1'){
			$testclass='col2-3';}
			else{
			$testclass='col1-3'; }?>

			<?php if($testclass1 == '1'){
			$testclass1='double';} ?>
      <div class="element clearfix <?php if(isset($testclass1)) print $testclass1;?> <?php print $testclass.' '.$classlist; ?>">
        <?php print $row; ?>
      </div>
      <?php 
      // reset
      $rowparts = NULL;
      $filterclass = NULL;
	  $testclass = NULL;
	  $testclass1 = NULL;
      $count++;
      ?>
    <?php endforeach; ?>
  </div>
  </div>
  </div>



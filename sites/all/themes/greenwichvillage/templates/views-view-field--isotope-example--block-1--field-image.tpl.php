<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>

<?php 
$showastype=null;
$showastype_portfolio=null;
$showastype1=null;
$shownodetype=null;

if(isset($row->node_type)) $shownodetype = $row->node_type;
if(isset($row->_field_data['nid']['entity']->field_show_as['und'][0]['value'])){
$showastype = $row->_field_data['nid']['entity']->field_show_as['und'][0]['value'];
};

if(isset($row->_field_data['nid']['entity']->field_project_view_as['und'][0]['value'])){
$showastype_portfolio = $row->_field_data['nid']['entity']->field_project_view_as['und'][0]['value'];
}; 

if(isset($row->_field_data['nid']['entity']->field_content_show_as['und'][0]['value'])){
$showastype1 = $row->_field_data['nid']['entity']->field_content_show_as['und'][0]['value'];
}; 

if($showastype == 'video' OR $showastype_portfolio== 'video'){
?>
          <div class="images"> 
		  <?php if(isset($row->_field_data['nid']['entity']->field_image['und'][0]['uri'])){   ?>
		  <img src="<?php print file_create_url($row->_field_data['nid']['entity']->field_image['und'][0]['uri']);?>" alt="" />
		  <?php } ?>
		  
            <section class="hidden-infos"> <a href="<?php if(isset($row->_field_data['nid']['entity']->field_video_link['und'][0]['value'])) print $row->_field_data['nid']['entity']->field_video_link['und'][0]['value']; ?>" class="video-popup" title=""></a>
              <div class="overlay"></div>
              <div class="icons video"></div>
            </section>
            <div class="title">
              <div class="title-wrap">
                <h3><?php print $row->node_title; ?></h3>
              </div>
            </div>
            <div class="subtitle">
              <div class="subtitle-wrap">
                <p><?php if(isset($row->_field_data['nid']['entity']->field_sub_title['und'][0]['value'])) print $row->_field_data['nid']['entity']->field_sub_title['und'][0]['value']; ?></p>
              </div>
            </div>
          </div>
<?php }

elseif($showastype == 'image' OR $showastype_portfolio== 'image') { ?>
        <div class="images"> 
		<?php if(isset($row->_field_data['nid']['entity']->field_image['und'][0]['uri'])){ ?>
		<img src="<?php print file_create_url($row->_field_data['nid']['entity']->field_image['und'][0]['uri']);?>" alt="" />
		<?php } ?>  
        <section class="hidden-infos"> <a href="<?php if(isset($row->_field_data['nid']['entity']->field_image['und'][0]['uri'])) print file_create_url($row->_field_data['nid']['entity']->field_image['und'][0]['uri']);?>" data-title="<?php print $row->node_title; ?>" data-fancybox-group="group1" class="popup"></a>
			<div class="overlay"></div>
			<div class="icons zoom"></div>
        </section>
            <div class="title">
              <div class="title-wrap">
                <h3><?php print $row->node_title; ?></h3>
              </div>
            </div>
            <div class="subtitle">
              <div class="subtitle-wrap">
                <p><?php if(isset($row->_field_data['nid']['entity']->field_sub_title['und'][0]['value'])) print $row->_field_data['nid']['entity']->field_sub_title['und'][0]['value']; ?></p>
              </div>
            </div>
          </div>
<?php } 

elseif($showastype == 'details1' OR $showastype_portfolio== 'details1') { ?>
        <div class="images"> 
		<?php if(isset($row->_field_data['nid']['entity']->field_image['und'][0]['uri'])){ ?>
		<img src="<?php print file_create_url($row->_field_data['nid']['entity']->field_image['und'][0]['uri']);?>" alt="" />
		<?php } ?>
        <section class="hidden-infos"> <a href="<?php print base_path().drupal_get_path_alias("node/{$row->nid}"); ?>" data-title="<?php print $row->node_title; ?>"></a>
			<div class="overlay"></div>
			<div class="icons more"></div>
        </section>
            <div class="title">
              <div class="title-wrap">
                <h3><?php print $row->node_title; ?></h3>
              </div>
            </div>
            <div class="subtitle">
              <div class="subtitle-wrap">
                <p><?php if(isset($row->_field_data['nid']['entity']->field_sub_title['und'][0]['value'])) print $row->_field_data['nid']['entity']->field_sub_title['und'][0]['value']; ?></p>
              </div>
            </div>
          </div>
<?php }

elseif($showastype == 'link' OR $showastype_portfolio== 'link') { ?>
        <div class="images"> 
		<?php if(isset($row->_field_data['nid']['entity']->field_image['und'][0]['uri'])){ ?>
		<img src="<?php print file_create_url($row->_field_data['nid']['entity']->field_image['und'][0]['uri']);?>" alt="" />
		<?php } ?>
        <section class="hidden-infos"> 
		<a href="<?php if(isset($row->_field_data['nid']['entity']->field_download_link['und'][0]['value'])) print $row->_field_data['nid']['entity']->field_download_link['und'][0]['value']; ?>" target="_blank" data-title="<?php print $row->node_title; ?>"></a>
              <div class="overlay"></div>
              <div class="icons link"></div>
        </section>
            <div class="title">
              <div class="title-wrap">
                <h3><?php print $row->node_title; ?></h3>
              </div>
            </div>
            <div class="subtitle">
              <div class="subtitle-wrap">
                <p><?php if(isset($row->_field_data['nid']['entity']->field_sub_title['und'][0]['value'])) print $row->_field_data['nid']['entity']->field_sub_title['und'][0]['value']; ?></p>
              </div>
            </div>
          </div>
<?php }
 
elseif($showastype == 'details2' OR $showastype_portfolio== 'details2') { ?>
          <div class="images">
		  <?php if(isset($row->_field_data['nid']['entity']->field_image['und'][0]['uri'])) { ?>		  
		  <img src="<?php print file_create_url($row->_field_data['nid']['entity']->field_image['und'][0]['uri']);?>" alt="" />
		  <? } ?>
            <section class="hidden-infos"> <a href="<?php print base_path().drupal_get_path_alias("node/{$row->nid}"); ?>" data-title="<?php print $row->node_title; ?>"></a>
              <div class="overlay"></div>
            </section>
            <div class="title">
              <div class="title-wrap">
                <h3><?php print $row->node_title; ?></h3>
              </div>
            </div>
            <div class="subtitle">
              <div class="subtitle-wrap">
                <p><?php if(isset($row->_field_data['nid']['entity']->field_sub_title['und'][0]['value'])) print $row->_field_data['nid']['entity']->field_sub_title['und'][0]['value']; ?></p>
              </div>
            </div>
          </div>
<?php } 

elseif($showastype == 'download') { ?>
          <div class="images"> 
		  <?php if(isset($row->_field_data['nid']['entity']->field_image['und'][0]['uri'])) { ?>
		  <img src="<?php print file_create_url($row->_field_data['nid']['entity']->field_image['und'][0]['uri']);?>" alt="" />
		  <?php } ?>
            <section class="hidden-infos"> <a href="<?php if(isset($row->_field_data['nid']['entity']->field_download_link['und'][0]['value'])) print $row->_field_data['nid']['entity']->field_download_link['und'][0]['value']; ?>" data-title="Project Title Here"></a>
              <div class="overlay"></div>
              <div class="icons detail"></div>
            </section>
			
            <div class="title">
              <div class="title-wrap">
                <h3><?php print $row->node_title; ?></h3>
              </div>
            </div>
            <div class="subtitle">
              <div class="subtitle-wrap">
                <p><?php if(isset($row->_field_data['nid']['entity']->field_sub_title['und'][0]['value'])) print $row->_field_data['nid']['entity']->field_sub_title['und'][0]['value']; ?></p>
              </div>
            </div>
          </div>
<?php }
 
elseif($showastype1 == 'personal') { ?>

          <div class="movable-content1">
            <div class="images"> 
			<?php if(isset($row->_field_data['nid']['entity']->field_image['und'][0]['uri'])) {?>
		  <img src="<?php print file_create_url($row->_field_data['nid']['entity']->field_image['und'][0]['uri']);?>" alt="" />
		  <?php } ?>
              <a href="<?php print base_path().drupal_get_path_alias("node/{$row->nid}"); ?>"><section class="hidden-infos">
                <div class="overlay"></div>
                <div class="icons profile"></div>
              </section></a>
              <div class="title">
                <div class="title-wrap">
                <h3><?php print $row->node_title; ?></h3>
                </div>
              </div>
              <div class="subtitle">
                <div class="subtitle-wrap">
                <p><?php if(isset($row->_field_data['nid']['entity']->field_sub_title['und'][0]['value'])) print $row->_field_data['nid']['entity']->field_sub_title['und'][0]['value']; ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix complete-border centered about_hidden">
            <p class="no-h2"><?php if(isset($row->_field_data['nid']['entity']->body['und'][0]['value'])) print $row->_field_data['nid']['entity']->body['und'][0]['value']; ?></p>
            <ul class="social clearfix">
			
			<?php if(isset($row->_field_data['nid']['entity']->field_skype['und'][0]['value'])){ ?>
              <li class="skype"><a href="<?php print $row->_field_data['nid']['entity']->field_skype['und'][0]['value']; ?>" onClick="return false">Visit our skype Account</a></li>
			<?php } ?>
			
			<?php if(isset($row->_field_data['nid']['entity']->field_google_plus['und'][0]['value'])){ ?>
              <li class="googleplus"><a href="<?php print $row->_field_data['nid']['entity']->field_google_plus['und'][0]['value']; ?>" onClick="return false">Visit our googleplus Account</a></li>
			<?php } ?>
			  
			<?php if(isset($row->_field_data['nid']['entity']->field_linkedin['und'][0]['value'])){ ?>
              <li class="linkedin"><a href="<?php print $row->_field_data['nid']['entity']->field_linkedin['und'][0]['value']; ?>" onClick="return false">Visit our linkedin Account</a></li>
			<?php } ?>
			  
			<?php if(isset($row->_field_data['nid']['entity']->field_mail['und'][0]['value'])){ ?>
              <li class="linkedin"><a href="<?php print $row->_field_data['nid']['entity']->field_mail['und'][0]['value']; ?>" onClick="return false">Visit our linkedin Account</a></li>
			<?php } ?>
            </ul>
          </div>		  
<?php }}
 
elseif($showastype1 == 'personal-mail') { ?>

          <div class="images"> 
		   <?php if(isset($row->_field_data['nid']['entity']->field_image['und'][0]['uri'])) { ?>
		  <img src="<?php print file_create_url($row->_field_data['nid']['entity']->field_image['und'][0]['uri']);?>" alt="" />
		  <?php } ?>
            <section class="hidden-infos"> <a href="mailto:<?php if(isset($row->_field_data['nid']['entity']->field_mail['und'][0]['value'])) print $row->_field_data['nid']['entity']->field_mail['und'][0]['value']; else print '#'; ?>"></a>
              <div class="overlay"></div>
              <div class="icons email"></div>
            </section>
            <div class="title">
              <div class="title-wrap">
                <h3><?php print $row->node_title; ?></h3>
              </div>
            </div>
            <div class="subtitle">
              <div class="subtitle-wrap">
                <p><?php if(isset($row->_field_data['nid']['entity']->field_sub_title['und'][0]['value'])) print $row->_field_data['nid']['entity']->field_sub_title['und'][0]['value']; ?></p>
              </div>
            </div>
          </div>

<?php }

elseif($shownodetype == 'slider'){ 
$imgcount = count($row->_field_data['nid']['entity']->field_image['und']);
?>

          <div class="flexslider">
            <ul class="slides">
<?php for($i=0; $i<$imgcount; $i++){ ?>
			<li>
                <div class="images">
                  <div class="overlay2"></div>
                  <img src="<?php if(isset($row->_field_data['nid']['entity']->field_image['und'][$i]['uri'])) print file_create_url($row->_field_data['nid']['entity']->field_image['und'][$i]['uri']);?>" alt="" />
                  <div class="caption">
                    <p><?php print $i+1; ?> <span>of</span> <?php print $imgcount;?></p>
                  </div>
                </div>
              </li>
<?php } ?>
            </ul>
          </div>
<?php
}
else { print $output; } ?>


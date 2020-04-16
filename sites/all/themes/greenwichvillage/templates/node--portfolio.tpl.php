<?php

/**
 * @file
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>
<?php
$gv_img_count = 1;
$gv_img_count1 = 1;
if(isset($node->field_image))
$gv_img_count = count($node->field_image['und']);
if(isset($node->field_slideshow_image))
$gv_img_count1 = count($node->field_slideshow_image['und']);
$imgpath = file_create_url($node->field_image['und'][0]['uri']);?>
<?php if($node->field_project_view_as['und'][0]['value'] == 'details1'){ ?>
 <div id="content">
    <div class="container">
      <div id="container" class="clearfix">
        <div class="element  clearfix col1-1 home">
          <div class="flexslider">
            <ul class="slides">
			<?php for ($i = 0; $i < $gv_img_count1; $i++) {?>
              <li>
                <div class="images">
                  <div class="overlay2"></div>
				  
                  <img src="<?php if(isset($node->field_slideshow_image['und'][$i]['uri'])) print file_create_url($node->field_slideshow_image['und'][$i]['uri']); else print $imgpath;?>" alt="<?php if(isset($node->field_slideshow_image['und'][$i]['alt'])) print $node->field_slideshow_image['und'][$i]['alt'];?>" />
				  
                  <div class="caption">
                    <div class="title">
                      <div class="title-wrap">
                        <h3><?php if(isset($node->field_slideshow_image['und'][$i]['title'])) print $node->field_slideshow_image['und'][$i]['title'];?></h3>
                      </div>
                    </div>
                    <div class="subtitle">
                      <div class="subtitle-wrap">
                        <?php if(isset($node->field_slideshow_image['und'][$i]['alt'])) print $node->field_slideshow_image['und'][$i]['alt'];?>
                      </div>
                    </div>
                    <p><?php print $i+1;?> <span>of</span> <?php print $gv_img_count1;?></p>
                  </div>
                </div>
              </li>
			  <?php } ?>
            </ul>
          </div>
        </div>
		<?php if(isset($content['body'])) { ?>
        <div class="element clearfix col2-3 complete-border home auto">
          <h2><?php print $title; ?></h2>
          <?php print render($content['body']);?>
        </div>
		<?php } ?>
		<?php if(isset($content['field_project_details'])) { ?>
        <div class="element clearfix col1-3 border home">
          <h2>Project Details</h2>
          <?php print render($content['field_project_details']);?>          
           
          <p class="small bottom"><a href="http://<?php if(isset($node->field_project_link['und'][0]['value'])) print $node->field_project_link['und'][0]['value'];?>">Visit live website.</a></p>
        </div>
		<?php } ?>
      </div>
      <!-- end container -->
    </div>
  </div>
<?php } ?>

<?php if($node->field_project_view_as['und'][0]['value'] == 'details2'){ ?>
 <div id="content">
    <div class="container">
      <div id="container" class="clearfix">
        <div class="element  clearfix col2-3 auto-image home">
		
		<div class="images"> 

			<?php if(isset($node->field_slideshow_image['und'][0]['uri']))  $imgpath_1 = file_create_url($node->field_slideshow_image['und'][0]['uri']); ?>
			
			<img src="<?php if(isset($node->field_slideshow_image['und'][0]['uri'])) print file_create_url($node->field_slideshow_image['und'][0]['uri']); else print $imgpath;?>" alt="<?php if(isset($node->field_slideshow_image['und'][0]['alt'])) print $node->field_slideshow_image['und'][0]['alt'];?>" />
            
			<section class="hidden-infos"> <a href="<?php if(isset($node->field_slideshow_image['und'][0]['uri'])) print file_create_url($node->field_slideshow_image['und'][0]['uri']); else print $imgpath;?>" data-title="<?php print $title; ?>" data-fancybox-group="group1" class="popup"></a>
              <div class="overlay"></div>
              <div class="icons zoom"></div>
            </section>
            <div class="title">
              <div class="title-wrap">
                <h3><?php if(isset($node->field_slideshow_image['und'][0]['title'])) print $node->field_slideshow_image['und'][0]['title'];?></h3>
              </div>
            </div>
            <div class="subtitle">
              <div class="subtitle-wrap">
                <p><?php if(isset($node->field_slideshow_image['und'][0]['alt'])) print $node->field_slideshow_image['und'][0]['alt'];?>.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="element clearfix col2-3 complete-border home auto centered">
          <h2>Share this project:</h2>
          <ul class="social clearfix">
            <li class="twitter"><a href="http://twitter.com/share?url=<?php print base_path().drupal_get_path_alias("node/{$node->nid}"); ?>" target="_blank">Visit our twitter Account</a></li>
			
            <li class="googleplus"><a href="https://plus.google.com/share?url=<?php print base_path().drupal_get_path_alias("node/{$node->nid}"); ?>" target="_blank">Visit our googleplus Account</a></li>
			
            <li class="facebook"><a href="http://www.facebook.com/sharer.php?u=<?php print base_path().drupal_get_path_alias("node/{$node->nid}"); ?>" target="_blank">Visit our facebook Account</a></li>
			
            <li class="linkedin"><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php print base_path().drupal_get_path_alias("node/{$node->nid}"); ?>" target="_blank">Visit our linkedin Account</a></li>
			
            <li class="pinterest"><a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());" target="_blank">Visit our pinterest Account</a></li>
			
          </ul>
        </div>
        <div class="element  clearfix col2-3 auto-image home">
          <div class="images"> 
		  <div class="flexslider">
		    <ul class="slides">
			<?php for ($i = 1; $i < $gv_img_count1; $i++) {?>
              <li>
				  <img src="<?php if(isset($node->field_slideshow_image['und'][$i]['uri'])) print file_create_url($node->field_slideshow_image['und'][$i]['uri']); ?>" alt="<?php if(isset($node->field_slideshow_image['und'][$i]['alt'])) print $node->field_slideshow_image['und'][$i]['alt'];?>" />

					<div class="title">
					  <div class="title-wrap">
						<h3><?php if(isset($node->field_slideshow_image['und'][$i]['title'])) print $node->field_slideshow_image['und'][$i]['title'];?></h3>
					  </div>
					</div>
					<div class="subtitle">
					  <div class="subtitle-wrap">
						<p><?php if(isset($node->field_slideshow_image['und'][$i]['alt'])) print $node->field_slideshow_image['und'][$i]['alt'];?>.</p>
					  </div>
					</div>
				  
					<section class="hidden-infos"> <a href="<?php if(isset($node->field_slideshow_image['und'][$i]['uri'])) print file_create_url($node->field_slideshow_image['und'][$i]['uri']); ?>" data-title="<?php if(isset($node->field_slideshow_image['und'][$i]['title'])) print $node->field_slideshow_image['und'][$i]['title'];?>"  data-fancybox-group="group1" class="popup"></a>
					  <div class="overlay"></div>
					  <div class="icons zoom"></div>
					</section>

              </li>
			  <?php } ?>
			</ul>
          </div>
          </div>
        </div>
        <div class="element clearfix col1-3 border home auto">
          <h2><?php print $title; ?></h2>
		  <?php if(isset($content['body'])) 
				print render($content['body']).'<div class="clear"></div>';
				
				if(isset($content['field_project_details']))
				print render($content['field_project_details']);
		  ?>
        </div>
		<?php if(isset($node->field_video_link['und'][0]['value'])):?>
        <div class="element  clearfix col1-3 auto-image home">
          <div class="images"> <img src="<?php if(isset($node->field_video_thumbnail_image_['und'][0]['uri'])) print file_create_url($node->field_video_thumbnail_image_['und'][0]['uri']);?>" alt="" />
            <section class="hidden-infos"> <a href="<?php if(isset($node->field_video_link['und'][0]['value'])) print $node->field_video_link['und'][0]['value'];?>" class="video-popup" title=""></a>
              <div class="overlay"></div>
              <div class="icons video"></div>
            </section>
            <div class="title">
              <div class="title-wrap">
                <h3>Watch the video</h3>
              </div>
            </div>
            <div class="subtitle">
              <div class="subtitle-wrap">
                <p>on vimeo.</p>
              </div>
            </div>
          </div>
        </div>
		<?php endif; ?>
        <a href="<?php if(isset($node->field_project_link['und'][0]['value'])) print 'http://'.$node->field_project_link['und'][0]['value'];?>" onClick="return false">
        <div class="element  clearfix col1-3 auto home button">
          <p class="no-h2">Live Website <span class="arrow">→</span></p>
        </div>
        </a> </div>
      <!-- end container -->
    </div>
  </div>
 
<?php } ?>
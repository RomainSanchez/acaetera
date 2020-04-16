<div id="wrap">
  <!-- Preloader -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <header id="wrapper" class="clearfix">
<?php
$logo_align = null;
if (theme_get_setting('greenwichvillage_header')=='default'){
$logo_align = '';
} 
if (theme_get_setting('greenwichvillage_header')=='style-1'){
$logo_align = 'alignright';
} 
if (theme_get_setting('greenwichvillage_header')=='style-2'){
$logo_align = 'alignleft';
} 
?>  
	<?php if ($logo): ?>
	  <h1 id="logo" class="<?php echo $logo_align; ?>">
		<a class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
		<img class="main_logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
		</a>
	  </h1>
	<?php endif; ?>
	
    <!-- start navi -->
    <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
    <div class="clear"></div>
	
		<?php if ($page['greenwichvillage_menu']): ?>
			<?php print render($page['greenwichvillage_menu']); ?>
		<?php endif; ?>     

    <!-- end nav -->
	    <?php if ($main_menu): ?>
		
      <div id="options" class="clearfix">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'filters',
            'class' => 'menu option-set clearfix',
            'data-option-key' => 'filter',
          ),
        )); ?>
      </div> <!-- /#main-menu -->
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
      <div id="secondary-menu" class="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> <!-- /#secondary-menu -->
    <?php endif; ?>
  </header>
  <!-- end header -->
  
  <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>

  <?php if ($page['featured']): ?>
    <div class="container" id="featured">
		<div id="content" class="section clearfix">
      <?php print render($page['featured']); ?>
		</div>
	</div> <!-- /.section, /#featured -->
  <?php endif; ?>
  <div id="content_main">
    <div class="container">
      <div class="clearfix">
    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_first']); ?>
      </div></div> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>

    <div class="isotope" id="content">
	      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>
	  
  <?php if ($page['blog'] OR $page['blog-1'] OR $page['blog-2']): ?>
<div class="gv_blog">
	<div class="gv_blog_main">
      <?php print render($page['blog']); ?>
	</div>
	<div class="gv_blog_tags">
      <?php print render($page['blog-1']); ?>
	</div>	
	<div class="gv_blog_category">
      <?php print render($page['blog-2']); ?>
	</div>
</div>
  <?php endif; ?>
	  
    </div> <!-- /.section, /#content -->

    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_second']); ?>
      </div></div> <!-- /.section, /#sidebar-second -->
    <?php endif; ?>
</div>
</div>
</div>


  <!-- end content -->
</div>

  <?php if ($page['triptych_first'] || $page['triptych_middle'] || $page['triptych_last']): ?>
    <div id="triptych-wrapper"><div id="triptych" class="clearfix">
      <?php print render($page['triptych_first']); ?>
      <?php print render($page['triptych_middle']); ?>
      <?php print render($page['triptych_last']); ?>
    </div></div> <!-- /#triptych, /#triptych-wrapper -->
  <?php endif; ?>

<!-- end wrap -->
<footer>
  <div class="container">
    <div class="centered">
	  <?php if($page['footer-social']):?>
      <?php print render($page['footer-social']); ?>
	  <?php endif;?>

      <p class="small">
	  <?php if($page['footer-copyright']):?>
      <?php print render($page['footer-copyright']); ?>
	  <?php endif;?>
	  </p>
    </div>
  </div>
</footer>
<!-- BACK TO TOP BUTTON -->
<div id="backtotop">
  <ul>
    <li><a id="toTop" href="#" onClick="return false">Back to Top</a></li>
  </ul>
</div>

<script>
$( ".gv_blog .gv_blog_main" ).clone().appendTo( "#gv_blog" );
$( ".gv_blog .gv_blog_tags" ).clone().appendTo( "#gv_tags" );
$( ".gv_blog .gv_blog_category" ).clone().appendTo( "#blog_categories" );
</script>


  <script>
$(document).ready(function() {
	// initiate googlemaps					
//    $('#map').goMap({ address: '<?php echo theme_get_setting('gv_map'); ?>',
//	    	zoom: 14,
//	    	navigationControl: true, 
//	    	maptype: 'TERRAIN',
//	    	draggable: false, zoomControl: false, scrollwheel: false, disableDragging: true,
//	    	markers: [
//	    		{ 'address' : '<?php echo theme_get_setting('gv_map'); ?>' }
//	    	],
//			
  //      disableDoubleClickZoom: true
//		});

var styles = [ { "stylers": [ { "visibility": "on" }, { "saturation": -100 }, { "gamma": 1 } ] },{ } ];

  //  $.goMap.setMap({
//    mapTypeControlOptions: {
  //     mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'GoogleMaps']
  //  }});

    var styledMapOptions = {
        name: "GoogleMaps"
    }

    var jayzMapType = new google.maps.StyledMapType(
        styles, styledMapOptions);

  //  $.goMap.map.mapTypes.set('GoogleMaps', jayzMapType);
  //  $.goMap.map.setMapTypeId('GoogleMaps');



var styleArray = [{
     featureType: "poi.business",
     elementType: "labels",
     stylers: [{ visibility: "off" }]
     }];
//$.goMap.setMap({styles: styleArray});
});


var selector = '.gv_filter_menu a';
var selector2 = '.gv_filter_menu a.selected';

$(selector).on('click', function(){
    $(selector2).removeClass('selected');
    $(selector).removeClass('notselected');
    $(this).addClass('selected');
});

  </script>
  

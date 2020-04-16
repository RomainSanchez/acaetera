<div id="wrap">
<?php echo $node->type; ?>
  <!-- Preloader -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <header id="wrapper" class="clearfix">
	
	<?php if ($logo): ?>
	  <h1 id="logo">
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
    <div id="featured"><div class="section clearfix">
      <?php print render($page['featured']); ?>
    </div></div> <!-- /.section, /#featured -->
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
<div class="col1-3">
      <?php print render($page['content']); ?>
	  </div>
  <?php if ($page['blog']): ?>
<div class="element clearfix col1-3 border blog auto">
      <?php print render($page['blog']); ?>
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
      <ul class="social clearfix">
        <li class="twitter"><a href="#" onClick="return false">Visit our twitter Account</a></li>
        <li class="behance"><a href="#" onClick="return false">Visit our behance Account</a></li>
        <li class="facebook"><a href="#" onClick="return false">Visit our facebook Account</a></li>
      </ul>
      <p class="small"> © 2014, Greenwich Village</p>
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
$( "#sidebar-first .section" ).clone().appendTo( "#gv_blog" );
</script>


  <script>
$(document).ready(function() {
	// initiate googlemaps					
    $('#map').goMap({ address: 'Khulna, Bangladesh',
	    	zoom: 14,
	    	navigationControl: true, 
	    	maptype: 'TERRAIN',
	    	draggable: false, zoomControl: false, scrollwheel: false, disableDragging: true,
	    	markers: [
	    		{ 'address' : 'Khulna, Bangladesh' }
	    	],
			
        disableDoubleClickZoom: true
		});

var styles = [ { "stylers": [ { "visibility": "on" }, { "saturation": -100 }, { "gamma": 1 } ] },{ } ];

    $.goMap.setMap({
    mapTypeControlOptions: {
       mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'GoogleMaps']
    }});

    var styledMapOptions = {
        name: "GoogleMaps"
    }

    var jayzMapType = new google.maps.StyledMapType(
        styles, styledMapOptions);

    $.goMap.map.mapTypes.set('GoogleMaps', jayzMapType);
    $.goMap.map.setMapTypeId('GoogleMaps');



var styleArray = [{
     featureType: "poi.business",
     elementType: "labels",
     stylers: [{ visibility: "off" }]
     }];
$.goMap.setMap({styles: styleArray});
});


var selector = '.gv_filter_menu a';
var selector2 = '.gv_filter_menu a.selected';

$(selector).on('click', function(){
    $(selector2).removeClass('selected');
    $(selector).removeClass('notselected');
    $(this).addClass('selected');
});


  </script>

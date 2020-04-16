<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
<?php print $head; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="author" content="3jon">
<meta name="Description" content="Greenwich Village – Responsive Retina-Ready HTML5" />
<title><?php print $head_title; ?></title>
<?php print $styles; ?>

<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<?php print $scripts; ?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,600,800' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Lora:400italic,700italic' rel='stylesheet' type='text/css' />
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body class="gv_overflow"> 
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
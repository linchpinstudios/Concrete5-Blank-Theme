<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php Loader::element('header_required');
		$theme_path = $this->getThemePath();
	?>
  <link rel="stylesheet" media="screen" type="text/css" href="<? echo $theme_path ?>/css/compressed.css" />
  <!--[if IE]>
    <script type="text/javascript" src="<?php echo $theme_path; ?>/js/DOMAssistantComplete.js"></script>
    <script type="text/javascript" src="<?php echo $theme_path; ?>/js/ie-css3.js"></script>
    <script type="text/javascript" src="<?php echo $theme_path; ?>/js/html5.js"></script>
	<![endif]-->
  <!--[if IE 7]>
  	<style>
    	#navWrapper .trainingMenu ul li a{padding-left:17px;padding-right:17px}
    	#navWrapper .trainingMenu ul li:first-child a{padding-left:17px;padding-right:17px}
      .ccm-easyTabs-nav li span.active-link{background-color:#000 !important}
    </style>
  <![endif]-->
  <!--[if IE 9]>
  	<style>
    	#navWrapper .trainingMenu ul li a{padding-left:11px;padding-right:10px}
    	#navWrapper .trainingMenu ul li:first-child a{padding-left:10px;padding-right:10px}
    </style>
  <![endif]-->
</head>
<body>
	<div id="pageWrapper">
  	<div id="pageCon">
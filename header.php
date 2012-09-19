<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">

<!--******************header-->
<div id="header">
<h1 id="logo"><a href="<?php bloginfo('url'); ?>">Flores International</a></h1>
</div>
<!--******************end header-->

<!--mail visual-->
<div id="main_visual"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></div>
<!--end mail visual-->


<!--******************contents-->
<div id="contents">

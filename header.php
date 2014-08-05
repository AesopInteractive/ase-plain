<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic' rel='stylesheet' type='text/css'>
	<meta name="p:domain_verify" content="eab589912490f786548fbc933e13b516"/>
	<!-- FB Open Graph -->
	<meta property="fb:app_id" content="492973480802758">
	<meta property="og:url" content="<?php echo get_permalink();?>">
	<meta property="og:title" content="<?php echo get_bloginfo('name');?>">
	<meta property="og:site_name" content="<?php echo get_bloginfo('name');?>">
	<meta property="og:description" content="">
	<meta property="og:type" content="website">
	<?php // echo ase_get_social_backup_img('property','og', 'fb');?>
	<!-- Twitter Meta -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:creator" content="@aesopinteractiv">
	<meta name="twitter:site" content="@aesopinteractiv">
	<meta name="twitter:title" content="<?php echo get_bloginfo('name');?>">
	<meta name="twitter:description" content="">
	<meta name="twitter:domain" content="<?php echo get_permalink();?>">
	<?php // echo ase_get_social_backup_img('name','twitter', 'twitter');?>

	<meta property="og:locale" content="en_us">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/source/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
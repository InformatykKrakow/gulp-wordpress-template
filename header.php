<?php
/**
 * Header template
 *
 * @author   Informatyk Kraków
 * @version  1.0.0
 * @package  <Package>
 */
?>

<!Doctype HTML>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">

	<title><?php wp_title( '&ndash;', true, 'right' ); ?></title>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<base href="<?php echo home_url(); ?>">

	<!-- FAVICON  -->
	<!-- Facebook verifacation -->
	<!-- Google verifications - Search Console, UA, ADS, GTM -->
	<!-- Lazy Loading loaded 

	<div data-bg="url" class="lazyload"></div>
	<img data-src="url" class="lazyload" alt="alt" />

	-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<main class="main">
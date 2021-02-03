<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
    <?php astra_head_top(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css" />

    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NNBS6RP');</script>
        <!-- End Google Tag Manager -->

        <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNBS6RP"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php wp_head(); ?>
    <?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>

    <?php astra_body_top(); ?>
    <?php wp_body_open(); ?>
    <div <?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>>
        <a class="skip-link screen-reader-text"
            href="#content"><?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?></a>


        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/">
                <?php
				echo file_get_contents( get_theme_file_uri( '/img/ob-nav-logo.svg' ) );
				?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
	 	  wp_nav_menu( array(
	 	  'menu'              => 'main',
	 	  'theme_location'    => 'primary',
	 	  'depth'             => 2,
	 	  'container'         => 'div',
	 	  'container_class'   => '',
	 	  'container_id'      => '',
	 	  'menu_class'        => 'navbar-nav',
	 	  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	 	  'walker'            => new wp_bootstrap_navwalker())
	 	  );
	  ?>
            </div>
            <div class="hamburger-menu " data-toggle="modal" data-target="#modalMenu">
                <span class="line-1 line"></span>
                <span class="line-2 line"></span>
                <span class="line-3 line"></span>
            </div>
        </nav>



        <div id="content" class="site-content">

            <div class="ast-container">

<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
$postID = get_the_id();
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
      <!-- Favicons -->
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.jpg " rel="icon">
      <!-- Vendor CSS Files -->
      <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> -->
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
      <!-- Template Main CSS File -->
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css?<?php echo time(); ?>" rel="stylesheet">
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
      <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
      <!-- ======= Top Bar ======= -->
      <section id="topbar" class="d-flex align-items-center">
         <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
               <?php echo date('d F, Y'); ?>
            </div>
            <div class="social-links d-md-flex align-items-center">
              <?php dynamic_sidebar('header_icons'); ?>
            </div>
         </div>
      </section>
      <!-- ======= Header ======= -->
      <header id="header" class="d-flex align-items-center">
         <div class="container">
            <div class="d-flex align-items-center justify-content-between">
               <div class="logo">
                  <a href="#" class="logo">
                  
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="logo">
                  
                  </a>
               </div>

              <?php if( !empty( get_post_meta( $postID, 'top_banner', true ) ) ){ ?>
                <div class="leader-img">
                  <img src="<?php echo wp_get_attachment_url( get_post_meta( $postID, 'top_banner', true ) ); ?>">
                </div>
              <?php } ?>

                <?php
                    $args = array(
                    'menu_class'      => '',
                    'container'       => 'nav', 
                    'container_id'    => 'navbar', 
                    'container_class' => 'navbar hide-desktop', 
                    'menu'            => 'main-menu'
                    );
                    wp_nav_menu( $args ); 
                ?>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </div>
            <?php
              $args = array(
                'menu_class'      => '',
                'container'       => 'nav', 
                'container_id'    => 'navbar', 
                'container_class' => 'navbar hide-mobile', 
                'menu'            => 'main-menu'
              );
              wp_nav_menu( $args ); 
            ?>
            <!-- .navbar -->
         </div>
      </header>
      <!-- End Header --> 
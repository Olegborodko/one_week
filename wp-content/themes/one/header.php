<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package one
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'one' ); ?></a>

  <header id="masthead" class="site-header">

    <div class="fw-container">
      <div class="fw-row">
        <div class="fw-col-xs-12">

          <div class="container">
            <div class="site-logo">
              <?php if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
              }
              ?>
            </div>


            <nav class="main-navigation site-navigation">
              <div class="button-menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <i class="fa fa-bars" id="i_menu"></i>
              </div>
              <?php
              wp_nav_menu( array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
              ) );
              ?>
            </nav><!-- #site-navigation -->
          </div>

        </div>
      </div>
    </div>

  </header><!-- #masthead -->

  <div id="content" class="site-content">

<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>K O N T</title>
    
	<?php
	  /*
	   * We add some JavaScript to pages with the comment form
	   * to support sites with threaded comments (when in use).
	   */
	  if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		
	  /*
	   * Always have wp_head() just before the closing </head>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to add elements to <head> such
	   * as styles, scripts, and meta tags.
	   */
	  wp_head(); 
    ?>
  <link href="/style/bootstrap.css" rel="stylesheet">
  <link href="/style/index.css" rel="stylesheet" media="screen">
  <link href="http://fr.allfont.net/allfont.css?fonts=arial-black" rel="stylesheet" type="text/css" />

  <link rel="shortcut icon" href="<?php echo get_option('home'); ?>/favicon.ico">
  </head>
  <body <?php body_class(); ?>>

  <header class="col-xs-12">
      <a href="<?php echo home_url(); ?>" class="page-fadeOut">
          <div class="logo">
              KO
          </div>
          <div class="logo2">
              NT.
          </div>
      </a>
      <div class="details col-xs-2 no-padding hidden-xs hidden-sm">
          <!--<a href="#infos" data-toggle="collapse">INFOS</a>
          <a href="#contact" data-toggle="collapse">CONTACT</a>-->
          <?php $args = array(
              'sort_order' => 'ASC',
              'sort_column' => 'menu_order'
          );
          $pages = get_pages( $args );

          foreach( $pages as $page ) {
              $content = $page->post_content;
              if ( ! $content ) // Check for empty page
                  continue;

              $content = apply_filters( 'the_content', $content );?>
              <d id="<?php echo $page->post_title;?>" class="fb">
                  <?php echo $content;?>
              </d>

          <?php }?>
      </div>
      <div class="details-xs col-md-2 no-padding hidden-md hidden-lg">
          <?php $args = array(
              'sort_order' => 'ASC',
              'sort_column' => 'menu_order'
          );
          $pages = get_pages( $args );

          foreach( $pages as $page ) {
              $content = $page->post_content;
              if ( ! $content ) // Check for empty page
                  continue;

              $content = apply_filters( 'the_content', $content );?>


              <div><but href="#" class="<?php echo $page->post_title;?>-xs"><?php echo $page->post_title;?></but></div>

          <?php }
          foreach( $pages as $page ) {
              $content = $page->post_content;
              if ( ! $content ) // Check for empty page
                  continue;

              $content = apply_filters( 'the_content', $content );?>


              <div id="<?php echo $page->post_title;?>-xs-more" class="details-xs-more">

                  <?php echo $content;?>
              </div>

          <?php }?>
      </div>
  </header>

    
    <div class="">
<!doctype html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php
    do_action( 'clwp_after_body' );
    do_action( 'clwp_layout_start' );
  ?>

    <div class="max-container">

      <header class="desktop-header">
        <div class="row">
          <ul class="desktop-nav nav column">
            <?php
          $menu_options = array(
            'post_type' => 'global',
            'p' => 204
          );
          $wp_menu_query = new WP_Query($menu_options);
          while ($wp_menu_query->have_posts()) : $wp_menu_query->the_post();
            if( have_rows('menu_item') ):
              $total_items = sizeof(get_field('menu_item')) / 2;
              $item_counter === 1;
              while ( have_rows('menu_item') ) : the_row();
                $link = get_sub_field('link');
                $label = $link['title'];
                $link = $link['url'];
                $target = get_sub_field('link')['target'];

                if($item_counter === $total_items) {
                  echo '<li>';
                  get_template_part('template-parts/part', 'logo');
                  echo '</li>';                  
                }

                echo '<li><a href="' . $link . '" target="' . $target . '">' . $label . '</a></li>';
                
                $item_counter++;
              endwhile; 
            endif;
          endwhile;
          wp_reset_query();
        ?>
          </ul>
        </div>
      </header>

      <header class="mobile-header">
        <div class="row">
          <div class="column">
            <div class="nav-open">
              <?php include( get_stylesheet_directory() . '/assets/images/icons/menu.svg' ); ?>
            </div>
          </div>
        </div>
      </header>

      <div class="mobile-nav-wrap">
        <div class="mobile-nav-close-wrap">
          <div class="nav-close">
            <?php include( get_stylesheet_directory() . '/assets/images/icons/close.svg' ); ?>
          </div>
        </div>
        <ul class="mobile-nav nav">
          <li>
            <?php get_template_part('template-parts/part', 'logo'); ?>
          </li>
          <?php
          $menu_options = array(
            'post_type' => 'global',
            'p' => 204
          );
          $wp_menu_query = new WP_Query($menu_options);
          while ($wp_menu_query->have_posts()) : $wp_menu_query->the_post();
            if( have_rows('menu_item') ):
              $total_items = sizeof(get_field('menu_item')) / 2;
              while ( have_rows('menu_item') ) : the_row();
                $link = get_sub_field('link');
                $label = $link['title'];
                $link = $link['url'];
                $target = get_sub_field('link')['target'];
                echo '<li><a href="' . $link . '" target="' . $target . '">' . $label . '</a></li>';
              endwhile; 
            endif;
          endwhile;
          wp_reset_query();
        ?>
        </ul>
      </div>

      <?php
      get_template_part('template-parts/part', 'hero');    
      do_action('clwp_after_header'); 
    ?>
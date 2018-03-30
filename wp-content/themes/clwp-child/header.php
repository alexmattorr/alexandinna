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
    
    <header>
      <div class="row">
        <ul class="nav column">
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

    <?php 
      get_template_part('template-parts/part', 'hero');
      do_action('clwp_after_header'); 
    ?>

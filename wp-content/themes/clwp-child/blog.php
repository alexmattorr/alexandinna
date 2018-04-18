<?php 
  /*
  Template Name: Blog
  */
  get_header(); 
?>
<section>
  <div class="row">
    <div class="cards">
<?php
  $menu_options = array(
    'post_type' => 'post'
  );
  $wp_menu_query = new WP_Query($menu_options);
  while ($wp_menu_query->have_posts()) : $wp_menu_query->the_post();
    $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];
?>

<div class="column small-12 medium-6 large-4">
  <div class="card">
    <?php if($feat_image): ?>
    <figure style="background-image: url('<?= $feat_image; ?>');"></figure>
    <?php endif; ?>

    <div class="card-content<?php if($center[0]): ?> text-center<?php endif; ?>">
      <h4><?= get_the_title(); ?></h4>
      <p class="p2"><?= get_the_date(); ?></p>
      <p class="p1"><?= get_the_excerpt(); ?></p>
      <a href="<?= get_the_permalink(); ?>" class="button primary">Read More</a>
    </div>
  </div>
</div>

<?php endwhile; ?>
    </div>
  </div>
</section>
<?php
    wp_reset_query();
  get_footer();
?>
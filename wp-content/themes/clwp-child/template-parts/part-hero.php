<?php
  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];
  $bg_image = 'style="background-image: url(' . $feat_image . ')"';
  $headline = get_field('headline');
  $subhead = get_field('sub_headline');
  $slider = get_field('enable_hero_slider');

  if($slider === 'false') {
?>
<section class="hero <?= $bg_color; ?>" <?php if($feat_image) { echo $bg_image; } ?>>
  <div class="hero-content column">
    <h1 class="white"><?= $headline; ?></h1>

    <?php if($subhead): ?>
    <h5 class="white"><?= $subhead; ?></h5>
    <?php endif; ?>

    <?php include 'part-cta.php'; ?>
  </div>  
</section>

<?php 
  } else { 
?>

<div class="hero-slider">
  <?php if($feat_image) { ?>
  <div class="hero-slide" <?= $bg_image; ?>>
    <div class="hero-content column">
      <h1 class="white"><?= $headline; ?></h1>

      <?php if($subhead): ?>
      <h5 class="white"><?= $subhead; ?></h5>
      <?php endif; ?>

      <?php include 'part-cta.php'; ?>
    </div>
  </div>
  <?php 
    }

    if( have_rows('hero_slider') ):
      while ( have_rows('hero_slider') ) : the_row();
        $slide_image = get_sub_field('image')['url'];
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
  ?>
  <div class="hero-slide" style="background-image: url(<?= $slide_image; ?>)">
    <div class="hero-content column">
      <h1 class="white"><?= $title; ?></h1>

      <?php if($subhead): ?>
      <h5 class="white"><?= $subtitle; ?></h5>
      <?php endif; ?>

      <?php include 'part-cta.php'; ?>
    </div>
  </div>
  <?php
      endwhile;
    endif;
  ?>
</div>

<?php } ?>
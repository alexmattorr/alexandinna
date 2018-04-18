<div class="row">
  <div class="cards">
    <?php
      if( have_rows('card') ):
        while ( have_rows('card') ) : the_row();
          $image = get_sub_field('image');
          $image = $image['sizes']['large'];
          $image_type = get_sub_field('image_type');

          $center = get_sub_field('center_text');
          $title = get_sub_field('title');
          $text = get_sub_field('text');
    ?>
    <div class="column small-12 medium-6 large-4">
      <div class="card">
        <?php if($image): ?>
        <figure<?php if($image_type === 'bg'): ?> style="background-image: url('<?= $image; ?>');"<?php endif; ?>>
          <?php if($image_type === 'inline'): ?>
          <img src="<?= $image; ?>">
          <?php endif; ?>
        </figure>
        <?php endif; ?>

        <div class="card-content<?php if($center[0]): ?> text-center<?php endif; ?>">
          
          <h4<?php if(!$text): ?> class="mb-4"<?php endif; ?>><?= $title; ?></h4>

          <?php if($text): ?>
            <p><?= $text; ?></p>
          <?php endif; ?>

          <?php get_template_part('template-parts/part', 'cta'); ?>
        </div>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </div>
</div>
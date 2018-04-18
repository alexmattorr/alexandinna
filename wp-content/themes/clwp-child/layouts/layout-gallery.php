<div class="max-container">
  <div class="gallery">
  <?php
    if( have_rows('image') ):
      while ( have_rows('image') ) : the_row();
        $image = get_sub_field('image');
        $caption = get_sub_field('caption');        
        $image = $image['url'];
  ?>
    <div class="gallery-image" style="background-image: url(<?= $image; ?>);">
    <?php if($caption): ?>
      <div class="caption">
        <div class="caption-toggle">
        <?php include( get_stylesheet_directory() . '/assets/images/icons/prev-white.svg' ); ?>
        </div>
        <p class="p1"><?= $caption; ?></p>
      </div>
    <?php endif; ?>
    </div>
  <?php endwhile; endif; ?>
  </div>

  <div class="gallery-nav">
  <?php
    if( have_rows('image') ):
      while ( have_rows('image') ) : the_row();
        $image = get_sub_field('image');
        $image = $image['sizes']['medium'];
  ?>
    <div class="gallery-image">
      <div style="background-image: url(<?= $image; ?>);"></div>
    </div>
  <?php endwhile; endif; ?>
  </div>
</div>
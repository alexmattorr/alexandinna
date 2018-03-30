<?php 
  $layout = get_sub_field('layout');
  $type = get_sub_field('type');
  $bg_color = get_sub_field('background_color');
?>

<div class="row">
  <div class="cards <?= $layout; ?> column">
<?php
  if( have_rows('card') ):
    $card_counter = 1;
    while ( have_rows('card') ) : the_row();
      $image = get_sub_field('image')['sizes']['large'];
      $date = get_sub_field('date');
      $title = get_sub_field('title');
      $text = get_sub_field('text');

      $link = get_sub_field('link');
      $link_url = $link['url'];
      $link_label = $link['title'];
      $link_target = $link['target'];

      $target = 'target="' . $link_target . '"';
?>

  <div class="card">
    <?php if($type === 'image' && $image) { ?>
      <figure style="background-image: url(<?= $image; ?>);"></figure>
    <?php } else { ?>
      <figure class="<?= $bg_color; ?>">
        <h3>
        <?php
          if($type === 'date') {
            echo $date;
          } else {
            echo $card_counter;
          }
        ?>
        </h3>
      </figure>
    <?php } ?>

    <div class="card-content">
      <?php if($title): ?>
        <h5><?= $title; ?></h5>
      <?php endif; ?>

      <?php if($text): ?>
        <p><?= $text; ?></p>
      <?php endif; ?>

      <?php if($link): ?>
        <a href="<?= $link_url; ?>" <?php if($link_target) { echo $target; } ?>><?= $link_label; ?></a>
      <?php endif; ?>
    </div>
  </div>

<?php
      $card_counter++;
    endwhile;
  endif;
?>
  </div>
</div>
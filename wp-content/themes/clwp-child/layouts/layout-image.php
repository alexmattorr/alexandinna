<?php
  $image = get_sub_field('image');
  $size = get_sub_field('size');
  $image = $image['sizes'][$size];  
  $attr = get_sub_field('attributes');
  $attr_classes = implode(" ", $attr);  
  $caption = get_sub_field('caption');


?>

<div class="row">
  <div class="column text-center">
    <img class="image <?= $attr_classes; ?>" src="<?= $image; ?>">
    <?php
      if($caption):
        echo '<p class="image-caption">' . $caption . '</p>';
      endif;
    ?>
  </div>
</div>
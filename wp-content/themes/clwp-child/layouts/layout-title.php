<?php
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
?>

<div class="row">
  <div class="title column">
    <?php if($title): ?>
      <h2><?= $title; ?></h2>
    <?php endif; ?>

    <?php if($subtitle): ?>
      <h5><?= $subtitle; ?></h5>
    <?php endif; ?>
  </div>
</div>
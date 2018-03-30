<?php 
if( have_rows('cta') ):
  while ( have_rows('cta') ) : the_row();
    $button_type = get_sub_field('button_type');  
    $cta = get_sub_field('cta');
    $cta_url = $cta['url'];
    $cta_label = $cta['title'];
    $cta_target = $cta['target'];
    $target = 'target="' . $cta_target . '"';

    if($cta):
?>

<a href="<?= $cta_url; ?>" class="button <?= $button_type; ?>" <?php if($cta_target) { echo $target; } ?>><?= $cta_label; ?></a>

<?php 
    endif; 
  endwhile;
endif;
?>
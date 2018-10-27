<?php
  if( have_rows('sections') ):
    while ( have_rows('sections') ) : the_row();
      $bg_type = get_sub_field('background_type');
      $bg_color = get_sub_field('background_color');
      $remove_padding = get_sub_field('remove_padding');      
      $bg_image = get_sub_field('background_image')['url'];
      $bg_fixed = get_sub_field('background_fixed');
      $bg_image_string = 'style="background-image: url(' . $bg_image . ')"';
?>

<?php if($bg_type === 'image') { ?>
<section class="<?php echo $bg_color; if($remove_padding === 'true') { echo ' no-padding'; } if($bg_fixed === 'true') { echo ' fixed'; } ?> bg-image" <?= $bg_image_string; ?>>
<?php } else { ?>
<section class="<?php echo $bg_color; if($remove_padding === 'true') { echo ' no-padding'; } ?>">
<?php } ?>

<?php
  if( have_rows('layout') ):
    while ( have_rows('layout') ) : the_row();
      if( get_row_layout() == 'cards' ):
        get_template_part('layouts/layout', 'cards');
      elseif( get_row_layout() == 'cards_vert' ):
        get_template_part('layouts/layout', 'cards-vert');
      elseif( get_row_layout() == 'content' ):
        get_template_part('layouts/layout', 'content');
      elseif( get_row_layout() == 'cta' ):
        get_template_part('layouts/layout', 'cta');
      elseif( get_row_layout() == 'gallery' ):
        get_template_part('layouts/layout', 'gallery');     
      elseif( get_row_layout() == 'image' ):
        get_template_part('layouts/layout', 'image');
      elseif( get_row_layout() == 'title' ):
        get_template_part('layouts/layout', 'title');
      endif;
    endwhile;
  endif;
?> 

</section>

<?php
    endwhile;
  endif;
?>

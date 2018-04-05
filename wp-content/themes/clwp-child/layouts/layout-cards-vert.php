<div class="row cards-vert">
  <?php
    if( have_rows('card') ):
      while ( have_rows('card') ) : the_row();
        $date = get_sub_field('date_time');
        $title = get_sub_field('title');
        $text = get_sub_field('text');

        $date = explode(' ', trim($date));
        $day = $date[1];        
        $month = substr($date[0], 0, 3);
        $time = $date[3];
  ?>
  <div class="column small-12">
    <div class="card-vert">
      <div class="card-vert-elm">
        <div>
          <div class="card-vert-day"><?= $day; ?></div>
          <div class="card-vert-month"><?= $month; ?></div>
        </div>
      </div>
      <div class="card-vert-elm">
        <div class="card-vert-text-wrap">
          <div class="card-vert-title"><?= $title; ?></div>
          <div class="card-vert-text"><?= $text; ?></div>
        </div>
        <div class="card-vert-time"><?= $time; ?></div>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>
</div>
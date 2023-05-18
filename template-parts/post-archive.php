<div class="col-sm-4">
 <div class="grid-item">
    <div class="kortos">
      <?php echo get_the_post_thumbnail(); ?>
      <div class="card-content">
        <h3 class="card-header"><?= get_the_title(); ?> </h3>
        <button class="card-btn"><a href="<?php the_permalink(); ?>">Žiūrėti</a> <span>&rarr;</span></button>
      </div>
    </div>
  </div>
</div>
<div class="card p-0 text-bg-light" style="width: 300px">
  <?php echo get_the_post_thumbnail(); ?>
  <div class="card-body">
    <div class="question">
      <h5 class="cocktail"><?= get_the_title(); ?></h5>
    </div>
    <div class="answer">
      <ul class="card-text">
        <?= get_the_content(); ?>
      </ul>
    </div>
  </div>
</div>
<div class="postas container-fluid pt-5">
  <div class="container ">
    <div class="post-b">
      <div class="head-c">
        <h1><?= get_the_title(); ?></h1>
      </div>
      <div class="post-m ">
        <div class="post-img">
          <?php echo get_the_post_thumbnail(); ?>
        </div>
        <div class="">
          <p><?= get_the_content(); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
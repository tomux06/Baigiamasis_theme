<?php
get_header();
?>

<div class="posts posts-back container-fluid pt-5 pb-5">
  <div class="container">


    <div class="row">


      <?php
      $args = array(
        'post_type' => 'post',
        'category_name' => 'straipsniai',
        'post_per_page' => -1,
        'orderby' => 'date',
        'order' => 'ASC'
      );
      $query = new WP_Query($args);
      ?>

      <?php if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          get_template_part('template-parts/blog', 'archive');
        }
      }

      ?>


    </div>

  </div>

</div>

<?php
get_footer();
?>
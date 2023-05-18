<?php

/**
 * Template Name: Homepage
 */
get_header();

?>



<div class="cards1 container-fluid pt-5 pb-5">
  <div class="container">

















    <div class="mt-5 mb-5">
      


        <?php
        $post_content = get_the_content(null, false, 1448);


        echo $post_content;
        ?>
     


    </div>

    <div class="row justify-content-center">



      <?php
      $args = array(
        'post_type' => 'post',
        'category_name' => 'receptai',
        'post_per_page' => 3,
        'orderby' => 'date',
        'order' => 'ASC'
      );
      $query = new WP_Query($args);
      ?>

      <?php if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          get_template_part('template-parts/content', 'archive');
        }
      }

      ?>






      <div class="mygtukas d-flex justify-content-center">
        <a href="<?php echo esc_url(get_permalink($page_id = 1469)); ?>" class="myg myg-1"><span style="color:white">Visi receptai</span></a>
      </div>
    </div>
  </div>
</div>


<div class="posts container-fluid">
  <div class="container">
    <div class="div">
      <?php
      $post_content = get_the_content(null, false, 1458);


      echo $post_content;
      ?>
    </div>

    <div class="row">
      <?php
      $args = array(
        'post_type' => 'post',
        'category_name' => 'straipsnis1',
        'post_per_page' => 3,
        'orderby' => 'date',
        'order' => 'ASC'
      );
      $query = new WP_Query($args);
      ?>

      <?php if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          get_template_part('template-parts/post', 'archive');
        }
      }

      ?>




    </div>
  </div>
  <div class="mygtukas d-flex justify-content-center">
    <a href="<?php echo esc_url(get_permalink($page_id = 1464)); ?>" class="myg myg-1"><span style="color:white">Visi straipsniai</span></a>
  </div>
</div>

</div>
</div>
<div class="banner container-fluid d-flex align-items-center">
  <div class="container d-flex flex-column align-items-center">
    <div class="d-flex flex-column align-items-center">

      <?php dynamic_sidebar('banner-1'); ?>
    </div>
    <div>
      <ul class="list-unstyled d-flex">
        <li><img src="<?= get_template_directory_uri() . "/assets/images/dummy-logo-1b.png" ?>" /></li>
        <li><img src="<?= get_template_directory_uri() . "/assets/images/dummy-logo-2b.png" ?>" /></li>
        <li><img src="<?= get_template_directory_uri() . "/assets/images/dummy-logo-3b.png" ?>" /></li>
        <li><img src="<?= get_template_directory_uri() . "/assets/images/dummy-logo-4b.png" ?>" /></li>
        <li><img src="<?= get_template_directory_uri() . "/assets/images/dummy-logo-1b.png" ?>" /></li>
        <li><img src="<?= get_template_directory_uri() . "/assets/images/dummy-logo-2b.png" ?>" /></li>
      </ul>
    </div>
  </div>
</div>




























<?php
get_footer();
?>
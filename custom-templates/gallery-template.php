<?php
/*
Template Name: Gallery
*/

get_header();

?>


<div class="galerija-kok container-fluid">
  <div class="container">
    <div class="div">
      <h1><span style="color:black">Galerija</span></h1>
    </div>
    <div class="galleries">
      <div class="row">

        <?php
        $args = array(
          'post_type' => 'gallery', // Nurodykite savo pašto tipo pavadinimą
          'posts_per_page' => -1, // Norėdami gauti visus įrašus, nustatykite reikšmę -1
        );

        $gallery = get_posts($args);

        foreach ($gallery as $gallery) {
          // Čia galite atvaizduoti galerijos pavadinimą, turinį ir kt.

          echo '<div class="col-sm-4">' . $gallery->post_content . '</div>';
        }
        ?>

      </div>
    </div>
  </div>
</div>
</div>
</div>




<?php get_footer(); ?>
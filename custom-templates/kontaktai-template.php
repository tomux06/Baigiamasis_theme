<?php
/*
Template Name: Kontaktai
*/

get_header();
?>

<div class="susisiekti container-fluid pt-5">
  <div class="container ">
    <div class="kontakt">
      <div class="forma-kon">
        <div class="">
          <h1>Susisiekti:</h1>
        </div>
        <div class="forma">
          <?php echo do_shortcode('[contact-form-7 id="1635" title="Kontaktai"]'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
<div class="footer bg-image bg-dark container-fluid pt-5 pb-5">
  <div class="container d-flex">
    <div class="col-sm-3">
    <?php 
       if(function_exists('the_custom_logo')){
       $custom_logo_id = get_theme_mod('custom_logo');
       $logo = wp_get_attachment_image_src($custom_logo_id);
       }
      ?>
      <img class="cock" src="<?= $logo[0] ?>" />
    </div>

    <div class="col-sm-3">
      <h5><span style="color: orange">Apie mus:</span></h5>
      <p class="text pt-3">
        Mes esame jauna įmonė norinti pasidalinti ilgai kaupta savo
        patirtimi kokteilių srityje.
      </p>
    </div>

    <div class="col-sm-3 mb-0">
      <h5><span style="color: orange">Mūsų info:</span></h5>

      <div class="pt-3">
        <div class="d-flex py-2 gap-2">
          <img class="book" src="<?= get_template_directory_uri() . "/assets/images/book.png" ?>" />
          <p class="mb-0">99 S.t Jomblo Park Pekanbaru 28292. Indonesia</p>
        </div>

        <div class="d-flex py-2 gap-2">
          <a href="tel:123-456-7890"><img class="book" src="<?= get_template_directory_uri() . "/assets/images/phone2.png" ?>" /></a>
          <p class="mb-0">+37065123312</p>
        </div>

        <div class="d-flex py-2 gap-2">
          <a href="mailto: tomux93@gmail.com">
            <img class="book" src="<?= get_template_directory_uri() . "/assets/images/mail.png" ?>" /></a>
          <p class="mb-0">info@yoursite.com</p>
        </div>

        <div class="d-flex py-2 gap-2">
          <img class="time" src="<?= get_template_directory_uri() . "/assets/images/time.png" ?>" />
          <p>Mon - Sat 09:00 - 17:00</p>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <h5><span style="color: orange">Sekite mus:</span></h5>

      <ul class="social list-unstyled d-flex mb-0">
        <li>
          <a href="https://facebook.com"> <img class="book" src="<?= get_template_directory_uri() . "/assets/images/fb2.png" ?>" /> </a>
        </li>
        <li>
          <a href="https://instagram.com"><img class="book" src="<?= get_template_directory_uri() . "/assets/images/insta2.png" ?>" />
          </a>
        </li>
        <li>
          <a href="https://twitter.com"><img class="book" src="<?= get_template_directory_uri() . "/assets/images/twiter2.png" ?>" />
          </a>
        </li>
        <li>
          <a href="https://youtube.com"><img class="book" src="<?= get_template_directory_uri() . "/assets/images/youtube2.png" ?>" />
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="copyright container-fluid bg-dark">
  <div class="container">

    <?php dynamic_sidebar('footer-1'); ?>
  </div>


</div>

<?php wp_footer(); ?>

</body>

</html>
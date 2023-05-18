<div class="col-sm-4">
    <div class="grid-item">
        <div class="kortos">
            <img class="card-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
            <div class="card-content">
                <h3 class="card-header"><?= get_the_title(); ?></h3>
                <button class="card-btn"><a href="<?php the_permalink(); ?>" class="list-unstyled"> Žiūrėti <span>&rarr;</span></a></button>
            </div>
        </div>
    </div>
</div>
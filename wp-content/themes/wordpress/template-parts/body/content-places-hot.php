<div class="item recommended gal-item style-3 col-mob-12 col-xs-6 col-sm-4">
    <a class="black-hover" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <div class="gal-item-icon">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('full', ['class' => 'img-full img-responsive', 'title' => 'Feature image']); ?>
            <?php else : ?>
                <img class="img-full img-responsive" src="<?php echo get_template_directory_uri()?>/img/noimage.jpg" />
            <?php endif; ?>

            <div class="tour-layer delay-1"></div>
            <div class="vertical-align">
                <span class="c-button small bg-white delay-2">
                    <span>
                        View more
                    </span>
                </span>
            </div>
        </div>
        <div class="gal-item-desc delay-1">
            <h5><small>Visit</small></h5>
            <h4><b><?php the_title() ?></b></h4>					
        </div>
    </a>
</div>
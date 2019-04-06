<div class="f_news clearfix" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a class="f_news-img black-hover" href="<?php the_permalink() ?>">
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('full', [
                'width' => '80',
                'height' => 'auto',
                'title' => 'Feature image'
                ]); 
            ?>
        <?php else : ?>
            <img width="80" height="auto" src="<?php echo get_template_directory_uri()?>/img/noimage.jpg" />
        <?php endif; ?>

        <div class="tour-layer delay-1"></div>
    </a>
    <div class="f_news-content">
        <?php the_title( sprintf( '<a href="%s" rel="bookmark" class="f_news-tilte color-white link-red">', esc_url( get_permalink() ) ), '</a>' ); ?>
        <span class="date-f"><?php echo get_the_date('l j F, Y') ?></span>
        <a href="<?php echo get_permalink() ?>" class="r-more">read more</a>
    </div>
</div>
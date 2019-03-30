<div class="f_news clearfix" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a class="f_news-img black-hover" href="#">
        <?php
        if (wordpress_post_thumbnail() == NULL || wordpress_post_thumbnail() == '')
            echo '<span style="font-style: italic">No image</span>';
        else
            wordpress_post_thumbnail(); 
        ?>
        <div class="tour-layer delay-1"></div>
    </a>
    <div class="f_news-content">
        <?php the_title( sprintf( '<a href="%s" rel="bookmark" class="f_news-tilte color-white link-red">', esc_url( get_permalink() ) ), '</a>' ); ?>
        <span class="date-f"><?php echo get_the_date('l j F, Y') ?></span>
        <a href="<?php echo get_permalink() ?>" class="r-more">read more</a>
    </div>
</div>
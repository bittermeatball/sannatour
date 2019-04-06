<div class="swiper-slide">
    <div class="s_news-entry style-2">
        <img class="s_news-img img-responsive" src="<?php echo get_template_directory_uri() ?>/img/detail/related_1.jpg" alt="">
        <h4 class="s_news-title"><?php the_title() ?></h4>
        <div class="tour-info-line clearfix">
            <div class="tour-info fl">
                <img src="<?php echo get_template_directory_uri() ?>/img/calendar_icon_grey.png" alt="">
                <span class="font-style-2 color-dark-2"><?php echo get_the_date('l j F, Y') ?></span>
            </div>
            <div class="tour-info fl">
                <img src="<?php echo get_template_directory_uri() ?>/img/calendar_icon_grey.png" alt="">
                <span class="font-style-2 color-dark-2">By <?php the_author() ?></span>
            </div>
            <div class="tour-info fl">
                <img src="<?php echo get_template_directory_uri() ?>/img/comment_icon_grey.png" alt="">
                <span class="font-style-2 color-dark-2">10 comments</span>
            </div>						
        </div>
        <div class="s_news-text color-grey-3"><?php echo substr(get_the_content(),0,150) ?></div>
        <a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>read more</span></a>
    </div>
</div>
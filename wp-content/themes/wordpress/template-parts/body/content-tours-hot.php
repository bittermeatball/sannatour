<div class="swiper-slide" data-val="<?php the_ID() ?>">
    <div class="offers-block style-2 radius-mask underline-block hover-blue">
        <a href="<?php the_permalink() ?>">
            <div class="clip">
                <div class="bg bg-bg-chrome act" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/home_4/offers-block_1.jpg)">
                </div>
            </div>
            <div class="tour-layer delay-1"></div>
            <div class="vertical-top">
                <div class="rate">
                    <span class="fa fa-heart color-dr-blue-2 hover-it"></span>
                    <span class="fa fa-heart color-dr-blue-2 hover-it"></span>
                    <span class="fa fa-heart color-dr-blue-2 hover-it"></span>
                    <span class="fa fa-heart color-dr-blue-2 hover-it"></span>
                    <span class="fa fa-heart color-dr-blue-2 hover-it"></span>
                </div>
                <h3 class="hover-it"><?php the_title() ?></h3>
            </div>
            <div class="vertical-bottom">
                <div class="tour-info">
                    <img src="<?php echo get_template_directory_uri() ?>/img/calendar_icon.png" alt="">
                    <span class="font-style-2">03/07/2015</span>
                </div>
                <h4 class="offet-title underline hover-it m94">
                    <?php
                        the_destinations(get_the_ID(),'domestic_destinations')
                    ?>
                </h4>
                <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
            </div>        
        </a>
    </div> 
</div>

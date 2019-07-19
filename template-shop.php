<?php

/**
 * Template Name: Shop Page
 *  */

get_header(); ?>



<div class="content">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <h1><?php the_title(); ?></h1>
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                else :
                    echo wpautop('Sorry, no posts were found');
                endif;
                ?>
            </div>
        </div>

    </div>

</div>

<?php get_footer(); ?>
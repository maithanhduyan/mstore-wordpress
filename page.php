<?php get_header(); ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">
            <div class="sticky-top" style="top:100px;">
                <?php get_sidebar(); ?>
            </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div class="row">

                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('post-image') ?>" alt="<?php the_title(); ?>" class="img-fluid mb-5">
                <?php endif; ?>

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
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>
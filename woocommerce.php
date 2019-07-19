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

            <div class=""></div>

            <div class="row">

                <?php woocommerce_content(); ?>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>
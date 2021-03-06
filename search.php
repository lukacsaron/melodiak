<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

get_header(); ?>
<div class="wrapper">
    <div class="container">
        <div class="col-md-12">
            <?php echo do_shortcode('[ULWPQSF id=104]'); ?>
        </div>
    </div>
</div>
<div class="wrapper search-wrapper">
    
    <div class="container">

        <div class="row">
        
            <section id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> hostess-loop">
                
                <main id="main" class="site-main" role="main">

                <?php if ( have_posts() ) : ?>


                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php
                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part( 'loop-templates/content', 'search' );
                        ?>

                    <?php endwhile; ?>

                    <?php understrap_paging_nav(); ?>

                <?php else : ?>

                    <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                <?php endif; ?>

                </main><!-- #main -->
                
            </section><!-- #primary -->

            <?php get_sidebar(); ?>

        </div><!-- .row -->
    
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>
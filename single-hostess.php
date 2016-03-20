<?php
/**
 * The template for displaying hostess single posts.
 *
 * @package understrap
 */

get_header(); ?>
<div class="wrapper" id="single-wrapper">
    
    <div  id="content" class="container">

        <div class="row">
        
            <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">
                
                <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post(); 
            $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size='thumbnail' )[0];
            $string = get_the_title();
            $last_word_start = strrpos($string, ' ') + 1; // +1 so we don't include the space in our result
            $surname = substr($string, $last_word_start); // $last_word = PHP.
            ?>
                
            <div class="col-md-6">
                <img class="profile-img" src="<?php echo $feat_image ?>">
            </div>
            <div class="col-md-6">
                <img class="profile-img" src="<?php echo $feat_image ?>">
            </div>
                    
                    <a href="<?php echo get_permalink(); ?>">
                    
                        <span class="nev"><?php echo $surname; ?></span>
                   
                </a>    
                        
                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->
                
            </div><!-- #primary -->
        
        <?php get_template_part('sidebar'); ?>

        </div><!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>

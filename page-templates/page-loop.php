<?php
/**
 * Template Name: Hostessek Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

get_header(); ?>




<!-- hostesses loop -->
<div class="wrapper">
    <div class="container">
        <div class="hostess-loop col-md-12">
            <?php 

            $args = array( 'post_type' => 'hostess', 'posts_per_page' => 20, orderby => 'rand' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size='thumbnail' )[0];
            $string = get_the_title();
            $last_word_start = strrpos($string, ' ') + 1; // +1 so we don't include the space in our result
            $surname = substr($string, $last_word_start); // $last_word = PHP.
            ?>
                
            <div class="hostess col-md-4">
                <a href="<?php echo get_permalink(); ?>">
                    <div class="overlay transition">
                        <span class="nev"><?php echo $surname; ?></span>
                    </div>
                </a>
                <img class="profile-img" src="<?php echo $feat_image ?>">
            </div>


			<?php endwhile; // end of the loop. ?>
            
            
            
        </div>
    </div>
</div>
<!-- footer callout -->
<div class="wrapper">
    <div class="container">
        <div class="footer-callout col-md-12">
            <img src="http://hostess:8888/wp-content/themes/melodiak/img/footer_callout.jpg">
        </div>
    </div>
</div>

<?php get_footer(); ?>
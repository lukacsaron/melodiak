<?php
/**
 * Template Name: Hostessek Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
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
<!-- hostesses loop -->
<div class="wrapper">
    <div class="container">
        <div class="hostess-loop col-md-12">
            <?php 

            $args = array( 
                'post_type' => 'hostess',
                'posts_per_page' => 20,
                 orderby => 'rand',
            );
            
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size='thumbnail' )[0];
            $string = get_the_title();
            $last_word_start = strrpos($string, ' ') + 1; // +1 so we don't include the space in our result
            $surname = substr($string, $last_word_start); // $last_word = PHP.
            $szuletes = get_post_meta( $post->ID, 'usp-custom-szuletes', true);
            $current_year = date("Y");
                    
   // calculate age and add to post meta if theres no value yet
            
            if (strlen($szuletes)<=4) {
                $eletkor =  $current_year - $szuletes;
                add_post_meta( $post->ID, 'usp-custom-eletkor', $eletkor, true );
            }
            else {
                    
                if( get_post_meta($post->ID, 'usp-custom-eletkor', true) ) {
                }
                else {                    
                    $from = new DateTime($szuletes);
                    $to   = new DateTime('today');
                    $eletkor = $from->diff($to)->y;
                    add_post_meta( $post->ID, 'usp-custom-eletkor', $eletkor, true );
                }
                }
            ?>
                
            <div class="hostess col-md-4 col-sm-4">
                <a class="hover" href="<?php echo get_permalink(); ?>">
                    <div class="overlay transition">
                        <span class="nev"><?php echo $surname; ?></span>
                    </div>
                </a>
                <div class="fixed-overlay transition">
                    <span class="info info_id"><?php echo $post->ID; ?></span>
                    <h3 class="info info_nev nopadding white"><?php echo $surname; ?></h3>
                    <span class="info-inline info_eletkor"><?php echo $eletkor; ?> Éves</span>
                    <span class="info-inline info_magassag"><?php echo $eletkor; ?> Magas</span>
                </div>
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
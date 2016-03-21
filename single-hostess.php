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
            $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size='hostess_single' )[0];
            $string = get_the_title();
            $last_word_start = strrpos($string, ' ') + 1; // +1 so we don't include the space in our result
            $surname = substr($string, $last_word_start); // $last_word = PHP.
            $szuletes = get_post_meta( $post->ID, 'usp-custom-szuletes', true);
            $jogsi = get_post_meta( $post->ID, 'info-jogsi', true);
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
                
            <div class="col-md-6">
                <img class="profile-img" src="<?php echo $feat_image ?>">
            </div>
            <div class="col-md-6">
                <img class="profile-img" src="<?php echo $feat_image ?>">
            </div>
                    
             <div class="col-md-6 hostess-details">       
                <span class="i"><?php echo $post->ID; ?></span>
                <h3 class="nopadding gray"><?php echo $surname; ?></h3>
                <h4 class="info-inline nopadding"><?php echo $eletkor; ?> Éves</h4>
                <h4 class="info-inline nopadding"><?php echo $eletkor; ?> Magas</h4><br>
                <span class="info">Idegennyelvek:</span><br>
                <span class="info">Jogosítvány: <?php echo $jogsi; ?></span>
            </div>
            <div class="col-md-6">
                <?php the_content(); ?>
            </div>
                        
                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->
                
            </div><!-- #primary -->
        
        <?php get_template_part('sidebar'); ?>

        </div><!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>

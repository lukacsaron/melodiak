<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="page-wrapper">
    
    <div  id="content" class="container">
        
	   <div id="primary" class="col-md-12 content-area">

            <main id="main" class="site-main" role="main">

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	               <header class="entry-header">
	               </header>
                    <!-- .entry-header -->

                    
	               <div class="entry-content">
	               </div>
                    <!-- .entry-content -->

	               <footer class="entry-footer">
		              <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>
	               </footer><!-- .entry-footer -->

                </article><!-- #post-## -->

            </main><!-- #main -->
           
	    </div><!-- #primary -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<div class="wrapper ident-wrapper">
    <div class="container">
        <div class="brand-ident col-md-12">
            <div class="ident col-md-3">
                <img src="http://hostess:8888/wp-content/themes/melodiak/img/irodak.svg">
                <span>Országosan<br>40 irodával<br>rendelkezünk</span>
            </div>
            <div class="ident col-md-3">
                <img src="http://hostess:8888/wp-content/themes/melodiak/img/arkepzes.svg">
                <span>Költséghatékony<br>árképzés</span>
            </div>
            <div class="ident col-md-3">
                <img src="http://hostess:8888/wp-content/themes/melodiak/img/tapasztalat.svg">
                <span>Több évtizedes<br>szakmai tapasztalat<br>és megbízható háttér</span>
            </div>
            <div class="ident col-md-3">
                <img src="http://hostess:8888/wp-content/themes/melodiak/img/vegzettseg.svg">
                <span>Egyetemista/Főiskolás<br>képzett<br>munkavállalók</span>
            </div>
        </div>
    </div>
</div>
<!-- hostesses loop -->
<div class="wrapper">
    <div class="container hostess-container">
        <div class="hostess-loop col-md-12">
            <?php 

            $args = array( 'post_type' => 'hostess', 'posts_per_page' => 10, orderby => 'rand' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size='thumbnail' )[0];
            $string = get_the_title();
            $last_word_start = strrpos($string, ' ') + 1; // +1 so we don't include the space in our result
            $surname = substr($string, $last_word_start); // $last_word = PHP.
            ?>
                
            <div class="hostess col-md-2-4 col-sm-6">
                <a class="hover" href="<?php echo get_permalink(); ?>">
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
<div class="wrapper callout-wrapper">
    <div class="container">
        <div class="footer-callout col-md-12">
            <img src="http://hostess:8888/wp-content/themes/melodiak/img/footer_callout.jpg">
        </div>
    </div>
</div>

<?php get_footer(); ?>
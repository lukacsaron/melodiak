<?php
/**
 * Template Name: Impressum Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

get_header(); ?>
<div class="wrapper" id="page-wrapper">
    <div  class="container">
            <header class="entry-header col-md-12">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header><!-- .entry-header -->
    </div>
    
    <!-- ident wrapper -->
    <div class="wrapper ident-wrapper">
    <div class="container">
        <div class="brand-ident col-md-12">
            <div class="ident col-md-3">
                <img src="http://melodiak.flashbirdcreative.com/wp-content/themes/melodiak/img/irodak.svg">
                <span>Országosan<br>40 irodával<br>rendelkezünk</span>
            </div>
            <div class="ident col-md-3">
                <img src="http://melodiak.flashbirdcreative.com/wp-content/themes/melodiak/img/arkepzes.svg">
                <span>Költséghatékony<br>árképzés</span>
            </div>
            <div class="ident col-md-3">
                <img src="http://melodiak.flashbirdcreative.com/wp-content/themes/melodiak/img/tapasztalat.svg">
                <span>Több évtizedes<br>szakmai tapasztalat<br>és megbízható háttér</span>
            </div>
            <div class="ident col-md-3">
                <img src="http://melodiak.flashbirdcreative.com/wp-content/themes/melodiak/img/vegzettseg.svg">
                <span>Egyetemista/Főiskolás<br>képzett<br>munkavállalók</span>
            </div>
        </div>
    </div>
    </div>
    
<div class="wrapper" id="page-wrapper">
    <div  id="content" class="container">   
	   <div id="primary" class="col-md-12 content-area">
            <main id="main" class="site-main" role="main">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	               <div class="entry-content">
                       <?php the_content(); ?>
                       <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
	               </div>
                    <!-- .entry-content -->

	               <footer class="entry-footer">
		              <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>
	               </footer><!-- .entry-footer -->

                </article><!-- #post-## -->
                <?php endwhile; ?>

            </main><!-- #main -->
           
	    </div><!-- #primary -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->


<!-- hostesses loop -->
<div class="wrapper">
    <div class="container">
        <div class="services-loop col-md-12">
            <div class="service-box col-md-4">
                <h4>Hostess Service</h4>
                <ul>
                    <li>Kiállításokon, rendezvényeken</li>
                    <li>Kiállításokon, rendezvényeken</li>
                    <li>Kiállításokon, rendezvényeken</li>
                </ul>
            </div>
            <div class="service-box col-md-4">
                <h4>Hostess Service</h4>
                <ul>
                    <li>Kiállításokon, rendezvényeken</li>
                    <li>Kiállításokon, rendezvényeken</li>
                    <li>Kiállításokon, rendezvényeken</li>
                </ul>
            </div>
            <div class="service-box col-md-4">
                <h4>Hostess Service</h4>
                <ul>
                    <li>Kiállításokon, rendezvényeken</li>
                    <li>Kiállításokon, rendezvényeken</li>
                    <li>Kiállításokon, rendezvényeken</li>
                </ul>
            </div>
            <div class="service-box col-md-4">
                <h4>Hostess Service</h4>
                <ul>
                    <li>Kiállításokon, rendezvényeken</li>
                    <li>Kiállításokon, rendezvényeken</li>
                    <li>Kiállításokon, rendezvényeken</li>
                </ul>
            </div>
            <div class="service-box col-md-4">
                <h4>Hostess Service</h4>
                <ul>
                    <li>Kiállításokon, rendezvényeken</li>
                    <li>Kiállításokon, rendezvényeken</li>
                    <li>Kiállításokon, rendezvényeken</li>
                </ul>
            </div>
            <div class="service-box col-md-4">
                <h4>Hostess Service</h4>
                <ul>
                    <li>Kiállításokon, rendezvényeken</li>
                    <li>Kiállításokon, rendezvényeken</li>
                    <li>Kiállításokon, rendezvényeken</li>
                </ul>
            </div>
            <div class="service-box col-md-4">
                <h4>Hostess Service</h4>
                <ul>
                    <li>Kiállításokon, rendezvényeken</li>
                    <li>Kiállításokon, rendezvényeken</li>
                    <li>Kiállításokon, rendezvényeken</li>
                </ul>
            </div>
            <div class="service-box col-md-4">
                <h4>Hostess Service</h4>
                <ul>
                    <li>Kiállításokon, rendezvényeken</li>
                    <li>Kiállításokon, rendezvényeken</li>
                    <li>Kiállításokon, rendezvényeken</li>
                </ul>
            </div>
            
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
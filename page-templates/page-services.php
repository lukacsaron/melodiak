<?php
/**
 * Template Name: Services Page
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
                    <li>Vásárok, termékbemutatók</li>
                    <li>Nappali/éjszakai promóciók</li>
                </ul>
            </div>
            <div class="service-box col-md-4">
                <h4>Animátori munkák</h4>
                <ul>
                    <li>Tárlatvezetés, felügyelet</li>
                    <li>Kiállítások</li>
                    <li>Arcfestés</li>
                    <li>Lufifújás</li>
                    <li>Légvárak, ugróvárak</li>
                </ul>
            </div>
            <div class="service-box col-md-4">
                <h4>Sampling akciók</h4>
                <ul>
                    <li>Termékminta átadása üzletekben, rendezvényeken</li>
                    <li>Lakosság közvetlen elérése, áruátvétel igazolása</li>
                </ul>
            </div>
            <div class="service-box col-md-4">
                <h4>Kóstoltatások, termékbemutatás</h4>
                <ul>
                    <li>Felkészítés, betanítás</li>
                    <li>Túraterv készítése</li>
                    <li>Teljes körű lebonyolítás</li>
                </ul>
            </div>
            <div class="service-box col-md-4">
                <h4>Szórólaposztás</h4>
                <ul>
                    <li>Gyalogosoknak</li>
                    <li>Autósoknak</li>
                    <li>Rendezvényeken</li>
                    <li>Szélvédőre</li>
                    <li>Korrekt ellenőrzési szisztémával</li>
                </ul>
            </div>
            <div class="service-box col-md-4">
                <h4>Merchandising</h4>
                <ul>
                    <li>Vásárlóhelyi reklámeszközök kihelyezése</li>
                    <li>Polcszerviz, árufeltöltés</li>
                </ul>
            </div>
            <div class="service-box col-md-4">
                <h4>Nyereményakciók</h4>
                <ul>
                    <li>Előkészítés, bejelentés</li>
                    <li>Nyereményszelvények teljes feldolgozása</li>
                    <li>Sorsolás lebonyolítása</li>
                    <li>Ajándékok átadása vagy kiküldése</li>
                    <li>Elszámolás</li>
                </ul>
            </div>
            <div class="service-box col-md-4">
                <h4>Guerilla-marketing</h4>
                <ul>
                    <li>Ami az etikába belefér</li>
                </ul>
            </div>
            
        </div>
    </div>
</div>
<!-- footer callout -->
<div class="wrapper callout-wrapper">
    <div class="container">
        <div class="footer-callout col-md-12">
            <div class="callout-text"><a href="/ajanlatkeres">KÉRJEN AJÁNLATOT</a></div>
            <img src="http://hostess:8888/wp-content/themes/melodiak/img/ajanlat_callout.jpg">
        </div>
    </div>
</div>

<?php get_footer(); ?>
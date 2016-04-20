<?php
/**
 * Template Name: Contact Page
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
<div class="wrapper team-wrapper">
    <div class="container">
        <div class="team-container col-md-12">
                <?php 

            $args = array( 'post_type' => 'vezeto', 'posts_per_page' => 10 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size='thumbnail' )[0];
            $titulus = get_post_meta( $post->ID, 'wpcf-pozicio', true);
	        $tel = get_post_meta( $post->ID, 'wpcf-telefon', true);
            $email = get_post_meta( $post->ID, 'wpcf-email', true);
            ?>

			<!--  -->
            <div class="container col-md-6 col-xs-12">
                <div class="container team-img col-md-5 col-xs-4"><img src="<?php echo $feat_image ?>"></div>
                <div class="team-info nopadding col-md-7 col-xs-8">
                    <h4 class="nopadding"><?php echo get_the_title(); ?></h4>
                    <h6 class="nopadding titulus"><?php echo $titulus; ?></h6>
                    <span>Mobil: <?php echo $tel; ?></span><br>
                    <span class="email"><?php echo $email; ?></span><br>
                </div>
            </div>
            <?php endwhile; // end of the loop. ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>
    
<!-- contact details -->
    
<div class="wrapper contact-wrapper" id="page-wrapper">
    <div  id="content" class="container">   
	   <div id="primary" class="col-md-12 content-area">
            <div class="col-md-8 nopadding" style="height:250px;">
                <div id="map" style="width:100%; height:100%;"></div>
           </div>
           <div class="col-md-4 contact-details">
                        <?php 
	                       $addr = get_post_meta( 55, 'wpcf-cim', true);
	                       $tel = get_post_meta( 55, 'wpcf-telefon', true);
                           $fax = get_post_meta( 55, 'wpcf-fax', true);
                           $business = get_post_meta( 55, 'wpcf-vallalkozas', true);
		                ?>
                        <h3><?php echo $business; ?></h3>
                        <span><?php echo $addr; ?></span><br>
                        <span>Tel: <?php echo $tel; ?></span><br>
                        <span>Fax: <?php echo $fax; ?></span>

           </div>
           
	    </div><!-- #primary -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<!-- footer callout -->

    
<!-- footer callout -->
<div class="wrapper callout-wrapper">
    <div class="container">
        <div class="footer-callout col-md-12">
            <div class="callout-text"><a href="/jelentkezek">CSATLKOZZ HOZZÁNK</a></div>
            <img src="http://hostess:8888/wp-content/themes/melodiak/img/footer_callout.jpg">
        </div>
    </div>
</div>
    <script>
    function initMap() {
  var myLatLng = {lat: 47.484843, lng: 19.060835};

  // Create a map object and specify the DOM element for display.
  var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    scrollwheel: false,
    zoom: 16
  });

  // Create a marker and set its position.
  var marker = new google.maps.Marker({
    map: map,
    position: myLatLng,
    title: 'Meló Diák'
  });
}</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBH7Pq1HX7DPRveLFG9odYAotg3vPVIjJY&callback=initMap"
    async defer></script>

<?php get_footer(); ?>
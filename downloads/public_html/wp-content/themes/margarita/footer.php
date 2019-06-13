  <!-- Overlay div -->
  <div class="overlay"></div>
  <div class="clear"></div>
  <nav class="st-menu slide-from-right">
    <div class="nano">
        <div class="nano-content">
           <div id="minicart-offcanvas" class="offcanvas-right-content">
              -
          </div>
          <div id="wishlist-offcanvas" class="offcanvas-right-content"><div class="widget"></div></div>
      </div>
  </div>
</nav>
<div class="slider-panel-overlay"></div>
<?php
$args = array(
    'post_type' => 'footer',
    'posts_per_page' => 1
); 
$the_query = new WP_Query( $args ); ?>
<?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
    <footer id="footer" role="contentinfo">
        <div id="puff">
            <div class="threeblock">
                <div>
                    <h2>Kontakt</h2>
                    <span>
                        <ul>
                            <li></li>
                            <li></li>
                        </ul>
                    </span>
                </div>
        </div>
        <?php get_template_part('templates/social', 'partial'); ?>
        <div id="copyright">
            <?php echo sprintf( __( 'Margarita' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>  | By Mario.
        </div>
    </footer> 
<?php endwhile; endif; wp_reset_query(); ?>



</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/flexslider.js"></script>
<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
<script src="https://cdn.jsdelivr.net/g/lightgallery@1.3.5,lg-fullscreen@1.0.1,lg-hash@1.0.1,lg-pager@1.0.1,lg-share@1.0.1,lg-thumbnail@1.0.1,lg-video@1.0.1,lg-autoplay@1.0.1,lg-zoom@1.0.3"></script>
<script type="text/javascript">

    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        slideshowSpeed: "5000",
        controlNav: false,
        smoothHeight: true,
        start: function(slider){
          $('body').removeClass('loading');
      }
  });
  });
      $(document).ready(function() {
    $('#lightgallery').lightGallery({
      pager: true,
      escKey: true
    });
  });
</script>
<?php wp_footer(); ?>
</body>
</html>
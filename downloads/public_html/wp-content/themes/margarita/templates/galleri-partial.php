<?php
	$args = array(

		'post_type' => 'galleri',
		'posts_per_page' => 1

	);
	$the_query = new WP_Query( $args );
?>
<?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>

<?php if(have_rows('galleri')) : ?>

  <div class="demo-gallery">
    <ul id="lightgallery">
	<?php while(have_rows('galleri')) : the_row(); ?>
      <li data-responsive="<?php the_sub_field('bakgrundsbild'); ?> 375, <?php the_sub_field('bakgrundsbild'); ?> 480, <?php the_sub_field('bakgrundsbild'); ?> 800" data-src="<?php the_sub_field('bakgrundsbild'); ?>"
      data-sub-html=" " data-pinterest-text="Pin it" data-tweet-text="share on twitter ">
        <a href="">
          <img class="img-responsive" src="<?php the_sub_field('bakgrundsbild'); ?>">
          <div class="demo-gallery-poster">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/zoom.png">
          </div>
        </a>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php endif; ?>
  </div>
<?php endwhile; endif; wp_reset_query(); ?>


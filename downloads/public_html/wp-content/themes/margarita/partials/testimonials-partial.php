<?php
	$args = array(

		'post_type' => 'testimonials'

	); 
	$the_query = new WP_Query( $args );
?>
<?php if($the_query->have_posts()) : ?>

	<section class="testimonials">
		<div class="row">
			<div class="small-12 columns">
				<div class="flexslider testimonialslider">
					<ul class="slides">
						
					<?php while($the_query->have_posts()) : $the_query->the_post(); ?>

						<li class="testimonial">
							<div class="row">
								<div class="small-10 small-centered large-9 columns">
									<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/quoteicon.png" />
									<p><?php the_field('citat'); ?></p>
								</div>
							</div>
						</li>

					<?php endwhile; ?>

					</ul>
				</div>
			</div>
		</div>
	</section>

<?php endif; wp_reset_query(); ?>
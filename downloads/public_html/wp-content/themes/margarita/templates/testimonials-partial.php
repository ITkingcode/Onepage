	<section class="start-banner">
	<?php if(have_rows('sliders')) : ?>
		<div class="flexslider startslider">
			<ul class="slides">
			<?php while(have_rows('sliders')) : the_row(); ?>
				<li style="background-image: url('<?php the_sub_field('bakgrundsbild'); ?>');"></li>
			<?php endwhile; ?>
			</ul>
		</div>
	<?php endif; ?>
		<div class="start-banner-text">
			<div class="row">
				<div class="small-12 columns">
					<img class="hero-logo" alt="<?php wp_title( '-', true, 'right' ); bloginfo( 'name' ); ?>" title="<?php wp_title( '-', true, 'right' ); bloginfo( 'name' ); ?>" src="<?php echo get_template_directory_uri(); ?>">
			<h1><span class="underline">En äkta genuin italiensk restaurang i Stockholm.</span></h1>
			  				<a href="#bokabord" class="button pulse dot">Boka bord</a>
				</div>
			</div>
		</div>
	</section>

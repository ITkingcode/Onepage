<div class="home" id="home">
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

			<h1><span class="underline">A genuine Drink that you shall not miss</span></h1>
					<nav id="navbar">
						<ul id="menu-main">
							<li>
			  				<a href="#bokabord" class="button pulse dot">Ello</a>
			  				</li>
			  			</ul>
			  		</nav>
				</div>
			</div>
		</div>
	</section>
</div>
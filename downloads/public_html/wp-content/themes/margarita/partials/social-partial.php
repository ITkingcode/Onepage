<?php
	$args = array(

		'post_type' => 'social',
		'posts_per_page' => 1

	);
	$the_query = new WP_Query( $args );
?>
<?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>

	<?php if(have_rows('accounts')) : ?>
		<ul class="social">
		<?php while(have_rows('accounts')) : the_row(); ?>
			<li><a target="_blank" href="<?php the_sub_field('url'); ?>" class="<?php the_sub_field('account'); ?>"></a>
				<span class="social-name"><?php the_sub_field('namn'); ?></span>
			</li>
		<?php endwhile; ?>
		</ul>
	<?php endif; ?>

<?php endwhile; endif; wp_reset_query(); ?>

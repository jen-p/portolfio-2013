<?php get_header(); ?>

<section>
	<div class="content">
		<div class="wrapper">
			<div class="container">
				<div class="sixteen columns">
					
					<div class="two-thirds column">
						<div id="content">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							<p class="post_meta">
								<span class="meta_cat"><?php the_category(', '); ?> | </span>
								<!--<span class="meta-prep meta-prep-author"><?php //_e('By ', 'your-theme'); ?></span>
											<span class="author vcard"><?php //the_author(); ?></span>-->
											  <span class="meta_date"><?php the_time('j F Y'); ?> <!--at </?php the_time('g:i a'); ?>--></span></p>
											 
							<?php the_content(); ?>
							<hr>
							
							<?php endwhile; else: ?>
							<p>Sorry, no posts we're found.</p>
							<?php endif; ?>
							<p align="center"><?php posts_nav_link(); ?></p>
						</div>
					</div>
					<div class="one-third column">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
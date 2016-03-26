<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

 <?php $query = new WP_Query( 'cat=0,1,2,3,4' ); ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

 	<div class="entry">
 	    <?php the_title('<h3>','</h3>'); ?>
 		<?php the_content(); ?>
 	</div>

 		<div class="picture">
 		    <?php the_post_thumbnail('small'); ?>
 		</div> 
<div class="meta" style="background:<?php the_meta?>">
    <p>This is where we were:</p><?php the_meta(); ?>
</div>

<?php endwhile; else : ?>

 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>
    
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>

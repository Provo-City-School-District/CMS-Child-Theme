<?php get_header(); ?>
		<main id="contentArea">
			<?php custom_breadcrumbs(); ?>
			<section id="mainContent" class="single-page">
					<?php
						//Id's 43440,43437,43399,42984,43435 are calendar pages. 42742,42740,42744,42746 are directory pages
						if(!is_page(array(43440,43437,43399,42984,43435, 42742,42740,42744,42746))) {
							do_shortcode( '[modified-date]' );
						}
						if(have_posts()) :
						while (have_posts()) : the_post();?>

						   			<h1><?php the_title(); ?></h1>
						   			<?php
							   			if ( has_post_thumbnail() ) {
								   			echo get_the_post_thumbnail( $post_id, 'full' );
								   			}
							   			 ?>
					   				<?php the_content(); ?>

					   	<?php endwhile;
							else :
								echo '<p>No Content Found</p>';
					endif;
				?>
				<div class="clear"></div>
			</section>
		</main>
		<?php
	   		global $post;
	   		if(in_array( 18322, get_post_ancestors($post))) {
		   		get_sidebar( 'about' );
	   		} elseif(in_array( 18379, get_post_ancestors($post))) {
		   		get_sidebar( 'counseling' );
	   		} elseif(in_array( 18328, get_post_ancestors($post))) {
		   		get_sidebar( 'policies-forms' );
	   		} elseif(in_array( 18419, get_post_ancestors($post))) {
		   		get_sidebar( 'faculty-staff' );
	   		} else {
		   		get_sidebar( $sidebar );
	   		}

			get_footer();
		?>

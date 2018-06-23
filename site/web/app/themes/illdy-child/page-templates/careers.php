<?php
/**
 *  Template name: Careers Page
 *
 *  The template for displaying Custom Page Template: Careers Page.
 *
 *  @package WordPress
 *  @subpackage illdy-child
 */
?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<section id="blog">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'page' );
					endwhile;
				endif;
				?>
			</section><!--/#blog-->

		</div><!--/.col-sm-12-->
	</div><!--/.row-->
</div><!--/.container-->
<section id="career-section">

<div class="container" >
	<div class="row">
		<div class="col-sm-12">
<h3 class="career-section-title">Currently looking for</h3>
			</div><!--/.col-sm-12-->
				<?php
				$args = array(
	'post_type' => array( 'acme_product' )
);
$the_query  = new WP_Query( $args );
				 ?>
				<?php
				if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			echo '<div class="col-sm-3 career-item"><div class="position-blck"><div class="career-thumb">' .get_the_post_thumbnail( get_the_ID(), 'full' ).'</div>';
			echo  '<h4>'.get_the_title() . '</h4><p>' . get_the_excerpt() . '</p></div></div>';
		}
		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		// no posts found
	}
				?>


	</div><!--/.row-->
</div><!--/.container-->
</section>
<section id="contact-us" class="front-page-section">
		<div class="section-header">
			<div class="container">
				<div class="row">
						<div class="col-sm-12">
							<h3>Contact Us</h3>
						</div>
						<div class="col-sm-10 col-sm-offset-1">
							<div class="section-description">And we will get in touch as soon as possible.</div>
						</div>
				</div>
			</div>
		</div>
	<div class="section-content">
		<div class="container">

			<div class="row">
			<div class="col-sm-4 contact-text">
			<h4>Join our team</h4>
			<p>Please fill out this form and give us some info about yourself. We will contact you as soon as possible and ask for more info such as a full cv etc.</p>
			</div>
				<div class="col-sm-8">
						<?php echo do_shortcode( '[contact-form-7 id="2758"]' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>

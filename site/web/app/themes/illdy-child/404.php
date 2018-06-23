<?php
/**
 *  The template for dispalying the archive.
 *
 *  @package WordPress
 *  @subpackage illdy
 */
?>
<?php get_header(); ?>
<?php


$page_subtitle     = get_theme_mod( 'illdy_404_subtitle', esc_html__( "This page doesn't exist", "illdy" ) );
$page_content      = get_theme_mod( 'illdy_404_content', esc_html__( 'Wa can\'t find the page you are looking for. Please check the URL to make sure the path is correct', 'illdy' ) );
$page_button_label = get_theme_mod( 'illdy_404_button_label', esc_html__( 'Return Home', 'illdy' ) );

?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<section id="blog">
				<div class="row row-404">
					<div class="col-md-2 text-right">
						<span class="error-code"><?php _e( '404', 'illdy' ); ?></span>
					</div>
					<div class="col-md-10">
						<h2 class="subheading-404"><?php echo wp_kses_post( $page_subtitle ); ?></h2>
						<div class="content-404"><?php echo wp_kses_post( $page_content ); ?></div>
						<a href="<?php echo site_url(); ?>" class="button button-404"><?php echo esc_html( $page_button_label ); ?></a>
					</div>
				</div>
			</section><!--/#blog-->
		</div><!--/.col-sm-7-->
	</div><!--/.row-->
</div><!--/.container-->
<?php get_footer(); ?>

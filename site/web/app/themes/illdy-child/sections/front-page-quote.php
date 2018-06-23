<?php
/**
 *  The template for displaying the projects section in front page.
 *
 *  @package WordPress
 *  @subpackage illdy
 */
?>
<?php
if ( current_user_can( 'edit_theme_options' ) ) {
	$quote_general_title = get_theme_mod( 'illdy_quote_general_title' );
	$quote_general_text = get_theme_mod( 'illdy_quote_general_text' );
	$quote_general_author_image = get_theme_mod( 'illdy_quote_general_author_image' );

} else {
	$quote_general_title = get_theme_mod( 'illdy_quote_general_title' );
	$quote_general_text = get_theme_mod( 'illdy_quote_general_text' );
	$quote_general_author_image = get_theme_mod( 'illdy_quote_general_author_image' );
}

?>

<?php if (  is_active_sidebar( 'front-page-projects-sidebar' ) ) { ?>

<section id="quote" class="front-page-section" style="">

	<div class="section-content">
		<div class="container-fluid">
			<div class="row ">
				<?php
				if ( is_active_sidebar( 'front-page-projects-sidebar' ) ) :
?>
<blockquote class="author-bkockqoute">
  <p class="author-quote-text"><?php echo $quote_general_text; ?></p>
  <footer><span class="autho-quote-image"><img src="<?php echo esc_url( $quote_general_author_image ) ?>"> </span><span class="author-quote-name"> <?php  echo $quote_general_title; ?></span></footer>
</blockquote>
<?php
					//dynamic_sidebar( 'front-page-projects-sidebar' );
				elseif ( current_user_can( 'edit_theme_options' ) & defined( 'ILLDY_COMPANION' ) ) :
					$the_widget_args = array(
						'before_widget' => '<div class="col-sm-3 col-xs-6 no-padding widget_illdy_project">',
						'after_widget'  => '</div>',
						'before_title'  => '',
						'after_title'   => '',
					);
					the_widget( 'Illdy_Widget_Project', 'title=' . __( 'Project 1', 'illdy' ) . '&image=' . get_template_directory_uri() . esc_url( '/layout/images/front-page/front-page-project-1.png' ) . '&url=' . esc_url( '#' ), $the_widget_args );
					the_widget( 'Illdy_Widget_Project', 'title=' . __( 'Project 2', 'illdy' ) . '&image=' . get_template_directory_uri() . esc_url( '/layout/images/front-page/front-page-project-2.png' ) . '&url=' . esc_url( '#' ), $the_widget_args );
					the_widget( 'Illdy_Widget_Project', 'title=' . __( 'Project 3', 'illdy' ) . '&image=' . get_template_directory_uri() . esc_url( '/layout/images/front-page/front-page-project-3.png' ) . '&url=' . esc_url( '#' ), $the_widget_args );
					the_widget( 'Illdy_Widget_Project', 'title=' . __( 'Project 4', 'illdy' ) . '&image=' . get_template_directory_uri() . esc_url( '/layout/images/front-page/front-page-project-4.png' ) . '&url=' . esc_url( '#' ), $the_widget_args );
				endif;
				?>
			</div><!--/.row-->
		</div><!--/.container-fluid-->
	</div><!--/.section-content-->
</section><!--/#projects.front-page-section-->

<?php }// End if().
	?>

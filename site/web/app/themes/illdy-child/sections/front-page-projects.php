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
	$about_general_project_1_title = get_theme_mod( 'illdy_about_general_project_1_title' );
	$about_general_project_2_title = get_theme_mod( 'illdy_about_general_project_2_title' );
	$about_general_project_3_title = get_theme_mod( 'illdy_about_general_project_3_title' );
	$about_general_project_1_subtitle = get_theme_mod( 'illdy_about_general_project_1_subtitle' );
	$about_general_project_2_subtitle = get_theme_mod( 'illdy_about_general_project_2_subtitle' );
	$about_general_project_3_subtitle = get_theme_mod( 'illdy_about_general_project_3_subtitle' );
	$about_general_project_1_dscr = get_theme_mod( 'illdy_about_general_project_1_dscr' );
	$about_general_project_2_dscr = get_theme_mod( 'illdy_about_general_project_2_dscr' );
	$about_general_project_3_dscr = get_theme_mod( 'illdy_about_general_project_3_dscr' );
	$general_title = get_theme_mod( 'illdy_projects_general_title', esc_html__( 'Projects', 'illdy' ) );
	$general_entry = get_theme_mod( 'illdy_projects_general_entry', esc_html__( 'You\'ll love our work. Check it out!', 'illdy' ) );
} else {
	$about_general_project_1_title = get_theme_mod( 'illdy_about_general_project_1_title' );
	$about_general_project_2_title = get_theme_mod( 'illdy_about_general_project_2_title' );
	$about_general_project_3_title = get_theme_mod( 'illdy_about_general_project_3_title' );
	$about_general_project_1_subtitle = get_theme_mod( 'illdy_about_general_project_1_subtitle' );
	$about_general_project_2_subtitle = get_theme_mod( 'illdy_about_general_project_2_subtitle' );
	$about_general_project_3_subtitle = get_theme_mod( 'illdy_about_general_project_3_subtitle' );
	$about_general_project_1_dscr = get_theme_mod( 'illdy_about_general_project_1_dscr' );
	$about_general_project_2_dscr = get_theme_mod( 'illdy_about_general_project_2_dscr' );
	$about_general_project_3_dscr = get_theme_mod( 'illdy_about_general_project_3_dscr' );
	$general_title = get_theme_mod( 'illdy_projects_general_title' );
	$general_entry = get_theme_mod( 'illdy_projects_general_entry' );
}

?>

<?php if ( '' != $general_title || '' != $general_entry || is_active_sidebar( 'front-page-projects-sidebar' ) ) { ?>

<section id="projects" class="front-page-section" style="
<?php
if ( ! $general_title && ! $general_entry ) :
	echo 'padding-top: 0;';
endif;
?>
">
	<?php if ( $general_title || $general_entry ) : ?>
		<div class="section-header">
			<div class="container">
				<div class="row">
					<?php if ( $general_title ) : ?>
						<div class="col-sm-12">
							<h3><?php echo do_shortcode( wp_kses_post( $general_title ) ); ?></h3>
						</div><!--/.col-sm-12-->
					<?php endif; ?>
					<?php if ( $general_entry ) : ?>
						<div class="col-sm-10 col-sm-offset-1">
							<div class="section-description"><?php echo do_shortcode( wp_kses_post( $general_entry ) ); ?></div>
						</div><!--/.col-sm-10.col-sm-offset-1-->
					<?php endif; ?>
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-header-->
	<?php endif; ?>
	<div class="section-content">
		<div class="container-fluid">
			<div class="row inline-columns">
				<?php
				if ( is_active_sidebar( 'front-page-projects-sidebar' ) ) :
?>

<div class="accordion">
  <ul id="projects-ul">
    <li id="project-li-1">
      <div>
				<div class="old_href">

        <h3 class="iddle_about_general_project_1_title about_general_project_title"><?php echo "$about_general_project_1_title"; ?></h3>
				<small class="iddle_about_general_project_1_subtitle about_general_project_subtitle"><?php echo "$about_general_project_1_subtitle"; ?></small>
        <p class="about_general_project_title iddle_about_general_project_1_dscr"><?php echo "$about_general_project_1_dscr" ?></p>
			</div>

			 </div>
    </li>
    <li id="project-li-2">
      <div>
				<div class="old_href">
        <h3 class="iddle_about_general_project_2_title about_general_project_title"><?php echo "$about_general_project_2_title"; ?></h3>
				<small class="iddle_about_general_project_2_subtitle about_general_project_subtitle"><?php echo "$about_general_project_2_subtitle"; ?></small>
        <p class="about_general_project_title iddle_about_general_project_2_dscr"><?php echo "$about_general_project_2_dscr" ?></p>
				</div>
         </div>
    </li>
    <li  id="project-li-3">
      <div>
				<div class="old_href">
        <h3 class="iddle_about_general_project_3_title about_general_project_title"><?php echo "$about_general_project_3_title"; ?></h3>
				<small class="iddle_about_general_project_3_subtitle about_general_project_subtitle"><?php echo "$about_general_project_3_subtitle"; ?></small>
        <p class="about_general_project_title iddle_about_general_project_3_dscr"><?php echo "$about_general_project_3_dscr" ?></p>
				</div>
        </div>
    </li>
  </ul>
</div>
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

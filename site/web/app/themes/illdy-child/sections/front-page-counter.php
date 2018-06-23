<?php
/**
 *  The template for displaying the counter section in front page.
 *
 *  @package WordPress
 *  @subpackage illdy
 */
?>

<?php
if ( current_user_can( 'edit_theme_options' ) ) {
	$counter_general_title = get_theme_mod( 'illdy_counter_general_title', __( 'Counter', 'illdy' ) );


	$counter_background_type  = get_theme_mod( 'illdy_counter_background_type', 'image' );
	$counter_counter_client_1_image  = get_theme_mod( 'illdy_counter_client_1_image', 'image' );
	$counter_counter_client_2_image  = get_theme_mod( 'illdy_counter_client_2_image', 'image' );
	$counter_counter_client_3_image  = get_theme_mod( 'illdy_counter_client_3_image', 'image' );
	$counter_background_image = get_theme_mod( 'illdy_counter_background_image', esc_url( get_template_directory_uri() . '/layout/images/front-page/front-page-counter.jpg' ) );
	$counter_background_color = get_theme_mod( 'illdy_counter_background_color', '#000000' );
} else {
	$counter_general_title = get_theme_mod( 'illdy_counter_general_title', __( 'Counter', 'illdy' ) );
	$counter_background_type  = get_theme_mod( 'illdy_counter_background_type' );
	$counter_counter_client_1_image  = get_theme_mod( 'illdy_counter_client_1_image', 'image' );
	$counter_counter_client_2_image  = get_theme_mod( 'illdy_counter_client_2_image', 'image' );
	$counter_counter_client_3_image  = get_theme_mod( 'illdy_counter_client_3_image', 'image' );
	$counter_background_image = get_theme_mod( 'illdy_counter_background_image' );
	$counter_background_color = get_theme_mod( 'illdy_counter_background_color' );
}

?>

<?php
if ( 'image' == $counter_background_type && $counter_background_image ) :
	$counter_style = 'background-image: url(' . esc_url( $counter_background_image ) . ');background-color:' . $counter_background_color . ';';
else :
	$counter_style = 'background-color:' . $counter_background_color;
endif;
?>

<?php if ( is_active_sidebar( 'front-page-counter-sidebar' ) ) { ?>

<section id="counter" class="front-page-section" style="<?php echo $counter_style; ?>">
	<div class="section-header">
		<div class="container">
			<div class="row">
				<?php if ( $counter_general_title ) : ?>
					<div class="col-sm-12">
						<h3><?php echo do_shortcode( wp_kses_post( $counter_general_title ) ); ?></h3>
					</div><!--/.col-sm-12-->
				<?php endif; ?>

			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.section-header-->
	<div class="counter-overlay"></div>
	<div class="container">
		<div class="row ">

			<?php
			if ( is_active_sidebar( 'front-page-counter-sidebar' ) ) :
				?>
<div id="illdy_counter-4" class="col-sm-4 col-xs-12 widget_illdy_counter">
<div class="counter-thumb">
	<img src="<?php echo "$counter_counter_client_1_image"; ?>" alt="">
</div>
	<span class="client-hardcap"><span class="client-hardcap-dollar">$</span>  <span class="counter-number" data-from="1" data-to="66" data-speed="2000" data-refresh-interval="100">0</span><span class="client-hardcap-m"> M </span></span>
<p><b>BUILDING A PROFITABLE FUNNEL</b><br/>
Increased East Asia user base by 10,000% with a combination of paid advertising and organic reach.</p>
	</div>
<div id="illdy_counter-3" class="col-sm-4 col-xs-12 widget_illdy_counter">
<div class="counter-thumb">
	<img src="<?php echo "$counter_counter_client_2_image"; ?>" alt="">
</div>
	<span class="client-hardcap"><span class="client-hardcap-dollar">$</span>  <span class="counter-number" data-from="1" data-to="40" data-speed="2000" data-refresh-interval="100">0</span><span class="client-hardcap-m"> M </span></span>
<p><b>TARGETING AND CONVERTING INVESTORS</b><br/>
Leveraged our network to identify and commit seven-figure + investors to long term holdings.</p>
	</div>
<div id="illdy_counter-2" class="col-sm-4 col-xs-12 widget_illdy_counter">
<div class="counter-thumb">
	<img src="<?php echo "$counter_counter_client_3_image"; ?>" alt="">
</div>
	<span class="client-hardcap"><span class="client-hardcap-dollar">$</span>  <span class="counter-number" data-from="1" data-to="70.6" data-speed="2000" data-refresh-interval="100">0</span><span class="client-hardcap-m"> M </span></span>
<p><b>NAVIGATING CHINA'S GREY AREA</b><br/>
Positioned project and campaign with ongoing guidance of our legal team in order to conclude a successful investment round.</p>
	</div><!--/.row-->
				<?php
			//	dynamic_sidebar( 'front-page-counter-sidebar' );

			elseif ( current_user_can( 'edit_theme_options' ) & defined( 'ILLDY_COMPANION' ) ) :
				$the_widget_args = array(
					'before_widget' => '<div class="col-sm-4 widget_illdy_counter">',
					'after_widget'  => '</div>',
					'before_title'  => '',
					'after_title'   => '',
				);

				the_widget( 'Illdy_Widget_Counter', 'title=' . __( 'Projects', 'illdy' ) . '&data_from=1&data_to=260&data_speed=2000&data_refresh_interval=100', $the_widget_args );
				the_widget( 'Illdy_Widget_Counter', 'title=' . __( 'Clients', 'illdy' ) . '&data_from=1&data_to=120&data_speed=2000&data_refresh_interval=100', $the_widget_args );
				the_widget( 'Illdy_Widget_Counter', 'title=' . __( 'Coffes', 'illdy' ) . '&data_from=1&data_to=260&data_speed=2000&data_refresh_interval=100', $the_widget_args );
			endif;
			?>




	</div><!--/.container-->
	<div class="container clients-carousel">
		<?php
		$args = array(
	'post_type' => array( 'client_post_type' )
	);
	$the_query  = new WP_Query( $args );
		 ?>
		<?php
		if ( $the_query->have_posts() ) {
			?>
			<div class="bxClients">

	<?php
	while ( $the_query->have_posts() ) {
	$the_query->the_post();
	echo '<div>'.get_the_post_thumbnail( get_the_ID(), 'full' ).'</div>';
	}
	/* Restore original Post Data */
	wp_reset_postdata();
	?>
</div>
	<?php
	} else {
	// no posts found
	}
		?>
	</div>
</section><!--/#counter.front-page-section-->

<?php } ?>

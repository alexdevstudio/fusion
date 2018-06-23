<?php
/**
 *    The template for displaying the contact us section in front page.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php
if ( current_user_can( 'edit_theme_options' ) ) {


	$general_title             = get_theme_mod( 'illdy_contact_us_general_title', __( 'Contact us', 'illdy' ) );
	$general_entry             = get_theme_mod( 'illdy_contact_us_entry', __( 'And we will get in touch as soon as possible.', 'illdy' ) );
	$general_contact_form_7    = get_theme_mod( 'illdy_contact_us_general_contact_form_7' );
	$general_address_title     = get_theme_mod( 'illdy_contact_us_general_address_title', __( 'Address', 'illdy' ) );
	$customer_support_title    = get_theme_mod( 'illdy_contact_us_general_customer_support_title', __( 'Customer Support', 'illdy' ) );
} else {

	$general_title             = get_theme_mod( 'illdy_contact_us_general_title' );
	$general_entry             = get_theme_mod( 'illdy_contact_us_entry' );
	$general_contact_form_7    = get_theme_mod( 'illdy_contact_us_general_contact_form_7' );
	$general_address_title     = get_theme_mod( 'illdy_contact_us_general_address_title' );
	$customer_support_title    = get_theme_mod( 'illdy_contact_us_general_customer_support_title' );
}// End if().

 {

	?>
	<section id="contact-us" class="front-page-section">
		<?php if ( $general_title || $general_entry ) : ?>
			<div class="section-header">
				<div class="container">
					<div class="row">
						<?php if ( $general_title ) : ?>
							<div class="col-sm-12">
								<h3><?php echo do_shortcode( wp_kses_post( $general_title ) ); ?></h3>
							</div>
						<?php endif; ?>
						<?php if ( $general_entry ) : ?>
							<div class="col-sm-10 col-sm-offset-1">
								<div class="section-description"><?php echo do_shortcode( wp_kses_post( $general_entry ) ); ?></div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="section-content">
			<div class="container">

				<div class="row">
				<div class="col-sm-4 contact-text">
				<h4>We are committed</h4>
				<p>to bringing only the best blockchain projects to Asia, and carefully evaluate new partnerships everyday. We will fully and confidentially consider any information you share with us, but cannot guarantee uptake of your project. However, we will respond in timely fashion.</p>
				</div>
					<div class="col-sm-8">
						<?php if ( class_exists( 'WPCF7' ) && null != $general_contact_form_7 && 'default' != $general_contact_form_7 && get_post( $general_contact_form_7 ) ) : ?>
							<?php $shortcode = '[contact-form-7 id="' . esc_html( $general_contact_form_7 ) . '"]'; ?>
							<?php echo do_shortcode( $shortcode ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php }// End if().
	?>

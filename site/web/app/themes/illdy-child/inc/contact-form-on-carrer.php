
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

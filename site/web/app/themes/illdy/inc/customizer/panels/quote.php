<?php
// Set prefix
$prefix   = 'illdy';
$panel_id = $prefix . '_quote_general';

/***********************************************/
/******************* General *******************/
/***********************************************/
$wp_customize->add_section(
	$prefix . '_quote_general',
	array(
		'title'       => __( 'Quote Section', 'illdy' ),
		'description' => __( 'Control various options for quote section from front page.', 'illdy' ),
		'priority'    => illdy_get_section_position( $prefix . '_quote_general' ),
		'panel'       => 'illdy_frontpage_panel',
	)
);

// Show this section
$wp_customize->add_setting(
	$prefix . '_quote_general_show', array(
		'sanitize_callback' => $prefix . '_sanitize_checkbox',
		'default'           => 1,
		'transport'         => 'postMessage',
	)
);
$wp_customize->add_control(
	new Epsilon_Control_Toggle(
		$wp_customize, $prefix . '_quote_general_show', array(
			'type'     => 'epsilon-toggle',
			'label'    => __( 'Show this section?', 'illdy' ),
			'section'  => $prefix . '_quote_general',
			'priority' => 1,
		)
	)
);

// Title
$wp_customize->add_setting(
	$prefix . '_quote_general_title', array(
		'sanitize_callback' => 'illdy_sanitize_html',
		'default'           => __( 'Quote', 'illdy' ),
		'transport'         => 'postMessage',
	)
);
$wp_customize->add_control(
	$prefix . '_quote_general_title', array(
		'label'       => __( 'Author Name', 'illdy' ),
		'description' => __( 'Add author\'s name.', 'illdy' ),
		'section'     => $prefix . '_quote_general',
		'priority'    => 2,
	)
);
$wp_customize->selective_refresh->add_partial(
	$prefix . '_quote_general_title', array(
		'selector' => '#quote .section-header h3',
	)
);

$wp_customize->add_setting(
	$prefix . '_quote_general_text', array(
		'sanitize_callback' => 'illdy_sanitize_html',
		'default'           => __( 'Quote text', 'illdy' ),
		'transport'         => 'postMessage',
	)
);
$wp_customize->add_control(
	$prefix . '_quote_general_text', array(
		'label'       => __( 'Quote Text', 'illdy' ),
		'description' => __( 'Add the quote for this section.', 'illdy' ),
		'section'     => $panel_id,
		'priority'    => 2,
	)
);
$wp_customize->selective_refresh->add_partial(
	$prefix . '_quote_general_text', array(
		'selector'        => '#quote .quote_text',
		'render_callback' => $prefix . '_quote_general_text',
	)
);


// Autor Image
$wp_customize->add_setting(
	$prefix . '_quote_general_author_image', array(
		'sanitize_callback' => 'esc_url',
		'default'           => esc_url( get_template_directory_uri() . '/layout/images/testiomnials-background.jpg' ),
		'transport'         => 'postMessage',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize, $prefix . '_quote_general_author_image', array(
			'label'    => __( 'Author Image', 'illdy' ),
			'section'  => $panel_id,
			'settings' => $prefix . '_quote_general_author_image',
		)
	)
);

<?php
/**
 * An example file demonstrating how to add all controls.
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       3.0.12
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Do not proceed if Kirki does not exist.
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/**
 * First of all, add the config.
 *
 * @link https://aristath.github.io/kirki/docs/getting-started/config.html
 */
Kirki::add_config( 'kirki_demo', array(
	'capability'  => 'edit_theme_options',
	'option_type' => 'theme_mod',
) );

/**
 * Add a panel.
 *
 * @link https://aristath.github.io/kirki/docs/getting-started/panels.html
 */
Kirki::add_panel( 'kirki_demo_panel', array(
	'priority'    => 10,
	'title'       => esc_attr__( 'Kirki Demo Panel', 'folie' ),
	'description' => esc_attr__( 'Contains sections for all kirki controls.', 'folie' ),
) );

/**
 * Add Sections.
 *
 * We'll be doing things a bit differently here, just to demonstrate an example.
 * We're going to define 1 section per control-type just to keep things clean and separate.
 *
 * @link https://aristath.github.io/kirki/docs/getting-started/sections.html
 */
$sections = array(
	'background'      => array( esc_attr__( 'Background', 'folie' ), '' ),
	'code'            => array( esc_attr__( 'Code', 'folie' ), '' ),
	'checkbox'        => array( esc_attr__( 'Checkbox', 'folie' ), '' ),
	'color'           => array( esc_attr__( 'Color', 'folie' ), '' ),
	'color-palette'   => array( esc_attr__( 'Color Palette', 'folie' ), '' ),
	'custom'          => array( esc_attr__( 'Custom', 'folie' ), '' ),
	'dashicons'       => array( esc_attr__( 'Dashicons', 'folie' ), '' ),
	'date'            => array( esc_attr__( 'Date', 'folie' ), '' ),
	'dimension'       => array( esc_attr__( 'Dimension', 'folie' ), '' ),
	'dimensions'      => array( esc_attr__( 'Dimensions', 'folie' ), '' ),
	'editor'          => array( esc_attr__( 'Editor', 'folie' ), '' ),
	'fontawesome'     => array( esc_attr__( 'Font-Awesome', 'folie' ), '' ),
	'generic'         => array( esc_attr__( 'Generic', 'folie' ), '' ),
	'image'           => array( esc_attr__( 'Image', 'folie' ), '' ),
	'multicheck'      => array( esc_attr__( 'Multicheck', 'folie' ), '' ),
	'multicolor'      => array( esc_attr__( 'Multicolor', 'folie' ), '' ),
	'number'          => array( esc_attr__( 'Number', 'folie' ), '' ),
	'palette'         => array( esc_attr__( 'Palette', 'folie' ), '' ),
	'preset'          => array( esc_attr__( 'Preset', 'folie' ), '' ),
	'radio'           => array( esc_attr__( 'Radio', 'folie' ), esc_attr__( 'A plain Radio control.', 'folie' ) ),
	'radio-buttonset' => array( esc_attr__( 'Radio Buttonset', 'folie' ), esc_attr__( 'Radio-Buttonset controls are essentially radio controls with some fancy styling to make them look cooler.', 'folie' ) ),
	'radio-image'     => array( esc_attr__( 'Radio Image', 'folie' ), esc_attr__( 'Radio-Image controls are essentially radio controls with some fancy styles to use images', 'folie' ) ),
	'repeater'        => array( esc_attr__( 'Repeater', 'folie' ), '' ),
	'select'          => array( esc_attr__( 'Select', 'folie' ), '' ),
	'slider'          => array( esc_attr__( 'Slider', 'folie' ), '' ),
	'sortable'        => array( esc_attr__( 'Sortable', 'folie' ), '' ),
	'switch'          => array( esc_attr__( 'Switch', 'folie' ), '' ),
	'toggle'          => array( esc_attr__( 'Toggle', 'folie' ), '' ),
	'typography'      => array( esc_attr__( 'Typography', 'folie' ), '' ),
);
foreach ( $sections as $section_id => $section ) {
	Kirki::add_section( str_replace( '-', '_', $section_id ) . '_section', array(
		'title'       => $section[0],
		'description' => $section[1],
		'panel'       => 'kirki_demo_panel',
	) );
}

/**
 * Background Control.
 *
 * @todo Triggers change on load.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'background',
	'settings'    => 'background_setting',
	'label'       => esc_attr__( 'Background Control', 'folie' ),
	'description' => esc_attr__( 'Background conrols are pretty complex! (but useful if properly used)', 'folie' ),
	'section'     => 'background_section',
	'default'     => array(
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat-all',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	),
) );

/**
 * Code control.
 *
 * @link https://aristath.github.io/kirki/docs/controls/code.html
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'code',
	'settings'    => 'code_setting',
	'label'       => esc_attr__( 'Code Control', 'folie' ),
	'description' => esc_attr__( 'Description', 'folie' ),
	'section'     => 'code_section',
	'default'     => '',
	'choices'     => array(
		'language' => 'css',
		'theme'    => 'monokai',
	),
) );

/**
 * Checkbox control.
 *
 * @link https://aristath.github.io/kirki/docs/controls/checkbox.html
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'checkbox',
	'settings'    => 'checkbox_setting',
	'label'       => esc_attr__( 'Checkbox Control', 'folie' ),
	'description' => esc_attr__( 'Description', 'folie' ),
	'section'     => 'checkbox_section',
	'default'     => true,
) );

/**
 * Color Controls.
 *
 * @link https://aristath.github.io/kirki/docs/controls/color.html
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'color',
	'settings'    => 'color_setting_hex',
	'label'       => esc_html__( 'Color Control (hex-only)', 'folie' ),
	'description' => esc_attr__( 'This is a color control - without alpha channel.', 'folie' ),
	'section'     => 'color_section',
	'default'     => '#0088CC',
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'color',
	'settings'    => 'color_setting_rgba',
	'label'       => esc_html__( 'Color Control (with alpha channel)', 'folie' ),
	'description' => esc_attr__( 'This is a color control - with alpha channel.', 'folie' ),
	'section'     => 'color_section',
	'default'     => '#0088CC',
	'choices'     => array(
		'alpha' => true,
	),
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'color',
	'settings'    => 'color_setting_hue',
	'label'       => esc_html__( 'Color Control - hue only.', 'folie' ),
	'description' => esc_attr__( 'This is a color control - hue only.', 'folie' ),
	'section'     => 'color_section',
	'default'     => '#0088CC',
	'mode'        => 'hue',
) );

/**
 * DateTime Control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'date',
	'settings'    => 'date_setting',
	'label'       => esc_attr__( 'Date Control', 'folie' ),
	'description' => esc_attr__( 'This is a date control.', 'folie' ),
	'section'     => 'date_section',
	'default'     => '',
) );

/**
 * Editor Controls
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'editor',
	'settings'    => 'editor_1',
	'label'       => esc_attr__( 'First Editor Control', 'folie' ),
	'description' => esc_attr__( 'This is an editor control.', 'folie' ),
	'section'     => 'editor_section',
	'default'     => '',
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'editor',
	'settings'    => 'editor_2',
	'label'       => esc_attr__( 'Second Editor Control', 'folie' ),
	'description' => esc_attr__( 'This is a 2nd editor control just to check that we do not have issues with multiple instances.', 'folie' ),
	'section'     => 'editor_section',
	'default'     => esc_attr__( 'Default Text', 'folie' ),
) );

/**
 * Color-Palette Controls.
 *
 * @link https://aristath.github.io/kirki/docs/controls/color-palette.html
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'color-palette',
	'settings'    => 'color_palette_setting_0',
	'label'       => esc_attr__( 'Color-Palette', 'folie' ),
	'description' => esc_attr__( 'This is a color-palette control', 'folie' ),
	'section'     => 'color_palette_section',
	'default'     => '#888888',
	'choices'     => array(
		'colors' => array( '#000000', '#222222', '#444444', '#666666', '#888888', '#aaaaaa', '#cccccc', '#eeeeee', '#ffffff' ),
		'style'  => 'round',
	),
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'color-palette',
	'settings'    => 'color_palette_setting_4',
	'label'       => esc_attr__( 'Color-Palette', 'folie' ),
	'description' => esc_attr__( 'Material Design Colors - all', 'folie' ),
	'section'     => 'color_palette_section',
	'default'     => '#F44336',
	'choices'     => array(
		'colors' => Kirki_Helper::get_material_design_colors( 'all' ),
		'size'   => 17,
	),
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'color-palette',
	'settings'    => 'color_palette_setting_1',
	'label'       => esc_attr__( 'Color-Palette', 'folie' ),
	'description' => esc_attr__( 'Material Design Colors - primary', 'folie' ),
	'section'     => 'color_palette_section',
	'default'     => '#000000',
	'choices'     => array(
		'colors' => Kirki_Helper::get_material_design_colors( 'primary' ),
		'size'   => 25,
	),
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'color-palette',
	'settings'    => 'color_palette_setting_2',
	'label'       => esc_attr__( 'Color-Palette', 'folie' ),
	'description' => esc_attr__( 'Material Design Colors - red', 'folie' ),
	'section'     => 'color_palette_section',
	'default'     => '#FF1744',
	'choices'     => array(
		'colors' => Kirki_Helper::get_material_design_colors( 'red' ),
		'size'   => 16,
	),
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'color-palette',
	'settings'    => 'color_palette_setting_3',
	'label'       => esc_attr__( 'Color-Palette', 'folie' ),
	'description' => esc_attr__( 'Material Design Colors - A100', 'folie' ),
	'section'     => 'color_palette_section',
	'default'     => '#FF80AB',
	'choices'     => array(
		'colors' => Kirki_Helper::get_material_design_colors( 'A100' ),
		'size'   => 60,
		'style'  => 'round',
	),
) );

/**
 * Dashicons control.
 *
 * @link https://aristath.github.io/kirki/docs/controls/dashicons.html
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'dashicons',
	'settings'    => 'dashicons_setting_0',
	'label'       => esc_attr__( 'Dashicons Control', 'folie' ),
	'description' => esc_attr__( 'Using a custom array of dashicons', 'folie' ),
	'section'     => 'dashicons_section',
	'default'     => 'menu',
	'choices'     => array(
		'menu',
		'admin-site',
		'dashboard',
		'admin-post',
		'admin-media',
		'admin-links',
		'admin-page',
	),
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'dashicons',
	'settings'    => 'dashicons_setting_1',
	'label'       => esc_attr__( 'All Dashicons', 'folie' ),
	'description' => esc_attr__( 'Showing all dashicons', 'folie' ),
	'section'     => 'dashicons_section',
	'default'     => 'menu',
) );

/**
 * Dimension Control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'dimension',
	'settings'    => 'dimension_0',
	'label'       => esc_attr__( 'Dimension Control', 'folie' ),
	'description' => esc_attr__( 'Description Here.', 'folie' ),
	'section'     => 'dimension_section',
	'default'     => '10px',
) );

/**
 * Dimensions Control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'dimensions',
	'settings'    => 'dimensions_0',
	'label'       => esc_attr__( 'Dimension Control', 'folie' ),
	'description' => esc_attr__( 'Description Here.', 'folie' ),
	'section'     => 'dimensions_section',
	'default'     => array(
		'width'  => '100px',
		'height' => '100px',
	),
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'dimensions',
	'settings'    => 'dimensions_1',
	'label'       => esc_attr__( 'Dimension Control', 'folie' ),
	'description' => esc_attr__( 'Description Here.', 'folie' ),
	'section'     => 'dimensions_section',
	'default'     => array(
		'padding-top'    => '1em',
		'padding-bottom' => '10rem',
		'padding-left'   => '1vh',
		'padding-right'  => '10px',
	),
) );

/**
 * Font-Awesome Control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'fontawesome',
	'settings'    => 'fontawesome_setting',
	'label'       => esc_attr__( 'Font Awesome Control', 'folie' ),
	'description' => esc_attr__( 'Description Here.', 'folie' ),
	'section'     => 'fontawesome_section',
	'default'     => 'bath',
) );

/**
 * Generic Controls.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'text',
	'settings'    => 'generic_text_setting',
	'label'       => esc_attr__( 'Text Control', 'folie' ),
	'description' => esc_attr__( 'Description', 'folie' ),
	'section'     => 'generic_section',
	'default'     => '',
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'textarea',
	'settings'    => 'generic_textarea_setting',
	'label'       => esc_attr__( 'Textarea Control', 'folie' ),
	'description' => esc_attr__( 'Description', 'folie' ),
	'section'     => 'generic_section',
	'default'     => '',
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'generic',
	'settings'    => 'generic_custom_setting',
	'label'       => esc_attr__( 'Custom input Control.', 'folie' ),
	'description' => esc_attr__( 'The "generic" control allows you to add any input type you want. In this case we use type="password" and define custom styles.', 'folie' ),
	'section'     => 'generic_section',
	'default'     => '',
	'choices'     => array(
		'element'  => 'input',
		'type'     => 'password',
		'style'    => 'background-color:black;color:red;',
		'data-foo' => 'bar',
	),
) );

/**
 * Image Control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'image',
	'settings'    => 'image_setting_url',
	'label'       => esc_attr__( 'Image Control (URL)', 'folie' ),
	'description' => esc_attr__( 'Description Here.', 'folie' ),
	'section'     => 'image_section',
	'default'     => '',
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'image',
	'settings'    => 'image_setting_id',
	'label'       => esc_attr__( 'Image Control (ID)', 'folie' ),
	'description' => esc_attr__( 'Description Here.', 'folie' ),
	'section'     => 'image_section',
	'default'     => '',
	'choices'     => array(
		'save_as' => 'id',
	),
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'image',
	'settings'    => 'image_setting_array',
	'label'       => esc_attr__( 'Image Control (array)', 'folie' ),
	'description' => esc_attr__( 'Description Here.', 'folie' ),
	'section'     => 'image_section',
	'default'     => '',
	'choices'     => array(
		'save_as' => 'array',
	),
) );

/**
 * Multicheck Control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'multicheck',
	'settings'    => 'multicheck_setting',
	'label'       => esc_attr__( 'Multickeck Control', 'folie' ),
	'section'     => 'multicheck_section',
	'default'     => array( 'option-1', 'option-3', 'option-4' ),
	'priority'    => 10,
	'choices'     => array(
		'option-1' => esc_attr__( 'Option 1', 'folie' ),
		'option-2' => esc_attr__( 'Option 2', 'folie' ),
		'option-3' => esc_attr__( 'Option 3', 'folie' ),
		'option-4' => esc_attr__( 'Option 4', 'folie' ),
		'option-5' => esc_attr__( 'Option 5', 'folie' ),
	),
) );

/**
 * Multicolor Control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'multicolor',
	'settings'    => 'multicolor_setting',
	'label'       => esc_attr__( 'Label', 'folie' ),
	'section'     => 'multicolor_section',
	'priority'    => 10,
	'choices'     => array(
		'link'    => esc_attr__( 'Color', 'folie' ),
		'hover'   => esc_attr__( 'Hover', 'folie' ),
		'active'  => esc_attr__( 'Active', 'folie' ),
	),
	'default'     => array(
		'link'    => '#0088cc',
		'hover'   => '#00aaff',
		'active'  => '#00ffff',
	),
) );

/**
 * Number Control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'number',
	'settings'    => 'number_setting',
	'label'       => esc_attr__( 'Label', 'folie' ),
	'section'     => 'number_section',
	'priority'    => 10,
	'choices'     => array(
		'min'  => -5,
		'max'  => 5,
		'step' => 1,
	),
) );

/**
 * Palette Control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'palette',
	'settings'    => 'palette_setting',
	'label'       => esc_attr__( 'Label', 'folie' ),
	'section'     => 'palette_section',
	'default'     => 'blue',
	'choices'     => array(
		'a200'  => Kirki_Helper::get_material_design_colors( 'A200' ),
		'blue'  => Kirki_Helper::get_material_design_colors( 'blue' ),
		'green' => array( '#E8F5E9', '#C8E6C9', '#A5D6A7', '#81C784', '#66BB6A', '#4CAF50', '#43A047', '#388E3C', '#2E7D32', '#1B5E20', '#B9F6CA', '#69F0AE', '#00E676', '#00C853' ),
		'bnw'   => array( '#000000', '#ffffff' ),
	),
) );

/**
 * Radio Control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'radio',
	'settings'    => 'radio_setting',
	'label'       => esc_attr__( 'Radio Control', 'folie' ),
	'description' => esc_attr__( 'The description here.', 'folie' ),
	'section'     => 'radio_section',
	'default'     => 'option-3',
	'choices'     => array(
		'option-1' => esc_attr__( 'Option 1', 'folie' ),
		'option-2' => esc_attr__( 'Option 2', 'folie' ),
		'option-3' => esc_attr__( 'Option 3', 'folie' ),
		'option-4' => esc_attr__( 'Option 4', 'folie' ),
		'option-5' => esc_attr__( 'Option 5', 'folie' ),
	),
) );

/**
 * Radio-Buttonset Control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'radio_buttonset_setting',
	'label'       => esc_attr__( 'Radio-Buttonset Control', 'folie' ),
	'description' => esc_attr__( 'The description here.', 'folie' ),
	'section'     => 'radio_buttonset_section',
	'default'     => 'option-2',
	'choices'     => array(
		'option-1' => esc_attr__( 'Option 1', 'folie' ),
		'option-2' => esc_attr__( 'Option 2', 'folie' ),
		'option-3' => esc_attr__( 'Option 3', 'folie' ),
	),
) );

/**
 * Radio-Image Control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'radio-image',
	'settings'    => 'radio_image_setting',
	'label'       => esc_attr__( 'Radio-Image Control', 'folie' ),
	'description' => esc_attr__( 'The description here.', 'folie' ),
	'section'     => 'radio_image_section',
	'default'     => 'travel',
	'choices'     => array(
		'moto'    => 'https://jawordpressorg.github.io/wapuu/wapuu-archive/wapuu-moto.png',
		'cossack' => 'https://raw.githubusercontent.com/templatemonster/cossack-wapuula/master/cossack-wapuula.png',
		'travel'  => 'https://jawordpressorg.github.io/wapuu/wapuu-archive/wapuu-travel.png',
	),
) );

/**
 * Select Control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'select',
	'settings'    => 'select_setting',
	'label'       => esc_attr__( 'Select Control', 'folie' ),
	'description' => esc_attr__( 'The description here.', 'folie' ),
	'section'     => 'select_section',
	'default'     => 'option-3',
	'choices'     => array(
		'option-1' => esc_attr__( 'Option 1', 'folie' ),
		'option-2' => esc_attr__( 'Option 2', 'folie' ),
		'option-3' => esc_attr__( 'Option 3', 'folie' ),
		'option-4' => esc_attr__( 'Option 4', 'folie' ),
		'option-5' => esc_attr__( 'Option 5', 'folie' ),
	),
) );

/**
 * Slider Control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'slider',
	'settings'    => 'slider_setting',
	'label'       => esc_attr__( 'Slider Control', 'folie' ),
	'description' => esc_attr__( 'The description here.', 'folie' ),
	'section'     => 'slider_section',
	'default'     => '10',
	'choices'     => array(
		'min'  => 0,
		'max'  => 20,
		'step' => 1,
		'suffix' => 'px',
	),
) );

/**
 * Sortable control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'sortable',
	'settings'    => 'sortable_setting',
	'label'       => esc_html__( 'This is a sortable control.', 'folie' ),
	'section'     => 'sortable_section',
	'default'     => array( 'option3', 'option1', 'option4' ),
	'choices'     => array(
		'option1' => esc_attr__( 'Option 1', 'folie' ),
		'option2' => esc_attr__( 'Option 2', 'folie' ),
		'option3' => esc_attr__( 'Option 3', 'folie' ),
		'option4' => esc_attr__( 'Option 4', 'folie' ),
		'option5' => esc_attr__( 'Option 5', 'folie' ),
		'option6' => esc_attr__( 'Option 6', 'folie' ),
	),
) );

/**
 * Switch control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'switch',
	'settings'    => 'switch_setting',
	'label'       => esc_attr__( 'Switch Control', 'folie' ),
	'description' => esc_attr__( 'Description', 'folie' ),
	'section'     => 'switch_section',
	'default'     => true,
) );

/**
 * Toggle control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'toggle',
	'settings'    => 'toggle_setting',
	'label'       => esc_attr__( 'Toggle Control', 'folie' ),
	'description' => esc_attr__( 'Description', 'folie' ),
	'section'     => 'toggle_section',
	'default'     => true,
) );

/**
 * Typography Control.
 */
Kirki::add_field( 'kirki_demo', array(
	'type'        => 'typography',
	'settings'    => 'typography_setting_0',
	'label'       => esc_attr__( 'Typography Control Label', 'folie' ),
	'description' => esc_attr__( 'The full set of options.', 'folie' ),
	'section'     => 'typography_section',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left',
	),
	'priority'    => 10,
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'typography',
	'settings'    => 'typography_setting_1',
	'label'       => esc_attr__( 'Typography Control Label', 'folie' ),
	'description' => esc_attr__( 'Just the font-family.', 'folie' ),
	'section'     => 'typography_section',
	'default'     => array(
		'font-family'    => 'Roboto',
	),
) );

Kirki::add_field( 'kirki_demo', array(
	'type'        => 'typography',
	'settings'    => 'typography_setting_2',
	'label'       => esc_attr__( 'Typography Control Label', 'folie' ),
	'description' => esc_attr__( 'Only font-size, line-height, letter-spacing and color.', 'folie' ),
	'section'     => 'typography_section',
	'default'     => array(
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#333333',
	),
) );

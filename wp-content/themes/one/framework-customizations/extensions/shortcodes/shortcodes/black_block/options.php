<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

'background_color' => array(
'label' => __('Center background Color', 'fw'),
'type'  => 'color-picker',
),

'bottom_background_color' => array(
'label' => __('Left and right background Color', 'fw'),
'type'  => 'color-picker',
),

'title' => array(
'type'   => 'wp-editor',
'attr'  => array( 'class' => 'custom-class unyson_wp_editor', 'data-foo' => 'bar' ),
'label'  => __( 'Title', 'fw' ),
'shortcodes' => false,
'size' => 'large'
),

'text' => array(
'type'   => 'wp-editor',
'attr'  => array( 'class' => 'custom-class unyson_wp_editor', 'data-foo' => 'bar' ),
'label'  => __( 'Text', 'fw' ),
'shortcodes' => false,
'size' => 'large'
),

'max_width_center_container' => array(
'type'  => 'text',
'value' => '',
'label' => __('center container max width', '{domain}'),
'desc'  => __('44px, 50%, ...', 'fw'),
),


'margin_top' => array(
'type'  => 'text',
'value' => '0',
'label' => __('margin-top', '{domain}'),
'desc'  => __('0, 44px, ...', 'fw'),
),

'margin_bottom' => array(
'type'  => 'text',
'value' => '0',
'label' => __('margin-bottom', '{domain}'),
'desc'  => __('0, 44px, ...', 'fw')
),

'm_margin_top' => array(
'type'  => 'text',
'value' => '0',
'label' => __('mobile margin-top', '{domain}'),
'desc'  => __('0, 44px, ...', 'fw')
),

'm_margin_bottom' => array(
'type'  => 'text',
'value' => '0',
'label' => __('mobile margin-bottom', '{domain}'),
'desc'  => __('0, 44px, ...', 'fw')
),

'padding' => array(
'type'  => 'text',
'value' => '0',
'label' => __('padding', '{domain}'),
'desc'  => __('example -> 10px 20px 0 1%, 10px', 'fw'),
),

'class' => array(
'type'  => 'text',
'value' => '',
'label' => __('class', '{domain}'),
'desc'  => __('custom class', 'fw')
),

'animated' => array(
'type'  => 'text',
'value' => '',
'label' => __('Animated', '{domain}'),
'desc'  => __('fadeInRightBig, zoomIn, .. other -> https://github.com/daneden/animate.css', 'fw'),
)
);

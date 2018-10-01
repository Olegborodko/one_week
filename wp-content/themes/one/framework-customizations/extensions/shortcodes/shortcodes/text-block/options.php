<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text' => array(
		'type'   => 'wp-editor',
    'attr'  => array( 'class' => 'custom-class unyson_wp_editor', 'data-foo' => 'bar' ),
		'label'  => __( 'Content', 'fw' ),
		'desc'   => __( 'Enter some content for this texblock', 'fw' ),
    'shortcodes' => true,
    'size' => 'large'
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

'padding_mobile' => array(
'type'  => 'text',
'value' => '0',
'label' => __('padding mobile', '{domain}'),
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

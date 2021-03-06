<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

'title' => array(
'type'   => 'wp-editor',
'attr'  => array( 'class' => 'custom-class unyson_wp_editor', 'data-foo' => 'bar' ),
'label'  => __( 'Title', 'fw' ),
'shortcodes' => false,
'size' => 'large'
),

'image' => array(
'type'  => 'upload',
'label' => __('image', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'text' => array(
'type'   => 'wp-editor',
'attr'  => array( 'class' => 'custom-class unyson_wp_editor', 'data-foo' => 'bar' ),
'label'  => __( 'Content', 'fw' ),
'desc'   => __( 'Enter some content for this text-block', 'fw' ),
'shortcodes' => false,
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

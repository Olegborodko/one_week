<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

'image' => array(
'type'  => 'upload',
'label' => __('image', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'background' => array(
'type'  => 'upload',
'label' => __('background', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'background_mobile' => array(
'label' => __('Background display on mobile', 'fw'),
'type'  => 'switch',
'value' => 'yes',
'left-choice' => array(
'value' => 'yes',
'label' => __('YES', 'fw')
),
'right-choice' => array(
'value' => 'no',
'label' => __('NO', 'fw'),
)
),

'title' => array(
'type'   => 'wp-editor',
'attr'  => array( 'class' => 'custom-class unyson_wp_editor', 'data-foo' => 'bar' ),
'label'  => __( 'Title', 'fw' ),
'shortcodes' => false,
'size' => 'large'
),

'content_1' => array(
'type'   => 'wp-editor',
'attr'  => array( 'class' => 'custom-class unyson_wp_editor', 'data-foo' => 'bar' ),
'label'  => __( 'Content 1', 'fw' ),
'desc'   => __( 'Enter some content for this text-block', 'fw' ),
'shortcodes' => false,
'size' => 'large'
),

'button_title1' => array(
'type'  => 'text',
'value' => '',
'label' => __('button title 1', '{domain}'),
'desc'  => __('mare information', 'fw'),
),

'button_url1' => array(
'type'  => 'text',
'value' => '',
'label' => __('button url 1', '{domain}'),
'desc'  => __('http://google.com', 'fw'),
),

'button_title2' => array(
'type'  => 'text',
'value' => '',
'label' => __('button title 2', '{domain}'),
'desc'  => __('mare information', 'fw'),
),

'button_url2' => array(
'type'  => 'text',
'value' => '',
'label' => __('button url 2', '{domain}'),
'desc'  => __('http://google.com', 'fw'),
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

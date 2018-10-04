<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

'name' => array(
'type'  => 'text',
'value' => '',
'label' => __('name', '{domain}'),
'desc'  => __('Jeff Harbach, ...', 'fw'),
),

'profession' => array(
'type'  => 'text',
'value' => '',
'label' => __('profession', '{domain}'),
'desc'  => __('President & CEO, ...', 'fw'),
),

'link' => array(
'type'  => 'text',
'value' => '',
'label' => __('link url', '{domain}'),
'desc'  => __('https://www.linkedin.com/feed/example, ...', 'fw'),
),

'image' => array(
'type'  => 'upload',
'label' => __('image', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
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

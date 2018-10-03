<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
  'section_title' => array(
  'type' => 'text',
  'label' => __('Sorting title', 'fw'),
  'value' => '',
  'desc' => __('Section with photo', 'fw')
  ),
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'fw'),
		'type'         => 'switch',
	),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
  'background_repeat' => array(
    'label' => __('Background repeat', 'fw'),
    'type'  => 'switch',
  ),
  'background_position' => array(
    'label' => __('Background position Y X', 'fw'),
    'desc'  => __('bottom left, center center, top right, 10px 10px, calc(100% - 20px) 20%', 'fw'),
    'type'  => 'text'
  ),
  'background_mobile' => array(
  'label' => __('Background display on mobile', 'fw'),
  'type'  => 'switch',
  'value' => 'yes',
  'left-choice' => array(
  'value' => 'yes',
  'label' => __('YES', 'fw'),
  ),
  'right-choice' => array(
  'value' => 'no',
  'label' => __('NO', 'fw'),
  )
  ),
	'video' => array(
		'label' => __('Background Video', 'fw'),
		'desc'  => __('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
	),
  'id' => array(
    'label' => __('id', 'fw'),
    'desc'  => __('Insert id', 'fw'),
    'type'  => 'text',
  ),
  'class' => array(
    'label' => __('class', 'fw'),
    'desc'  => __('Insert class', 'fw'),
    'type'  => 'text',
  ),
  'container_class' => array(
    'label' => __('Container class', 'fw'),
    'desc'  => __('Insert container class', 'fw'),
    'type'  => 'text',
  ),
  'margin_top' => array(
  'type'  => 'text',
  'value' => '0',
  'label' => __('margin-top', '{domain}'),
  'desc'  => __('0, 22px, ...', 'fw'),
  ),
  'margin_bottom' => array(
  'type'  => 'text',
  'value' => '0',
  'label' => __('margin-bottom', '{domain}'),
  'desc'  => __('0, 31px, ...', 'fw'),
  ),
'm_margin_top' => array(
'type'  => 'text',
'value' => '80px',
'label' => __('mobile margin-top', '{domain}'),
'desc'  => __('0, 31px, ...', 'fw')
),

'm_margin_bottom' => array(
'type'  => 'text',
'value' => '0',
'label' => __('mobile margin-bottom', '{domain}'),
'desc'  => __('0, 44px, ...', 'fw')
),

  'is_mobile_display' => array(
  'label' => __('Mobile display', 'fw'),
  'type'  => 'switch',
  'value' => 'yes',
  'left-choice' => array(
  'value' => 'yes',
  'label' => __('YES', 'fw'),
  ),
  'right-choice' => array(
  'value' => 'no',
  'label' => __('NO', 'fw'),
  )
  ),

'section_max_width' => array(
'type'  => 'text',
'value' => '',
'label' => __('max width', '{domain}'),
'desc'  => __('empty == 100% without padding', 'fw'),
),

  'animated' => array(
  'type'  => 'text',
  'value' => '',
  'label' => __('Animated', '{domain}'),
  'desc'  => __('fadeInUp, zoomIn, .. other -> https://github.com/daneden/animate.css', 'fw'),
  )
);

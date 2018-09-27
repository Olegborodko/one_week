<?php if (!defined('FW')) die('Forbidden');

$cfg = array(
'page_builder' => array(
'tab'         => __('Layout Elements', 'fw'),
'title'       => __('Section', 'fw'),
'title_template' => '{{ if (o.section_title) { }} <strong>{{= o.section_title}}</strong>{{ } }}',
'description' => __('Add a Section', 'fw'),
'popup_size'  => 'large',
'type'        => 'section' // WARNING: Do not edit this
)
);
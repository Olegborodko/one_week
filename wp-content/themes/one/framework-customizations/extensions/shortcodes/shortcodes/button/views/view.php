<?php if (!defined('FW')) {
  die('Forbidden');
}

$text = '';
if ( ! empty( $atts['text'] ) ) {
  $text = $atts['text'];
}

$link = '';
if ( ! empty( $atts['link'] ) ) {
  $link = $atts['link'];
}

$mobile_align = '';
if ($atts['mobile_align']=='yes') {
  $mobile_align = ' g_mobile_align_center';
}

$margin_top = '0';
if ( ! empty( $atts['margin_top'] ) ) {
  $margin_top = esc_attr($atts['margin_top']);
}

$margin_bottom = '0';
if ( ! empty( $atts['margin_bottom'] ) ) {
  $margin_bottom = esc_attr($atts['margin_bottom']);
}

$m_margin_top = '0';
if ( ! empty( $atts['m_margin_top'] ) ) {
  $m_margin_top = esc_attr($atts['m_margin_top']);
}

$m_margin_bottom = '0';
if ( ! empty( $atts['m_margin_bottom'] ) ) {
  $m_margin_bottom = esc_attr($atts['m_margin_bottom']);
}

$padding = '0';
if ( ! empty( $atts['padding'] ) ) {
  $padding =  esc_attr($atts['padding']);
}

$animated = '';
if ( ! empty( $atts['animated'] ) ) {
  $animated = esc_attr($atts['animated']);
}

$align = '';
if ( ! empty( $atts['align'] ) ) {
  $align = esc_attr($atts['align']);
}

?>

<div class="animated custom_button js_mobile_margin <?=$mobile_align?>"
     data-animated="<?=$animated?>"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     style="margin-top: <?= $margin_top ?>;
            margin-bottom: <?= $margin_bottom ?>;
            text-align: <?= $align ?>">
<a href="<?=$link?>" class="custom_button__a">
  <?=$text?>
</a>
</div>


<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
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

$class = '';
if ( ! empty( $atts['class'] ) ) {
  $class = esc_attr($atts['class']);
}

$padding = '0';
if ( ! empty( $atts['padding'] ) ) {
  $padding =  esc_attr($atts['padding']);
}

$animated = '';
if ( ! empty( $atts['animated'] ) ) {
  $animated = esc_attr($atts['animated']);
}

$image = '';
if ( !empty( $atts['image'] ) && !empty($atts['image']['url']) ) {
  $image = esc_attr($atts['image']['url']);
}

$background = '';
if ( !empty( $atts['background'] ) && !empty($atts['background']['url']) ) {
  $background = esc_attr($atts['background']['url']);
}

$background_mobile = '';
if ( !empty( $atts['background_mobile'] )) {
  $background_mobile = esc_attr($atts['background_mobile']);
  if ($background_mobile == "no"){
    $background_mobile = 'mobile_background_display_none';
  }
}

?>

<div data-animated="<?=$animated?>"
     class="img_with_backg js_mobile_margin <?=$class?>"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     style="margin-top: <?=$margin_top?>;
     margin-bottom: <?=$margin_bottom?>;
     padding:<?=$padding?>;">
	<div class="img_with_backg__block <?=$background_mobile?>" style="background-image:url(<?=$background?>);">
    <div class="img_with_backg__shadow"></div>
    <img class="img_with_backg__img" src="<?=$image?>"/>
 </div>
</div>
	
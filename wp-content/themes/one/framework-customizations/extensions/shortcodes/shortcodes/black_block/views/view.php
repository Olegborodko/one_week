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

$background_color = '';
if ( ! empty( $atts['background_color'] ) ) {
  $background_color = esc_attr($atts['background_color']);
}

$bottom_background_color = '';
if ( ! empty( $atts['bottom_background_color'] ) ) {
  $bottom_background_color = esc_attr($atts['bottom_background_color']);
}

$max_width_center_container = '100%';
if ( ! empty( $atts['max_width_center_container'] ) ) {
  $max_width_center_container =  esc_attr($atts['max_width_center_container']);
}

?>

<div data-animated="<?=$animated?>"
     class="animated black_block js_mobile_margin <?=$class?>"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     style="margin-top: <?=$margin_top?>;
     margin-bottom: <?=$margin_bottom?>;
     padding:<?=$padding?>;">
  <div class="black_block__item">
    <div class="black_block__left">
      <div class="black_block__bottom"
           style="background-color:<?=$bottom_background_color?>">
      </div>
    </div>
    <div class="black_block__center" style="background-color:<?=$background_color?>;
                max-width:<?=$max_width_center_container?>">
      <div class="black_block__title">
        <?=$atts['title']?>
      </div>
      <div class="black_block__text">
        <?=$atts['text']?>
      </div>
    </div>
    <div class="black_block__right">
      <div class="black_block__bottom"
           style="background-color:<?=$bottom_background_color?>">
      </div>
    </div>
  </div>
</div>
	
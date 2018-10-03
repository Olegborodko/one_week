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

$animated = '';
if ( ! empty( $atts['animated'] ) ) {
  $animated = esc_attr($atts['animated']);
}

$image = '';
if ( !empty( $atts['image'] ) && !empty($atts['image']['url']) ) {
  $image = esc_attr($atts['image']['url']);
}

?>

<div data-animated="<?=$animated?>"
     class="are_building js_mobile_margin <?=$class?>"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     style="margin-top: <?=$margin_top?>;
     margin-bottom: <?=$margin_bottom?>;">
  <div class="are_building__container">
    <div class="are_building__left">
      <div class="title"><?=$atts['title']?></div>
      <div class="are_building__description">
        <?=$atts['text']?>
      </div>
    </div>
    <div class="are_building__right">
      <img src="<?=$image?>"/>
    </div>
  </div>
</div>
	
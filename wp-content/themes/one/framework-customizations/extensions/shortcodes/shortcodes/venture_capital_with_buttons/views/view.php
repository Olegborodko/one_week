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

$button_title1 = '';
if ( ! empty( $atts['button_title1'] ) ) {
  $button_title1 = esc_attr($atts['button_title1']);
}

$button_title2 = '';
if ( ! empty( $atts['button_title2'] ) ) {
  $button_title2 = esc_attr($atts['button_title2']);
}

$button_url2 = '';
if ( ! empty( $atts['button_url2'] ) ) {
  $button_url2 = esc_attr($atts['button_url2']);
}

$button_url1 = '';
if ( ! empty( $atts['button_url1'] ) ) {
  $button_url1 = esc_attr($atts['button_url1']);
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
     class="animated venture_capital js_mobile_margin <?=$class?>"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     style="margin-top: <?=$margin_top?>;
     margin-bottom: <?=$margin_bottom?>;">
  <div class="venture_capital__block <?=$background_mobile?>" style="background-image:url(<?=$background?>);">
    <div class="venture_capital__title">
      <?=$atts['title']?>
    </div>
    <div class="venture_capital__block2">
      <div class="venture_capital__left">
        <img class="venture_capital__image" src="<?=$image?>"/>
      </div>
      <div class="venture_capital__right">
        <div class="venture_capital__black_block"></div>
        <div class="venture_capital__content_1">
          <?=$atts['content_1']?>
        </div>
        <div class="venture_capital__content_2 venture_capital_with_buttons__content_2">
          <a href="<?=$button_url1?>" class="custom_button__a venture_capital_with_buttons__button1">
            <?=$button_title1?>
          </a>

          <a href="<?=$button_url2?>" class="custom_button__a venture_capital_with_buttons__button2">
            <?=$button_title2?>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
	
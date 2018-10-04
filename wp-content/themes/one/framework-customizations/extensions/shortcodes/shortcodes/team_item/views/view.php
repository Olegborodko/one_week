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

$name = '';
if ( ! empty( $atts['name'] ) ) {
  $name = esc_attr($atts['name']);
}

$profession = '';
if ( ! empty( $atts['profession'] ) ) {
  $profession = esc_attr($atts['profession']);
}

$link = '';
if ( ! empty( $atts['link'] ) ) {
  $link = esc_attr($atts['link']);
}

?>

<div data-animated="<?=$animated?>"
     class="animated team_item js_mobile_margin <?=$class?>"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     style="margin-top: <?=$margin_top?>;
     margin-bottom: <?=$margin_bottom?>;">
	<a href="<?=$link?>" target="_blank" class="team_item__block">
   <img class="team_item__img" src="<?=$image?>"/>
   <div class="team_item__dots"></div>
   <div class="team_item__description">
    <div class="team_item__name">
      <?=$name?>
    </div>
     <div class="team_item__profession">
       <?=$profession?>
     </div>
   </div>
 </a>
</div>
	
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

$padding_mobile = '0';
if ( ! empty( $atts['padding_mobile'] ) ) {
  $padding_mobile =  esc_attr($atts['padding_mobile']);
}

$animated = '';
if ( ! empty( $atts['animated'] ) ) {
  $animated = esc_attr($atts['animated']);
}

$max_width = '100%';
if ( ! empty( $atts['max_width'] ) ) {
  $max_width =  esc_attr($atts['max_width']);
}

if ( ! empty( $atts['additional_classes'] ) ) {
  $class = $class . ' ' . esc_attr($atts['additional_classes']);
}

?>

<div data-animated="<?=$animated?>"
     data-m-padding="<?=$padding_mobile?>"
     class="animated g_text js_mobile_margin unyson_wp_editor <?=$class?>"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     style="margin-top: <?= $margin_top ?>;
     margin-bottom: <?= $margin_bottom ?>;
     padding:<?=$padding?>;
     max-width:<?=$max_width?>;">
	<?php echo do_shortcode( $atts['text'] ); ?>
</div>
	
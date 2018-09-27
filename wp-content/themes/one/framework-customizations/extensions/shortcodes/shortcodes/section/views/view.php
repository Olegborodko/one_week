<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . esc_attr($atts['background_color']) . ';';
}

$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . esc_attr($atts['background_image']['data']['icon']) . ');';
}

$margin_top = 0;
if ( ! empty( $atts['margin_top'] ) ) {
  $margin_top = esc_attr($atts['margin_top']);
}

$margin_bottom = 0;
if ( ! empty( $atts['margin_bottom'] ) ) {
  $margin_bottom = esc_attr($atts['margin_bottom']);
}

$bg_video_data_attr    = '';
$section_extra_classes = '';
if ( ! empty( $atts['video'] ) ) {
	$filetype           = wp_check_filetype( $atts['video'] );
	$filetypes          = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );
	$filetype           = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';
	$data_name_attr = version_compare( fw_ext('shortcodes')->manifest->get_version(), '1.3.9', '>=' ) ? 'data-background-options' : 'data-wallpaper-options';
	$bg_video_data_attr = $data_name_attr.'="' . fw_htmlspecialchars( json_encode( array( 'source' => array( $filetype => $atts['video'] ) ) ) ) . '"';
	$section_extra_classes .= ' background-video';
}

//$section_style   = ( $bg_color || $bg_image ) ? 'style="' . esc_attr($bg_color . $bg_image) . '"' : '';
$container_class = ( isset( $atts['is_fullwidth'] ) && $atts['is_fullwidth'] ) ? 'fw-container-fluid' : 'fw-container';

if ( ! empty( $atts['class'] ) ) {
  $section_extra_classes .= esc_attr($atts['class']);
}

$animated = '';
if ( ! empty( $atts['animated'] ) ) {
  $animated = esc_attr($atts['animated']);
}

$id = '';
if ( ! empty( $atts['id'] ) ) {
  $id = esc_attr($atts['id']);
}


if ( ! empty( $atts['container_class'] ) ) {
  $container_class .= ' ' . esc_attr($atts['container_class']);
}

if ( isset( $atts['is_mobile_display'] ) && $atts['is_mobile_display'] ) {
  if ($atts['is_mobile_display']=='no') {
    $section_extra_classes .= ' g_mobile_display_none';
  }
}

$container_style = '';
if ( isset( $atts['background_repeat'] ) && $atts['background_repeat'] ) {
  $container_style .= ' background-repeat:repeat;';
}else{
  $container_style .= ' background-repeat:no-repeat;';
}

if ( ! empty( $atts['background_position'] ) ) {
  $container_style .= 'background-position:'.esc_attr($atts['background_position']).';';
}

$container_style .= $bg_color;
$container_style .= $bg_image;


if ( isset( $atts['background_mobile'] ) && $atts['background_mobile'] ) {
  if ($atts['background_mobile']=='no'){
    $container_class .= ' mobile-background-display-none';
  }
}

$section_max_width = '';
if ( ! empty( $atts['section_max_width'] ) ) {
  $section_max_width = 'class="fw-container" style="max-width:'.esc_attr($atts['section_max_width']).'"';
}

$m_margin_top = 0;
if ( ! empty( $atts['m_margin_top'] ) ) {
  $m_margin_top = esc_attr($atts['m_margin_top']);
}

$m_margin_bottom = 0;
if ( ! empty( $atts['m_margin_bottom'] ) ) {
  $m_margin_bottom = esc_attr($atts['m_margin_bottom']);
}

?>
<section data-animated="<?=$animated?>"
         data-m-top="<?=$m_margin_top?>"
         data-m-bottom="<?=$m_margin_bottom?>"
         id="<?= esc_attr($id) ?>"
         class="animated js_mobile_margin fw-main-row <?php echo esc_attr($section_extra_classes) ?>"
         <?php echo $bg_video_data_attr; ?>
         style="margin-top: <?= $margin_top ?>; margin-bottom: <?= $margin_bottom ?>;" >
  
	<div style="<?=$container_style?>" class="<?php echo esc_attr($container_class); ?>">

  <div <?=$section_max_width?>>
		  <?php echo do_shortcode( $content ); ?>
  </div>

	</div>
</section>

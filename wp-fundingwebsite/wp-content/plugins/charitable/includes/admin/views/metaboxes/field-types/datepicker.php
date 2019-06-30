<?php
/**
 * Display datepicker field.
 *
 * @author    Eric Daams
 * @package   Charitable/Admin Views/Metaboxes
 * @copyright Copyright (c) 2019, Studio 164a
 * @since     1.5.0
 * @version   1.6.8
 */

if ( ! array_key_exists( 'form_view', $view_args ) || ! $view_args['form_view']->field_has_required_args( $view_args ) ) {
	return;
}

$date = array_key_exists( 'value', $view_args ) ? 'data-date="' . esc_attr( $view_args['value'] ) . '"' : '';

?>
<div id="<?php echo esc_attr( $view_args['wrapper_id'] ); ?>" class="<?php echo esc_attr( $view_args['wrapper_class'] ); ?>" <?php echo charitable_get_arbitrary_attributes( $view_args ); ?>>
	<?php if ( isset( $view_args['label'] ) ) : ?>
		<label for="<?php echo esc_attr( $view_args['id'] ); ?>"><?php echo esc_html( $view_args['label'] ); ?></label>
	<?php endif ?>
	<input type="text" id="<?php echo esc_attr( $view_args['id'] ); ?>" name="<?php echo esc_attr( $view_args['key'] ); ?>" class="charitable-datepicker"  tabindex="<?php echo esc_attr( $view_args['tabindex'] ); ?>" <?php echo $date ?> />
	<?php if ( isset( $view_args['description'] ) ) : ?>
		<span class="charitable-helper"><?php echo esc_html( $view_args['description'] ); ?></span>
	<?php endif ?>
</div><!-- #<?php echo $view_args['wrapper_id']; ?> -->
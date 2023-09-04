<?php
/**
 * Override Gravity Forms "Disable Print Scripts" setting to prevent missing jQuery error.
 *
 * @return $instance
 */
function siteorigin_gravity_forms_override_disable_print_scripts( $instance, $the_widget, $widget_class ) {
	if (
		! empty( $the_widget ) &&
		is_object( $the_widget ) &&
		$the_widget->id_base == 'gform_widget'
	) {
		$instance['disable_scripts'] = true;

		// Disable print scripts for older versions of Gravity Forms.
		add_filter( 'gform_disable_print_form_scripts', '__return_true' );
	}

	return $instance;
}
add_filter( 'siteorigin_panels_widget_instance', 'siteorigin_gravity_forms_override_disable_print_scripts', 10, 3 );

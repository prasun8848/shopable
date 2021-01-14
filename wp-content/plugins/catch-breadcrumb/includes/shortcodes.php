<?php
/**
 *
 *
 * @link        https://catchplugins.com/plugins
 * @since      1.0.0
 *
 * @package    breadcrumb
 * @subpackage Breadcrumb/includes
 */

/**
 *
 *
 * @package    Breadcrumb
 * @subpackage Breadcrumb/includes
 * @author     Catch Plugins <info@catchplugins.com
 */


class Catch_Breadcrumb_Shortcode {

	public function __construct() {

		add_shortcode( 'catch-breadcrumb', array( $this, 'catch_breadcrumb_shortcode' ) );

	}

	public function catch_display_breadcrumb() {

		do_shortcode( '[catch-breadcrumb]' );

	}

	public function catch_breadcrumb_shortcode( $atts, $content ) {

		$catch_breadcrumb_public = new Catch_Breadcrumb_Public( CATCH_BREADCRUMB_BASENAME, CATCH_BREADCRUMB_VERSION );
		$breadcrumb              = $catch_breadcrumb_public->build_breadcrumb();
		echo wp_kses_post( $breadcrumb );

	}

}

new Catch_Breadcrumb_Shortcode();

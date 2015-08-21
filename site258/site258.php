<?php
/**
 * Plugin Name: Site258 Functionality
 * Plugin URI: https://github.com/trsenna/gaboo-skeleton
 * Description: Unique and specific functionality needed for the current website.
 *
 * Version: 0.1.0
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * @package   Site258Functionality
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2015, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

add_action( 'gaboo_back_compat_safe', 'site258_safe_includes' );
add_action( 'gaboo_back_compat_safe', 'site258_safe_bootstrap' );
add_action( 'gaboo_back_compat_safe', 'site258_safe_themes' );

/**
 * Safely continues
 * ... with includes needed by the plugin
 */
function site258_safe_includes()
{
    require_once( 'functionality/public/class-site258-assets.php' );
    require_once( 'functionality/public/class-site258-shortcodes.php' );
}

/**
 * Safely continues
 * ... with the plugin bootstrap
 */
function site258_safe_bootstrap()
{
    __gaboo_plugins_loaded( new Site258_Assets() );
    __gaboo_plugins_loaded( new Site258_Shortcodes() );
}

/**
 * Safely register
 * ... themes for the current website.
 */
function site258_safe_themes()
{
    $base_directory = untrailingslashit( dirname( __FILE__ ) );
    register_theme_directory( "{$base_directory}/themes" );
}
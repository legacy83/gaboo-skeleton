<?php

/**
 * Class Twenty15_Assets
 */
final class Twenty15_Assets
{
    function __after_setup_theme()
    {
        add_action( 'wp_enqueue_scripts', function () {

            // dequeue fonts and styles
            wp_dequeue_style( 'twentyfifteen-fonts' );
            wp_dequeue_style( 'twentyfifteen-style' );
            wp_dequeue_style( 'twentyfifteen-ie' );
            wp_dequeue_style( 'twentyfifteen-ie7' );

            $this->register_fonts();
            $this->register_styles();

            wp_enqueue_style( 'twenty15-fonts' );
            wp_enqueue_style( 'twenty15-base' );
            wp_enqueue_style( 'twenty15-main' );
            wp_enqueue_style( 'twentyfifteen-style' );

        } );
    }

    /**
     * Register Fonts
     */
    function register_fonts()
    {
        $google_fonts = new Gaboo_Core_Google_Fonts();
        $google_fonts->family(
            'Noto Sans:400italic,700italic,400,700',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Noto Sans, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Noto Sans font: on or off', 'twenty15' )
        );
        $google_fonts->family(
            'Noto Serif:400italic,700italic,400,700',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Noto Serif, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Noto Serif font: on or off', 'twenty15' )
        );
        $google_fonts->family(
            'Inconsolata:400,700',
            /*
             * Translators: If there are characters in your language that are not supported
             * by Inconsolata, translate this to 'off'. Do not translate into your own language.
             */
            _x( 'on', 'Inconsolata font: on or off', 'twenty15' )
        );

        wp_register_style( 'twenty15-fonts', $google_fonts->url() );
    }

    /**
     * Register Styles
     */
    function register_styles()
    {
        $template_uri = untrailingslashit( get_template_directory_uri() );
        $stylesheet_uri = untrailingslashit( get_stylesheet_directory_uri() );
        wp_register_style( 'twenty15-parent', "{$template_uri}/style.css" );
        wp_register_style( 'twenty15-base', "{$stylesheet_uri}/library/assets/css/base.css", array( 'twenty15-parent' ) );
        wp_register_style( 'twenty15-main', "{$stylesheet_uri}/library/assets/css/main.css" );
    }

}
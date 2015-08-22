<?php

/**
 * Class Site258_Assets
 */
final class Site258_Assets extends Gaboo_Assets
{
    function __plugins_loaded()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
    }

    /**
     * Enqueue styles needed by the current website.
     */
    function enqueue_styles()
    {
        $this->enqueue_style( 'pure-grids' );
        $this->enqueue_style( 'pure-grids-responsive' );
    }

}
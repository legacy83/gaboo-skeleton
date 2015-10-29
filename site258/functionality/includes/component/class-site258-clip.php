<?php

/**
 * Class Site258_Clip
 */
final class Site258_Clip extends Gaboo_Clip
{
    /**
     * Locate the template
     *
     * @param $template
     *
     * @return bool|string
     */
    protected function locate_template( $template )
    {
        $templates_path = plugin_dir_path( dirname( __DIR__ ) );
        $templates_path = trailingslashit( "{$templates_path}templates" );

        if ( file_exists( "{$templates_path}{$template}.php" ) ) {
            $located = "{$templates_path}{$template}.php";
        }

        return isset( $located ) ? $located : FALSE;
    }
}
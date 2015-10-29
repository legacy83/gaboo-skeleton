<?php

/**
 * Class Site258_Shortcodes
 */
final class Site258_Shortcodes
{
    public function __plugins_loaded()
    {
        add_shortcode( 'hello', array( $this, 'hello' ) );
        add_shortcode( 'sticky-posts', array( $this, 'sticky_posts' ) );
    }

    /**
     * Hello World
     *
     * @return mixed
     */
    public function hello()
    {
        $clip = new Site258_Clip();
        return $clip->render( 'shortcodes/hello', array(
            'message' => 'World'
        ) );
    }

    /**
     * Sticky Posts
     *
     * @return string
     */
    public function sticky_posts()
    {
        $sticky_posts = get_option( 'sticky_posts' );
        $the_query = new WP_Query( array(
            'posts_per_page' => 6,
            'post__in' => $sticky_posts,
            'ignore_sticky_posts' => 1
        ) );

        $clip = new Site258_Clip();
        return $clip->render_query( 'sticky-posts', $the_query, array(
            'sticky_posts' => $sticky_posts
        ) );
    }
}
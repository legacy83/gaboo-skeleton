<?php
/**
 * (To women begging the king to spare their lives) "Ha-ha these humans are
 * definitely foolish creatures. Think as hard as those weak brains of
 * yours can manage. Do you humans ever listen to the cries of mercy coming
 * from pigs and cows you slaughter?" ~ Meruem | Hunter x Hunter
 *
 * This is your theme's `functions.php` file.  It's a dangerous but really powerful tool.  It essentially
 * gives you the power of a plugin developer from within the confines of a theme.  Use this feature
 * wisely, please.
 *
 * @package    Twenty15
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2015, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/*
 * Turn on the lights
 * ... and bootstrap the theme
 */

require_once( 'includes/class-twenty15.php' );
require_once( 'includes/class-twenty15-assets.php' );

__gaboo_after_setup_theme( new Twenty15() );
__gaboo_after_setup_theme( new Twenty15_Assets() );
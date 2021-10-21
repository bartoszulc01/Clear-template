<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Includes
 * ------------------------------------------------------------------------
 * The `function.php` file is should responsible only for including theme's
 * components. Your theme custom logic should be distributed
 * across separate files in the `/src` directory.
 */
// general
require_once 'src/comments-off.php';
require_once 'src/styles.php';
require_once 'src/scripts.php';
require_once 'src/navs.php';
require_once 'src/supports.php';
require_once 'src/thumbnails.php';
require_once 'src/svg.php';
// additional
require_once 'src/acf.php';
require_once 'src/utilities.php';
require_once 'src/disable-emoji.php';


// disable default dashboard widgets and unnecessary code
require_once 'src/clean.php';

// Remove <p> and <br/> from Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');


function add_image_class($class){
    $class .= ' img-fluid';
    return $class;
}
add_filter('get_image_tag_class','add_image_class');
	




  
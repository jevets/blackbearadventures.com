<?php
/**
 * Custom functions
 */

// Favicon
add_action('wp_head', 'bba_favicon', 10);
function bba_favicon() {
?>
<link rel="icon" href="/favicon.ico"><link rel="shortcut icon" href="/favicon.ico">
<?php
}


// Hide acf interface from wp-admin
// define( 'ACF_LITE', true );

// Include acf plugin core
include_once(dirname(__FILE__).'/advanced-custom-fields/acf.php');

// Enable add-ons
// acf-repeater
add_action('acf/register_fields', 'acf_register_repeater_field');
include_once(dirname(__FILE__).'/acf-repeater/repeater.php');
// acf-gallery
add_action('acf/register_fields', 'acfgp_register_fields');
include_once(dirname(__FILE__).'/acf-gallery/gallery.php');

// Include our theme's custom fields
include_once(dirname(__FILE__).'/acf.php');
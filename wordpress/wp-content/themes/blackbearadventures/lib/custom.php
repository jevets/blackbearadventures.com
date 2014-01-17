<?php
/**
 * Custom functions
 */

// Hide acf interface from wp-admin
// define( 'ACF_LITE', true );

// Include acf plugin core
include_once(dirname(__FILE__).'/advanced-custom-fields/acf.php');

// Include our theme's custom fields
include_once(dirname(__FILE__).'/acf.php');
<?php

/**
 * Wordpress
 */
require(__DIR__ . '/functions/wordpress.php'); //! Reset default wordpress && add wordpress functions
require(__DIR__ . '/timber.php'); //! Include timber
require(__DIR__ . '/functions/include-scripts.php'); //! Enqueue scripts && styles
// require(__DIR__ . '/functions/ajax_handlers.php'); //! Ajax functions 

require(__DIR__ . '/functions/custom-post-types.php'); //! Register post type
require(__DIR__ . '/functions/breadcrumbs.php'); //! Breadcrumbs function
// require(__DIR__ . '/functions/pagination.php'); //! Pagination function
require(__DIR__ . '/functions/menu.php'); //! Register menus


/**
 * Plugins
 */
require(__DIR__ . '/functions/acf-functions.php'); //! Advenced Custom Fields functions -> easy taking fields
require(__DIR__ . '/functions/cf7.php'); //! CF7 functions
require(__DIR__ . '/functions/translations.php'); //! Multi language translations
// require(__DIR__ . '/functions/woocommerce.php'); //! Woocommerce functions







<?php
// ** Database settings ** //
define('DB_NAME', 'wordpress_database');
define('DB_USER', 'wordpress_user');
define('DB_PASSWORD', '190202');
define('DB_HOST', 'db'); // Tên dịch vụ Docker cho MySQL container

// ** Charset to use in creating database tables ** //
define('DB_CHARSET', 'utf8mb4');

// ** The database collate type ** //
define('DB_COLLATE', '');

// Authentication unique keys and salts. Generate these using the WordPress.org secret-key service.
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

// Database table prefix
$table_prefix = 'wp_';

// For developers: WordPress debugging mode
define('WP_DEBUG', false);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>

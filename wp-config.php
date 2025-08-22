<?php
// ===============================
// Simple .env loader (no Composer)
// ===============================
function load_env($path) {
    if (!file_exists($path)) {
        return;
    }
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue; // skip comments
        }
        if (strpos($line, '=') === false) {
            continue; // skip malformed lines
        }
        list($name, $value) = array_map('trim', explode('=', $line, 2));
        if (!array_key_exists($name, $_ENV)) {
            $_ENV[$name] = $value;
            putenv("$name=$value");
        }
    }
}

// Load .env file from project root
load_env(__DIR__ . '/.env');

// ===============================
// Database Settings
// ===============================
define('DB_NAME',     $_ENV['DB_NAME']);
define('DB_USER',     $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_HOST',     $_ENV['DB_HOST']);

define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

$table_prefix = 'ch_';

// ===============================
// Debug Mode (based on WP_ENV)
// ===============================
if (!empty($_ENV['WP_ENV']) && $_ENV['WP_ENV'] === 'local') {
    define('WP_DEBUG', true);
    define('WP_DEBUG_LOG', true);
    define('WP_DEBUG_DISPLAY', true);
} else {
    define('WP_DEBUG', false);
    define('WP_DEBUG_LOG', true);
    define('WP_DEBUG_DISPLAY', false);
}

// ===============================
// URLs (optional overrides)
// ===============================
if (!empty($_ENV['WP_HOME'])) {
    define('WP_HOME', $_ENV['WP_HOME']);
}
if (!empty($_ENV['WP_SITEURL'])) {
    define('WP_SITEURL', $_ENV['WP_SITEURL']);
}

// ===============================
// WordPress bootstrap
// ===============================
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}
require_once ABSPATH . 'wp-settings.php';

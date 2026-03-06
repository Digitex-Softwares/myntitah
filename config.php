<?php
/**
 * MYTINTAH - Global Business Directory & HCM
 * Core Configuration File
 */

// 1. Environment Setting (Set to 'production' when deploying to VPS)
define('APP_ENV', 'development'); 

if (APP_ENV === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// 2. Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'mytintah_db');
define('DB_USER', 'root'); // Change this on your VPS
define('DB_PASS', '');     // Use a strong password on your VPS

// 3. Site Metadata
define('SITE_NAME', 'MYTINTAH');
define('SITE_URL', 'http://localhost/adp-clone'); // Change to your domain (e.g., https://mytintah.com)
define('SALES_PHONE', '800-225-5237');
define('CONTACT_EMAIL', 'sales@mytintah.com');

// 4. Multi-tenancy / Branding
define('CURRENCY', 'KES'); // Kenyan Shilling (since you're building for the Kenyan/African market)
define('THEME_COLOR', '#2563eb'); // Blue-600

// 5. Autoloading / Path Helpers
define('ROOT_PATH', __DIR__);
define('INCLUDES_PATH', ROOT_PATH . '/includes');

// 6. Security - Session start
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Basic Database Connection using PDO
 * Used throughout the app via include 'config.php'
 */
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );
} catch (PDOException $e) {
    if (APP_ENV === 'development') {
        die("Database connection failed: " . $e->getMessage());
    } else {
        die("System Maintenance. Please try again later.");
    }
}

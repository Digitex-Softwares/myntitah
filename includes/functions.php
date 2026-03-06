<?php
/**
 * Sanitize User Input
 */
function clean($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

/**
 * Format Currency (USD)
 */
function format_money($amount) {
    return "KES " . number_format($amount, 2);
}

/**
 * Redirect Helper
 */
function redirect($path) {
    header("Location: " . SITE_URL . $path);
    exit();
}

/**
 * Check if Admin is logged in
 */
function is_admin() {
    return isset($_SESSION['admin_id']);
}

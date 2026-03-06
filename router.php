<?php
require_once 'config.php';

// Get the requested URI and strip the base path if necessary
$request = $_SERVER['REQUEST_URI'];
$base_path = '/adp-clone'; // Change this to '/' if deploying to the root of your domain
$uri = str_replace($base_path, '', $request);
$uri = parse_url($uri, PHP_URL_PATH);
$uri = rtrim($uri, '/');

// Define your Route Map
// Format: 'url-slug' => 'file-path'
$routes = [
    ''              => 'index.php',
    '/solutions'    => 'pages/solutions.php',
    '/pricing'      => 'pages/pricing.php',
    '/demo'         => 'pages/demo.php',
    '/contact'      => 'pages/contact.php',
    '/start'        => 'lead/questionnaire.php',
    '/admin'        => 'admin/dashboard.php',
    '/admin/leads'  => 'admin/leads.php',
    '/admin/login'  => 'admin/login.php'
];

// Check if route exists
if (array_key_key_exists($uri, $routes)) {
    require_once $routes[$uri];
} else {
    // 404 Not Found
    http_response_code(404);
    include 'pages/404.php'; // Make sure to create a simple 404 page
}

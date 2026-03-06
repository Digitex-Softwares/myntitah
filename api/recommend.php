<?php
header('Content-Type: application/json');
require_once '../config.php';
require_once '../includes/functions.php';

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit();
}

// Sanitize inputs
$size = clean($_POST['size'] ?? '1-49');
$interest = clean($_POST['interest'] ?? 'payroll');

// Recommendation Logic (The ADP Strategy)
$products = [
    '1-49' => [
        'name' => 'MYTINTAH Start',
        'description' => 'Perfect for small teams needing simple, automated payroll.',
        'cta' => '/start?size=1-49&interest=' . $interest,
        'features' => ['Direct Deposit', 'Tax Filing', 'Mobile App']
    ],
    '50-999' => [
        'name' => 'MYTINTAH Growth',
        'description' => 'Advanced HR tools and talent management for scaling businesses.',
        'cta' => '/start?size=50-999&interest=' . $interest,
        'features' => ['Recruiting Suite', 'Benefits Admin', 'Advanced Reporting']
    ],
    '1000+' => [
        'name' => 'MYTINTAH Enterprise',
        'description' => 'Full-scale Human Capital Management for global organizations.',
        'cta' => '/contact',
        'features' => ['Global Payroll', 'Strategic Analytics', 'Dedicated Support']
    ]
];

// Fallback to small business if size is unknown
$recommendation = $products[$size] ?? $products['1-49'];

echo json_encode($recommendation);

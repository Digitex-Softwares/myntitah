<?php
require_once '../config.php';
require_once '../includes/db.php';
require_once '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Sanitize Inputs using our clean() function from functions.php
    $first_name = clean($_POST['first_name']);
    $last_name  = clean($_POST['last_name']);
    $email      = clean($_POST['email']);
    $company    = clean($_POST['company']);
    $phone      = clean($_POST['phone']);
    $interest   = clean($_POST['interest']);
    $size       = clean($_POST['size']);

    // 2. Insert into the Database
    $sql = "INSERT INTO leads (first_name, last_name, email, company_name, phone, interest, employee_count) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $params = [$first_name, $last_name, $email, $company, $phone, $interest, $size];
    
    $success = db_query($sql, $params);

    if ($success) {
        // 3. Optional: Send Email Notification to Sales
        // mail(CONTACT_EMAIL, "New MYTINTAH Lead: $company", "Name: $first_name $last_name \nEmail: $email ...");

        // 4. Redirect to a Thank You page or Demo
        redirect('/demo?status=success');
    } else {
        // Handle Error
        die("Something went wrong. Please go back and try again.");
    }
} else {
    // Redirect if they try to access this file directly via GET
    redirect('/');
}

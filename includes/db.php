<?php
// This file acts as a wrapper for the PDO instance created in config.php
require_once __DIR__ . '/../config.php';

/**
 * Executes a safe SQL query using prepared statements
 */
function db_query($sql, $params = []) {
    global $pdo;
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    } catch (PDOException $e) {
        // Log error and stop in dev, show generic message in prod
        error_log($e->getMessage());
        return false;
    }
}

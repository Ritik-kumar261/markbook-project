<?php 
require_once __DIR__ . '/../vendor/autoload.php';  // Load Composer autoloader

use App\Database\Database;  // Use the correct namespace

$conn = Database::getInstance();  // Get database connection

if ($conn) {
    echo "✅ Database connected successfully!";
} else {
    echo "❌ Connection failed!";
}

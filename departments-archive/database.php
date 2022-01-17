<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'university');

// Connection

$conn = new mysqli (DB_HOST, DB_USER, DB_PASS, DB_NAME);

var_dump($conn);

// Check
if($conn->connect_error) {
    die('Connection failed.');
} else {
    echo 'DB Connection ok.';
}


<?php

require_once __DIR__ . '/database.php';

// Sql query
$sql = "SELECT *
        FROM `departments`"

$results = query($sql);

$departments = [];

if($results && $results->num_rows > 0 ) {
    while ($row = $results->fetch_assoc()) {
        $departments = $row;
    } else {
        echo 'Query error.'
    }
}

// Close connection
$conn->close();
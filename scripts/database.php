<?php

// SETUP (costanti)

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'university');

// apertura connessione

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// var_dump($conn);

if ($conn -> connect_error != null) {
    die("Connection failed");
} else {
    echo "<h1>Connection completed</h1>";
}

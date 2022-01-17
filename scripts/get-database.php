<?php

require_once __DIR__ . '/database.php';

// prendere dati dal db

$sql = "SELECT *
        FROM `departments` ";

$result = $conn->query($sql);

$departments = [];

if ($result && $result -> num_rows > 0) {

    while ($row = $result -> fetch_assoc()) {

        $departments[] = $row;
    }

} else if ($result) {

    echo "<h2>No results found.</h2>";

} else {
    echo "<h2>Query error.</h2>";
}

$conn->close();

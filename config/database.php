<?php
try {
    $conn = new PDO("mysql:host=localhost, database=car_rental", "root", "");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

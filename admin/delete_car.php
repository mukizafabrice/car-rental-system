<?php include '../config/database.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar_admin.php'; ?>
<?php

if (isset($_GET['id'])) {
    $delete_id = $_GET['id'];
    try {
        $stmt = $conn->prepare("DELETE FROM cars WHERE id = ?");
        $stmt->execute([$delete_id]);
        header("Location: View_cars.php"); // Redirect after deletion
        exit();
    } catch (PDOException $e) {
        echo "Error deleting record: " . $e->getMessage();
    }
}

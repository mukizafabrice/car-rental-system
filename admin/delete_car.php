<?php include '../config/database.php'; ?>
<?php include '../auth/protected_page.php'; ?>

<?php
if (isset($_GET['id'])) {
    $delete_id = $_GET['id'];
    try {
        $stmt = $conn->prepare("DELETE FROM cars WHERE id = ?");
        $stmt->execute([$delete_id]);
        header("Location: View_cars.php");
        exit();
    } catch (PDOException $e) {
        echo "Error deleting record: " . $e->getMessage();
    }
}

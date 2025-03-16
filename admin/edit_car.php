<?php
include '../config/database.php';
include '../includes/header.php';
include '../includes/navbar_customer.php';

// Check if update request is submitted
if (isset($_POST['update_car'])) {
    $id = $_POST['id'];
    $car_name = $_POST['car_name'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $price_per_day = $_POST['price_per_day'];

    // Fetch existing image path
    $stmt = $conn->prepare("SELECT image FROM cars WHERE id = ?");
    $stmt->execute([$id]);
    $car = $stmt->fetch(PDO::FETCH_ASSOC);
    $imagePath = $car['image']; // Keep the existing image by default

    // Check if a new image is uploaded
    if (!empty($_FILES["image"]["tmp_name"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            $target_dir = "images/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Validate file type
            if (in_array($imageFileType, ["jpg", "png", "jpeg", "gif"])) {
                if ($_FILES["image"]["size"] <= 5000000) { // 5MB limit
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        $imagePath = $target_file; // Update only if upload is successful
                    } else {
                        echo "Error uploading new image.";
                        exit();
                    }
                } else {
                    echo "File size too large.";
                    exit();
                }
            } else {
                echo "Invalid file type.";
                exit();
            }
        } else {
            echo "Uploaded file is not a valid image.";
            exit();
        }
    }

    // Update the database
    $stmt = $conn->prepare("UPDATE cars SET car_name = ?, brand = ?, model = ?, year = ?, price_per_day = ?, image = ? WHERE id = ?");
    $stmt->execute([$car_name, $brand, $model, $year, $price_per_day, $imagePath, $id]);

    header("Location: view_cars.php");
    exit();
}

// Fetch car details for editing
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM cars WHERE id = ?");
    $stmt->execute([$id]);
    $car = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$car) {
        echo "Car not found.";
        exit();
    }
} else {
    echo "Car ID not provided.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Car</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2>Update Car</h2>
        <form method="post" action="" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $car['id']; ?>">

            <div class="form-group">
                <label>Car Name:</label>
                <input type="text" name="car_name" class="form-control" value="<?php echo htmlspecialchars($car['car_name']); ?>" required>
            </div>
            <div class="form-group">
                <label>Brand:</label>
                <input type="text" name="brand" class="form-control" value="<?php echo htmlspecialchars($car['brand']); ?>" required>
            </div>
            <div class="form-group">
                <label>Model:</label>
                <input type="text" name="model" class="form-control" value="<?php echo htmlspecialchars($car['model']); ?>" required>
            </div>
            <div class="form-group">
                <label>Year:</label>
                <input type="number" name="year" class="form-control" value="<?php echo htmlspecialchars($car['year']); ?>" required>
            </div>
            <div class="form-group">
                <label>Price per Day:</label>
                <input type="number" step="0.01" name="price_per_day" class="form-control" value="<?php echo htmlspecialchars($car['price_per_day']); ?>" required>
            </div>
            <div class="form-group">
                <label>Current Car Image:</label><br>
                <img src="<?php echo $car['image']; ?>" alt="Car Image" width="150">
            </div>
            <div class="form-group">
                <label>Upload New Image (Optional):</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" name="update_car" class="btn btn-primary">Update Car</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
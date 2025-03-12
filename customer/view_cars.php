<?php include '../auth/protected_page.php'; ?>
<?php include_once '../includes/header.php'; ?>
<?php include_once '../includes/navbar_customer.php'; ?>
<?php
// Pagination settings
$results_per_page = 6; // Adjust as needed
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$start_from = ($current_page - 1) * $results_per_page;

// Fetch cars with pagination
$stmt = $conn->prepare("SELECT * FROM cars LIMIT :start, :limit");
$stmt->bindParam(':start', $start_from, PDO::PARAM_INT);
$stmt->bindParam(':limit', $results_per_page, PDO::PARAM_INT);
$stmt->execute();
$cars = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Count total cars for pagination
$stmt = $conn->prepare("SELECT COUNT(*) FROM cars");
$stmt->execute();
$total_rows = $stmt->fetchColumn();
$total_pages = ceil($total_rows / $results_per_page);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Listings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .car-card {
            margin-bottom: 20px;
        }

        .car-image {
            max-height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container min-vh-100">
        <h1>Car Listings</h1>
        <div class="row">
            <?php foreach ($cars as $car): ?>
                <div class="col-md-4 car-card">
                    <div class="card">
                        <img src="<?php echo $car['image']; ?>" class="card-img-top car-image" alt="<?php echo $car['car_name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $car['car_name']; ?></h5>
                            <p class="card-text">Brand: <?php echo $car['brand']; ?></p>
                            <a href="read_more.php?id=<?php echo $car['id']; ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php if ($current_page > 1): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $current_page - 1; ?>">Previous</a></li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <li class="page-item <?php echo ($i == $current_page) ? 'active' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>

                <?php if ($current_page < $total_pages): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $current_page + 1; ?>">Next</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<?php include_once '../includes/footer.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $car['car_name']; ?> Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .car-image {
            max-height: 400px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1><?php echo $car['car_name']; ?> Details</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $car['image']; ?>" class="img-fluid car-image" alt="<?php echo $car['car_name']; ?>">
            </div>
            <div class="col-md-6">
                <p><strong>Brand:</strong> <?php echo $car['brand']; ?></p>
                <p><strong>Model:</strong> <?php echo $car['model']; ?></p>
                <p><strong>Year:</strong> <?php echo $car['year']; ?></p>
                <p><strong>Price per Day:</strong> $<?php echo $car['price_per_day']; ?></p>
                <p><strong>Created At:</strong> <?php echo $car['created_at']; ?></p>
                <a href="index.php" class="btn btn-secondary">Back to Listings</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
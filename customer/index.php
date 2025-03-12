<?php include '../auth/protected_page.php'; ?>
<?php include_once '../includes/header.php'; ?>
<?php include_once '../includes/navbar_customer.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .background {
            background: url('../assets/images/1.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
        }
    </style>
</head>

<body>

    <div class="text-center background">
        <div>
            <h1 class="mb-3">Welcome to Your Dashboard</h1>
            <p class="lead">Find and rent your perfect car with ease.</p>
            <a href="view_cars.php" class="btn btn-primary">Browse Available Cars</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php include_once '../includes/footer.php'; ?>
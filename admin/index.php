<?php include '../config/database.php'; ?>
<?php include '../auth/protected_page.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar_admin.php'; ?>
<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
            <h1 class="mb-3">Welcome to Admin Dashboard</h1>
            <p class="lead">Manage rentals, users, and system settings efficiently.</p>
            <a href="manage_rentals.php" class="btn btn-primary">Manage Rentals</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


<?php include '../includes/footer.php'; ?>
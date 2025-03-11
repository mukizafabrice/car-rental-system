<?php
include '../config/database.php';
include '../includes/header.php';

$registration_errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {

        $query = "SELECT id FROM users WHERE username = ? OR email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $registration_errors[] = "Username or Email already exists.";
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert new user
            $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(1, $name, PDO::PARAM_STR);
            $stmt->bindParam(2, $email, PDO::PARAM_STR);
            $stmt->bindParam(3, $hashed_password, PDO::PARAM_STR);

            if ($stmt->execute()) {
                echo "<script>alert('Registration successful.'); window.location.href = 'login.php';</script>";
                exit;
            } else {
                $registration_errors[] = "Error: " . $stmt->errorInfo()[2];
            }
        }
    } catch (Exception $e) {
        $registration_errors[] = "Exception caught: " . $e->getMessage();
    } finally {

        $conn = null;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/form.css">
</head>

<body>
    <div class="form-container">
        <div class="d-flex justify-content-center align-items-center">
            <i class="fas fa-sign-in-alt"></i>

            <h2>Login</h2>
        </div>

        <?php if (!empty($registration_errors)): ?>
            <div class="error-box">
                <?php foreach ($registration_errors as $error): ?>
                    <p><?php echo $error; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <form id="registrationForm" action="" method="post">
            <div class="form-group">
                <i class="fas fa-user"></i>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                <div id="nameError" class="error-message"></div>
            </div>
            <div class="form-group">
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                <div id="emailError" class="error-message"></div>
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                <div id="passwordError" class="error-message"></div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="login-link">
            <a href="login.php" class=" btn text-decoration-none btn-link">Already have an account? Login</a>
        </div>
    </div>
    <script src="../assets/js/form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
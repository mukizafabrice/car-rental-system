<?php
include '../config/database.php';
include '../includes/header.php';

$login_errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identifier = $_POST['identifier'];
    $password = $_POST['password'];

    try {
        $query = "SELECT id, username, email, password, role FROM users WHERE username = ? OR email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $identifier, PDO::PARAM_STR);
        $stmt->bindParam(2, $identifier, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] === 'admin') {
                header("Location: ../admin/");
                exit;
            } else {
                header("Location: ../customer/");
                exit;
            }
        } else {
            $login_errors[] = "Invalid username/email or password.";
        }
    } catch (Exception $e) {
        $login_errors[] = "Exception caught: " . $e->getMessage();
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
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="form-container">
        <div class="d-flex justify-content-center align-items-center">
            <i class="fas fa-sign-in-alt"></i>
            <h2>Login</h2>
        </div>

        <?php if (!empty($login_errors)): ?>
            <div class="error-box">
                <?php foreach ($login_errors as $error): ?>
                    <p><?php echo $error; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form id="loginForm" action="" method="post">
            <div class="form-group">
                <i class="fas fa-user"></i>
                <input type="text" id="identifier" name="identifier" class="form-control" placeholder="Username or Email" required>
                <div id="identifierError" class="error-message"></div>
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                <div id="passwordError" class="error-message"></div>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="login-link">
            <a href="register.php" class="btn text-decoration-none btn-link">I don't have an account? Signup</a>
        </div>
    </div>
    <script src="../assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
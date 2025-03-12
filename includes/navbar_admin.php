<nav class="navbar navbar-expand-lg navbar-dark bg-black shadow position-fixed container-fluid">
    <div class="container">
        <a class="navbar-brand fw-bold text-white" href="index.php">
            <i class="bi bi-speedometer2"></i> Admin Panel
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="adminNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="view_cars.php"><i class="bi bi-car-front-fill"></i> View Cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="new_car.php"><i class="bi bi-plus-square-fill"></i> New Car</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="user_info.php"><i class="bi bi-person-circle"></i> User Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="../auth/logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
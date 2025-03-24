<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental System</title>
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
    }

    .navbar {
        background-color: rgba(0, 0, 0, 0.7);
    }

    .hero {
        background-image: url('./assets/images/1.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-content {
        max-width: 800px;
        padding: 2rem;
    }

    .hero h1 {
        font-size: 3.5rem;
        margin-bottom: 1rem;
    }

    .hero p {
        font-size: 1.2rem;
        margin-bottom: 2rem;
    }

    .btn-primary {
        background-color: #FF5733;
        border-color: #FF5733;
    }

    .btn-primary:hover {
        background-color: #E04E2A;
        /* Darker shade on hover */
        border-color: #E04E2A;
    }

    .features {
        background-color: #f8f9fa;
    }

    .feature-card {
        background-color: white;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;

    }

    .feature-card:hover {
        transform: translateY(-5px);

        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);

    }

    .features i {
        color: #007BFF;

        transition: color 0.3s ease;
    }

    .feature-card:hover i {
        color: #0056b3;

    }

    .features h3 {
        font-weight: 600;
        margin-bottom: 0.8rem;
    }

    .features p {
        color: #6c757d;
    }

    .footer {
        position: relative;
        bottom: 0;
        width: 100%;
    }
</style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="#">Car Rental System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./auth/register.php">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./auth/login.php">Sign In</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-content">
            <h1>Your Journey Starts Here</h1>
            <p>Find the perfect car for your next adventure with our easy-to-use car rental system.</p>
            <a href="#features" class="btn btn-primary btn-lg">Explore Our Features</a>
        </div>
    </header>

    <section id="features" class="features py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="feature-card text-center">
                        <i class="fas fa-calendar-alt fa-3x mb-3"></i>
                        <h3>Easy Booking</h3>
                        <p>Book your rental in just a few clicks with our simple process.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card text-center">
                        <i class="fas fa-map-marked-alt fa-3x mb-3"></i>
                        <h3>Multiple Locations</h3>
                        <p>Pick up and drop off your car at convenient locations across the city.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card text-center">
                        <i class="fas fa-key fa-3x mb-3"></i>
                        <h3>Secure & Reliable</h3>
                        <p>Enjoy peace of mind with our secure booking and reliable service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Contact Us</h5>
                    <p>123 Main Street, Cityville, State, 12345</p>
                    <p>Email: info@carrentalsystem.com</p>
                    <p>Phone: +250 (783) 123-4567</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-white">Home</a></li>
                        <li><a href="/cars" class="text-white">Our Cars</a></li>
                        <li><a href="/about" class="text-white">About Us</a></li>
                        <li><a href="/contact" class="text-white">Contact</a></li>
                        <li><a href="/terms" class="text-white">Terms of Service</a></li>
                        <li><a href="/privacy" class="text-white">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-twitter-square fa-2x"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-instagram-square fa-2x"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-linkedin fa-2x"></i></a></li>
                    </ul>
                    <p>&copy; <?php echo date("Y"); ?> Car Rental System. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>

</body>

</html>
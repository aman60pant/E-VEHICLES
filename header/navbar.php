<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SAIESHA E-Vehicles PVT. LTD</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        a {
            text-decoration: none;
        }
        .hover-shadow:hover {
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="img/logo2.jpg" alt="E-Vehicles Logo" class="me-2" width="50px">
            <h2 class="m-0 text-primary hover-shadow">ELECTRIC-VEHICLES</h2>
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="enquiry.php" class="nav-item nav-link">Enquiry</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
                    <ul class="dropdown-menu fade-up m-0" style="border: none;">
                        <li><a href="E-Rickshow.php" class="dropdown-item">E-Rickshaw</a></li>
                        <li><a href="E-Bike.php" class="dropdown-item">E-Bike</a></li>
                        <li><a href="E-Scooter.php" class="dropdown-item">E-Scooter</a></li>
                        <li><a href="EV-Auto.php" class="dropdown-item">E-Auto</a></li>
                    </ul>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
                    <ul class="dropdown-menu fade-up m-0" style="border: none;">
                        <li><a href="contact.php" class="dropdown-item">Contact</a></li>
                        <li><a href="contact.php" class="dropdown-item">Email</a></li>
                        <li><a href="contact.php" class="dropdown-item">Website</a></li>
                    </ul>
                </div>
                <!-- <a href="contact.php" class="nav-item nav-link">Contact</a> -->
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var current = location.pathname.split("/").pop();
        var menuItems = document.querySelectorAll(".navbar-nav .nav-link, .navbar-nav .dropdown-item");

        menuItems.forEach(function(item) {
            if (item.getAttribute("href") === current) {
                item.classList.add("active");

                // If the item is inside a dropdown, also add active to its parent dropdown
                var parentDropdown = item.closest('.dropdown-menu');
                if (parentDropdown) {
                    var dropdownLink = parentDropdown.previousElementSibling;
                    dropdownLink.classList.add("active");
                }
            }
        });
    });
</script>
</body>

</html>

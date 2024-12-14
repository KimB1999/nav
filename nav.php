<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Off-Canvas Mega-Menu Navigatie</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        /* Custom styling voor mega-menu */
        .mega-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: #f8f9fa;
            padding: 20px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .nav-item:hover .mega-menu {
            display: block;
        }

        /* Custom styling voor off-canvas */
        .offcanvas-body {
            padding: 2rem;
        }

        /* Brede merknaam */
        .navbar-brand {
            width: 200px; /* Verhoogt de breedte van de merknaam naar 200px */
            text-align: center; /* Centreert de merknaam binnen de breedte */
        }

        /* Footer styling */
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
            margin-top: auto; /* Zorgt ervoor dat de footer onderaan blijft */
        }
    </style>
</head>
<body>
    <!-- Off-canvas navigatie -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasMenuLabel">Navigatie</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Over ons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Diensten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Hoofdnavigatie met mega-menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Merk</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Diensten
                        </a>
                        <div class="mega-menu dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="dropdown-header">Webontwikkeling</h6>
                                    <a class="dropdown-item" href="#">Website ontwerp</a>
                                    <a class="dropdown-item" href="#">E-commerce oplossingen</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="dropdown-header">Marketing</h6>
                                    <a class="dropdown-item" href="#">SEO</a>
                                    <a class="dropdown-item" href="#">Social media marketing</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="dropdown-header">Consultancy</h6>
                                    <a class="dropdown-item" href="#">Bedrijfsadvies</a>
                                    <a class="dropdown-item" href="#">IT-strategie</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Over ons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Footer -->
    <footer>
        &copy; 2024 Kim Boeckx Open source template.
    </footer>

    <!-- JavaScript-bestanden voor Bootstrap -->
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>

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

        /* Verticale navbar met merk aan de linkerkant */
        .navbar {
            display: flex;
            flex-direction: column; /* Zet alles onder elkaar */
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            width: 70px; /* Geeft de navbar een smalle breedte */
            position: fixed;
            left: 0;
            top: 0;
            background-color: transparent; /* Maak de achtergrond transparant */
            padding: 20px 0;
        }

        .navbar-toggler {
            margin-bottom: 10px; /* Ruimte tussen de knop en merknaam */
        }

        .navbar-brand {
            width: 100%;
            text-align: center;
            font-size: 1.5rem; /* Vergroot de tekstgrootte voor merknaam */
            padding-top: 10px;
            display: flex;
            flex-direction: column; /* Zorgt ervoor dat de letters onder elkaar komen */
            align-items: center;
        }

        .navbar-brand span {
            display: block; /* Zorgt ervoor dat elke letter op een nieuwe regel komt */
            font-size: 1.2rem; /* Verhoog de lettergrootte voor de letters */
            font-weight: bold;
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

    <!-- Hoofdnavigatie met mega-menu aan de linkerkant -->
    <nav class="navbar navbar-light">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <span>M</span>
            <span>E</span>
            <span>R</span>
            <span>K</span>
        </a>
    </nav>

    <!-- Footer -->
    <footer>
        &copy; 2024 Kim Boeckx Open source template.
    </footer>

    <!-- JavaScript-bestanden voor Bootstrap -->
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>

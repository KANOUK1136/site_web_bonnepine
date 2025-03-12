<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Website</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>
<body>

    <!-- Header with Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- Logo -->
                <img src="images/tete.png" alt="Gurren" height="60" width="60" class="me-3">
                
                <!-- Navbar Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">ACCUEIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="list.php">LISTE DES EPISODES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="classement.php">CLASSEMENT</a>
                        </li>
                    </ul>

                    <!-- LOGIN nav item pushed to the right -->
                    <ul class="navbar-nav ms-auto"> <!-- 'ms-auto' is used to push the LOGIN to the right -->
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">LOGIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

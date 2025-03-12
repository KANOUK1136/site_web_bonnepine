<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page de Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php include 'navbar.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <form class="login-form" action="" method="post">
        <h1>Connexion</h1>

        <div class="form-input-material">
            <label for="username">Identifiant</label> 
            <input type="text" name="username" id="username" autocomplete="off" class="form-control-material" required>
        </div>

        <div class="form-input-material">
            <label for="password">Mot de passe</label> 
            <input type="password" name="password" id="password" autocomplete="off" class="form-control-material" required>
        </div>

        <button type="submit" class="btn btn-primary btn-ghost">Connexion</button>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cookie_nom_id = "id";
            $cookie_identifiant = $_POST['username'];
            setcookie($cookie_nom_id, $cookie_identifiant, time() + (86400 * 30), "/");

            $cookie_mdp_id = "mdp";
            $cookie_password = $_POST['password'];
            setcookie($cookie_mdp_id, $cookie_password, time() + (86400 * 30), "/");

            echo "<p>Bienvenue : " . htmlspecialchars($_POST['username']) . "</p>";
        }
        ?>

    </form>
</body>
</html>




<!DOCTYPE html>
<html lang="fr">
    <head>
            <meta charset="UTF-8">
            <title>Page de connection</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <?php include 'navbar.php'; ?>
            <link rel="stylesheet" type="text/css" href="css/login.css" />
    </head>

    <body>
        
        <form class="login-form" action="" method="post">
            <h1>Connexion</h1>
            <div class="form-input-material">
                <input type="text" name="username" id="username" placeholder=" " autocomplete="off" class="form-control-material" required />
                <label for="username">Identifiant</label>
            </div>

            <div class="form-input-material">
                <input type="password" name="password" id="password" placeholder=" " autocomplete="off" class="form-control-material" required />
                <label for="password">Password</label>
            </div>

            <button type="submit" class="btn btn-primary btn-ghost">Connexion</button>

            <?php
            $cookie_nom_id = "id";
            $cookie_identifiant = $_POST['username'];
            setcookie($cookie_nom_id, $cookie_identifiant, time() + (86400 * 30), "/");

            $cookie_mdp_id = "mdp";
            $cookie_password = $_POST['password'];
            setcookie($cookie_mdp_id, $cookie_password, time() + (86400 * 30), "/");
            ?>

            
            <?php echo "Bienvenu : " . $_POST['username'] . "<br>Votre mdp est : " . $_POST['password']  ;?> 
            <?php echo "<br><br>Cookie nom : " . $_COOKIE['id'];?>
            <?php echo "<br>Cookie mdp: " . $_COOKIE['mdp'];?> 
            
            
            

        </form>
        
    </body>

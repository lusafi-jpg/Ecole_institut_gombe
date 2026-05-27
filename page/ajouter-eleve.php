<?php
session_start();

// 1. Protection de la page : Seul l'administrateur connecté peut y accéder
if (!isset($_SESSION['admin_connecte']) || $_SESSION['admin_connecte'] !== true) {
    header("Location: login.php");
    exit;
}

// 2. Connexion à la base de données
require_once("database.php");

$message_succes = "";
$message_erreur = "";

// 3. Traitement de la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Récupération et nettoyage des données du formulaire
    $nom = isset($_POST['nom']) ? trim($_POST['nom']) : '';
    $prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : '';
    $sexe = isset($_POST['sexe']) ? trim($_POST['sexe']) : '';
    $date_naissance = isset($_POST['date_naissance']) ? trim($_POST['date_naissance']) : '';
    $classe = isset($_POST['classe']) ? trim($_POST['classe']) : '';
    $telephone = isset($_POST['telephone']) ? trim($_POST['telephone']) : '';

    // Vérification que tous les champs obligatoires sont remplis
    if (!empty($nom) && !empty($prenom) && !empty($sexe) && !empty($date_naissance) && !empty($classe) && !empty($telephone)) {
        
        try {
            // Requête d'insertion SQL
            $sql = "INSERT INTO inscriptions (nom, prenom, sexe, date_naissance, classe, telephone) 
                    VALUES (:nom, :prenom, :sexe, :date_naissance, :classe, :telephone)";
            
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':sexe' => $sexe,
                ':date_naissance' => $date_naissance,
                ':classe' => $classe,
                ':telephone' => $telephone
            ]);

            $message_succes = "L'élève $prenom $nom a été inscrit avec succès !";
            
        } catch (PDOException $e) {
            $message_erreur = "Erreur lors de l'enregistrement : " . $e->getMessage();
        }
        
    } else {
        $message_erreur = "Veuillez remplir tous les champs du formulaire.";
    }
}
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Élève </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="../css/style3.css" rel="stylesheet">
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column" id="sidebar">
        <h4 class="fw-bold mb-4 text-primary"><i class="bi bi-mortarboard-fill me-2"></i>Admin</h4>
        <nav class="nav flex-column mb-auto">
            <a class="nav-link" href="../page/dashboard.php">
                <i class="bi bi-speedometer2"></i> tableau de bord
            </a>
            <a class="nav-link" href="../page/eleves.php">
                <i class="bi bi-people"></i> Élèves
            </a>
            <a class="nav-link active" href="../page/ajouter-eleve.php">
                <i class="bi bi-person-plus"></i> Ajouter un élève
            </a>
        </nav>
        <hr class="text-secondary">
        <a href="../index.php" class="nav-link text-danger">
            <i class="bi bi-box-arrow-left"></i> Déconnexion
        </a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <header class="mb-4">
            <div class="d-flex align-items-center mb-3">
                <a href="../page/eleves.php" class="text-secondary text-decoration-none small me-3">
                    <i class="bi bi-arrow-left me-1"></i> Retour à la liste
                </a>
                <button class="btn btn-dark d-md-none ms-auto" onclick="toggleSidebar()">
                    <i class="bi bi-list"></i>
                </button>
            </div>
            <h1 class="h3 fw-bold text-dark">Ajouter un Élève</h1>
        </header>

        <div class="card border-0 shadow-sm p-4 p-md-5 rounded-4 max-w-lg mx-auto" style="max-width: 800px;">
            <form action="ajouter-eleve.php" method="post" id="addEleveForm">
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label fw-medium text-secondary">Nom</label>
                        <input type="text" name="nom" class="form-control p-2" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-medium text-secondary">Prénom</label>
                        <input type="text" name="prenom" class="form-control p-2" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-medium text-secondary">Sexe</label>
                        <select class="form-select  p-2" name="sexe">
                            <option value="M">Masculin</option>
                            <option value="F">Féminin</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-medium text-secondary">Date de naissance</label>
                        <input type="date" class="form-control p-2" name="date_naissance" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-medium text-secondary">Classe</label>
                        <input type="text" class="form-control p-2" name="classe" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-medium text-secondary">Téléphone Parents</label>
                        <input type="tel" class="form-control p-2" name="telephone" required>
                    </div>
                    <div class="col-12 text-end mt-5">
                        <button type="submit" class="btn btn-primary px-5 py-2 fw-bold shadow-sm"
                            style="background-color: #2563eb;">
                            <i class="bi bi-save me-2"></i> Enregistrer
                        </button>
                    </div>
                </div>
            </form>
            <div id="successAlert" class="alert alert-success mt-4 d-none">
                <i class="bi bi-check-circle me-2"></i> Élève ajouté avec succès ! Redirection...
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        // Afficher le message de succès et rediriger après 2 secondes
        <?php if (!empty($message_succes)): ?>
            document.getElementById('successAlert').classList.remove('d-none');
            setTimeout(function() {
                window.location.href = 'eleves.php';
            }, 2000);
        <?php endif; ?>
    </script>
</body>

</html>
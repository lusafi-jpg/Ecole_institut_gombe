<?php
session_start();

// 1. Protection : Seul l'admin connecté accède à la liste
if (!isset($_SESSION['admin_connecte']) || $_SESSION['admin_connecte'] !== true) {
    header("Location: iscriptions.php");
    exit;
}

// 2. Connexion à la base de données
require_once("database.php");

$message = "";

// 3. GESTION DE LA SUPPRESSION
if (isset($_GET['action']) && $_GET['action'] === 'supprimer' && isset($_GET['id'])) {
    $id_a_supprimer = intval($_GET['id']);
    
    try {
        $sqlDelete = "DELETE FROM inscriptions WHERE id = :id";
        $stmtDelete = $pdo->prepare($sqlDelete);
        $stmtDelete->execute([':id' => $id_a_supprimer]);
        
        $message = "<div class='alert alert-success py-2'>Élève supprimé avec succès.</div>";
    } catch (PDOException $e) {
        $message = "<div class='alert alert-danger py-2'>Erreur lors de la suppression : " . $e->getMessage() . "</div>";
    }
}

// 4. GESTION DE LA MODIFICATION (Nouveau bloc)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action_mode']) && $_POST['action_mode'] === 'modifier') {
    $id_a_modifier = intval($_POST['edit_id']);
    $nom = trim($_POST['edit_nom']);
    $prenom = trim($_POST['edit_prenom']);
    $sexe = trim($_POST['edit_sexe']);
    $classe = trim($_POST['edit_classe']);

    if (!empty($nom) && !empty($prenom) && !empty($sexe) && !empty($classe)) {
        try {
            $sqlUpdate = "UPDATE inscriptions SET nom = :nom, prenom = :prenom, sexe = :sexe, classe = :classe WHERE id = :id";
            $stmtUpdate = $pdo->prepare($sqlUpdate);
            $stmtUpdate->execute([
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':sexe' => $sexe,
                ':classe' => $classe,
                ':id' => $id_a_modifier
            ]);
            $message = "<div class='alert alert-success py-2'>Élève modifié avec succès.</div>";
        } catch (PDOException $e) {
            $message = "<div class='alert alert-danger py-2'>Erreur lors de la modification : " . $e->getMessage() . "</div>";
        }
    } else {
        $message = "<div class='alert alert-warning py-2'>Veuillez remplir tous les champs.</div>";
    }
}

// 5. RÉCUPÉRATION DES ÉLÈVES RÉELS DE LA BD
$sql = "SELECT * FROM inscriptions ORDER BY id DESC";
$stmt = $pdo->query($sql);
$eleves = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Élèves</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/style2.css">
</head>

<body>

    <div class="sidebar d-flex flex-column" id="sidebar">
        <h4 class="fw-bold mb-4 text-primary"><i class="bi bi-mortarboard-fill me-2"></i>Admin</h4>
        <nav class="nav flex-column mb-auto">
            <a class="nav-link" href="dashboard.php">
                <i class="bi bi-speedometer2"></i> tableau de bord
            </a>
            <a class="nav-link active" href="eleves.php">
                <i class="bi bi-people"></i> Élèves
            </a>
            <a class="nav-link" href="ajouter-eleve.php">
                <i class="bi bi-person-plus"></i> Ajouter un élève
            </a>
        </nav>
        <hr class="text-secondary">
        <a href="deconnexion.php" class="nav-link text-danger">
            <i class="bi bi-box-arrow-left"></i> Déconnexion
        </a>
    </div>

    <div class="main-content">
        <header class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-3">
            <h1 class="h3 fw-bold text-dark mb-0">Gestion des Élèves</h1>
            <div class="d-flex gap-2">
                <button class="btn btn-dark d-md-none" onclick="toggleSidebar()">
                    <i class="bi bi-list"></i>
                </button>
                <a href="ajouter-eleve.php" class="btn btn-primary px-4 shadow-sm" style="background-color: #16c613; border: none;">
                    <i class="bi bi-plus-lg me-2"></i>Nouveau Élève
                </a>
            </div>
        </header>

        <?php echo $message; ?>

        <div class="card border-0 shadow-sm p-3 mb-4 rounded-3">
            <div class="position-relative">
                <i class="bi bi-search position-absolute top-50 translate-middle-y ms-3 text-secondary"></i>
                <input type="text" id="searchInput" class="form-control ps-5 py-2" placeholder="Rechercher par nom ou prénom...">
            </div>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="table-responsive">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light text-muted text-uppercase small">
                        <tr>
                            <th class="px-4">Nom</th>
                            <th>Prénom</th>
                            <th>Sexe</th>
                            <th>Classe</th>
                            <th class="text-end px-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="elevesTableBody">
                        <?php if (count($eleves) > 0): ?>
                            <?php foreach ($eleves as $eleve): ?>
                                <tr class="eleve-row">
                                    <td class="px-4 py-3 fw-medium nom-cherche"><?php echo htmlspecialchars($eleve['nom']); ?></td>
                                    <td class="py-3 prenom-cherche"><?php echo htmlspecialchars($eleve['prenom']); ?></td>
                                    <td>
                                        <?php if ($eleve['sexe'] === 'M'): ?>
                                            <span class="badge bg-light text-primary border border-primary-subtle px-2">Masculin</span>
                                        <?php else: ?>
                                            <span class="badge bg-light text-danger border border-danger-subtle px-2">Féminin</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-secondary classe-text"><?php echo htmlspecialchars($eleve['classe']); ?></td>
                                    <td class="text-end px-4">
                                        <button type="button" 
                                                class="btn btn-sm btn-light text-primary me-1 btn-edit"
                                                data-id="<?php echo $eleve['id']; ?>"
                                                data-nom="<?php echo htmlspecialchars($eleve['nom']); ?>"
                                                data-prenom="<?php echo htmlspecialchars($eleve['prenom']); ?>"
                                                data-sexe="<?php echo htmlspecialchars($eleve['sexe']); ?>"
                                                data-classe="<?php echo htmlspecialchars($eleve['classe']); ?>"
                                                data-bs-toggle="modal" 
                                                data-bs-target="#modalModifier">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        
                                        <a href="?action=supprimer&id=<?php echo $eleve['id']; ?>" 
                                           class="btn btn-sm btn-light text-danger" 
                                           onclick="return confirm('Voulez-vous vraiment supprimer l\'élève <?php echo htmlspecialchars($eleve['prenom'] . ' ' . $eleve['nom']); ?> ?');">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center py-4 text-muted">
                                    Aucun élève enregistré dans la base de données.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalModifier" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalModifierLabel" aria-hidden="true">
        <div class="modal-content modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">
                <form action="eleves.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold" id="modalModifierLabel"><i class="bi bi-pencil-square me-2 text-primary"></i>Modifier l'élève</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row g-3">
                        <input type="hidden" name="action_mode" value="modifier">
                        <input type="hidden" name="edit_id" id="edit_id">

                        <div class="col-md-6">
                            <label for="edit_nom" class="form-label small fw-bold text-muted">Nom</label>
                            <input type="text" class="form-control" id="edit_nom" name="edit_nom" required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_prenom" class="form-label small fw-bold text-muted">Prénom</label>
                            <input type="text" class="form-control" id="edit_prenom" name="edit_prenom" required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_sexe" class="form-label small fw-bold text-muted">Sexe</label>
                            <select class="form-select" id="edit_sexe" name="edit_sexe" required>
                                <option value="M">Masculin</option>
                                <option value="F">Féminin</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_classe" class="form-label small fw-bold text-muted">Classe</label>
                            <input type="text" class="form-control" id="edit_classe" name="edit_classe" required>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary" style="background-color: #16c613; border: none;">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Système de recherche en direct
        document.getElementById('searchInput').addEventListener('input', function (e) {
            const term = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('.eleve-row');

            rows.forEach(row => {
                const nom = row.querySelector('.nom-cherche').textContent.toLowerCase();
                const prenom = row.querySelector('.prenom-cherche').textContent.toLowerCase();

                if (nom.includes(term) || prenom.includes(term)) {
                    row.style.display = ""; 
                } else {
                    row.style.display = "none"; 
                }
            });
        });

        // SCRIPT POUR PRÉ-REMPLIR LA MODAL AVEC LES INFOS DE L'ÉLÈVE
        const editButtons = document.querySelectorAll('.btn-edit');
        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('edit_id').value = this.getAttribute('data-id');
                document.getElementById('edit_nom').value = this.getAttribute('data-nom');
                document.getElementById('edit_prenom').value = this.getAttribute('data-prenom');
                document.getElementById('edit_sexe').value = this.getAttribute('data-sexe');
                document.getElementById('edit_classe').value = this.getAttribute('data-classe');
            });
        });

        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('show');
        }
    </script>
</body>

</html>
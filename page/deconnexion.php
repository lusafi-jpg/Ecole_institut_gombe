<?php
// 1. Démarre la session pour y avoir accès
session_start();

// 2. Vide toutes les variables de session
$_SESSION = array();

// 3. Détruit complètement la session côté serveur
session_destroy();

// 4. Redirige immédiatement vers la page de connexion
header("Location: login.php");
exit;
?>
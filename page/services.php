<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Institut de la Gombe 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container px-3">
        <!-- Logo et Nom -->
        <a class="navbar-brand d-flex align-items-center" href="../index.php">
            <img src="../img/IMG-20260123-WA0001.jpg" alt="Logo" class="img-fluid rounded shadow me-2" style="max-height: 40px; width: auto;">
            <span>Institut de la Gombe</span>
        </a>
        
        <!-- Bouton Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Liens du menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" href="../index.php"><i class="bi bi-house-door me-1"></i>Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../page/apropos.php"><i class="bi bi-info-circle-fill me-1"></i>À propos</a>
                </li>
                
                <!-- Menu déroulant (Dropdown) pour désencombrer la barre -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-grid-fill me-1"></i>Institution
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../page/historique.php"><i class="bi bi-calendar-week me-2"></i>Historique</a></li>
                        <li><a class="dropdown-item" href="../page/organigramme.php"><i class="bi bi-person-fill me-2"></i>Organigramme</a></li>
                       
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../page/services.php"><i class="bi bi-briefcase me-1"></i>Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../page/inscription.php"><i class="bi bi-person-plus me-1"></i>Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../page/contact.php"><i class="bi bi-telephone-forward me-1"></i>Contact</a>
                </li>
                
                <!-- Bouton Connexion mis en valeur -->
                <li class="nav-item ms-lg-2">
                    <a class="btn btn-outline-light btn-sm dynamic-nav-btn" href="../page/connexion.php">
                        <i class="bi bi-person-rolodex me-1"></i>Connexion
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <main class="container">
        <!-- Page Header -->
        <div class="hero-section">
            <div class="container text-center">
                <h1>Services Offerts</h1>
                <p class="lead">Découvrez tous les services que l'Institut de la Gombe 1 met à votre disposition</p>
            </div>
        </div>

        <!-- Services Principaux -->
        <section class="content-section mt-4">
            <h2 class="section-title">Services Éducatifs</h2>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-start mb-3">
                                <div style="font-size: 3rem; margin-right: 1rem;"><i
                                        class="bi bi-bookshelf text-info"></i></div>
                                <div>
                                    <h4>Enseignement Académique</h4>
                                    <p class="text-muted">Programmes complets du primaire au secondaire</p>
                                </div>
                            </div>
                            <ul>
                                <li>Programmes conformes aux normes éducatives nationales</li>
                                <li>Enseignement de qualité dans toutes les matières</li>
                                <li>Classes à effectifs réduits pour un meilleur suivi</li>
                                <li>Préparation aux examens nationaux</li>
                                <li>Support pédagogique personnalisé</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-start mb-3">
                                <div style="font-size: 3rem; margin-right: 1rem;"><i
                                        class="bi bi-flask-fill text-info"></i></div>
                                <div>
                                    <h4>Laboratoires et Expérimentation</h4>
                                    <p class="text-muted">Installations scientifiques modernes</p>
                                </div>
                            </div>
                            <ul>
                                <li>Laboratoires de sciences physiques et chimie</li>
                                <li>Laboratoire de biologie équipé</li>
                                <li>Activités pratiques et expérimentales</li>
                                <li>Projets scientifiques et concours</li>
                                <li>Apprentissage par l'expérience</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-start mb-3">
                                <div style="font-size: 3rem; margin-right: 1rem;"><i
                                        class="bi bi-laptop text-muted"></i></div>
                                <div>
                                    <h4>Informatique et Technologie</h4>
                                    <p class="text-muted">Formation aux nouvelles technologies</p>
                                </div>
                            </div>
                            <ul>
                                <li>Salles informatiques équipées</li>
                                <li>Initiation à la programmation</li>
                                <li>Utilisation pédagogique des outils numériques</li>
                                <li>Formation en bureautique</li>
                                <li>Préparation à l'ère du numérique</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-start mb-3">
                                <div style="font-size: 3rem; margin-right: 1rem;"><i
                                        class="bi bi-journals text-success"></i></div>
                                <div>
                                    <h4>Bibliothèque et Documentation</h4>
                                    <p class="text-muted">Ressources documentaires riches</p>
                                </div>
                            </div>
                            <ul>
                                <li>Collection de livres et manuels scolaires</li>
                                <li>Espace de lecture et de recherche</li>
                                <li>Accès à des ressources numériques</li>
                                <li>Support pour les travaux de recherche</li>
                                <li>Horaires d'ouverture étendus</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Extrascolaires -->
        <section class="content-section mt-4">
            <h2 class="section-title">Activités Extrascolaires</h2>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-body text-center">
                            <div style="font-size: 3rem; margin-bottom: 1rem;"><i
                                    class="bi bi-emoji-smile text-primary"></i></div>
                            <h4>Sports</h4>
                            <p>Développement physique et esprit d'équipe</p>
                            <ul class="list-unstyled text-start">
                                <li>• Football</li>
                                <li>• Basketball</li>
                                <li>• Volleyball</li>
                                <li>• Athlétisme</li>
                                <li>• Tennis de table</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-body text-center">
                            <div style="font-size: 3rem; margin-bottom: 1rem;"><i
                                    class="bi bi-palette-fill text-warning"></i></div>
                            <h4>Arts et Culture</h4>
                            <p>Expression créative et artistique</p>
                            <ul class="list-unstyled text-start">
                                <li>• Dessin et peinture</li>
                                <li>• Théâtre</li>
                                <li>• Chorale</li>
                                <li>• Danse traditionnelle</li>
                                <li>• Artisanat</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-body text-center">
                            <div style="font-size: 3rem; margin-bottom: 1rem;"><i class="bi bi-gear text-success"></i>
                            </div>
                            <h4>Clubs Scientifiques</h4>
                            <p>Exploration et innovation</p>
                            <ul class="list-unstyled text-start">
                                <li>• Club de mathématiques</li>
                                <li>• Club de sciences</li>
                                <li>• Club d'informatique</li>
                                <li>• Robotique</li>
                                <li>• Concours scientifiques</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services de Soutien -->
        <section class="content-section mt-4">
            <h2 class="section-title">Services de Soutien</h2>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card card-custom">
                        <div class="card-header-custom">
                            <h5 class="mb-0"><i class="bi bi-telephone text-danger"></i> Orientation et Conseil</h5>
                        </div>
                        <div class="card-body">
                            <p>Notre équipe d'orientation accompagne les élèves dans leurs choix académiques et
                                professionnels :</p>
                            <ul>
                                <li>Conseil en orientation scolaire et professionnelle</li>
                                <li>Préparation aux choix de filières</li>
                                <li>Information sur les métiers et formations</li>
                                <li>Soutien psychologique si nécessaire</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card card-custom">
                        <div class="card-header-custom">
                            <h5 class="mb-0"><i class="bi bi-heart text-danger"></i> Soutien Scolaire</h5>
                        </div>
                        <div class="card-body">
                            <p>Des cours de soutien sont organisés pour aider les élèves en difficulté :</p>
                            <ul>
                                <li>Cours de rattrapage en petits groupes</li>
                                <li>Aide aux devoirs</li>
                                <li>Préparation intensive aux examens</li>
                                <li>Stages de révision pendant les vacances</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card card-custom">
                        <div class="card-header-custom">
                            <h5 class="mb-0"><i class="bi bi-tools text-muted"></i> Service Médical</h5>
                        </div>
                        <div class="card-body">
                            <p>Un service de santé est disponible au sein de l'établissement :</p>
                            <ul>
                                <li>Infirmerie équipée</li>
                                <li>Présence d'une infirmière qualifiée</li>
                                <li>Premiers secours en cas d'urgence</li>
                                <li>Campagnes de sensibilisation sanitaire</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card card-custom">
                        <div class="card-header-custom">
                            <h5 class="mb-0"><i class="bi bi-bus-front text-muted"></i> Transport Scolaire</h5>
                        </div>
                        <div class="card-body">
                            <p>Service de transport sécurisé pour les élèves :</p>
                            <ul>
                                <li>Bus scolaires modernes et sécurisés</li>
                                <li>Itinéraires couvrant toute la ville</li>
                                <li>Conducteurs expérimentés et formés</li>
                                <li>Surveillance pendant les trajets</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Administratifs -->
        <section class="content-section mt-4">
            <h2 class="section-title">Services Administratifs</h2>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card card-custom h-100 text-center">
                        <div class="card-body">
                            <div style="font-size: 2.5rem; margin-bottom: 1rem;"><i
                                    class="bi bi-person-plus text-primary"></i></div>
                            <h5>Inscriptions</h5>
                            <p>Accueil et accompagnement dans le processus d'inscription</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card card-custom h-100 text-center">
                        <div class="card-body">
                            <div style="font-size: 2.5rem; margin-bottom: 1rem;"><i
                                    class="bi bi-file-earmark-check text-muted"></i></div>
                            <h5>Certificats et Attestations</h5>
                            <p>Délivrance de documents officiels et certificats scolaires</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card card-custom h-100 text-center">
                        <div class="card-body">
                            <div style="font-size: 2.5rem; margin-bottom: 1rem;"><i
                                    class="bi bi-credit-card text-warning"></i></div>
                            <h5>Paiement des Frais</h5>
                            <p>Facilités de paiement et suivi des frais scolaires</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer-custom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>Institut de la Gombe 1</h5>
                    <p>Votre partenaire dans l'éducation et l'excellence académique.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Liens rapides</h5>
                    <ul class="list-unstyled">
                        <li><a href="../index.php">Accueil</a></li>
                        <li><a href="../page/apropos.php">À propos</a></li>
                        <li><a href="../page/inscription.php">Inscription</a></li>
                        <li><a href="../page/contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Contact</h5>
                    <p>
                        <i class="bi bi-geo-alt text-danger fs-8 me-1"></i> Avenue nzokotolo n°3 Q/cliniques C/gombe
                        place de l'independance en face du palais de la justice<br>
                        <i class="bi bi-envelope text-primary fs-8 me-1"></i> contact@ecole-excellence.cd<br>
                        <i class="bi bi-telephone-fill text-danger fs-8 me-1"></i> +243 812375607
                    </p>
                </div>
            </div>
            <hr class="my-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="text-center">
                <p>&copy; 2024 Institut de la Gombe 1 Tous droits réservés. | Programme Web I - L2 Math-Info</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
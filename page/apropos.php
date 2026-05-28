<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - Institut de la Gombe 1</title>
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
                <h1>À propos de l'Institut de la Gombe 1</h1>
                <p class="lead">Découvrez notre mission, notre vision et nos valeurs</p>
            </div>
        </div>

        <!-- Section Mission -->
        <section class="content-section mt-4">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4" style="color: var(--primary-color);">Notre Mission</h2>
                    <p class="lead">
                        Fournir une éducation de qualité supérieure qui forme des individus compétents, responsables et
                        épanouis.
                    </p>
                    <p>
                        Institut de la Gombe 1 s'engage à offrir un environnement d'apprentissage stimulant où chaque
                        élève peut développer ses talents, acquérir des connaissances solides et construire un avenir
                        prometteur. Nous croyons en l'éducation holistique qui combine excellence académique,
                        développement personnel et valeurs humaines.
                    </p>
                    <p>
                        Notre approche pédagogique est centrée sur l'élève, favorisant l'autonomie, la créativité et
                        l'esprit critique. Nous préparons nos élèves à réussir dans leurs études supérieures et à
                        devenir des citoyens actifs et responsables dans la société.
                    </p>
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4" style="color: var(--primary-color);">Notre Vision</h2>
                    <p class="lead">
                        Être l'établissement d'enseignement de référence, reconnu pour l'excellence de sa formation et
                        le succès de ses élèves.
                    </p>
                    <p>
                        Nous aspirons à créer une communauté éducative où l'excellence est la norme, où chaque élève est
                        valorisé et encouragé à atteindre son plein potentiel. Notre vision est de former des leaders
                        capables de contribuer positivement au développement de notre société.
                    </p>
                    <p>
                        Institut de la Gombe 1 vise à être un modèle d'innovation pédagogique, adoptant les meilleures
                        pratiques éducatives tout en respectant les valeurs traditionnelles de respect, d'intégrité et
                        de discipline.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section Valeurs -->
        <section class="content-section mt-4">
            <h2 class="section-title">Nos Valeurs Fondamentales</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card card-custom">
                        <div class="card-body text-center">
                            <div style="font-size: 3rem; margin-bottom: 1rem;"><i
                                    class="bi bi-bullseye text-warning"></i></div>
                            <h4>Excellence</h4>
                            <p>Nous visons la perfection dans l'enseignement, l'apprentissage et tous nos domaines
                                d'activité. L'excellence est notre standard constant.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card card-custom">
                        <div class="card-body text-center">
                            <div style="font-size: 3rem; margin-bottom: 1rem;"><i class="bi bi-heart text-danger"></i>
                            </div>
                            <h4>Respect</h4>
                            <p>Respect de soi-même, des autres, des différences et de l'environnement. Nous cultivons
                                une culture de respect mutuel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card card-custom">
                        <div class="card-body text-center">
                            <div style="font-size: 3rem; margin-bottom: 1rem;"><i
                                    class="bi bi-lightbulb-fill text-warning"></i></div>
                            <h4>Innovation</h4>
                            <p>Nous adoptons des méthodes pédagogiques modernes et innovantes pour améliorer constamment
                                la qualité de notre enseignement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card card-custom">
                        <div class="card-body text-center">
                            <div style="font-size: 3rem; margin-bottom: 1rem;"><i class="bi bi-tree-fill text-info"></i>
                            </div>
                            <h4>Développement</h4>
                            <p>Accompagnement personnalisé de chaque élève pour favoriser son épanouissement
                                intellectuel, social et émotionnel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card card-custom">
                        <div class="card-body text-center">
                            <div style="font-size: 3rem; margin-bottom: 1rem;"><i
                                    class="bi bi-shield-check text-warning"></i></div>
                            <h4>Intégrité</h4>
                            <p>Nous agissons avec honnêteté, transparence et éthique dans toutes nos relations et
                                décisions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card card-custom">
                        <div class="card-body text-center">
                            <div style="font-size: 3rem; margin-bottom: 1rem;"><i class="bi bi-globe text-info"></i>
                            </div>
                            <h4>Citoyenneté</h4>
                            <p>Nous formons des citoyens responsables, conscients de leur rôle dans la construction
                                d'une société meilleure.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Objectifs -->
        <section class="content-section mt-4">
            <h2 class="section-title">Nos Objectifs Pédagogiques</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="mb-3">Objectifs Académiques</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-bookshelf text-primary"></i> Assurer une solide
                            formation académique dans toutes les disciplines</li>
                        <li class="list-group-item"><i class="bi bi-bar-chart-fill text-warning"></i> Maintenir un taux
                            de réussite élevé aux examens nationaux</li>
                        <li class="list-group-item"><i class=" bi bi-mortarboard-fill text-warning fs-5"></i> Préparer
                            efficacement les élèves aux études supérieures</li>
                        <li class="list-group-item"><i class="bi bi-trophy-fill text-success "></i> Développer
                            l'excellence dans toutes les matières enseignées</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">Objectifs Personnels</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-person-check text-warning fs-5"></i> Développer
                            l'autonomie et la confiance en soi</li>
                        <li class="list-group-item"><i class="bi bi-chat-dots text-primary fs-5 "></i> Encourager
                            l'expression orale et écrite</li>
                        <li class="list-group-item"><i class="bi bi-search text-success fs-5"></i> Cultiver l'esprit
                            critique et la réflexion</li>
                        <li class="list-group-item"><i class="bi bi-people text-primary fs-5"></i> Favoriser le travail
                            en équipe et la collaboration</li>
                    </ul>
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
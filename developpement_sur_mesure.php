<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Développement Web Sur Mesure" . city_phrase(" à ") . " – Solutions Web Personnalisées | LCR DIGITAL";
$page_description = "Développement sur mesure" . city_phrase(" à ") . " par votre agence web LCR DIGITAL. Création d'outils métier, intégrations API, automatisations et fonctionnalités web personnalisées. Devis gratuit.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require __DIR__ . "/assets/components/head.php"; ?>
</head>
<body data-city="<?= e($city) ?>" data-city-slug="<?= e($city_slug) ?>">

    <div id="site-header">
        <?php require __DIR__ . "/assets/components/header.php"; ?>
    </div>

    <div id="site-sidebar">
        <?php require __DIR__ . "/assets/components/sidebar.php"; ?>
    </div>

    <main>
        <div class="section banner-inner">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-2">
                    <h2>Développement sur mesure</h2>
                    <h1 class="banner-h1">Développement Web Sur Mesure<?= city_phrase(' à ') ?> – Solutions Personnalisées</h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">Développement sur mesure</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-2 align-items-center">
                    <div class="col">
                        <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <h6 class="accent-color">Sur mesure</h6>
                            <h3>Des outils adaptés à votre façon de travailler</h3>
                            <p>Votre métier est unique, vos outils doivent l'être aussi. Nous développons des solutions web personnalisées qui s'adaptent à vos processus, pas l'inverse.</p>
                            <p>Intégrations avec vos logiciels existants, automatisations de tâches répétitives, tableaux de bord sur mesure... Nous transformons vos idées en outils performants.</p>
                            <div>
                                <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent">Parlons de votre projet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <img src="/assets/images/surmesure.jpg" alt="<?= img_alt('Développement web sur mesure') ?>" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-4">
                    <div class="d-flex flex-column align-items-center text-center gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <h6 class="accent-color">Nos expertises</h6>
                        <h3>Ce que nous pouvons développer pour vous</h3>
                    </div>
                    <div class="row row-cols-md-3 row-cols-1 grid-spacer-3">
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-gears fa-2x"></i>
                                </div>
                                <h4>Outils métier</h4>
                                <p>Applications web pour gérer votre activité : CRM, ERP, gestion de projets, suivi de production, planning...</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-plug fa-2x"></i>
                                </div>
                                <h4>Intégrations & API</h4>
                                <p>Connectez vos outils entre eux : synchronisation de données, connexion à des services tiers, webhooks...</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-robot fa-2x"></i>
                                </div>
                                <h4>Automatisations</h4>
                                <p>Gagnez du temps en automatisant les tâches répétitives : emails, rapports, imports/exports, notifications...</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-chart-bar fa-2x"></i>
                                </div>
                                <h4>Tableaux de bord</h4>
                                <p>Visualisez vos données clés en temps réel : statistiques, KPIs, graphiques, alertes personnalisées...</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-users-gear fa-2x"></i>
                                </div>
                                <h4>Portails clients</h4>
                                <p>Espaces sécurisés pour vos clients : suivi de commandes, documents, facturation, support...</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-database fa-2x"></i>
                                </div>
                                <h4>Bases de données</h4>
                                <p>Conception et optimisation de bases de données, migration de données, interfaces de gestion...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-4">
                    <div class="d-flex flex-column align-items-center text-center gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <h6 class="accent-color">Réalisations</h6>
                        <h3>Des projets concrets</h3>
                    </div>
                    <div class="row row-cols-md-2 row-cols-1 grid-spacer-3">
                        <div class="col">
                            <div class="card card-case animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <h4>Plateforme de gestion de chantiers</h4>
                                <p>Outil complet pour une entreprise de BTP : planning, affectation des équipes, suivi d'avancement, photos et rapports.</p>
                                <ul class="case-features">
                                    <li><i class="fa-solid fa-check"></i> Gestion multi-chantiers</li>
                                    <li><i class="fa-solid fa-check"></i> Suivi temps réel</li>
                                    <li><i class="fa-solid fa-check"></i> Export comptable</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-case animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <h4>Système de réservation</h4>
                                <p>Plateforme de réservation en ligne avec gestion des disponibilités, paiement et rappels automatiques.</p>
                                <ul class="case-features">
                                    <li><i class="fa-solid fa-check"></i> Calendrier dynamique</li>
                                    <li><i class="fa-solid fa-check"></i> Paiement en ligne</li>
                                    <li><i class="fa-solid fa-check"></i> SMS de rappel</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-case animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <h4>Dashboard analytique</h4>
                                <p>Tableau de bord centralisant les données de plusieurs sources pour une vision globale de l'activité.</p>
                                <ul class="case-features">
                                    <li><i class="fa-solid fa-check"></i> Données temps réel</li>
                                    <li><i class="fa-solid fa-check"></i> Graphiques interactifs</li>
                                    <li><i class="fa-solid fa-check"></i> Alertes automatiques</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-case animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <h4>Portail fournisseurs</h4>
                                <p>Espace dédié permettant aux fournisseurs de gérer leurs commandes, factures et communications.</p>
                                <ul class="case-features">
                                    <li><i class="fa-solid fa-check"></i> Gestion des commandes</li>
                                    <li><i class="fa-solid fa-check"></i> Documents partagés</li>
                                    <li><i class="fa-solid fa-check"></i> Messagerie intégrée</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-2 align-items-center">
                    <div class="col order-xl-2">
                        <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <h6 class="accent-color">Technologies</h6>
                            <h3>Des technologies modernes et éprouvées</h3>
                            <p>Nous utilisons les meilleures technologies du marché pour garantir performance, sécurité et évolutivité.</p>
                            <ul class="check-list">
                                <li>PHP, Python, Node.js</li>
                                <li>React, Vue.js, Angular</li>
                                <li>MySQL, PostgreSQL, MongoDB</li>
                                <li>API REST et GraphQL</li>
                                <li>Docker et déploiement cloud</li>
                                <li>Tests automatisés</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col order-xl-1">
                        <div class="image-container animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <img src="/assets/images/about.png" alt="<?= img_alt('Technologies développement web') ?>" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section app-section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-4">
                    <div class="d-flex flex-column align-items-center text-center gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <h6 class="accent-color">Gestion de votre site web</h6>
                        <h3>Une application pour piloter votre projet</h3>
                        <p>Nos clients bénéficient d'une application mobile et web pour gérer leur site en toute autonomie.</p>
                    </div>

                    <div class="row row-cols-xl-2 row-cols-1 grid-spacer-4 align-items-center">
                        <div class="col order-xl-1">
                            <div class="d-flex flex-column gspace-3 animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                                <div class="app-feature-card">
                                    <div class="app-feature-number">01</div>
                                    <div class="app-feature-content">
                                        <h5>Analytique en temps réel</h5>
                                        <p>Suivez vos visiteurs, pages vues et conversions directement depuis l'app.</p>
                                    </div>
                                </div>
                                <div class="app-feature-card">
                                    <div class="app-feature-number">02</div>
                                    <div class="app-feature-content">
                                        <h5>Gestion de contenu</h5>
                                        <p>Ajoutez vos réalisations, articles et actualités en quelques clics.</p>
                                    </div>
                                </div>
                                <div class="app-feature-card">
                                    <div class="app-feature-number">03</div>
                                    <div class="app-feature-content">
                                        <h5>Suivi commercial</h5>
                                        <p>Visualisez vos ventes et votre chiffre d'affaires en un coup d'œil.</p>
                                    </div>
                                </div>
                                <div class="app-stores">
                                    <span>Disponible sur :</span>
                                    <div class="app-stores-icons">
                                        <img src="/assets/images/appstore.png" alt="App Store">
                                        <img src="/assets/images/playstore.avif" alt="Google Play">
                                        <img src="/assets/images/web.png" alt="Web">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col order-xl-2" style="margin-top: -3%;">
                            <div class="app-mockup animate-box animated animate__animated" data-animate="animate__fadeInRight">
                                <img src="/assets/images/dashboard.png" alt="<?= img_alt('Dashboard application client LCR Digital') ?>" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section contactus-banner">
            <div class="hero-container">
                <div class="contactus-content">
                    <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Un projet spécifique ?</h3>
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Expliquez-nous votre besoin et recevez une proposition technique et financière<?= city_phrase(' à ') ?>.</p>
                    <div>
                        <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent">Demander un devis gratuit</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div id="site-footer">
        <?php require __DIR__ . "/assets/components/footer.php"; ?>
    </div>

    <script src="/assets/js/vendor/jquery.min.js"></script>
    <script src="/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/vendor/swiper-bundle.min.js"></script>
    <script src="/assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="/assets/js/vendor/fslightbox.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/swiper-script.js"></script>
    <script src="/assets/js/video_embedded.js"></script>
</body>
</html>

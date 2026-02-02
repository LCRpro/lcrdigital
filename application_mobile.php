<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Développement Application Mobile" . city_phrase(" à ") . " – Création App iOS & Android | LCR DIGITAL";
$page_description = "Développement d'application mobile" . city_phrase(" à ") . " par votre agence web LCR DIGITAL. Création d'applications iOS et Android sur mesure pour digitaliser votre entreprise. Devis gratuit.";
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
                    <h2>Application Mobile</h2>
                    <h1 class="banner-h1">Développement Application Mobile<?= city_phrase(' à ') ?> – iOS & Android</h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">Application Mobile</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-2 align-items-center">
                    <div class="col">
                        <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <h6 class="accent-color">Mobile first</h6>
                            <h3>Soyez dans la poche de vos clients</h3>
                            <p>Les smartphones représentent plus de 60% du trafic web. Une application mobile vous permet d'offrir une expérience optimisée, de fidéliser vos clients et de vous démarquer de la concurrence.</p>
                            <p>Nous développons des applications sur mesure pour iOS et Android, adaptées à vos besoins métiers : gestion de réservations, e-commerce, suivi de commandes, programmes de fidélité...</p>
                            <div>
                                <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent">Discuter de mon projet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <img src="/assets/images/mobile.jpg" alt="<?= img_alt('Développement application mobile') ?>" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-4">
                    <div class="d-flex flex-column align-items-center text-center gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <h6 class="accent-color">Types d'applications</h6>
                        <h3>Des solutions pour chaque besoin</h3>
                    </div>
                    <div class="row row-cols-md-3 row-cols-1 grid-spacer-3">
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-store fa-2x"></i>
                                </div>
                                <h4>Application commerce</h4>
                                <p>Boutique mobile avec catalogue produits, panier, paiement sécurisé et suivi de commande. Idéal pour vendre en mobilité.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-calendar-check fa-2x"></i>
                                </div>
                                <h4>Application de réservation</h4>
                                <p>Système de prise de rendez-vous, gestion d'agenda, rappels automatiques. Pour les professionnels de service.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-briefcase fa-2x"></i>
                                </div>
                                <h4>Application métier</h4>
                                <p>Outils internes pour vos équipes : gestion de stocks, suivi de chantiers, CRM mobile, reporting terrain.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-heart fa-2x"></i>
                                </div>
                                <h4>Application fidélité</h4>
                                <p>Programme de points, offres personnalisées, notifications push pour engager et fidéliser vos clients.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-utensils fa-2x"></i>
                                </div>
                                <h4>Application restauration</h4>
                                <p>Commande en ligne, click & collect, livraison, menu digital interactif et programme de fidélité.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-puzzle-piece fa-2x"></i>
                                </div>
                                <h4>Application sur mesure</h4>
                                <p>Développement personnalisé selon vos besoins spécifiques. Nous réalisons votre projet de A à Z.</p>
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
                        <h6 class="accent-color">Exemples</h6>
                        <h3>Des applications que nous avons développées</h3>
                    </div>
                    <div class="row row-cols-md-2 row-cols-1 grid-spacer-3">
                        <div class="col">
                            <div class="card card-case animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <h4>Application de gestion pour paysagiste</h4>
                                <p>Application métier permettant de gérer les chantiers, le planning des équipes, les devis et la facturation depuis le terrain.</p>
                                <ul class="case-features">
                                    <li><i class="fa-solid fa-check"></i> Planning interactif</li>
                                    <li><i class="fa-solid fa-check"></i> Suivi des chantiers</li>
                                    <li><i class="fa-solid fa-check"></i> Devis et facturation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-case animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <h4>Application de gestion de stock</h4>
                                <p>Application pour commerçants permettant de gérer l'inventaire, les commandes fournisseurs et les alertes de rupture.</p>
                                <ul class="case-features">
                                    <li><i class="fa-solid fa-check"></i> Scan code-barres</li>
                                    <li><i class="fa-solid fa-check"></i> Alertes automatiques</li>
                                    <li><i class="fa-solid fa-check"></i> Historique des mouvements</li>
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
                            <h6 class="accent-color">Notre approche</h6>
                            <h3>Un développement structuré et transparent</h3>
                            <p>Nous vous accompagnons à chaque étape, de la conception au déploiement sur les stores.</p>
                            <ul class="check-list">
                                <li>Analyse des besoins et cahier des charges</li>
                                <li>Maquettes et prototypes interactifs</li>
                                <li>Développement itératif avec validations</li>
                                <li>Tests sur différents appareils</li>
                                <li>Publication App Store et Google Play</li>
                                <li>Maintenance et évolutions</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col order-xl-1">
                        <div class="image-container animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <img src="/assets/images/about.png" alt="<?= img_alt('Processus développement application') ?>" class="img-fluid">
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
                        <h3>Une application pour piloter votre site</h3>
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
                    <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Une idée d'application ?</h3>
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Parlez-nous de votre projet et recevez une estimation personnalisée<?= city_phrase(' à ') ?>.</p>
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

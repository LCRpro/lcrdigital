<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Création Site Vitrine" . city_phrase(" à ") . " – Site Web Professionnel & Responsive | LCR DIGITAL";
$page_description = "Création de site vitrine" . city_phrase(" à ") . " par votre agence web LCR DIGITAL. Site internet professionnel, responsive et optimisé SEO pour attirer des clients et générer des contacts.";
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
                    <h2>Site Web</h2>
                    <h1 class="banner-h1">Création de Site Vitrine<?= city_phrase(' à ') ?> – Site Web Professionnel</h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">Site Web</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-2 align-items-center">
                    <div class="col">
                        <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <h6 class="accent-color">Pourquoi un site web ?</h6>
                            <h3>Soyez visible là où vos clients vous cherchent</h3>
                            <p>Aujourd'hui, 80% des consommateurs recherchent une entreprise en ligne avant de la contacter. Sans site web, vous passez à côté de clients potentiels qui choisissent vos concurrents.</p>
                            <p>Un site web professionnel vous permet de présenter vos services, rassurer vos prospects et générer des demandes de devis automatiquement, même pendant que vous dormez.</p>
                            <div>
                                <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent">Demander un devis</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <img src="/assets/images/vitrine.png" alt="<?= img_alt('Création site web') ?>" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-4">
                    <div class="d-flex flex-column align-items-center text-center gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <h6 class="accent-color">Avantages</h6>
                        <h3>Ce qu'un site web peut vous apporter</h3>
                        <p>Un investissement rentable qui travaille pour vous jour et nuit.</p>
                    </div>
                    <div class="row row-cols-md-3 row-cols-1 grid-spacer-3">
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-users fa-2x"></i>
                                </div>
                                <h4>Attirer de nouveaux clients</h4>
                                <p>Soyez visible sur Google quand vos prospects recherchent vos services<?= city_phrase(' à ') ?>. Le référencement local vous place devant vos concurrents.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-shield-halved fa-2x"></i>
                                </div>
                                <h4>Renforcer votre crédibilité</h4>
                                <p>Un site professionnel inspire confiance. Présentez vos réalisations, témoignages clients et certifications pour rassurer vos prospects.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-clock fa-2x"></i>
                                </div>
                                <h4>Gagner du temps</h4>
                                <p>Répondez aux questions fréquentes, présentez vos tarifs et recevez des demandes qualifiées. Fini les appels pour des informations basiques.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-chart-line fa-2x"></i>
                                </div>
                                <h4>Mesurer vos résultats</h4>
                                <p>Suivez le nombre de visiteurs, les pages consultées et les demandes de contact. Prenez des décisions basées sur des données concrètes.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-mobile-screen fa-2x"></i>
                                </div>
                                <h4>Être accessible partout</h4>
                                <p>Responsive design : votre site s'adapte à tous les écrans. Vos clients vous trouvent aussi facilement sur mobile que sur ordinateur.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-bullhorn fa-2x"></i>
                                </div>
                                <h4>Communiquer efficacement</h4>
                                <p>Partagez vos actualités, promotions et nouveautés. Votre site devient le hub central de votre communication digitale.</p>
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
                            <h3>Un site conçu pour convertir</h3>
                            <p>Nous ne créons pas de simples "sites vitrines". Chaque page est pensée pour guider vos visiteurs vers l'action : demande de devis, appel téléphonique ou achat.</p>
                            <ul class="check-list">
                                <li>Design moderne et professionnel</li>
                                <li>Navigation intuitive et fluide</li>
                                <li>Optimisation SEO dès la conception</li>
                                <li>Formulaires de contact optimisés</li>
                                <li>Temps de chargement ultra-rapide</li>
                                <li>Sécurité SSL et sauvegardes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col order-xl-1">
                        <div class="image-container animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <img src="/assets/images/about.png" alt="<?= img_alt('Site web optimisé conversion') ?>" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-4">
                    <div class="d-flex flex-column align-items-center text-center gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <h6 class="accent-color">Processus</h6>
                        <h3>Comment se déroule la création de votre site ?</h3>
                    </div>
                    <div class="row row-cols-md-4 row-cols-1 grid-spacer-3">
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 text-center animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="step-number">1</div>
                                <h5>Échange et analyse</h5>
                                <p>Nous discutons de vos objectifs, votre cible et vos concurrents pour définir la meilleure stratégie.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 text-center animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="step-number">2</div>
                                <h5>Conception et développement</h5>
                                <p>Nous structurons votre site et le codons avec les meilleures technologies pour garantir performance et sécurité.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 text-center animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="step-number">3</div>
                                <h5>Mise en ligne</h5>
                                <p>Tests, optimisations et lancement. Nous vous formons à la gestion de votre site.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 text-center animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="step-number">4</div>
                                <h5>Suivi SEO</h5>
                                <p>Nous suivons vos positions et optimisons votre référencement pour une visibilité durable.</p>
                            </div>
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
                    <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Prêt à développer votre présence en ligne ?</h3>
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Discutons de votre projet et voyons comment un site web peut booster votre activité<?= city_phrase(' à ') ?>.</p>
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

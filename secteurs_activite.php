<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Création Site Internet par Secteur d'Activité" . city_phrase(" à ") . " | LCR DIGITAL";
$page_description = "Création de site internet" . city_phrase(" à ") . " adapté à votre secteur : artisans, restaurants, médecins, avocats, commerce. Agence web spécialisée par métier. Devis gratuit.";
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
                    <h2>Secteurs d'activité</h2>
                    <h1 class="banner-h1">Création de Site Internet par Secteur d'Activité<?= city_phrase(' à ') ?></h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">Secteurs d'activité</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-2 text-center mb-5 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                    <h6 class="accent-color">Notre expertise</h6>
                    <h3>Chaque secteur a ses spécificités</h3>
                    <p>Nous concevons des sites web qui répondent aux besoins spécifiques de votre activité, avec les fonctionnalités adaptées à votre métier.</p>
                </div>

                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 grid-spacer-3">

                    <div class="col">
                        <div class="card card-sector animate-box animated animate__animated" data-animate="animate__fadeInUp">
                            <div class="sector-icon">
                                <i class="fa-solid fa-spa fa-3x"></i>
                            </div>
                            <h4>Beauté & Bien-être</h4>
                            <p>Salons de coiffure, instituts de beauté, spas, coaches sportifs...</p>
                            <ul class="sector-features">
                                <li><i class="fa-solid fa-check"></i> Réservation en ligne</li>
                                <li><i class="fa-solid fa-check"></i> Galerie de réalisations</li>
                                <li><i class="fa-solid fa-check"></i> Présentation des prestations</li>
                                <li><i class="fa-solid fa-check"></i> Avis clients intégrés</li>
                            </ul>
                            <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent-outline btn-sm">En savoir plus</a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-sector animate-box animated animate__animated" data-animate="animate__fadeInUp">
                            <div class="sector-icon">
                                <i class="fa-solid fa-utensils fa-3x"></i>
                            </div>
                            <h4>Restauration & Hôtellerie</h4>
                            <p>Restaurants, hôtels, traiteurs, food trucks, bars...</p>
                            <ul class="sector-features">
                                <li><i class="fa-solid fa-check"></i> Menu digital interactif</li>
                                <li><i class="fa-solid fa-check"></i> Réservation de table</li>
                                <li><i class="fa-solid fa-check"></i> Click & Collect</li>
                                <li><i class="fa-solid fa-check"></i> Intégration Google Maps</li>
                            </ul>
                            <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent-outline btn-sm">En savoir plus</a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-sector animate-box animated animate__animated" data-animate="animate__fadeInUp">
                            <div class="sector-icon">
                                <i class="fa-solid fa-hammer fa-3x"></i>
                            </div>
                            <h4>Artisans & Travaux</h4>
                            <p>Plombiers, électriciens, maçons, peintres, paysagistes...</p>
                            <ul class="sector-features">
                                <li><i class="fa-solid fa-check"></i> Portfolio de réalisations</li>
                                <li><i class="fa-solid fa-check"></i> Demande de devis en ligne</li>
                                <li><i class="fa-solid fa-check"></i> Zone d'intervention</li>
                                <li><i class="fa-solid fa-check"></i> Certifications et labels</li>
                            </ul>
                            <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent-outline btn-sm">En savoir plus</a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-sector animate-box animated animate__animated" data-animate="animate__fadeInUp">
                            <div class="sector-icon">
                                <i class="fa-solid fa-stethoscope fa-3x"></i>
                            </div>
                            <h4>Médical & Santé</h4>
                            <p>Médecins, dentistes, kinés, infirmiers, ostéopathes...</p>
                            <ul class="sector-features">
                                <li><i class="fa-solid fa-check"></i> Prise de rendez-vous en ligne</li>
                                <li><i class="fa-solid fa-check"></i> Présentation du cabinet</li>
                                <li><i class="fa-solid fa-check"></i> Informations pratiques</li>
                                <li><i class="fa-solid fa-check"></i> Conformité RGPD</li>
                            </ul>
                            <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent-outline btn-sm">En savoir plus</a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-sector animate-box animated animate__animated" data-animate="animate__fadeInUp">
                            <div class="sector-icon">
                                <i class="fa-solid fa-scale-balanced fa-3x"></i>
                            </div>
                            <h4>Droit & Juridique</h4>
                            <p>Avocats, notaires, huissiers, experts-comptables...</p>
                            <ul class="sector-features">
                                <li><i class="fa-solid fa-check"></i> Présentation des domaines</li>
                                <li><i class="fa-solid fa-check"></i> Prise de rendez-vous</li>
                                <li><i class="fa-solid fa-check"></i> Articles juridiques</li>
                                <li><i class="fa-solid fa-check"></i> Image professionnelle</li>
                            </ul>
                            <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent-outline btn-sm">En savoir plus</a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-sector animate-box animated animate__animated" data-animate="animate__fadeInUp">
                            <div class="sector-icon">
                                <i class="fa-solid fa-car fa-3x"></i>
                            </div>
                            <h4>Automobile & Transport</h4>
                            <p>Garages, auto-écoles, VTC, transporteurs, concessionnaires...</p>
                            <ul class="sector-features">
                                <li><i class="fa-solid fa-check"></i> Catalogue de véhicules</li>
                                <li><i class="fa-solid fa-check"></i> Prise de rendez-vous atelier</li>
                                <li><i class="fa-solid fa-check"></i> Demande de devis</li>
                                <li><i class="fa-solid fa-check"></i> Système de réservation</li>
                            </ul>
                            <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent-outline btn-sm">En savoir plus</a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-sector animate-box animated animate__animated" data-animate="animate__fadeInUp">
                            <div class="sector-icon">
                                <i class="fa-solid fa-house fa-3x"></i>
                            </div>
                            <h4>Immobilier & Location</h4>
                            <p>Agences immobilières, gestionnaires, locations saisonnières...</p>
                            <ul class="sector-features">
                                <li><i class="fa-solid fa-check"></i> Catalogue de biens</li>
                                <li><i class="fa-solid fa-check"></i> Filtres de recherche</li>
                                <li><i class="fa-solid fa-check"></i> Visite virtuelle</li>
                                <li><i class="fa-solid fa-check"></i> Estimation en ligne</li>
                            </ul>
                            <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent-outline btn-sm">En savoir plus</a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-sector animate-box animated animate__animated" data-animate="animate__fadeInUp">
                            <div class="sector-icon">
                                <i class="fa-solid fa-store fa-3x"></i>
                            </div>
                            <h4>Commerce & Retail</h4>
                            <p>Boutiques, commerces de proximité, fleuristes, cavistes...</p>
                            <ul class="sector-features">
                                <li><i class="fa-solid fa-check"></i> Catalogue produits</li>
                                <li><i class="fa-solid fa-check"></i> Click & Collect</li>
                                <li><i class="fa-solid fa-check"></i> Horaires et localisation</li>
                                <li><i class="fa-solid fa-check"></i> Promotions et actualités</li>
                            </ul>
                            <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent-outline btn-sm">En savoir plus</a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-sector animate-box animated animate__animated" data-animate="animate__fadeInUp">
                            <div class="sector-icon">
                                <i class="fa-solid fa-graduation-cap fa-3x"></i>
                            </div>
                            <h4>Formation & Éducation</h4>
                            <p>Formateurs, coachs, écoles, centres de formation, e-learning...</p>
                            <ul class="sector-features">
                                <li><i class="fa-solid fa-check"></i> Catalogue de formations</li>
                                <li><i class="fa-solid fa-check"></i> Inscription en ligne</li>
                                <li><i class="fa-solid fa-check"></i> Espace membre</li>
                                <li><i class="fa-solid fa-check"></i> Témoignages et certifications</li>
                            </ul>
                            <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent-outline btn-sm">En savoir plus</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-2 align-items-center">
                    <div class="col">
                        <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <h6 class="accent-color">Sur mesure</h6>
                            <h3>Votre secteur n'est pas listé ?</h3>
                            <p>Nous travaillons avec tous types d'entreprises et d'activités. Que vous soyez commerçant, consultant, association ou startup, nous adaptons notre approche à vos besoins spécifiques.</p>
                            <p>Chaque projet est unique. Nous prenons le temps de comprendre votre métier, vos clients et vos objectifs pour créer un site qui vous ressemble et qui convertit.</p>
                            <ul class="check-list">
                                <li>Analyse de votre marché et concurrence</li>
                                <li>Fonctionnalités adaptées à votre activité</li>
                                <li>Design personnalisé à votre image</li>
                                <li>Accompagnement sur-mesure</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <img src="/assets/images/about.png" alt="<?= img_alt('Création site web sur mesure') ?>" class="img-fluid">
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
                    <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Parlons de votre projet</h3>
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Expliquez-nous votre activité, nous vous proposons une solution adaptée<?= city_phrase(' à ') ?>.</p>
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

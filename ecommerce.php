<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Création Site E-commerce" . city_phrase(" à ") . " – Boutique en Ligne & Vente en Ligne | LCR DIGITAL";
$page_description = "Création de site e-commerce" . city_phrase(" à ") . " par votre agence web LCR DIGITAL. Boutique en ligne performante avec paiement sécurisé, tunnel d'achat optimisé et gestion des stocks. Devis gratuit.";
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
                    <h2>E-commerce</h2>
                    <h1 class="banner-h1">Création de Site E-commerce<?= city_phrase(' à ') ?> – Boutique en Ligne</h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">E-commerce</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-2 align-items-center">
                    <div class="col">
                        <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <h6 class="accent-color">Vendre en ligne</h6>
                            <h3>Ouvrez votre commerce 24h/24, 7j/7</h3>
                            <p>Le e-commerce représente une opportunité majeure pour développer votre activité. Avec une boutique en ligne, vous pouvez vendre vos produits à tout moment, sans limite géographique.</p>
                            <p>Nous créons des sites e-commerce performants, avec un tunnel d'achat optimisé pour maximiser vos conversions et transformer vos visiteurs en clients.</p>
                            <div>
                                <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent">Lancer mon projet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <img src="/assets/images/ecommerce.png" alt="<?= img_alt('Création site e-commerce') ?>" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-4">
                    <div class="d-flex flex-column align-items-center text-center gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <h6 class="accent-color">Fonctionnalités</h6>
                        <h3>Tout ce dont vous avez besoin pour vendre</h3>
                        <p>Une boutique complète avec toutes les fonctionnalités essentielles.</p>
                    </div>
                    <div class="row row-cols-md-3 row-cols-1 grid-spacer-3">
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-boxes-stacked fa-2x"></i>
                                </div>
                                <h4>Gestion des produits</h4>
                                <p>Ajoutez facilement vos produits avec photos, descriptions, variantes (taille, couleur) et gestion des stocks en temps réel.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-credit-card fa-2x"></i>
                                </div>
                                <h4>Paiement sécurisé</h4>
                                <p>Intégration des solutions de paiement (Stripe, PayPal, CB) avec sécurité SSL et conformité PCI-DSS.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-truck-fast fa-2x"></i>
                                </div>
                                <h4>Livraison flexible</h4>
                                <p>Configuration des modes de livraison, calcul automatique des frais, suivi des colis et click & collect.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-tags fa-2x"></i>
                                </div>
                                <h4>Promotions & codes promo</h4>
                                <p>Créez des offres spéciales, soldes, codes de réduction et programmes de fidélité pour booster vos ventes.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-chart-pie fa-2x"></i>
                                </div>
                                <h4>Tableau de bord</h4>
                                <p>Suivez vos ventes, panier moyen, produits populaires et comportement clients avec des statistiques détaillées.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="service-icon">
                                    <i class="fa-solid fa-mobile-screen fa-2x"></i>
                                </div>
                                <h4>100% responsive</h4>
                                <p>Une expérience d'achat parfaite sur mobile, tablette et ordinateur. Plus de 60% des achats se font sur smartphone.</p>
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
                            <h6 class="accent-color">Optimisation</h6>
                            <h3>Un tunnel de vente pensé pour convertir</h3>
                            <p>Le design et l'ergonomie de votre boutique ont un impact direct sur vos ventes. Nous optimisons chaque étape du parcours client pour réduire les abandons de panier.</p>
                            <ul class="check-list">
                                <li>Navigation intuitive et recherche efficace</li>
                                <li>Fiches produits convaincantes</li>
                                <li>Panier visible et accessible</li>
                                <li>Checkout simplifié en 3 étapes</li>
                                <li>Relance des paniers abandonnés</li>
                                <li>Emails de confirmation automatiques</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col order-xl-1">
                        <div class="image-container animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <img src="/assets/images/about.png" alt="<?= img_alt('Tunnel de vente e-commerce') ?>" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-4">
                    <div class="d-flex flex-column align-items-center text-center gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <h6 class="accent-color">Technologies</h6>
                        <h3>Les meilleures solutions e-commerce</h3>
                    </div>
                    <div class="row row-cols-md-3 row-cols-1 grid-spacer-3">
                        <div class="col">
                            <div class="card card-tech animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <h4>WooCommerce</h4>
                                <p>Solution flexible basée sur WordPress, idéale pour les petites et moyennes boutiques. Facile à gérer en autonomie.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-tech animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <h4>Shopify</h4>
                                <p>Plateforme tout-en-un pour lancer rapidement votre boutique. Hébergement et maintenance inclus.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-tech animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <h4>Sur mesure</h4>
                                <p>Développement personnalisé pour les projets complexes nécessitant des fonctionnalités spécifiques.</p>
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
                        <h3>Une application pour piloter votre boutique</h3>
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
                    <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Prêt à vendre en ligne ?</h3>
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Discutons de votre projet e-commerce et trouvons la solution adaptée à vos besoins<?= city_phrase(' à ') ?>.</p>
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

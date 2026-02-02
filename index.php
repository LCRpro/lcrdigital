<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Agence Web" . city_phrase(" à ") . " – Création Site Internet, Site Vitrine & E-commerce | LCR DIGITAL";
$page_description = "LCR DIGITAL, agence web" . city_phrase(" à ") . " spécialisée en création de site internet professionnel : site vitrine, site e-commerce, application mobile et développement sur mesure. Devis gratuit.";
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
        
        <div class="section banner-home">
            <div class="banner-video-container" id="videoContainer"></div>
            <div class="hero-container">
                <div class="banner-content">
                    <div class="banner-hero-grid">
                        <div class="banner-hero-main">
                            <div class="banner-sub-heading">
                                <h6>AGENCE DIGITALE</h6>
                            </div>
                            <div class="brand-mark">
                                <img src="/assets/images/lcr-digital-logo.png" alt="LCR DIGITAL" class="construction-logo img-fluid">
                                <span>LCR DIGITAL</span>
                            </div>
                            <h1 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                Création de Site Internet <span class="h1-wrapper">Professionnel</span>
                            </h1>
                            <p>Nous concevons des expériences web rapides, lisibles et SEO-ready pour générer plus de contacts qualifiés.</p>
                            <div class="hero-cta">
                                <a href="<?= e(route_with_city("services", $city_slug)) ?>" class="btn btn-accent">Nos services</a>
                                <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent-outline">Demander un devis</a>
                            </div>
                            <div class="hero-highlights">
                                <span class="hero-highlight">SEO local &amp; technique</span>
                                <span class="hero-highlight">UX orientée conversion</span>
                                <span class="hero-highlight">Performance mesurable</span>
                            </div>
                        </div>
                        <div class="banner-hero-side">
                            <div class="hero-card">
                                <h4>Inclus dans nos offres</h4>
                                <ul class="hero-list">
                                    <li>Application mobile client + modules dédiés</li>
                                    <li>SEO local &amp; technique pour une vraie visibilité</li>
                                    <li>Performances, vitesse et suivi des conversions</li>
                                </ul>
                                <a href="<?= e(route_with_city("services", $city_slug)) ?>" class="hero-link">Voir tous nos services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
        <div class="section about-section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-4 align-items-center">
                    <div class="col">
                        <div class="about-image-wrapper animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <div class="about-image-main">
                                <img src="/assets/images/about.png" alt="<?= img_alt('Agence web LCR Digital') ?>" class="img-fluid">
                            </div>
                            <div class="about-stats-card">
                                <div class="about-stat">
                                    <span class="about-stat-number">5+</span>
                                    <span class="about-stat-label">Années d'expérience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column gspace-3 animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <h6 class="accent-color">L'agence LCR Digital</h6>
                            <h3>Votre partenaire digital en Normandie</h3>
                            <p>Nous accompagnons les TPE, PME et indépendants dans leur transformation digitale. Notre approche : comprendre votre métier, définir des objectifs clairs et créer un site qui génère des résultats concrets.</p>

                            <div class="about-features">
                                <div class="about-feature-item">
                                    <div class="about-feature-icon">
                                        <i class="fa-solid fa-bullseye"></i>
                                    </div>
                                    <div class="about-feature-text">
                                        <h5>Orienté résultats</h5>
                                        <p>Des sites pensés pour convertir vos visiteurs en clients.</p>
                                    </div>
                                </div>
                                <div class="about-feature-item">
                                    <div class="about-feature-icon">
                                        <i class="fa-solid fa-handshake"></i>
                                    </div>
                                    <div class="about-feature-text">
                                        <h5>Proximité</h5>
                                        <p>Un interlocuteur unique, disponible et réactif.</p>
                                    </div>
                                </div>
                                <div class="about-feature-item">
                                    <div class="about-feature-icon">
                                        <i class="fa-solid fa-rocket"></i>
                                    </div>
                                    <div class="about-feature-text">
                                        <h5>Performance</h5>
                                        <p>Sites rapides, SEO optimisé et suivi des conversions.</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <a href="<?= e(route_with_city("agence", $city_slug)) ?>" class="btn btn-accent">Découvrir l'agence</a>
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
                        <h6 class="accent-color">Services</h6>
                        <h3>Des solutions web qui génèrent des résultats</h3>
                        <p>De la landing page au e-commerce complet, nous construisons des sites adaptés à vos objectifs, optimisés pour le SEO et la conversion.</p>
                    </div>
                    <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1 grid-spacer-3">
                        <div class="col">
                            <div class="card card-service-wrapper animate-box animated animate__animated" data-animate="animate__fadeIn">
                                <div class="card card-service highlight-service">
                                    <div>
                                        <img src="/assets/images/S5.webp" alt="<?= img_alt('Création site web') ?>" class="img-fluid">
                                    </div>
                                    <h4>Site Web</h4>
                                    <p>Sites vitrine, landing pages et catalogues pour présenter votre activité et générer des contacts.</p>
                                    <div class="service-cta">
                                        <a href="<?= e(route_with_city("site-web", $city_slug)) ?>" class="service-link">En savoir plus</a>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card card-service-wrapper animate-box animated animate__animated" data-animate="animate__fadeIn">
                                <div class="card card-service">
                                    <div>
                                        <img src="/assets/images/S3.webp" alt="<?= img_alt('Création site e-commerce') ?>" class="img-fluid">
                                    </div>
                                    <h4>E-commerce</h4>
                                    <p>Boutique en ligne prête à vendre : tunnel d'achat optimisé et paiements sécurisés.</p>
                                    <div class="service-cta">
                                        <a href="<?= e(route_with_city("ecommerce", $city_slug)) ?>" class="service-link">En savoir plus</a>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card card-service-wrapper animate-box animated animate__animated" data-animate="animate__fadeIn">
                                <div class="card card-service">
                                    <div>
                                        <img src="/assets/images/S6.webp" alt="<?= img_alt('Création application mobile') ?>" class="img-fluid">
                                    </div>
                                    <h4>Application Mobile</h4>
                                    <p>Applications iOS et Android pour fidéliser vos clients et digitaliser votre activité.</p>
                                    <div class="service-cta">
                                        <a href="<?= e(route_with_city("application-mobile", $city_slug)) ?>" class="service-link">En savoir plus</a>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card card-service-wrapper animate-box animated animate__animated" data-animate="animate__fadeIn">
                                <div class="card card-service">
                                    <div>
                                        <img src="/assets/images/S4.webp" alt="<?= img_alt('Développement web sur mesure') ?>" class="img-fluid">
                                    </div>
                                    <h4>Sur mesure</h4>
                                    <p>Outils métier, intégrations API, automatisations et fonctionnalités personnalisées.</p>
                                    <div class="service-cta">
                                        <a href="<?= e(route_with_city("developpement-sur-mesure", $city_slug)) ?>" class="service-link">En savoir plus</a>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
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
                    <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Parlons de votre projet digital</h3>
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Un site performant commence par une bonne stratégie. Nous vous aidons à cadrer le message, la structure et les priorités pour générer plus de contacts et de ventes.</p>
                    <div>
                        <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>

        
       <div class="section portfolio-banner">
    <div class="hero-container">
        <div class="d-flex flex-column gspace-4 position-relative z-2">
            <div class="d-flex flex-column gspace-2 align-items-center text-center animate-box animated animate__animated" data-animate="animate__fadeInUp">
                <h6 class="accent-color">Réalisations</h6>
                <h3>Des projets qui transforment</h3>
                <p>
                    Une sélection de réalisations et d'accompagnements pensés pour la performance et la visibilité.
                </p>
            </div>
            <div class="row row-cols-xl-2 row-cols-md-2 row-cols-1 
                        grid-spacer-3 grid-spacer-xl-5 justify-content-center">
              <div class="col-xl-5 col-lg-6 col-md-10">

                    <div class="portfolio-layout animate-box animated fast animate__animated"
                         data-animate="animate__fadeInUp">

                        <div class="portfolio-header">
                            <div class="portfolio-image-wrapper">
                                <div class="image-container portfolio-image">
                                    <img src="/assets/images/lapouge-paysage.png" alt="<?= img_alt('Site vitrine Lapouge Paysage') ?>" class="img-fluid">
                                </div>
                            </div>
                            <h4 class="number">01</h4>
                        </div>

                        <div class="portfolio-content">
                            <h5>Site vitrine pour un paysagiste</h5>

                            <div class="d-flex flex-row gspace-4">
                                <div class="portfolio-meta">
                                    <i class="fa-solid fa-users"></i>
                                    <div class="d-grid">
                                        <span class="title">Client</span>
                                        <p>Lapouge Paysage</p>
                                    </div>
                                </div>
                                <div class="portfolio-meta">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <div class="d-grid">
                                        <span class="title">Date</span>
                                        <p>Janvier 2026</p>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-description">
                                <p>
                                    Site vitrine permettant à l’entreprise Lapouge Paysage de présenter ses services.
                                </p>
                                <div class="portfolio-btn-wrapper">
                                    <div class="portfolio-btn">
                                        <a href="https://lapougepaysage.fr" target="_blank" class="button">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
              <div class="col-xl-5 col-lg-6 col-md-10">

                    <div class="portfolio-layout animate-box animated animate__animated"
                         data-animate="animate__fadeInUp">

                        <div class="portfolio-header">
                            <div class="portfolio-image-wrapper">
                                <div class="image-container portfolio-image">
                                    <img src="/assets/images/lcr-digital.png" alt="<?= img_alt('Site vitrine LCR Digital') ?>" class="img-fluid">
                                </div>
                            </div>
                            <h4 class="number">02</h4>
                        </div>

                        <div class="portfolio-content">
                            <h5>Site vitrine LCR DIGITAL</h5>

                            <div class="d-flex flex-row gspace-4">
                                <div class="portfolio-meta">
                                    <i class="fa-solid fa-users"></i>
                                    <div class="d-grid">
                                        <span class="title">Client</span>
                                        <p>LCR DIGITAL</p>
                                    </div>
                                </div>
                                <div class="portfolio-meta">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <div class="d-grid">
                                        <span class="title">Date</span>
                                        <p>Décembre 2025</p>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-description">
                                <p>
                                    Site vitrine de notre agence web avec présentation de nos services et réalisations.
                                </p>
                               <div class="portfolio-btn-wrapper">
                                    <div class="portfolio-btn">
                                        <a href="https://lcr-digital.fr" target="_blank" class="button">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <p class="text-center mt-4 opacity-75">
                Ces projets ne sont qu’un aperçu : de nombreuses autres réalisations ont vu le jour,
                mais toutes ne peuvent être présentées ici.
            </p>

        </div>
    </div>
</div>


        
  <div class="section">
    <div class="hero-container">
        <div class="row row-cols-xl-2 row-cols-1 grid-spacer-2">

            <!-- COL GAUCHE -->
            <div class="col col-xl-4">
                <div class="d-flex flex-column flex-md-row flex-xl-column gspace-2">

                    <!-- STRATÉGIE DIGITALE -->
                    <div class="card card-featured creative-solution animate-box animated animate__animated"
                         data-animate="animate__fadeInLeft">
                        <h4>Stratégie digitale</h4>
                        <p>
                            Positionnement, message et structure pour concevoir
                            des sites clairs, efficaces et orientés conversion.
                        </p>
                        <div>
                            <a href="<?= e(route_with_city("agence", $city_slug)) ?>" class="btn btn-accent-2">
                                <div class="d-flex flex-row align-items-center gspace-1">
                                    <span>Découvrir l’agence</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- ACCESSIBILITÉ -->
                    <div class="card card-featured bussines-avaliable animate-box animated animate__animated"
                         data-animate="animate__fadeInDown">
                        <div class="d-flex flex-row gspace-1 align-items-center">
                            <i class="fa-solid fa-check"></i>
                            <h5>Solutions accessibles</h5>
                        </div>
                        <p>
                            Des offres pensées pour les TPE, PME et indépendants,
                            avec un accompagnement simple et transparent.
                        </p>
                    </div>

                </div>
            </div>

            <!-- COL DROITE -->
            <div class="col col-xl-8">
                <div class="d-flex flex-column gspace-2">

                    <div class="d-flex flex-md-row flex-column gspace-2">

                        <!-- SITE VITRINE -->
<div class="card card-featured client-rating animate-box animated animate__animated" 
data-animate="animate__fadeIn">                             
                            <h4>Création de site vitrine</h4>
                            <p>
                                Présentez votre activité avec un site professionnel,
                                rapide et optimisé pour le référencement local.
                            </p>
                            <div>
                                <a href="<?= e(route_with_city("site-web", $city_slug)) ?>" class="btn btn-accent-2">
                                    <div class="d-flex flex-row align-items-center gspace-1">
                                        <span>Voir l’offre</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- DÉVELOPPEMENT SUR MESURE -->
                        <div class="card card-featured solid-development animate-box animated animate__animated"
                             data-animate="animate__fadeInUp">
                            <h4>Développement web sur mesure</h4>
                            <p>
                                Des sites fiables, sécurisés et évolutifs,
                                conçus pour accompagner votre croissance.
                            </p>
                            <div>
                                <a href="<?= e(route_with_city("developpement-sur-mesure", $city_slug)) ?>" class="btn btn-accent-2">
                                    <div class="d-flex flex-row align-items-center gspace-1">
                                        <span>Découvrir le service</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- ACCOMPAGNEMENT -->
                    <div class="card card-featured experience animate-box animated animate__animated"
                         data-animate="animate__fadeInRight">
                        <h4>Accompagnement & suivi</h4>
                        <p>
                            Un suivi clair à chaque étape : conception, mise en ligne,
                            évolutions futures et optimisation continue.
                        </p>
                        <div>
                            <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent-2">
                                <div class="d-flex flex-row align-items-center gspace-1">
                                    <span>Discuter du projet</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
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
    <script src="/assets/js/banner.js"></script>
    <script src="/assets/js/swiper-script.js"></script>
    <script src="/assets/js/video_embedded.js"></script>
</body>
</html>

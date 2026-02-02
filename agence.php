<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Agence Web" . city_phrase(" à ") . " – Agence Création Site Internet | LCR DIGITAL";
$page_description = "LCR DIGITAL, agence web" . city_phrase(" à ") . " spécialisée en création de site internet. Agence digitale experte en site vitrine, e-commerce et application mobile. Devis gratuit.";
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
                    <h2>L'agence</h2>
                    <h1 class="banner-h1">Agence Web<?= city_phrase(' à ') ?> – Création de Site Internet Professionnel</h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">L'agence</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="section about-banner">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-2">
                    <div class="col">
                        <div class="d-flex flex-column gspace-2 position-relative animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <div class="card card-about">
                                <span class="wrapper">
                                    <span class="number">5</span>
                                </span>
                                <p class="title">ans d'expérience</p>
                            </div>
                            <div class="image-container about-img">
                                <img src="/assets/images/about.png" alt="<?= img_alt('Agence web LCR Digital') ?>" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="about-detail animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <h6 class="accent-color">Qui sommes-nous ?</h6>
                            <h3>Une agence web à taille humaine, orientée résultats</h3>
                            <p>LCR DIGITAL est née d'une conviction : les entreprises locales méritent des sites web aussi performants que ceux des grandes marques, mais adaptés à leur budget et leurs besoins.</p>
                            <p>Nous accompagnons les TPE, PME et indépendants de Normandie dans leur transformation digitale. Notre approche est simple : comprendre votre métier, définir des objectifs clairs et créer un site qui génère des résultats concrets.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-4">
                    <div class="d-flex flex-column align-items-center text-center gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <h6 class="accent-color">Nos valeurs</h6>
                        <h3>Ce qui nous différencie</h3>
                    </div>
                    <div class="row row-cols-md-3 row-cols-1 grid-spacer-3">
                        <div class="col">
                            <div class="card card-value animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="value-icon">
                                    <i class="fa-solid fa-handshake fa-2x"></i>
                                </div>
                                <h4>Proximité</h4>
                                <p>Un interlocuteur unique, disponible et réactif. Nous privilégions les échanges directs et la transparence à chaque étape de votre projet.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-value animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="value-icon">
                                    <i class="fa-solid fa-bullseye fa-2x"></i>
                                </div>
                                <h4>Performance</h4>
                                <p>Un site n'est pas une dépense, c'est un investissement. Nous concevons des sites qui génèrent du trafic, des contacts et des ventes.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-value animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div class="value-icon">
                                    <i class="fa-solid fa-lightbulb fa-2x"></i>
                                </div>
                                <h4>Innovation</h4>
                                <p>Technologies modernes, bonnes pratiques et veille constante. Votre site bénéficie des meilleures solutions du marché.</p>
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
                            <h6 class="accent-color">Notre expertise</h6>
                            <h3>Des compétences complètes pour votre projet</h3>
                            <p>De la stratégie à la mise en ligne, nous maîtrisons l'ensemble des compétences nécessaires pour mener à bien votre projet digital.</p>
                            <ul class="check-list">
                                <li>Stratégie digitale et positionnement</li>
                                <li>Design UX/UI moderne et responsive</li>
                                <li>Développement web et mobile</li>
                                <li>Référencement naturel (SEO)</li>
                                <li>Maintenance et évolutions</li>
                                <li>Formation et accompagnement</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col order-xl-1">
                        <div class="image-container animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <img src="/assets/images/vitrine.png" alt="<?= img_alt('Expertise agence web') ?>" class="img-fluid">
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
                    <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Envie de travailler avec nous ?</h3>
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Discutons de votre projet et voyons comment nous pouvons vous accompagner<?= city_phrase(' à ') ?>.</p>
                    <div>
                        <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent">Nous contacter</a>
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

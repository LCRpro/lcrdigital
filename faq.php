<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "FAQ – Vos questions sur la création de site web" . city_phrase(" à ") . " | LCR DIGITAL";
$page_description = "Retrouvez les réponses aux questions les plus fréquentes sur nos services de création de sites web, applis mobiles et développement personnalisé" . city_phrase(" à ") . ".";
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
                    <h2>FAQ</h2>
                    <h1 class="banner-h1">Foire aux questions – Agence web LCR DIGITAL<?= city_phrase(' à ') ?></h1>
                    <nav class="breadcrumb">
                        <a href="/agence-web-<?= e($city_slug) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">FAQ</a>
                    </nav>
                </div>
            </div>
        </div>

        
        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-md-2 row-cols-1 g-md-5 g-3">
                    <div class="col col-md-8">
                        <div class="d-flex flex-column">
                            <div class="accordion d-flex flex-column gspace-2" id="faqAccordion1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                            Depuis quand l’agence existe-t-elle ?
                                        </button>
                                    </h2>
                                    <div id="faq1" class="accordion-collapse collapse show"
                                        data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <span>
                                                Nous accompagnons des entreprises depuis 5 ans, principalement en Normandie, avec des projets orientés visibilité et conversion.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="true"
                                            aria-controls="faq2">
                                            Quels services proposez-vous ?
                                        </button>
                                    </h2>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <span>
                                                Création de sites vitrine et e-commerce, SEO, contenu, UX/UI, et maintenance. Nous proposons aussi des optimisations de performance.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                            aria-controls="faq3">
                                            Avec quels types d’entreprises travaillez-vous ?
                                        </button>
                                    </h2>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <span>
                                                TPE, PME, indépendants et marques locales : santé, BTP, artisans, e-commerce et services.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                            aria-controls="faq4">
                                            Quel est votre processus de travail ?
                                        </button>
                                    </h2>
                                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <span>
                                                Audit, définition des objectifs, maquettes, développement, intégration des contenus, SEO puis mise en ligne.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                            Comment garantissez-vous les délais et le budget ?
                                        </button>
                                    </h2>
                                    <div id="faq5" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <span>
                                                Nous définissons un périmètre clair, un planning précis et validons chaque étape avant la suivante.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="true"
                                            aria-controls="faq6">
                                            Avez-vous des exemples de projets similaires ?
                                        </button>
                                    </h2>
                                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <span>
                                                Oui. Nous partageons des cas concrets selon votre secteur (vitrine, e-commerce, B2B).
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="false"
                                            aria-controls="faq7">
                                            Comment mesurez-vous la réussite d’un projet ?
                                        </button>
                                    </h2>
                                    <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <span>
                                                Trafic, conversions, demandes de contact, ventes et performance SEO.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="false"
                                            aria-controls="faq8">
                                            Pouvez-vous donner des résultats mesurables ?
                                        </button>
                                    </h2>
                                    <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <span>
                                                Oui : hausse de visibilité locale, meilleure conversion et augmentation des demandes.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq9" aria-expanded="false"
                                            aria-controls="faq9">
                                            Quels KPIs suivez-vous ?
                                        </button>
                                    </h2>
                                    <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <span>
                                                Taux de conversion, positions SEO, trafic qualifié, coût par lead et ROI.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-column gspace-2">
                            <div class="faq-contact-card animate-box animated animate__animated" data-animate="animate__fadeInRight">
                                <h4>Une autre question ?</h4>
                                <p class="mb-0">Contactez-nous, on vous répond rapidement.</p>
                                <div class="d-flex flex-row align-items-center gspace-2">
                                    <i class="fa-solid fa-2x fa-phone-volume accent-color"></i>
                                    <div class="d-grid">
                                        <h5>Téléphone</h5>
                                        <p class="mb-0">06 66 15 80 58</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center gspace-2">
                                    <i class="fa-solid fa-2x fa-envelope accent-color"></i>
                                    <div class="d-grid">
                                        <h5>Email</h5>
                                        <p class="mb-0">contact@lcr-digital.fr</p>
                                    </div>
                                </div>
                            </div>

                            <div class="cta-banner animate-box animated slow animate__animated" data-animate="animate__fadeInRight">
                                <h4>Lancer votre projet</h4>
                                <p>Nous cadrons vos besoins et vos priorités pour un site efficace.</p>
                                <div>
                                    <a href="/contact-agence-web-<?= e($city_slug) ?>" class="btn btn-accent">Nous contacter</a>
                                </div>
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
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Un besoin, une idée, une urgence ? Nous trouvons la solution.</p>
                    <div>
                        <a href="/contact-agence-web-<?= e($city_slug) ?>" class="btn btn-accent">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-2">
                    <div class="col">
                        <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <h6 class="accent-color">Témoignages</h6>
                            <h3>Ce que disent nos clients</h3>
                            <p>Des échanges simples et des résultats visibles.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="overflow-hidden animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <div class="swiper swiperTestimonial">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card card-testimonial">
                                            <div>
                                                <div class="testimonial-image">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                            </div>
                                            <p class="testimonial-content">
                                                Une équipe réactive et un site vraiment efficace.
                                            </p>
                                            <span class="testimonial-name">Sophie L.</span>
                                            <span class="testimonial-title">Dirigeante</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card card-testimonial">
                                            <div>
                                                <div class="testimonial-image">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                            </div>
                                            <p class="testimonial-content">
                                                Une communication claire et des délais tenus.
                                            </p>
                                            <span class="testimonial-name">Marc D.</span>
                                            <span class="testimonial-title">Responsable marketing</span>
                                        </div>
                                    </div>
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

    <script src="./assets/js/vendor/jquery.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/vendor/swiper-bundle.min.js"></script>
    <script src="./assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="./assets/js/vendor/fslightbox.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/swiper-script.js"></script>
    <script src="./assets/js/submit-form.js"></script>
    <script src="./assets/js/video_embedded.js"></script>
</body>
</html>

<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Tarif Site Web" . city_phrase(" à ") . " – Prix Création Site Internet | LCR DIGITAL";
$page_description = "Tarifs création site web" . city_phrase(" à ") . " sur devis personnalisé. Chaque projet est unique : site vitrine, référencement local, hébergement, maintenance. Analyse gratuite de votre projet, devis détaillé sous 48h.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require __DIR__ . "/assets/components/head.php"; ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Création de Site Web",
        "description": "Service de création de sites internet professionnels sur mesure : site vitrine, référencement local, hébergement et maintenance inclus",
        "provider": {
            "@type": "Organization",
            "name": "LCR DIGITAL"
        },
        "areaServed": "FR",
        "offers": {
            "@type": "Offer",
            "name": "Création de site web professionnel",
            "description": "Création de site internet sur mesure avec design responsive, hébergement, nom de domaine, SSL, SEO et maintenance",
            "price": "Sur devis",
            "priceCurrency": "EUR",
            "availability": "https://schema.org/InStock",
            "seller": {
                "@type": "Organization",
                "name": "LCR DIGITAL"
            }
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Services Création de Site Web",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Site vitrine professionnel"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Référencement local SEO"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Hébergement et maintenance"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Google My Business et visibilité locale"
                    }
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Accueil",
                "item": "https://lcr-digital.fr/"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Tarif Site Web",
                "item": "https://lcr-digital.fr/tarif-site-web"
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Pourquoi le tarif est-il sur devis ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Le coût d'un site web varie selon le nombre de pages, les fonctionnalités souhaitées (prise de RDV, chat, galerie, multilingue), le niveau de référencement local et les intégrations tierces. Un devis détaillé permet d'estimer précisément votre projet et d'y intégrer uniquement ce dont vous avez besoin."
                }
            },
            {
                "@type": "Question",
                "name": "Que comprend l'hébergement inclus ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "L'hébergement comprend le stockage sur serveurs sécurisés, certificat SSL (HTTPS), nom de domaine en .fr ou .com, sauvegardes automatiques quotidiennes, protection anti-DDoS et bande passante illimitée. Votre site est hébergé en France."
                }
            },
            {
                "@type": "Question",
                "name": "Proposez-vous le référencement local ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Oui, nous intégrons une stratégie de référencement local adaptée à votre activité et votre zone géographique : optimisation SEO, Google My Business, pages dédiées par ville et suivi des positions. L'étendue du référencement est définie avec vous lors de l'analyse du projet."
                }
            },
            {
                "@type": "Question",
                "name": "Comment se déroule la création du site ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Nous commençons par une analyse complète de votre projet (objectifs, cibles, concurrents, fonctionnalités). Nous vous soumettons ensuite un devis détaillé puis, après validation, nous concevons le design, intégrons le contenu, optimisons le SEO et mettons en ligne votre site. Vous êtes accompagné à chaque étape."
                }
            }
        ]
    }
    </script>
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
                    <h2>Tarifs</h2>
                    <h1 class="banner-h1">Tarif Site Web<?= city_phrase(' à ') ?> – Prix Création Site Internet</h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">Tarif Site Web</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-4">
                    <!-- Section principale Sur Devis -->
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-3 animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                                <h6 class="accent-color">Projet sur mesure</h6>
                                <h3>Chaque site web est unique</h3>
                                <p>La création d'un site internet dépend de nombreux facteurs : nombre de pages, fonctionnalités souhaitées, niveau de référencement local, intégrations tierces, volume de contenu à rédiger...</p>
                                <p>C'est pourquoi nous ne proposons pas de tarifs fixes. Nous analysons votre besoin et vous fournissons un <strong>devis personnalisé et détaillé</strong>, adapté à votre activité et vos objectifs.</p>
                                <div class="d-flex flex-column gspace-2" style="background: rgba(255,255,255,0.05); border-radius: 12px; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.1);">
                                    <div class="d-flex align-items-center gspace-2">
                                        <i class="fa-solid fa-circle-check accent-color fa-lg"></i>
                                        <span>Devis gratuit et sans engagement</span>
                                    </div>
                                    <div class="d-flex align-items-center gspace-2">
                                        <i class="fa-solid fa-circle-check accent-color fa-lg"></i>
                                        <span>Réponse sous 48h</span>
                                    </div>
                                    <div class="d-flex align-items-center gspace-2">
                                        <i class="fa-solid fa-circle-check accent-color fa-lg"></i>
                                        <span>Paiement échelonné possible</span>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent btn-lg">
                                        <i class="fa-solid fa-paper-plane me-2"></i>Demander un devis gratuit
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="pricing-card featured animate-box animated animate__animated" data-animate="animate__fadeInRight" style="max-width: 400px; margin: 0 auto;">
                                <div class="pricing-card-header" style="background: linear-gradient(135deg, #6A4BFF 0%, #3D6BFF 100%);">
                                    <h4>Site Web Professionnel</h4>
                                    <p>Sur mesure & optimisé</p>
                                </div>
                                <div class="pricing-card-price">
                                    <span class="amount" style="font-size: 2rem;">Sur devis</span>
                                </div>
                                <div class="pricing-card-body text-center">
                                    <p style="opacity: 0.8; font-size: 0.95rem;">Tarification adaptée à la complexité et aux objectifs de votre projet</p>
                                    <div class="d-flex justify-content-center gspace-3 mt-3">
                                        <div class="text-center">
                                            <i class="fa-solid fa-globe fa-2x" style="opacity: 0.7;"></i>
                                            <p class="small mt-1 mb-0">Vitrine</p>
                                        </div>
                                        <div class="text-center">
                                            <i class="fa-solid fa-magnifying-glass fa-2x" style="opacity: 0.7;"></i>
                                            <p class="small mt-1 mb-0">SEO</p>
                                        </div>
                                        <div class="text-center">
                                            <i class="fa-solid fa-server fa-2x" style="opacity: 0.7;"></i>
                                            <p class="small mt-1 mb-0">Hébergement</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-card-footer">
                                    <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent w-100">Contactez-nous</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fonctionnalités possibles -->
                    <div class="d-flex flex-column align-items-center text-center gspace-2 mt-5 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <h6 class="accent-color">Ce que nous pouvons intégrer</h6>
                        <h3>Fonctionnalités disponibles</h3>
                        <p>Selon vos besoins, nous intégrons les fonctionnalités adaptées à votre projet.</p>
                    </div>

                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                        <!-- Site web -->
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.08); height: 100%;">
                                <div class="d-flex align-items-center gspace-2 mb-2">
                                    <i class="fa-solid fa-globe accent-color fa-lg"></i>
                                    <h5 class="mb-0">Site web</h5>
                                </div>
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Design responsive sur mesure</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Hébergement inclus</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Nom de domaine inclus</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Certificat SSL (HTTPS)</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Galerie photos / vidéos</li>
                                </ul>
                            </div>
                        </div>

                        <!-- SEO & Visibilité -->
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.08); height: 100%;">
                                <div class="d-flex align-items-center gspace-2 mb-2">
                                    <i class="fa-solid fa-magnifying-glass accent-color fa-lg"></i>
                                    <h5 class="mb-0">SEO & Visibilité</h5>
                                </div>
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Optimisation SEO on-page</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Référencement local multi-villes</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Google My Business</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Google Analytics</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Email professionnel</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Contact & Fonctionnalités -->
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.08); height: 100%;">
                                <div class="d-flex align-items-center gspace-2 mb-2">
                                    <i class="fa-solid fa-envelope accent-color fa-lg"></i>
                                    <h5 class="mb-0">Contact</h5>
                                </div>
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Formulaire de contact</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Google Maps intégré</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Prise de RDV en ligne</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Chat en ligne</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Newsletter</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Support & Maintenance -->
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.08); height: 100%;">
                                <div class="d-flex align-items-center gspace-2 mb-2">
                                    <i class="fa-solid fa-headset accent-color fa-lg"></i>
                                    <h5 class="mb-0">Support</h5>
                                </div>
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Maintenance mensuelle</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Mises à jour sécurité</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Sauvegardes automatiques</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Support prioritaire</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Formation à la prise en main</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <p style="color: var(--text-color); opacity: 0.8; font-size: 0.95rem;">* TVA non applicable, article 293 B du CGI.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section FAQ -->
        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-4">
                    <div class="d-flex flex-column align-items-center text-center gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <h6 class="accent-color">Questions fréquentes</h6>
                        <h2>FAQ sur nos tarifs site web</h2>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Pourquoi le tarif est-il sur devis ?</h3>
                                <p style="opacity: 0.85;">Le coût d'un site web varie selon le nombre de pages, les fonctionnalités souhaitées (prise de RDV, chat, galerie, multilingue), le niveau de référencement local et les intégrations tierces. Un devis détaillé permet d'estimer précisément votre projet et d'y intégrer uniquement ce dont vous avez besoin.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Que comprend l'hébergement inclus ?</h3>
                                <p style="opacity: 0.85;">L'hébergement comprend le stockage sur serveurs sécurisés, certificat SSL (HTTPS), nom de domaine en .fr ou .com, sauvegardes automatiques quotidiennes, protection anti-DDoS et bande passante illimitée. Votre site est hébergé en France.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Proposez-vous le référencement local ?</h3>
                                <p style="opacity: 0.85;">Oui, nous intégrons une stratégie de référencement local adaptée à votre activité et votre zone géographique : optimisation SEO, Google My Business, pages dédiées par ville et suivi des positions. L'étendue du référencement est définie avec vous lors de l'analyse du projet.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Comment se déroule la création du site ?</h3>
                                <p style="opacity: 0.85;">Nous commençons par une analyse complète de votre projet (objectifs, cibles, concurrents, fonctionnalités). Nous vous soumettons ensuite un devis détaillé puis, après validation, nous concevons le design, intégrons le contenu, optimisons le SEO et mettons en ligne votre site. Vous êtes accompagné à chaque étape.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section contactus-banner">
            <div class="hero-container">
                <div class="contactus-content">
                    <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Un projet de site web ?</h3>
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Discutons de votre projet<?= city_phrase(' à ') ?> pour établir un devis précis.</p>
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

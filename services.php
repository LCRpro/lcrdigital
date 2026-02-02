<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Nos Services" . city_phrase(" à ") . " – Agence Web & Développement | LCR DIGITAL";
$page_description = "Agence web LCR DIGITAL" . city_phrase(" à ") . " : création de site internet vitrine, boutique e-commerce, application mobile iOS/Android, développement sur mesure. Expertise en design, SEO, hébergement et maintenance. Devis gratuit.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require __DIR__ . "/assets/components/head.php"; ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": "Services LCR DIGITAL",
        "description": "Services de création et développement web proposés par LCR DIGITAL",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@type": "Service",
                    "name": "Création de Site Web",
                    "description": "Développement de sites internet professionnels avec design sur mesure, optimisation SEO et hébergement inclus",
                    "provider": {
                        "@type": "Organization",
                        "name": "LCR DIGITAL"
                    },
                    "areaServed": "FR",
                    "availableChannel": {
                        "@type": "ServiceChannel",
                        "serviceUrl": "https://lcr-digital.fr/site-web"
                    }
                }
            },
            {
                "@type": "ListItem",
                "position": 2,
                "item": {
                    "@type": "Service",
                    "name": "Boutique E-commerce",
                    "description": "Création de boutiques en ligne avec paiement sécurisé, gestion des stocks et multi-transporteurs",
                    "provider": {
                        "@type": "Organization",
                        "name": "LCR DIGITAL"
                    },
                    "areaServed": "FR",
                    "availableChannel": {
                        "@type": "ServiceChannel",
                        "serviceUrl": "https://lcr-digital.fr/ecommerce"
                    }
                }
            },
            {
                "@type": "ListItem",
                "position": 3,
                "item": {
                    "@type": "Service",
                    "name": "Application Mobile",
                    "description": "Développement d'applications mobiles natives iOS et Android avec notifications push et backend personnalisé",
                    "provider": {
                        "@type": "Organization",
                        "name": "LCR DIGITAL"
                    },
                    "areaServed": "FR",
                    "availableChannel": {
                        "@type": "ServiceChannel",
                        "serviceUrl": "https://lcr-digital.fr/application-mobile"
                    }
                }
            },
            {
                "@type": "ListItem",
                "position": 4,
                "item": {
                    "@type": "Service",
                    "name": "Développement Sur Mesure",
                    "description": "Solutions techniques personnalisées : outils métier, automatisations, intégrations API et applications web complexes",
                    "provider": {
                        "@type": "Organization",
                        "name": "LCR DIGITAL"
                    },
                    "areaServed": "FR",
                    "availableChannel": {
                        "@type": "ServiceChannel",
                        "serviceUrl": "https://lcr-digital.fr/developpement-sur-mesure"
                    }
                }
            }
        ]
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
                "name": "Services",
                "item": "https://lcr-digital.fr/services"
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
                "name": "Combien de temps prend la création d'un site web ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Le délai varie selon la complexité du projet. Un site vitrine classique prend généralement 2 à 4 semaines, une boutique e-commerce 4 à 8 semaines, et une application mobile 8 à 16 semaines. Nous établissons un planning détaillé lors du devis."
                }
            },
            {
                "@type": "Question",
                "name": "Proposez-vous l'hébergement et la maintenance ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Oui, tous nos forfaits incluent l'hébergement web sécurisé et la maintenance. Nous gérons les mises à jour de sécurité, les sauvegardes automatiques et le support technique pour garantir la disponibilité de votre site."
                }
            },
            {
                "@type": "Question",
                "name": "Mes contenus sont-ils modifiables facilement ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Absolument. Nous développons des interfaces d'administration intuitives qui vous permettent de modifier vos textes, images et contenus sans compétences techniques. Une formation complète est incluse à la livraison du projet."
                }
            },
            {
                "@type": "Question",
                "name": "Le référencement SEO est-il inclus ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Oui, l'optimisation SEO de base est incluse dans tous nos forfaits : structure sémantique, balises meta, sitemap XML, temps de chargement optimisé. Des prestations SEO avancées (référencement local, stratégie de contenu) sont disponibles en option."
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
                    <h2>Services</h2>
                    <h1 class="banner-h1">Nos Services<?= city_phrase(' à ') ?></h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">Services</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-4">
                    <div class="d-flex flex-column align-items-center text-center gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <h6 class="accent-color">Ce que nous faisons</h6>
                        <h3>Des solutions digitales sur mesure</h3>
                        <p>Nous accompagnons les entreprises<?= city_phrase(' à ') ?> dans leur transformation digitale avec des solutions adaptées à leurs besoins.</p>
                    </div>

                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <!-- Site Web -->
                        <div class="col">
                            <div class="service-card animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 16px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08); height: 100%; transition: all 0.3s ease;">
                                <div class="d-flex flex-column gspace-3">
                                    <div class="d-flex align-items-center gspace-3">
                                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #6A4BFF 0%, #3D6BFF 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fa-solid fa-globe fa-xl" style="color: white;"></i>
                                        </div>
                                        <h4 class="mb-0">Création de Site Web</h4>
                                    </div>
                                    <p style="opacity: 0.85;">Un site web professionnel et performant pour présenter votre activité, attirer de nouveaux clients et renforcer votre crédibilité en ligne.</p>
                                    <ul style="list-style: none; padding: 0; margin: 0;">
                                        <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-check accent-color"></i> Design sur mesure et responsive</li>
                                        <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-check accent-color"></i> Optimisation SEO incluse</li>
                                        <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-check accent-color"></i> Hébergement et maintenance</li>
                                        <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-check accent-color"></i> Formulaires et intégrations</li>
                                    </ul>
                                    <div class="d-flex flex-wrap gspace-2 mt-2">
                                        <a href="<?= e(route_with_city("site-web", $city_slug)) ?>" class="btn btn-accent">En savoir plus</a>
                                        <a href="/tarif-site-web" class="btn btn-accent-outline">Voir les tarifs</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- E-commerce -->
                        <div class="col">
                            <div class="service-card animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 16px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08); height: 100%; transition: all 0.3s ease;">
                                <div class="d-flex flex-column gspace-3">
                                    <div class="d-flex align-items-center gspace-3">
                                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #FF2FB3 0%, #FF4FD1 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fa-solid fa-cart-shopping fa-xl" style="color: white;"></i>
                                        </div>
                                        <h4 class="mb-0">E-commerce</h4>
                                    </div>
                                    <p style="opacity: 0.85;">Vendez vos produits en ligne avec une boutique e-commerce performante, sécurisée et optimisée pour la conversion.</p>
                                    <ul style="list-style: none; padding: 0; margin: 0;">
                                        <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-check accent-color"></i> Shopify ou sur-mesure</li>
                                        <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-check accent-color"></i> Paiement sécurisé (Stripe, PayPal)</li>
                                        <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-check accent-color"></i> Gestion des stocks et commandes</li>
                                        <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-check accent-color"></i> Multi-transporteurs</li>
                                    </ul>
                                    <div class="d-flex flex-wrap gspace-2 mt-2">
                                        <a href="<?= e(route_with_city("ecommerce", $city_slug)) ?>" class="btn btn-accent">En savoir plus</a>
                                        <a href="/tarif-ecommerce" class="btn btn-accent-outline">Voir les tarifs</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Application Mobile -->
                        <div class="col">
                            <div class="service-card animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 16px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08); height: 100%; transition: all 0.3s ease;">
                                <div class="d-flex flex-column gspace-3">
                                    <div class="d-flex align-items-center gspace-3">
                                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #00D4AA 0%, #00B894 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fa-solid fa-mobile-screen fa-xl" style="color: white;"></i>
                                        </div>
                                        <h4 class="mb-0">Application Mobile</h4>
                                    </div>
                                    <p style="opacity: 0.85;">Développez votre application mobile iOS et Android pour offrir une expérience unique à vos utilisateurs.</p>
                                    <ul style="list-style: none; padding: 0; margin: 0;">
                                        <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-check accent-color"></i> iOS et Android natif</li>
                                        <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-check accent-color"></i> Notifications push</li>
                                        <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-check accent-color"></i> Backend et API personnalisés</li>
                                        <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-check accent-color"></i> Publication sur les stores</li>
                                    </ul>
                                    <div class="d-flex flex-wrap gspace-2 mt-2">
                                        <a href="<?= e(route_with_city("application-mobile", $city_slug)) ?>" class="btn btn-accent">En savoir plus</a>
                                        <a href="/tarif-application-mobile" class="btn btn-accent-outline">Voir les tarifs</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Développement sur mesure -->
                        <div class="col">
                            <div class="service-card animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 16px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08); height: 100%; transition: all 0.3s ease;">
                                <div class="d-flex flex-column gspace-3">
                                    <div class="d-flex align-items-center gspace-3">
                                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fa-solid fa-code fa-xl" style="color: white;"></i>
                                        </div>
                                        <h4 class="mb-0">Développement sur mesure</h4>
                                    </div>
                                    <p style="opacity: 0.85;">Des solutions techniques personnalisées pour répondre à vos besoins spécifiques : outils métier, automatisations, intégrations API.</p>
                                    <ul style="list-style: none; padding: 0; margin: 0;">
                                        <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-check accent-color"></i> Outils métier personnalisés</li>
                                        <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-check accent-color"></i> Automatisation de processus</li>
                                        <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-check accent-color"></i> Intégrations API tierces</li>
                                        <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-check accent-color"></i> Applications web complexes</li>
                                    </ul>
                                    <div class="d-flex flex-wrap gspace-2 mt-2">
                                        <a href="<?= e(route_with_city("developpement-sur-mesure", $city_slug)) ?>" class="btn btn-accent">En savoir plus</a>
                                        <a href="/tarif-developpement-sur-mesure" class="btn btn-accent-outline">Voir les tarifs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section pourquoi nous choisir -->
        <div class="section" style="background: rgba(255,255,255,0.02);">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-4">
                    <div class="d-flex flex-column align-items-center text-center gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <h6 class="accent-color">Pourquoi nous choisir</h6>
                        <h3>Notre approche</h3>
                    </div>

                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                        <div class="col">
                            <div class="text-center animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div style="width: 70px; height: 70px; background: rgba(255, 47, 179, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                    <i class="fa-solid fa-comments fa-xl accent-color"></i>
                                </div>
                                <h5>Écoute</h5>
                                <p style="opacity: 0.8; font-size: 0.95rem;">Nous prenons le temps de comprendre vos besoins et objectifs pour proposer la solution adaptée.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div style="width: 70px; height: 70px; background: rgba(255, 47, 179, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                    <i class="fa-solid fa-palette fa-xl accent-color"></i>
                                </div>
                                <h5>Design</h5>
                                <p style="opacity: 0.8; font-size: 0.95rem;">Des interfaces modernes et intuitives qui reflètent votre identité et séduisent vos clients.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div style="width: 70px; height: 70px; background: rgba(255, 47, 179, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                    <i class="fa-solid fa-rocket fa-xl accent-color"></i>
                                </div>
                                <h5>Performance</h5>
                                <p style="opacity: 0.8; font-size: 0.95rem;">Des solutions optimisées pour la vitesse, le SEO et la conversion.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <div style="width: 70px; height: 70px; background: rgba(255, 47, 179, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                    <i class="fa-solid fa-headset fa-xl accent-color"></i>
                                </div>
                                <h5>Support</h5>
                                <p style="opacity: 0.8; font-size: 0.95rem;">Un accompagnement continu avec maintenance et support réactif.</p>
                            </div>
                        </div>
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
                        <h2>FAQ sur nos services web</h2>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Combien de temps prend la création d'un site web ?</h3>
                                <p style="opacity: 0.85;">Le délai varie selon la complexité du projet. Un site vitrine classique prend généralement 2 à 4 semaines, une boutique e-commerce 4 à 8 semaines, et une application mobile 8 à 16 semaines. Nous établissons un planning détaillé lors du devis.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Proposez-vous l'hébergement et la maintenance ?</h3>
                                <p style="opacity: 0.85;">Oui, tous nos forfaits incluent l'hébergement web sécurisé et la maintenance. Nous gérons les mises à jour de sécurité, les sauvegardes automatiques et le support technique pour garantir la disponibilité de votre site.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Mes contenus sont-ils modifiables facilement ?</h3>
                                <p style="opacity: 0.85;">Absolument. Nous développons des interfaces d'administration intuitives qui vous permettent de modifier vos textes, images et contenus sans compétences techniques. Une formation complète est incluse à la livraison du projet.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Le référencement SEO est-il inclus ?</h3>
                                <p style="opacity: 0.85;">Oui, l'optimisation SEO de base est incluse dans tous nos forfaits : structure sémantique, balises meta, sitemap XML, temps de chargement optimisé. Des prestations SEO avancées (référencement local, stratégie de contenu) sont disponibles en option.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section contactus-banner">
            <div class="hero-container">
                <div class="contactus-content">
                    <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Un projet en tête ?</h3>
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Discutons de votre projet<?= city_phrase(' à ') ?> et trouvons ensemble la meilleure solution.</p>
                    <div>
                        <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent">Contactez-nous</a>
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

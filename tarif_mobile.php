<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Tarif Développement Application Mobile" . city_phrase(" à ") . " – Prix App iOS & Android | LCR DIGITAL";
$page_description = "Tarifs application mobile iOS et Android" . city_phrase(" à ") . " sur devis personnalisé. Développement natif avec notifications push, backend API, géolocalisation, paiement in-app. Publication App Store et Google Play. Devis gratuit sous 48h.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require __DIR__ . "/assets/components/head.php"; ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Développement Application Mobile",
        "description": "Service de développement d'applications mobiles natives iOS et Android sur mesure avec backend, notifications push et publication sur les stores",
        "provider": {
            "@type": "Organization",
            "name": "LCR DIGITAL"
        },
        "areaServed": "FR",
        "offers": {
            "@type": "Offer",
            "name": "Développement Application Mobile iOS & Android",
            "description": "Développement d'application mobile native avec fonctionnalités personnalisées : authentification, notifications push, géolocalisation, paiement in-app, backend API",
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
            "name": "Services Application Mobile",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Développement iOS natif"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Développement Android natif"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Backend et API personnalisés"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Publication App Store et Google Play"
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
                "name": "Tarif Application Mobile",
                "item": "https://lcr-digital.fr/tarif-application-mobile"
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
                    "text": "Le coût d'une application mobile varie considérablement selon le nombre d'écrans, la complexité des fonctionnalités (authentification, paiement, géolocalisation), les intégrations API tierces et le développement backend nécessaire. Un devis détaillé permet d'estimer précisément votre projet."
                }
            },
            {
                "@type": "Question",
                "name": "Développez-vous en natif ou hybride ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Nous développons principalement en natif (Swift pour iOS, Kotlin pour Android) pour des performances optimales et une expérience utilisateur fluide. Le développement hybride (React Native, Flutter) est proposé pour certains projets avec contraintes budgétaires, après analyse de vos besoins."
                }
            },
            {
                "@type": "Question",
                "name": "Gérez-vous la publication sur les stores ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Oui, nous nous occupons de toute la publication : création des comptes développeurs, préparation des assets (icônes, captures), rédaction des descriptions et soumission sur l'App Store et Google Play. Nous gérons également les mises à jour ultérieures de votre application."
                }
            },
            {
                "@type": "Question",
                "name": "Combien coûte la maintenance annuelle ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "La maintenance comprend les mises à jour de compatibilité iOS/Android, corrections de bugs, hébergement backend et support technique. Elle représente généralement 15-20% du coût initial de développement par an. Un forfait détaillé est proposé avec le devis initial."
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
                    <h1 class="banner-h1">Tarif Développement Application Mobile<?= city_phrase(' à ') ?> – Prix App</h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">Tarif Application Mobile</a>
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
                                <h3>Chaque application est unique</h3>
                                <p>Le développement d'une application mobile dépend de nombreux facteurs : complexité des fonctionnalités, nombre d'écrans, intégrations tierces, backend nécessaire...</p>
                                <p>C'est pourquoi nous ne proposons pas de tarifs fixes. Nous analysons votre besoin et vous fournissons un <strong>devis personnalisé et détaillé</strong>, adapté à votre projet.</p>
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
                                <div class="pricing-card-header" style="background: linear-gradient(135deg, #FF2FB3 0%, #FF4FD1 100%);">
                                    <h4>Application Mobile</h4>
                                    <p>iOS & Android</p>
                                </div>
                                <div class="pricing-card-price">
                                    <span class="amount" style="font-size: 2rem;">Sur devis</span>
                                </div>
                                <div class="pricing-card-body text-center">
                                    <p style="opacity: 0.8; font-size: 0.95rem;">Tarification adaptée à la complexité de votre projet</p>
                                    <div class="d-flex justify-content-center gspace-3 mt-3">
                                        <div class="text-center">
                                            <i class="fa-brands fa-apple fa-2x" style="opacity: 0.7;"></i>
                                            <p class="small mt-1 mb-0">iOS</p>
                                        </div>
                                        <div class="text-center">
                                            <i class="fa-brands fa-android fa-2x" style="opacity: 0.7;"></i>
                                            <p class="small mt-1 mb-0">Android</p>
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
                        <!-- Application -->
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.08); height: 100%;">
                                <div class="d-flex align-items-center gspace-2 mb-2">
                                    <i class="fa-solid fa-mobile-screen accent-color fa-lg"></i>
                                    <h5 class="mb-0">Application</h5>
                                </div>
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> iOS et Android natif</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Design sur-mesure</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Animations fluides</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Mode hors-ligne</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Multi-langues</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Fonctionnalités -->
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.08); height: 100%;">
                                <div class="d-flex align-items-center gspace-2 mb-2">
                                    <i class="fa-solid fa-bell accent-color fa-lg"></i>
                                    <h5 class="mb-0">Fonctionnalités</h5>
                                </div>
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Notifications push</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Authentification</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Géolocalisation</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Paiement in-app</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Chat temps réel</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Backend -->
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.08); height: 100%;">
                                <div class="d-flex align-items-center gspace-2 mb-2">
                                    <i class="fa-solid fa-server accent-color fa-lg"></i>
                                    <h5 class="mb-0">Backend</h5>
                                </div>
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> API personnalisée</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Base de données</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Back-office admin</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Architecture scalable</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Intégrations tierces</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Support -->
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.08); height: 100%;">
                                <div class="d-flex align-items-center gspace-2 mb-2">
                                    <i class="fa-solid fa-headset accent-color fa-lg"></i>
                                    <h5 class="mb-0">Support</h5>
                                </div>
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Publication stores</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Formation équipe</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Documentation</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Maintenance</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Support prioritaire</li>
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
                        <h2>FAQ Application Mobile</h2>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Pourquoi le tarif est-il sur devis ?</h3>
                                <p style="opacity: 0.85;">Le coût d'une application mobile varie considérablement selon le nombre d'écrans, la complexité des fonctionnalités (authentification, paiement, géolocalisation), les intégrations API tierces et le développement backend nécessaire. Un devis détaillé permet d'estimer précisément votre projet.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Développez-vous en natif ou hybride ?</h3>
                                <p style="opacity: 0.85;">Nous développons principalement en natif (Swift pour iOS, Kotlin pour Android) pour des performances optimales et une expérience utilisateur fluide. Le développement hybride (React Native, Flutter) est proposé pour certains projets avec contraintes budgétaires, après analyse de vos besoins.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Gérez-vous la publication sur les stores ?</h3>
                                <p style="opacity: 0.85;">Oui, nous nous occupons de toute la publication : création des comptes développeurs, préparation des assets (icônes, captures), rédaction des descriptions et soumission sur l'App Store et Google Play. Nous gérons également les mises à jour ultérieures de votre application.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Combien coûte la maintenance annuelle ?</h3>
                                <p style="opacity: 0.85;">La maintenance comprend les mises à jour de compatibilité iOS/Android, corrections de bugs, hébergement backend et support technique. Elle représente généralement 15-20% du coût initial de développement par an. Un forfait détaillé est proposé avec le devis initial.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section contactus-banner">
            <div class="hero-container">
                <div class="contactus-content">
                    <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Un projet d'application mobile ?</h3>
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

<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Tarif Développement Sur Mesure" . city_phrase(" à ") . " – Prix Développement Web | LCR DIGITAL";
$page_description = "Tarifs développement sur mesure" . city_phrase(" à ") . " sur devis personnalisé : outils métier, automatisation processus, intégrations API, applications web complexes. Solutions RGPD, architecture scalable. Devis gratuit sous 48h.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require __DIR__ . "/assets/components/head.php"; ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Développement Sur Mesure",
        "description": "Service de développement web sur mesure : outils métier personnalisés, automatisations, intégrations API, applications web complexes",
        "provider": {
            "@type": "Organization",
            "name": "LCR DIGITAL"
        },
        "areaServed": "FR",
        "offers": {
            "@type": "Offer",
            "name": "Développement Web Sur Mesure",
            "description": "Développement de solutions techniques personnalisées adaptées à vos besoins métier spécifiques",
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
            "name": "Services Développement Sur Mesure",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Automatisation de processus métier"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Intégrations API tierces"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Outils métier personnalisés"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Applications web complexes"
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
                "name": "Tarif Développement Sur Mesure",
                "item": "https://lcr-digital.fr/tarif-developpement-sur-mesure"
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
                "name": "Quels types de projets sur mesure réalisez-vous ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Nous développons des outils métier (CRM, ERP, gestion de stock), automatisations de workflows, synchronisations entre logiciels, tableaux de bord analytics, systèmes de réservation, plateformes de gestion documentaire et toute application web complexe répondant à un besoin spécifique."
                }
            },
            {
                "@type": "Question",
                "name": "Comment établissez-vous le devis ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Après un audit de vos besoins, nous rédigeons un cahier des charges détaillé validé avec vous. Le devis précise le nombre de jours de développement, les technologies utilisées, les livrables et le planning. Nous privilégions une approche itérative avec des phases de validation régulières."
                }
            },
            {
                "@type": "Question",
                "name": "Puis-je faire évoluer mon outil plus tard ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Absolument. Nous développons avec des technologies modernes et documentons intégralement le code pour faciliter les évolutions. Des forfaits de maintenance évolutive sont proposés pour ajouter des fonctionnalités progressivement selon l'évolution de vos besoins."
                }
            },
            {
                "@type": "Question",
                "name": "Comment garantissez-vous la sécurité des données ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tous nos développements respectent les bonnes pratiques de sécurité : chiffrement des données sensibles, conformité RGPD, authentification sécurisée, sauvegardes automatiques, protection contre les injections SQL et XSS. Un audit de sécurité est réalisé avant chaque mise en production."
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
                    <h1 class="banner-h1">Tarif Développement Sur Mesure<?= city_phrase(' à ') ?> – Prix Développement Web</h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">Tarif Sur Mesure</a>
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
                                <h3>Chaque projet est unique</h3>
                                <p>Outils métier, automatisations, intégrations API, applications web... Chaque besoin est différent et nécessite une approche personnalisée.</p>
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
                                    <h4>Développement Sur Mesure</h4>
                                    <p>Solutions personnalisées</p>
                                </div>
                                <div class="pricing-card-price">
                                    <span class="amount" style="font-size: 2rem;">Sur devis</span>
                                </div>
                                <div class="pricing-card-body text-center">
                                    <p style="opacity: 0.8; font-size: 0.95rem;">Tarification adaptée à la complexité de votre projet</p>
                                    <div class="d-flex justify-content-center gspace-3 mt-3">
                                        <div class="text-center">
                                            <i class="fa-solid fa-code fa-2x" style="opacity: 0.7;"></i>
                                            <p class="small mt-1 mb-0">Web</p>
                                        </div>
                                        <div class="text-center">
                                            <i class="fa-solid fa-robot fa-2x" style="opacity: 0.7;"></i>
                                            <p class="small mt-1 mb-0">Automatisation</p>
                                        </div>
                                        <div class="text-center">
                                            <i class="fa-solid fa-plug fa-2x" style="opacity: 0.7;"></i>
                                            <p class="small mt-1 mb-0">API</p>
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
                        <h6 class="accent-color">Ce que nous pouvons réaliser</h6>
                        <h3>Types de projets</h3>
                        <p>Selon vos besoins, nous développons des solutions adaptées à votre activité.</p>
                    </div>

                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                        <!-- Automatisation -->
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.08); height: 100%;">
                                <div class="d-flex align-items-center gspace-2 mb-2">
                                    <i class="fa-solid fa-robot accent-color fa-lg"></i>
                                    <h5 class="mb-0">Automatisation</h5>
                                </div>
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Scripts automatisés</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Workflows métier</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Webhooks & triggers</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Synchronisation données</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Tâches planifiées</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Intégrations -->
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.08); height: 100%;">
                                <div class="d-flex align-items-center gspace-2 mb-2">
                                    <i class="fa-solid fa-link accent-color fa-lg"></i>
                                    <h5 class="mb-0">Intégrations</h5>
                                </div>
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> API personnalisées</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Connexion outils tiers</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> CRM & ERP</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Paiements en ligne</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Services cloud</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Outils métier -->
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.08); height: 100%;">
                                <div class="d-flex align-items-center gspace-2 mb-2">
                                    <i class="fa-solid fa-laptop-code accent-color fa-lg"></i>
                                    <h5 class="mb-0">Outils métier</h5>
                                </div>
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Interface web dédiée</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Tableaux de bord</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Gestion utilisateurs</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Base de données</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Rôles & permissions</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Support -->
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.08); height: 100%;">
                                <div class="d-flex align-items-center gspace-2 mb-2">
                                    <i class="fa-solid fa-shield-halved accent-color fa-lg"></i>
                                    <h5 class="mb-0">Qualité</h5>
                                </div>
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Sécurité renforcée</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Conformité RGPD</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Documentation</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Formation équipe</li>
                                    <li class="d-flex align-items-center gspace-2 py-1"><i class="fa-solid fa-chevron-right accent-color fa-xs"></i> Maintenance</li>
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
                        <h2>FAQ Développement Sur Mesure</h2>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Quels types de projets sur mesure réalisez-vous ?</h3>
                                <p style="opacity: 0.85;">Nous développons des outils métier (CRM, ERP, gestion de stock), automatisations de workflows, synchronisations entre logiciels, tableaux de bord analytics, systèmes de réservation, plateformes de gestion documentaire et toute application web complexe répondant à un besoin spécifique.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Comment établissez-vous le devis ?</h3>
                                <p style="opacity: 0.85;">Après un audit de vos besoins, nous rédigeons un cahier des charges détaillé validé avec vous. Le devis précise le nombre de jours de développement, les technologies utilisées, les livrables et le planning. Nous privilégions une approche itérative avec des phases de validation régulières.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Puis-je faire évoluer mon outil plus tard ?</h3>
                                <p style="opacity: 0.85;">Absolument. Nous développons avec des technologies modernes et documentons intégralement le code pour faciliter les évolutions. Des forfaits de maintenance évolutive sont proposés pour ajouter des fonctionnalités progressivement selon l'évolution de vos besoins.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Comment garantissez-vous la sécurité des données ?</h3>
                                <p style="opacity: 0.85;">Tous nos développements respectent les bonnes pratiques de sécurité : chiffrement des données sensibles, conformité RGPD, authentification sécurisée, sauvegardes automatiques, protection contre les injections SQL et XSS. Un audit de sécurité est réalisé avant chaque mise en production.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section contactus-banner">
            <div class="hero-container">
                <div class="contactus-content">
                    <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Un projet de développement sur mesure ?</h3>
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Décrivez-nous votre besoin<?= city_phrase(' à ') ?>, nous vous proposons une solution adaptée.</p>
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

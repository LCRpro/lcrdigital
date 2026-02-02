<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Tarif Site Web" . city_phrase(" à ") . " – Prix Création Site Internet | LCR DIGITAL";
$page_description = "Tarifs création site web" . city_phrase(" à ") . " dès 200€/mois : site vitrine, référencement local, hébergement et maintenance inclus. 3 formules TPE/PME : Site web, Visibilité, Digitalisation. Devis gratuit et personnalisé.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require __DIR__ . "/assets/components/head.php"; ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": "Tarifs Site Web LCR DIGITAL",
        "description": "Offres et tarifs pour la création de site internet professionnel",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@type": "Offer",
                    "name": "Forfait Site Web",
                    "description": "Site internet vitrine avec hébergement, nom de domaine, SSL, design responsive et jusqu'à 8 pages",
                    "price": "200",
                    "priceCurrency": "EUR",
                    "priceSpecification": {
                        "@type": "UnitPriceSpecification",
                        "price": "200",
                        "priceCurrency": "EUR",
                        "unitText": "MONTH"
                    },
                    "seller": {
                        "@type": "Organization",
                        "name": "LCR DIGITAL"
                    },
                    "availability": "https://schema.org/InStock",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Création de site web vitrine",
                        "provider": {
                            "@type": "Organization",
                            "name": "LCR DIGITAL"
                        }
                    }
                }
            },
            {
                "@type": "ListItem",
                "position": 2,
                "item": {
                    "@type": "Offer",
                    "name": "Forfait Visibilité",
                    "description": "Site internet avec référencement local, optimisation SEO avancée, Google My Business et jusqu'à 12 pages",
                    "price": "260",
                    "priceCurrency": "EUR",
                    "priceSpecification": {
                        "@type": "UnitPriceSpecification",
                        "price": "260",
                        "priceCurrency": "EUR",
                        "unitText": "MONTH"
                    },
                    "seller": {
                        "@type": "Organization",
                        "name": "LCR DIGITAL"
                    },
                    "availability": "https://schema.org/InStock",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Création de site web avec référencement",
                        "provider": {
                            "@type": "Organization",
                            "name": "LCR DIGITAL"
                        }
                    }
                }
            },
            {
                "@type": "ListItem",
                "position": 3,
                "item": {
                    "@type": "Offer",
                    "name": "Forfait Digitalisation",
                    "description": "Site internet avec stratégie SEO complète, référencement sur 10 villes, pages illimitées et support prioritaire",
                    "price": "350",
                    "priceCurrency": "EUR",
                    "priceSpecification": {
                        "@type": "UnitPriceSpecification",
                        "price": "350",
                        "priceCurrency": "EUR",
                        "unitText": "MONTH"
                    },
                    "seller": {
                        "@type": "Organization",
                        "name": "LCR DIGITAL"
                    },
                    "availability": "https://schema.org/InStock",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Création de site web avec référencement avancé",
                        "provider": {
                            "@type": "Organization",
                            "name": "LCR DIGITAL"
                        }
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
                "name": "Quelle formule choisir pour mon entreprise ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Le forfait Site Web convient aux artisans et indépendants débutant sur internet. Le forfait Visibilité est idéal pour les TPE/PME souhaitant être trouvées localement. Le forfait Digitalisation s'adresse aux entreprises visant une forte présence en ligne sur plusieurs villes."
                }
            },
            {
                "@type": "Question",
                "name": "Puis-je changer de forfait plus tard ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Oui, vous pouvez passer à un forfait supérieur à tout moment. Par exemple, débuter avec le forfait Site Web puis évoluer vers Visibilité lorsque votre activité se développe. Le passage à un forfait inférieur est également possible sous conditions."
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
                "name": "Que se passe-t-il après les 24 mois ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Après l'engagement initial de 24 mois, votre abonnement se poursuit sans engagement avec les mêmes tarifs. Vous pouvez résilier à tout moment avec un préavis de 30 jours. Vous conservez la propriété de vos contenus et nom de domaine."
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
                    <div class="d-flex flex-column align-items-center text-center gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <h6 class="accent-color">Nos formules</h6>
                        <h3>Choisissez la formule adaptée à vos besoins</h3>
                        <p>Des tarifs transparents, sans surprise. Paiement en une fois ou en plusieurs fois possible.</p>
                    </div>

                    <div class="pricing-table-container">
                        <div class="row row-cols-1 row-cols-lg-3 g-4">
                            <!-- Site web -->
                            <div class="col">
                                <div class="pricing-card animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                    <div class="pricing-card-header" style="background: linear-gradient(135deg, #6A4BFF 0%, #3D6BFF 100%);">
                                        <h4>Site web</h4>
                                        <p>Site web</p>
                                    </div>
                                    <div class="pricing-card-price">
                                        <span class="price-from">à partir de</span>
                                        <div class="price-main">
                                            <span class="amount">200<sup>€</sup></span>
                                            <span class="price-period">/mois</span>
                                        </div>
                                        <span class="price-setup">+ 500€ de mise en place</span>
                                    </div>
                                    <div class="pricing-card-body">
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-globe"></i>
                                                <span>Site web</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Hébergement inclus</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Nom de domaine inclus</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Certificat SSL (HTTPS)</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Design responsive</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Jusqu'à 8 pages</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                                <span>SEO & visibilité</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Optimisation SEO de base</li>
                                                <li class="not-included"><i class="fa-solid fa-xmark"></i> Référencement local</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Google Analytics</li>
                                                <li class="not-included"><i class="fa-solid fa-xmark"></i> Google My Business</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Email professionnel</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-envelope"></i>
                                                <span>Formulaire & contact</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Formulaires de contact</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Google Maps intégré</li>
                                                <li class="not-included"><i class="fa-solid fa-xmark"></i> Prise de RDV en ligne</li>
                                                <li class="not-included"><i class="fa-solid fa-xmark"></i> Chat en ligne</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-headset"></i>
                                                <span>Support & maintenance</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Maintenance incluse (5h/mois)</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Mises à jour sécurité</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Support email</li>
                                                <li class="not-included"><i class="fa-solid fa-xmark"></i> Support prioritaire</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-cube"></i>
                                                <span>Modules</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Accès à tous les modules</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-plus-circle"></i>
                                                <span>Options & évolutions</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Page supplémentaire : 50€</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Modification hors forfait : 70€/h</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Rédaction contenu : 80€/page</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Refonte graphique : 400€</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Galerie photos/vidéos : 100€</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Intégration newsletter : 150€</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Traduction : 60€/page</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pricing-card-footer">
                                        <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent-outline w-100">Demander un devis</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Visibilité -->
                            <div class="col">
                                <div class="pricing-card featured animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                    <div class="pricing-card-badge">Populaire</div>
                                    <div class="pricing-card-header" style="background: linear-gradient(135deg, #FF2FB3 0%, #FF4FD1 100%);">
                                        <h4>Visibilité</h4>
                                        <p>Site + Référencement</p>
                                    </div>
                                    <div class="pricing-card-price">
                                        <span class="price-from">à partir de</span>
                                        <div class="price-main">
                                            <span class="amount">260<sup>€</sup></span>
                                            <span class="price-period">/mois</span>
                                        </div>
                                        <span class="price-setup">+ 550€ de mise en place</span>
                                    </div>
                                    <div class="pricing-card-body">
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-globe"></i>
                                                <span>Site web</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Hébergement inclus</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Nom de domaine inclus</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Certificat SSL (HTTPS)</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Design responsive</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Jusqu'à 12 pages</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                                <span>SEO & visibilité</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Optimisation SEO avancée</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Référencement local (5 villes)</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Google Analytics</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Google My Business</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Email professionnel</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-envelope"></i>
                                                <span>Formulaire & contact</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Formulaires de contact</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Google Maps intégré</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Prise de RDV en ligne</li>
                                                <li class="not-included"><i class="fa-solid fa-xmark"></i> Chat en ligne</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-headset"></i>
                                                <span>Support & maintenance</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Maintenance incluse (5h/mois)</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Mises à jour sécurité</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Support email</li>
                                                <li class="not-included"><i class="fa-solid fa-xmark"></i> Support prioritaire</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-cube"></i>
                                                <span>Modules</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Accès à tous les modules</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-plus-circle"></i>
                                                <span>Options & évolutions</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Page supplémentaire : 50€</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Ville supplémentaire : 5€/mois</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Modification hors forfait : 70€/h</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Rédaction contenu : 80€/page</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Refonte graphique : 400€</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Galerie photos/vidéos : 100€</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Intégration newsletter : 150€</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Traduction : 60€/page</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pricing-card-footer">
                                        <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent w-100">Demander un devis</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Digitalisation -->
                            <div class="col">
                                <div class="pricing-card animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                    <div class="pricing-card-header" style="background: linear-gradient(135deg, #3D6BFF 0%, #6A4BFF 100%);">
                                        <h4>Digitalisation</h4>
                                        <p>Site + Référencement Avancé</p>
                                    </div>
                                    <div class="pricing-card-price">
                                        <span class="price-from">à partir de</span>
                                        <div class="price-main">
                                            <span class="amount">350<sup>€</sup></span>
                                            <span class="price-period">/mois</span>
                                        </div>
                                        <span class="price-setup">+ 650€ de mise en place</span>
                                    </div>
                                    <div class="pricing-card-body">
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-globe"></i>
                                                <span>Site web</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Hébergement inclus</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Nom de domaine inclus</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Certificat SSL (HTTPS)</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Design responsive</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Pages illimitées</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                                <span>SEO & visibilité</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Stratégie SEO complète</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Référencement local (10 villes)</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Google Analytics</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Google My Business</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Email professionnel</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-envelope"></i>
                                                <span>Formulaire & contact</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Formulaires de contact</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Google Maps intégré</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Prise de RDV en ligne</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Chat en ligne</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-headset"></i>
                                                <span>Support & maintenance</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Maintenance incluse (5h/mois)</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Mises à jour sécurité</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Support email</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Support prioritaire</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-cube"></i>
                                                <span>Modules</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Accès à tous les modules</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-plus-circle"></i>
                                                <span>Options & évolutions</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Page supplémentaire : 50€</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Ville supplémentaire : 5€/mois</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Modification hors forfait : 70€/h</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Rédaction contenu : 80€/page</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Refonte graphique : 400€</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Galerie photos/vidéos : 100€</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Intégration newsletter : 150€</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Traduction : 60€/page</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pricing-card-footer">
                                        <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent-outline w-100">Demander un devis</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <p style="color: var(--text-color); opacity: 0.8; font-size: 0.95rem;">* TVA non applicable, article 293 B du CGI. Engagement 24 mois minimum.</p>
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
                                <h3 class="h5">Quelle formule choisir pour mon entreprise ?</h3>
                                <p style="opacity: 0.85;">Le forfait Site Web convient aux artisans et indépendants débutant sur internet. Le forfait Visibilité est idéal pour les TPE/PME souhaitant être trouvées localement. Le forfait Digitalisation s'adresse aux entreprises visant une forte présence en ligne sur plusieurs villes.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Puis-je changer de forfait plus tard ?</h3>
                                <p style="opacity: 0.85;">Oui, vous pouvez passer à un forfait supérieur à tout moment. Par exemple, débuter avec le forfait Site Web puis évoluer vers Visibilité lorsque votre activité se développe. Le passage à un forfait inférieur est également possible sous conditions.</p>
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
                                <h3 class="h5">Que se passe-t-il après les 24 mois ?</h3>
                                <p style="opacity: 0.85;">Après l'engagement initial de 24 mois, votre abonnement se poursuit sans engagement avec les mêmes tarifs. Vous pouvez résilier à tout moment avec un préavis de 30 jours. Vous conservez la propriété de vos contenus et nom de domaine.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section contactus-banner">
            <div class="hero-container">
                <div class="contactus-content">
                    <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Besoin d'un devis personnalisé ?</h3>
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Contactez-nous pour obtenir un tarif adapté à votre projet<?= city_phrase(' à ') ?>.</p>
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

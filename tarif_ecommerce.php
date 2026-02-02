<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Tarif Création Site E-commerce" . city_phrase(" à ") . " – Prix Boutique en Ligne | LCR DIGITAL";
$page_description = "Tarifs boutique e-commerce" . city_phrase(" à ") . " dès 350€/mois : Shopify ou sur-mesure avec Stripe. Paiement sécurisé, gestion stocks, multi-transporteurs, maintenance incluse. Comparatif Shopify vs développement sur-mesure. Devis gratuit.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require __DIR__ . "/assets/components/head.php"; ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": "Tarifs E-commerce LCR DIGITAL",
        "description": "Offres et tarifs pour la création de boutique en ligne",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@type": "Offer",
                    "name": "Boutique Shopify",
                    "description": "Boutique e-commerce sur Shopify avec thème premium personnalisé, produits illimités, paiement sécurisé et multi-transporteurs",
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
                        "name": "Création boutique e-commerce Shopify",
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
                    "name": "Boutique Sur-Mesure",
                    "description": "Boutique e-commerce développée sur-mesure avec Stripe, design 100% personnalisé, filtres avancés et paiement fractionné",
                    "price": "450",
                    "priceCurrency": "EUR",
                    "priceSpecification": {
                        "@type": "UnitPriceSpecification",
                        "price": "450",
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
                        "name": "Création boutique e-commerce sur-mesure",
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
                "name": "Tarif E-commerce",
                "item": "https://lcr-digital.fr/tarif-ecommerce"
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
                "name": "Shopify ou développement sur-mesure : comment choisir ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Shopify est idéal pour démarrer rapidement avec un budget maîtrisé et des besoins standards. Le développement sur-mesure convient aux projets avec des volumes importants (économies sur les frais) ou des besoins spécifiques (filtres personnalisés, paiement fractionné natif, intégrations complexes)."
                }
            },
            {
                "@type": "Question",
                "name": "Quels sont les vrais frais de transaction ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Shopify Payments facture 1,9% + 0,25€ par transaction avec carte EU. Stripe (solution sur-mesure) facture 1,4% + 0,25€ pour les cartes EU. Sur 10 000€ de CA mensuel, la différence représente 50€/mois d'économie avec la solution sur-mesure, soit 600€/an."
                }
            },
            {
                "@type": "Question",
                "name": "Puis-je migrer de Shopify vers du sur-mesure ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Oui, nous proposons des migrations complètes : produits, clients, commandes et design. Cette option est pertinente lorsque votre volume de ventes justifie l'investissement (généralement au-delà de 15 000€/mois de CA). Nous assurons la continuité de votre activité pendant la migration."
                }
            },
            {
                "@type": "Question",
                "name": "La formation est-elle incluse ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Oui, une formation complète à l'administration de votre boutique est incluse : gestion produits, commandes, stocks, codes promo et statistiques. Nous vous remettons également une documentation vidéo détaillée. Un support email est disponible après la mise en ligne."
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
                    <h1 class="banner-h1">Tarif Création Site E-commerce<?= city_phrase(' à ') ?> – Prix Boutique en Ligne</h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">Tarif E-commerce</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-4">
                    <div class="d-flex flex-column align-items-center text-center gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <h6 class="accent-color">Nos formules e-commerce</h6>
                        <h3>Lancez votre boutique en ligne</h3>
                        <p>Deux solutions adaptées à vos besoins : Shopify pour la simplicité ou développement sur-mesure pour la performance.</p>
                    </div>

                    <div class="pricing-table-container">
                        <div class="row row-cols-1 row-cols-lg-2 g-4 justify-content-center">
                            <!-- Shopify -->
                            <div class="col" style="max-width: 500px;">
                                <div class="pricing-card animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                    <div class="pricing-card-header" style="background: linear-gradient(135deg, #95BF47 0%, #5E8E3E 100%);">
                                        <h4><i class="fa-brands fa-shopify me-2"></i>Shopify</h4>
                                        <p>Simplicité & rapidité</p>
                                    </div>
                                    <div class="pricing-card-price">
                                        <span class="price-from">à partir de</span>
                                        <div class="price-main">
                                            <span class="amount">350<sup>€</sup></span>
                                            <span class="price-period">/mois</span>
                                        </div>
                                        <span class="price-setup">+ 900€ de mise en place</span>
                                    </div>
                                    <div class="pricing-card-body">
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-percent"></i>
                                                <span>Frais de transaction</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-info-circle"></i> Shopify Payments : 1.9% + 0.25€</li>
                                                <li class="included"><i class="fa-solid fa-info-circle"></i> PayPal : 2.9% + 0.35€</li>
                                                <li class="included"><i class="fa-solid fa-info-circle"></i> Abonnement Shopify : ~36€/mois inclus</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-store"></i>
                                                <span>Boutique</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Produits illimités</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Thème premium personnalisé</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Design responsive</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Fiches produits optimisées</li>
                                                <li class="not-included"><i class="fa-solid fa-xmark"></i> Design 100% sur-mesure</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-credit-card"></i>
                                                <span>Paiement</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> CB, Visa, Mastercard</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> PayPal</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Apple Pay / Google Pay</li>
                                                <li class="not-included"><i class="fa-solid fa-xmark"></i> Paiement en 3x/4x natif</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-truck"></i>
                                                <span>Livraison</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Multi-transporteurs</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Colissimo, Mondial Relay</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Suivi colis intégré</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Click & Collect</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-chart-line"></i>
                                                <span>Gestion & Marketing</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Gestion des stocks</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Codes promo</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Emails automatiques</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Statistiques ventes</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-headset"></i>
                                                <span>Support & maintenance</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Maintenance incluse</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Mises à jour automatiques</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Support email</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Formation administration</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pricing-card-footer">
                                        <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent-outline w-100">Demander un devis</a>
                                        <p class="small mt-2 mb-0" style="opacity: 0.7;">Idéal pour démarrer rapidement</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Sur-mesure Stripe -->
                            <div class="col" style="max-width: 500px;">
                                <div class="pricing-card featured animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                    <div class="pricing-card-badge">Recommandé</div>
                                    <div class="pricing-card-header" style="background: linear-gradient(135deg, #635BFF 0%, #7A73FF 100%);">
                                        <h4><i class="fa-brands fa-stripe me-2"></i>Sur-mesure</h4>
                                        <p>Performance & contrôle</p>
                                    </div>
                                    <div class="pricing-card-price">
                                        <span class="price-from">à partir de</span>
                                        <div class="price-main">
                                            <span class="amount">450<sup>€</sup></span>
                                            <span class="price-period">/mois</span>
                                        </div>
                                        <span class="price-setup">+ 1 500€ de mise en place</span>
                                    </div>
                                    <div class="pricing-card-body">
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-percent"></i>
                                                <span>Frais de transaction</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-info-circle"></i> Stripe : 1.4% + 0.25€ (cartes EU)</li>
                                                <li class="included"><i class="fa-solid fa-info-circle"></i> Stripe : 2.9% + 0.25€ (cartes non-EU)</li>
                                                <li class="included"><i class="fa-solid fa-info-circle"></i> Aucun frais de plateforme</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-store"></i>
                                                <span>Boutique</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Produits illimités</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Design 100% sur-mesure</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> UX/UI optimisée conversion</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Filtres avancés personnalisés</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Recherche intelligente</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-credit-card"></i>
                                                <span>Paiement</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> CB, Visa, Mastercard, Amex</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Apple Pay / Google Pay</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Paiement en 3x/4x (Alma, Klarna)</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> SEPA / Virement</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-truck"></i>
                                                <span>Livraison</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Multi-transporteurs</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Points relais (Mondial Relay, Relais Colis)</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Suivi colis temps réel</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Click & Collect</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-chart-line"></i>
                                                <span>Gestion & Marketing</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Gestion stocks avancée</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Codes promo & réductions</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Emails automatiques (paniers abandonnés)</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Dashboard analytics complet</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-category">
                                            <div class="pricing-category-title">
                                                <i class="fa-solid fa-headset"></i>
                                                <span>Support & maintenance</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li class="included"><i class="fa-solid fa-check"></i> Maintenance incluse</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Mises à jour sécurité</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Support prioritaire</li>
                                                <li class="included"><i class="fa-solid fa-check"></i> Formation complète</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pricing-card-footer">
                                        <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent w-100">Demander un devis</a>
                                        <p class="small mt-2 mb-0" style="opacity: 0.7;">Idéal pour les gros volumes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comparatif frais -->
                    <div class="d-flex flex-column align-items-center text-center gspace-2 mt-5 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <h6 class="accent-color">Comparatif des frais</h6>
                        <h3>Quel impact sur vos marges ?</h3>
                        <p>Exemple sur une vente de 100€ avec une carte bancaire européenne</p>
                    </div>

                    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
                        <div class="col" style="max-width: 400px;">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.08);">
                                <div class="d-flex align-items-center gspace-2 mb-2">
                                    <i class="fa-brands fa-shopify fa-lg" style="color: #95BF47;"></i>
                                    <h5 class="mb-0">Shopify</h5>
                                </div>
                                <div class="d-flex justify-content-between py-2" style="border-bottom: 1px solid rgba(255,255,255,0.1);">
                                    <span>Vente</span>
                                    <span>100,00€</span>
                                </div>
                                <div class="d-flex justify-content-between py-2" style="border-bottom: 1px solid rgba(255,255,255,0.1);">
                                    <span>Frais Shopify Payments (1.9% + 0.25€)</span>
                                    <span style="color: #ff6b6b;">-2,15€</span>
                                </div>
                                <div class="d-flex justify-content-between py-2">
                                    <span><strong>Vous recevez</strong></span>
                                    <span><strong>97,85€</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="col" style="max-width: 400px;">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 1.5rem; border: 1px solid rgba(255,255,255,0.08);">
                                <div class="d-flex align-items-center gspace-2 mb-2">
                                    <i class="fa-brands fa-stripe fa-lg" style="color: #635BFF;"></i>
                                    <h5 class="mb-0">Sur-mesure + Stripe</h5>
                                </div>
                                <div class="d-flex justify-content-between py-2" style="border-bottom: 1px solid rgba(255,255,255,0.1);">
                                    <span>Vente</span>
                                    <span>100,00€</span>
                                </div>
                                <div class="d-flex justify-content-between py-2" style="border-bottom: 1px solid rgba(255,255,255,0.1);">
                                    <span>Frais Stripe (1.4% + 0.25€)</span>
                                    <span style="color: #ff6b6b;">-1,65€</span>
                                </div>
                                <div class="d-flex justify-content-between py-2">
                                    <span><strong>Vous recevez</strong></span>
                                    <span><strong style="color: #51cf66;">98,35€</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-3 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <p style="opacity: 0.8;"><i class="fa-solid fa-lightbulb accent-color me-2"></i>Sur 10 000€ de CA/mois, vous économisez <strong>50€/mois</strong> avec la solution sur-mesure</p>
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
                        <h2>FAQ E-commerce</h2>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Shopify ou développement sur-mesure : comment choisir ?</h3>
                                <p style="opacity: 0.85;">Shopify est idéal pour démarrer rapidement avec un budget maîtrisé et des besoins standards. Le développement sur-mesure convient aux projets avec des volumes importants (économies sur les frais) ou des besoins spécifiques (filtres personnalisés, paiement fractionné natif, intégrations complexes).</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Quels sont les vrais frais de transaction ?</h3>
                                <p style="opacity: 0.85;">Shopify Payments facture 1,9% + 0,25€ par transaction avec carte EU. Stripe (solution sur-mesure) facture 1,4% + 0,25€ pour les cartes EU. Sur 10 000€ de CA mensuel, la différence représente 50€/mois d'économie avec la solution sur-mesure, soit 600€/an.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">Puis-je migrer de Shopify vers du sur-mesure ?</h3>
                                <p style="opacity: 0.85;">Oui, nous proposons des migrations complètes : produits, clients, commandes et design. Cette option est pertinente lorsque votre volume de ventes justifie l'investissement (généralement au-delà de 15 000€/mois de CA). Nous assurons la continuité de votre activité pendant la migration.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp" style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 2rem; border: 1px solid rgba(255,255,255,0.08);">
                                <h3 class="h5">La formation est-elle incluse ?</h3>
                                <p style="opacity: 0.85;">Oui, une formation complète à l'administration de votre boutique est incluse : gestion produits, commandes, stocks, codes promo et statistiques. Nous vous remettons également une documentation vidéo détaillée. Un support email est disponible après la mise en ligne.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section contactus-banner">
            <div class="hero-container">
                <div class="contactus-content">
                    <h3 class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Prêt à lancer votre boutique en ligne ?</h3>
                    <p class="animate-box animated animate__animated" data-animate="animate__fadeInUp">Contactez-nous pour un devis personnalisé<?= city_phrase(' à ') ?>.</p>
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

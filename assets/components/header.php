<?php require __DIR__ . "/component_bootstrap.php"; ?>
<header class="header-fixed">
    <div class="hero-container">
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid">
                <div class="logo-container header-logo">
                    <a class="navbar-brand" href="<?= e(route_with_city("agence-web", $city_slug)) ?>"><img src="./assets/images/lcr-digital-logo.png" class="img-fluid" alt="LCR DIGITAL"></a>
                </div>
                <div class="nav-link-wrapper">
                    <button class="btn nav-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?= e(route_with_city("agence-web", $city_slug)) ?>">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?= e(route_with_city("agence-digitale", $city_slug)) ?>">A propos</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Nos services <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= e(route_with_city("services-web", $city_slug)) ?>">Tous nos services</a></li>
                                    <li><a class="dropdown-item" href="<?= e(route_with_city("creation-site-one-page", $city_slug)) ?>">One Page</a></li>
                                    <li><a class="dropdown-item" href="<?= e(route_with_city("creation-site-vitrine", $city_slug)) ?>">Site vitrine</a></li>
                                    <li><a class="dropdown-item" href="<?= e(route_with_city("creation-site-catalogue", $city_slug)) ?>">Site catalogue</a></li>
                                    <li><a class="dropdown-item" href="<?= e(route_with_city("creation-site-ecommerce", $city_slug)) ?>">Site e-commerce</a></li>
                                    <li><a class="dropdown-item" href="<?= e(route_with_city("creation-application-mobile", $city_slug)) ?>">Application mobile</a></li>
                                    <li><a class="dropdown-item" href="<?= e(route_with_city("developpement-web-sur-mesure", $city_slug)) ?>">Développement personnalisé</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= e(route_with_city("tarifs-creation-site-web", $city_slug)) ?>">Tarifs</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-cta-container">
                    <a href="<?= e(route_with_city("contact-agence-web", $city_slug)) ?>" class="btn btn-accent-outline">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</header>

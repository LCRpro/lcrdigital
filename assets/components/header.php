<?php require __DIR__ . "/component_bootstrap.php"; ?>
<header class="header-fixed">
    <div class="hero-container">
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid">
                <div class="logo-container header-logo">
                    <a class="navbar-brand" href="<?= e(route_with_city("", $city_slug)) ?>"><img src="/assets/images/lcr-digital-logo.png" class="img-fluid" alt="LCR DIGITAL"></a>
                </div>
                <div class="nav-link-wrapper">
                    <button class="btn nav-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?= e(route_with_city("", $city_slug)) ?>">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= e(route_with_city("site-web", $city_slug)) ?>">Site Web</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= e(route_with_city("ecommerce", $city_slug)) ?>">Ecommerce</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= e(route_with_city("application-mobile", $city_slug)) ?>">App mobile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= e(route_with_city("developpement-sur-mesure", $city_slug)) ?>">Développement sur mesure</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= e(route_with_city("secteurs-activite", $city_slug)) ?>">Secteurs d'activité</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= e(route_with_city("agence", $city_slug)) ?>">L'agence</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-cta-container">
                    <a href="<?= e(route_with_city("contact", $city_slug)) ?>" class="btn btn-accent-outline">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</header>

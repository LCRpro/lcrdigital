<?php require __DIR__ . "/component_bootstrap.php"; ?>
<aside>
    <div>
        <div class="sidebar-overlay"></div>
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="logo-container sidebar-logo">
                    <img src="/assets/images/lcr-digital-logo.png" alt="LCR DIGITAL" class="img-fluid">
                </div>
                <button class="close-btn btn-white-accent"><span>X</span></button>
            </div>
            <ul class="menu">
                <li><a href="<?= e(route_with_city("agence-web", $city_slug)) ?>">Accueil</a></li>
                <li><a href="<?= e(route_with_city("agence-digitale", $city_slug)) ?>">A propos</a></li>
                <li class="sidebar-dropdown">
                    <div class="dropdown-header">
                        <a href="#">Nos services</a>
                        <button class="sidebar-dropdown-btn"><i class="fa-solid fa-chevron-down"></i></button>
                    </div>
                    <ul class="sidebar-dropdown-menu">
                        <li><a href="<?= e(route_with_city("services-web", $city_slug)) ?>">Tous nos services</a></li>
                        <li><a href="<?= e(route_with_city("creation-site-one-page", $city_slug)) ?>">One Page</a></li>
                        <li><a href="<?= e(route_with_city("creation-site-vitrine", $city_slug)) ?>">Site vitrine</a></li>
                        <li><a href="<?= e(route_with_city("creation-site-catalogue", $city_slug)) ?>">Site catalogue</a></li>
                        <li><a href="<?= e(route_with_city("creation-site-ecommerce", $city_slug)) ?>">Site e-commerce</a></li>
                        <li><a href="<?= e(route_with_city("creation-application-mobile", $city_slug)) ?>">Application mobile</a></li>
                        <li><a href="<?= e(route_with_city("developpement-web-sur-mesure", $city_slug)) ?>">Développement personnalisé</a></li>
                    </ul>
                </li>
                <li><a href="<?= e(route_with_city("tarifs-creation-site-web", $city_slug)) ?>">Tarifs</a></li>
                <li><a href="<?= e(route_with_city("contact-agence-web", $city_slug)) ?>">Contact</a></li>
            </ul>
        </div>
    </div>
</aside>

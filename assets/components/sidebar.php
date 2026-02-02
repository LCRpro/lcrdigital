<?php require __DIR__ . "/component_bootstrap.php"; ?>
<aside>
    <div>
        <div class="sidebar-overlay"></div>
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="logo-container sidebar-logo">
                    <img src="/assets/images/lcr-digital-logo.png" alt="LCR DIGITAL" class="img-fluid">
                </div>
                <button class="close-btn btn-white-accent"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <ul class="menu">
                <li><a href="<?= e(route_with_city("", $city_slug)) ?>">Accueil</a></li>
                <li><a href="<?= e(route_with_city("site-web", $city_slug)) ?>">Site Web</a></li>
                <li><a href="<?= e(route_with_city("ecommerce", $city_slug)) ?>">E-commerce</a></li>
                <li><a href="<?= e(route_with_city("application-mobile", $city_slug)) ?>">App mobile</a></li>
                <li><a href="<?= e(route_with_city("developpement-sur-mesure", $city_slug)) ?>">Développement sur mesure</a></li>
                <li><a href="<?= e(route_with_city("secteurs-activite", $city_slug)) ?>">Secteurs d'activité</a></li>
                <li><a href="<?= e(route_with_city("agence", $city_slug)) ?>">L'agence</a></li>
                <li><a href="<?= e(route_with_city("contact", $city_slug)) ?>">Contact</a></li>
            </ul>
        </div>
    </div>
</aside>

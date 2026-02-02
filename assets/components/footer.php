<?php require __DIR__ . "/component_bootstrap.php"; ?>
<footer>
    <div class="section footer-banner">
        <div class="hero-container">
            <div class="d-flex flex-column gspace-2">
                <div class="footer-header">
                    <div class="logo-container footer">
                        <img src="/assets/images/lcr-digital-logo.png" alt="LCR DIGITAL" class="img-fluid">
                    </div>
                    <p>Agence web LCR DIGITAL : création de sites performants, visibles et pensés pour convertir.</p>
                    <div class="social-container">
                        <a href="https://www.facebook.com/profile.php?id=61586348482305#" target="_blank" class="social-item">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/lcr__digital/" target="_blank" class="social-item">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>


                <div class="footer-link">
                    <div class="underline-footer"></div>
                    <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1 g-3">
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 text-xl-start text-center align-items-xl-start align-items-center">
                                <h5 class="accent-color">Contact</h5>
                                <div class="footer-list-underline"></div>
                                <div class="d-flex flex-row align-items-center gspace-2">
                                    <i class="fa-solid fa-md fa-phone accent-color"></i>
                                    <div class="d-flex flex-column gspace-1">
                                        <p class="mb-0">Téléphone</p>
                                        <p class="mb-0">06 66 15 80 58</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center gspace-2">
                                    <i class="fa-solid fa-md fa-envelope accent-color"></i>
                                    <div class="d-flex flex-column gspace-1">
                                        <p class="mb-0">Email</p>
                                        <p class="mb-0">contact@lcr-digital.fr</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center gspace-2">
                                    <i class="fa-solid fa-md fa-location-dot accent-color"></i>
                                    <div class="d-flex flex-column gspace-1">
                                        <p class="mb-0">Adresse</p>
                                        <p class="mb-0"><?= city_text("Rouen", $city) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 text-xl-start text-center align-items-xl-start align-items-center">
                                <h5 class="accent-color">Liens rapides</h5>
                                <div class="footer-list-underline"></div>
                                <ul class="footer-list">
                                    <li><a href="<?= e(route_with_city("", $city_slug)) ?>">Accueil</a></li>
                                    <li><a href="<?= e(route_with_city("agence", $city_slug)) ?>">L'agence</a></li>
                                    <li><a href="<?= e(route_with_city("secteurs-activite", $city_slug)) ?>">Secteurs d'activité</a></li>
                                    <li><a href="<?= e(route_with_city("contact", $city_slug)) ?>">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 text-xl-start text-center align-items-xl-start align-items-center">
                                <h5 class="accent-color">Services</h5>
                                <div class="footer-list-underline"></div>
                                <ul class="footer-list">
                                    <li><a href="<?= e(route_with_city("site-web", $city_slug)) ?>">Site Web</a></li>
                                    <li><a href="<?= e(route_with_city("ecommerce", $city_slug)) ?>">E-commerce</a></li>
                                    <li><a href="<?= e(route_with_city("application-mobile", $city_slug)) ?>">Application mobile</a></li>
                                    <li><a href="<?= e(route_with_city("developpement-sur-mesure", $city_slug)) ?>">Développement sur mesure</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gspace-2 text-xl-start text-center align-items-xl-start align-items-center">
                                <h5 class="accent-color">Tarifs</h5>
                                <div class="footer-list-underline"></div>
                                <ul class="footer-list">
                                    <li><a href="/tarif-site-web">Tarif Site Web</a></li>
                                    <li><a href="/tarif-ecommerce">Tarif E-commerce</a></li>
                                    <li><a href="/tarif-application-mobile">Tarif Application Mobile</a></li>
                                    <li><a href="/tarif-developpement-sur-mesure">Tarif Sur Mesure</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="underline-footer"></div>
                </div>

                <div class="copyright-container">
                    <p>Copyright © 2026 LCR DIGITAL, tous droits réservés.</p>

                    <div class="d-flex flex-row align-items-center gspace-2">
                        <a href="/mentions-legales" class="legal-link">Mentions légales</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Mentions légales | LCR DIGITAL";
$page_description = "Mentions légales du site LCR DIGITAL, agence web à Rouen. Informations sur l'éditeur, l'hébergeur et les conditions d'utilisation.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require __DIR__ . "/assets/components/head.php"; ?>
    <meta name="robots" content="noindex, nofollow">
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
                    <h2>Informations légales</h2>
                    <h1 class="banner-h1">Mentions légales</h1>
                    <nav class="breadcrumb">
                        <a href="<?= e(route_with_city("agence-web", $city_slug)) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">Mentions légales</a>
                    </nav>
                </div>
            </div>
        </div>


        <div class="section">
            <div class="hero-container">
                <div class="legal-content">

                    <div class="legal-section">
                        <h3>1. Éditeur du site</h3>
                        <p>Le site <strong>lcr-digital.fr</strong> est édité par :</p>
                        <ul>
                            <li><strong>Raison sociale :</strong> LCR DIGITAL</li>
                            <li><strong>Forme juridique :</strong> Auto-entrepreneur</li>
                            <li><strong>SIRET :</strong> 999 804 347 00014</li>
                            <li><strong>Adresse :</strong> Rouen, France</li>
                            <li><strong>Téléphone :</strong> 06 66 15 80 58</li>
                            <li><strong>Email :</strong> contact@lcr-digital.fr</li>
                            <li><strong>Directeur de la publication :</strong> Liam Music</li>
                        </ul>
                    </div>

                    <div class="legal-section">
                        <h3>2. Hébergement</h3>
                        <p>Le site est hébergé par :</p>
                        <ul>
                            <li><strong>Hébergeur :</strong> Hostinger International Ltd</li>
                            <li><strong>Adresse :</strong> 61 Lordou Vironos Street, 6023 Larnaca, Chypre</li>
                            <li><strong>Site web :</strong> hostinger.fr</li>
                        </ul>
                    </div>

                    <div class="legal-section">
                        <h3>3. Propriété intellectuelle</h3>
                        <p>L'ensemble du contenu de ce site (textes, images, vidéos, logos, icônes, sons, logiciels, etc.) est la propriété exclusive de LCR DIGITAL ou de ses partenaires et est protégé par les lois françaises et internationales relatives à la propriété intellectuelle.</p>
                        <p>Toute reproduction, représentation, modification, publication, transmission, ou plus généralement toute exploitation non autorisée du site ou de son contenu, par quelque procédé que ce soit, est interdite et constitue une contrefaçon sanctionnée par le Code de la propriété intellectuelle.</p>
                    </div>

                    <div class="legal-section">
                        <h3>4. Données personnelles et cookies</h3>
                        <p>Conformément au Règlement Général sur la Protection des Données (RGPD) et à la loi Informatique et Libertés, vous disposez d'un droit d'accès, de rectification, de suppression et d'opposition aux données personnelles vous concernant.</p>
                        <p>Pour exercer ces droits, vous pouvez nous contacter à l'adresse : <strong>contact@lcr-digital.fr</strong></p>
                        <p>Le site utilise des cookies pour améliorer l'expérience utilisateur et mesurer l'audience. Vous pouvez gérer vos préférences de cookies via le panneau de gestion accessible en cliquant sur l'icône en bas à droite de l'écran.</p>
                    </div>

                    <div class="legal-section">
                        <h3>5. Limitation de responsabilité</h3>
                        <p>LCR DIGITAL s'efforce d'assurer l'exactitude et la mise à jour des informations diffusées sur ce site. Toutefois, LCR DIGITAL ne peut garantir l'exactitude, la précision ou l'exhaustivité des informations mises à disposition.</p>
                        <p>En conséquence, LCR DIGITAL décline toute responsabilité pour toute imprécision, inexactitude ou omission portant sur des informations disponibles sur ce site.</p>
                    </div>

                    <div class="legal-section">
                        <h3>6. Liens hypertextes</h3>
                        <p>Le site peut contenir des liens hypertextes vers d'autres sites. LCR DIGITAL n'exerce aucun contrôle sur ces sites et décline toute responsabilité quant à leur contenu.</p>
                    </div>

                    <div class="legal-section">
                        <h3>7. Droit applicable</h3>
                        <p>Les présentes mentions légales sont soumises au droit français. En cas de litige, les tribunaux français seront seuls compétents.</p>
                    </div>

                </div>
            </div>
        </div>

    </main>


    <div id="site-footer">
        <?php require __DIR__ . "/assets/components/footer.php"; ?>
    </div>

    <script src="./assets/js/vendor/jquery.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/vendor/swiper-bundle.min.js"></script>
    <script src="./assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="./assets/js/vendor/fslightbox.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/submit-form.js"></script>
    <script src="./assets/js/swiper-script.js"></script>
    <script src="./assets/js/video_embedded.js"></script>

</body>
</html>

<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Erreur 404 - LCR DIGITAL";
$page_description = "Page introuvable. Revenez a l'accueil de LCR DIGITAL.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require __DIR__ . "/assets/components/head.php"; ?>
    <meta name="robots" content="noindex, nofollow">
</head>
<body>
    
    <div id="site-header">
        <?php require __DIR__ . "/assets/components/header.php"; ?>
    </div>
    
    
    <div id="site-sidebar">
        <?php require __DIR__ . "/assets/components/sidebar.php"; ?>
    </div>

    
    <main>
        <div class="section-notfound banner-notfound">
            <div class="hero-container">
                <div class="notfound-container">
                    <span class="text-notfound">404</span>
                    <h3>Page introuvable</h3>
                    <p>La page demandée n’existe pas ou a été déplacée.</p>
                    <a href="<?= e(route_with_city("agence-web", $city_slug)) ?>" class="btn btn-accent">Retour à l’accueil</a>
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
    <script src="/assets/js/banner.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/swiper-script.js"></script>
    <script src="/assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="/assets/js/vendor/fslightbox.js"></script>
    <script src="/assets/js/video_embedded.js"></script>
</body>
</html>

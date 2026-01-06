<?php require __DIR__ . "/city_bootstrap.php";
$page_title = "Contactez votre agence web" . city_phrase(" à ") . " | LCR DIGITAL";
$page_description = "Un projet web ? Une question ? Contactez LCR DIGITAL, agence web" . city_phrase(" à ") . ", pour obtenir un devis ou échanger avec notre équipe.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require __DIR__ . "/assets/components/head.php"; ?>
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
                    <h2>Contact</h2>
                    <h1 class="banner-h1">Contactez LCR DIGITAL – Votre agence web<?= city_phrase(' à ') ?></h1>
                    <nav class="breadcrumb">
                        <a href="/agence-web-<?= e($city_slug) ?>">Accueil</a>
                        <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                        <a href="#" class="current">Contact</a>
                    </nav>
                </div>
            </div>
        </div>

        
        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-2">
                    <div class="col">
                        <div class="contact-title">
                            <h6 class="accent-color">Contact</h6>
                            <h3>Parlons de votre projet web</h3>
                            <p>Expliquez-nous vos objectifs, on vous propose une solution claire et adaptée.</p>
                            <div class="row row-cols-md-2 row-cols-1 grid-spacer-2">
                                <div class="col">
                                    <div class="contact-details-card animate-box animated animate__animated" data-animate="animate__fadeIn">
                                        <div class="card contact-details-icon">
                                            <i class="fa-solid fa-phone-volume"></i>
                                        </div>
                                        <div class="d-flex flex-column gspace-1">
                                            <h5>Téléphone</h5>
                                            <p class="mb-0">06 66 15 80 58</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="contact-details-card animate-box animated slow animate__animated" data-animate="animate__fadeIn"">
                                        <div class="card contact-details-icon">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="d-flex flex-column gspace-1">
                                            <h5>Email</h5>
                                            <p class="mb-0">contact@lcr-digital.fr</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="contact-details-card animate-box animated animate__animated" data-animate="animate__fadeIn">
                                        <div class="card contact-details-icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="d-flex flex-column gspace-1">
                                            <h5>Localisation</h5>
                                            <p class="mb-0"><?= city_or_default('Rouen') ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="contact-details-card animate-box animated slow animate__animated" data-animate="animate__fadeIn">
                                        <div class="card contact-details-icon">
                                            <i class="fa-solid fa-clock"></i>
                                        </div>
                                        <div class="d-flex flex-column gspace-1">
                                            <h5>Horaires</h5>
                                            <p class="mb-0">9h - 18h, lundi à vendredi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="contact-form-layout">
                            <form action="contact.php" method="post" id="contactForm" class="form">
                                <div class="row row-cols-md-2 row-cols-1 grid-spacer-2">
                                    <div class="col">
                                        <div class="d-flex flex-column gspace-1">
                                            <label for="first_name">Prénom</label>
                                            <input type="text" name="first_name" id="first_name" placeholder="Votre prénom" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex flex-column gspace-1">
                                            <label for="last_name">Nom</label>
                                            <input type="text" name="last_name" id="last_name" placeholder="Votre nom" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gspace-1">
                                    <label for="Email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="Votre email" required>
                                </div>
                                <div class="d-flex flex-column gspace-1">
                                    <label for="Phone">Téléphone</label>
                                    <input type="tel" name="phone" id="phone" placeholder="Votre téléphone">
                                </div>
                                <div class="d-flex flex-column gspace-1">
                                    <label for="Subject">Sujet</label>
                                    <select name="subject" id="subject" required>
                                        <option value="" disabled selected>Choisir un sujet</option>
                                        <option value="Contact">Contact</option>
                                        <option value="Devis">Devis</option>
                                        <option value="Autre">Autre</option>
                                    </select>
                                </div>
                                <div class="d-flex flex-column gspace-1">
                                    <label for="Message">Message</label>
                                    <textarea name="message" id="message" rows="4" placeholder="Décrivez votre besoin" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-accent">Envoyer</button>
                                <div id="successMessage" class="mt-2 success d-none">
                                    <p><span class="fa-solid fa-check text-success"></span> Message envoyé.</p>
                                </div>            
                                <div id="errorMessage" class="mt-2 failed d-none">
                                    <p><span class="fa-solid fa-times text-danger"></span> Échec de l’envoi. Réessayez.</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="section">
            <div class="hero-container">
                <iframe loading="lazy" class="maps"
                        src="https://maps.google.com/maps?q=<?= rawurlencode($city === '' ? 'France' : $city) ?>&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near"
                        title="<?= city_or_default('France') ?>" aria-label="<?= city_or_default('France') ?>">
                </iframe>
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
    <script src="./assets/js/swiper-script.js"></script>
    <script src="./assets/js/submit-form.js"></script>
    <script src="./assets/js/video_embedded.js"></script>
</body>
</html>

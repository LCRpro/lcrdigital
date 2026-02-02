<?php
/**
 * Script pour générer le sitemap complet
 * Usage: php generate_sitemap.php
 */

require_once __DIR__ . '/city_bootstrap.php';

$domain = 'https://lcr-digital.fr';
$date = date('Y-m-d');

$pages = [
    '' => ['priority' => '1.0', 'city_priority' => '0.9'],
    'site-web' => ['priority' => '0.8', 'city_priority' => '0.7'],
    'ecommerce' => ['priority' => '0.8', 'city_priority' => '0.7'],
    'application-mobile' => ['priority' => '0.8', 'city_priority' => '0.7'],
    'developpement-sur-mesure' => ['priority' => '0.8', 'city_priority' => '0.7'],
    'secteurs-activite' => ['priority' => '0.8', 'city_priority' => '0.7'],
    'agence' => ['priority' => '0.8', 'city_priority' => '0.7'],
    'contact' => ['priority' => '0.8', 'city_priority' => '0.7'],
];

$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

// Pages sans ville
foreach ($pages as $page => $config) {
    $loc = $page === '' ? $domain . '/' : $domain . '/' . $page;
    $xml .= "  <url>\n";
    $xml .= "    <loc>{$loc}</loc>\n";
    $xml .= "    <lastmod>{$date}</lastmod>\n";
    $xml .= "    <changefreq>monthly</changefreq>\n";
    $xml .= "    <priority>{$config['priority']}</priority>\n";
    $xml .= "  </url>\n";
}

// Pages avec ville
foreach ($cities as $slug => $name) {
    foreach ($pages as $page => $config) {
        if ($page === '') {
            $loc = $domain . '/' . $slug;
        } else {
            $loc = $domain . '/' . $page . '/' . $slug;
        }
        $xml .= "  <url>\n";
        $xml .= "    <loc>{$loc}</loc>\n";
        $xml .= "    <lastmod>{$date}</lastmod>\n";
        $xml .= "    <changefreq>monthly</changefreq>\n";
        $xml .= "    <priority>{$config['city_priority']}</priority>\n";
        $xml .= "  </url>\n";
    }
}

$xml .= "</urlset>\n";

file_put_contents(__DIR__ . '/sitemap2.xml', $xml);

$total_urls = count($pages) + (count($cities) * count($pages));
echo "Sitemap généré avec {$total_urls} URLs (" . count($cities) . " villes, " . count($pages) . " pages)\n";

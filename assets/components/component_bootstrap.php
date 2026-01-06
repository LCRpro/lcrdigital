<?php
if (!function_exists("e")) {
    function e($value) {
        return htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8");
    }
}

if (!isset($city_slug)) {
    $city_slug = "";
}

if (!isset($city)) {
    $city = "";
}

if (!function_exists("route_with_city")) {
    function route_with_city($base, $city_slug) {
        $base = ltrim($base, "/");
        if ($city_slug === "") {
            return "/" . $base;
        }
        return "/" . $base . "-" . $city_slug;
    }
}

if (!function_exists("city_text")) {
    function city_text($fallback, $city) {
        return $city === "" ? $fallback : e($city);
    }
}

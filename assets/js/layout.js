(() => {
    const getCityContext = () => {
        const body = document.body;
        if (body && body.dataset) {
            const city = body.dataset.city || "";
            const citySlug = body.dataset.citySlug || "";
            if (citySlug) {
                return { city, citySlug };
            }
        }

        const path = window.location.pathname || "";
        const patterns = [
            /^\/agence-web-([a-z0-9-]+)\/?$/i,
            /^\/agence-digitale-([a-z0-9-]+)\/?$/i,
            /^\/contact-agence-web-([a-z0-9-]+)\/?$/i,
            /^\/tarifs-creation-site-web-([a-z0-9-]+)\/?$/i,
            /^\/services-web-([a-z0-9-]+)\/?$/i,
            /^\/creation-site-one-page-([a-z0-9-]+)\/?$/i,
            /^\/creation-site-vitrine-([a-z0-9-]+)\/?$/i,
            /^\/creation-site-catalogue-([a-z0-9-]+)\/?$/i,
            /^\/creation-site-ecommerce-([a-z0-9-]+)\/?$/i,
            /^\/creation-application-mobile-([a-z0-9-]+)\/?$/i,
            /^\/developpement-web-sur-mesure-([a-z0-9-]+)\/?$/i,
            /^\/questions-frequentes-agence-digitale-([a-z0-9-]+)\/?$/i
        ];

        for (const pattern of patterns) {
            const match = path.match(pattern);
            if (match && match[1]) {
                return { city: "", citySlug: match[1].toLowerCase() };
            }
        }

        return { city: "", citySlug: "" };
    };

    const baseRoutes = [
        "agence-web",
        "agence-digitale",
        "contact-agence-web",
        "tarifs-creation-site-web",
        "services-web",
        "creation-site-one-page",
        "creation-site-vitrine",
        "creation-site-catalogue",
        "creation-site-ecommerce",
        "creation-application-mobile",
        "developpement-web-sur-mesure",
        "questions-frequentes-agence-digitale"
    ];

    const localizeComponent = (container) => {
        const { city, citySlug } = getCityContext();
        if (!citySlug) {
            return;
        }

        const links = container.querySelectorAll("a[href]");
        links.forEach((link) => {
            const href = link.getAttribute("href");
            if (!href || !href.startsWith("/")) {
                return;
            }

            const parts = href.split(/([?#].*)/);
            const path = parts[0];
            const suffix = parts.slice(1).join("");

            if (/-rouen\b/.test(path)) {
                link.setAttribute("href", path.replace(/-rouen\b/g, `-${citySlug}`) + suffix);
                return;
            }

            for (const route of baseRoutes) {
                if (path === `/${route}` || path === `/${route}/`) {
                    link.setAttribute("href", `/${route}-${citySlug}${path.endsWith("/") ? "/" : ""}${suffix}`);
                    return;
                }
            }
        });

        if (!city) {
            return;
        }
        const cityTargets = container.querySelectorAll("[data-city-text]");
        cityTargets.forEach((node) => {
            node.textContent = city;
        });
    };

    const components = [
        {
            id: "site-header",
            url: "./assets/components/header.html",
            post: (container) => {
                localizeComponent(container);
                const headerClass = container.getAttribute("data-header-class");
                if (!headerClass) {
                    return;
                }
                const header = container.querySelector("header");
                if (header) {
                    header.className = headerClass;
                }
            }
        },
        {
            id: "site-sidebar",
            url: "./assets/components/sidebar.html",
            post: (container) => {
                localizeComponent(container);
            }
        },
        {
            id: "site-footer",
            url: "./assets/components/footer.html",
            post: (container) => {
                localizeComponent(container);
            }
        }
    ];

    const loads = components.map((component) => {
        const container = document.getElementById(component.id);
        if (!container) {
            return Promise.resolve();
        }

        return fetch(component.url)
            .then((response) => response.text())
            .then((html) => {
                container.innerHTML = html;
                if (component.post) {
                    component.post(container);
                }
            })
            .catch(() => {});
    });

    Promise.all(loads).finally(() => {
        localizeComponent(document);
        window.layoutReady = true;
        document.dispatchEvent(new Event("layout:ready"));
    });
})();

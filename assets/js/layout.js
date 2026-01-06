(() => {
    const components = [
        {
            id: "site-header",
            url: "./assets/components/header.html",
            post: (container) => {
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
            url: "./assets/components/sidebar.html"
        },
        {
            id: "site-footer",
            url: "./assets/components/footer.html"
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
        window.layoutReady = true;
        document.dispatchEvent(new Event("layout:ready"));
    });
})();

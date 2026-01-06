(() => {
    const head = document.head;
    if (!head || head.querySelector("[data-head-component]")) {
        return;
    }

    const pageTitle = document.documentElement.getAttribute("data-title");
    if (pageTitle) {
        document.title = pageTitle;
    }

    const pageDescription = document.documentElement.getAttribute("data-description");
    if (pageDescription) {
        let descriptionTag = head.querySelector("meta[name=\"description\"]");
        if (!descriptionTag) {
            descriptionTag = document.createElement("meta");
            descriptionTag.setAttribute("name", "description");
            head.appendChild(descriptionTag);
        }
        descriptionTag.setAttribute("content", pageDescription);
    }

    fetch("./assets/components/head.html")
        .then((response) => response.text())
        .then((html) => {
            const wrapper = document.createElement("div");
            wrapper.innerHTML = html.trim();
            const nodes = Array.from(wrapper.children);
            const anchor = document.currentScript || head.firstChild;
            nodes.forEach((node) => {
                node.setAttribute("data-head-component", "true");
                head.insertBefore(node, anchor);
            });
        })
        .catch(() => {});
})();

(() => {
    const head = document.head;
    if (!head) {
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
})();

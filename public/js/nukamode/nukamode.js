const nuka = document.getElementById("nuka");

const root = document.documentElement.style;

let mode;

nuka.addEventListener("click", changeMode);

function changeMode() {
    if (mode == 0) {
        // NUKA MODE
        nuka.src = "/img/nukamode/nukamode.svg";
        root.setProperty("--display-nuka-link", "block");

        // HOME + TEMPLATES
        root.setProperty("--color-divider-header", "#8F0201");
        root.setProperty("--color-divider-footer", "#363437");
        root.setProperty("--color-header", "#8F0201");
        root.setProperty("--color-body", "#363437");
        root.setProperty("--color-linkys", "#EFE5CA");
        root.setProperty("--color-footer", "#EFE5CA");
        root.setProperty("--color-footer-paragraphs", "8F0201");
        root.setProperty("--color-main", "#363437");
        root.setProperty("--color-h1h2", "#EFE5CA");
        root.setProperty("--color-presentation", "#8F0201");
        root.setProperty("--border-presentation", "3px solid #EFE5CA");
        root.setProperty("--color-titre-vaulttec", "#EFE5CA");
        root.setProperty("--color-presentation-paragraphs", "#EFE5CA");
        root.setProperty("--color-span-home", "#000000");
        root.setProperty("--border-button-home", "3px solid #EFE5CA");
        root.setProperty("--color-background-button-home", "#C5B793");
        root.setProperty("--color-border-top-special", "3px solid #EFE5CA");
        root.setProperty("--color-border-bottom-special", "3px solid #EFE5CA");
        root.setProperty("--border-img-special", "3px solid #EFE5CA");
        root.setProperty("--button-avatar", "#D42D2C");

        // BOUTIQUE

        root.setProperty("--color-delivery", "#EFE5CA");
        root.setProperty("--backgroundcolor-download-img", "#8F0201");
        root.setProperty("--border-article-create", "3px solid #EFE5CA");
        root.setProperty("--background-input", "#EFE5CA");
        root.setProperty("--color-icons", "#EE0101");
        root.setProperty("--color-icons-user-action", "#fff");
        root.setProperty("--background-icons-user-action", "#8F0201");
        root.setProperty("--color-title-boutique", "#EFE5CA");

        mode++;
    } else {
        // VAULT MODE
        nuka.src = "/img/nukamode/vaultmode.svg";
        root.setProperty("--display-nuka-link", "none");

        // HOME + TEMPLATES
        root.setProperty("--color-divider-header", "#486e9d");
        root.setProperty("--color-divider-footer", "#ffffff");
        root.setProperty("--color-header", "#486e9d");
        root.setProperty("--color-body", "#ffffff");
        root.setProperty("--color-linkys", "#363437");
        root.setProperty("--color-footer", "#e2da47");
        root.setProperty("--color-footer-paragraphs", "363437");
        root.setProperty("--color-main", "#ffffff");
        root.setProperty("--color-h1h2", "#363437");
        root.setProperty("--color-presentation", "#486e9d");
        root.setProperty("--border-presentation", "3px solid #e2da47");
        root.setProperty("--color-titre-vaulttec", "#e2da47");
        root.setProperty("--color-presentation-paragraphs", "#ffffff");
        root.setProperty("--color-span-home", "#e2da47");
        root.setProperty("--border-button-home", "3px solid #e2da47");
        root.setProperty("--color-background-button-home", "#ffffff");
        root.setProperty("--color-border-top-special", "3px solid #e2da47");
        root.setProperty("--color-border-bottom-special", "3px solid #e2da47");
        root.setProperty("--button-avatar", "#3cb0fd");
        root.setProperty("--border-img-special", "3px solid #486e9d");

        // BOUTIQUE

        root.setProperty("--color-delivery", "#000");
        root.setProperty("--backgroundcolor-download-img", "#486E9D");
        root.setProperty("--border-article-create", "3px solid #e2da47");
        root.setProperty("--background-input", "#fff");
        root.setProperty("--color-icons", "#486e9d");
        root.setProperty("--color-icons-user-action", "#e2da47");
        root.setProperty("--background-icons-user-action", "#e2da47");
        root.setProperty("--color-title-boutique", "#e2da47");

        mode = 0;
    }

    return mode;
}

changeMode();

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/global.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
    <link href="styles/typography.css" rel="stylesheet">
    <link href="styles/header.css" rel="stylesheet">
    <link href="styles/footer.css" rel="stylesheet">
    <link href="styles/section-categories.css" rel="stylesheet">
    <link href="styles/section-best-seller.css" rel="stylesheet">
    <link href="styles/section-index.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>ReGen</title>
</head>

<body>
    <header>
        <div class="top-banner">
            <img class="top-banner-logo" src="img/regen-logo-inverted.svg" alt="regen logo"> <!-- Visable on mobile -->
            <p class="top-banner-paragraph">Delta i vår hållbarhetresa!</p> <!-- Visable on desktop -->
        </div>
        <nav>
            <div class="menu-mobile"> <!-- Visable on mobile -->
                <div class="menu-icon" id="hamburger-menu"></div>
                <p class="menu-paragraph">Meny</p>
            </div>

            <div class="menu-desktop"> <!-- Visable on desktop -->
                <p class="menu-desktop-paragraph">Köp</p>
                <p class="menu-desktop-paragraph">Hållbarhet</p>
                <p class="menu-desktop-paragraph">Om Oss</p>
            </div>

            <img class="nav-logo-desktop" src="img/regen-logo-desktop.svg" alt="regen logo">

            <div class="icon-container">

                <div class="menu-desktop-items">
                    <div class="menu-icon" id="globe-icon"></div>
                    <p class="desktop-icon-paragraph">Språk</p> <!-- Visable on desktop -->
                </div>

                <div class="menu-desktop-items"> <!-- Visable on desktop -->
                    <div class="menu-icon" id="search-icon"></div>
                    <p class="desktop-icon-paragraph">Sök</p>
                </div>

                <div class="menu-desktop-items">
                    <div class="menu-icon" id="user-icon"></div>
                    <p class="desktop-icon-paragraph">Ditt Konto</p> <!-- Visable on desktop -->
                </div>

                <div class="menu-desktop-items">
                    <div class="menu-icon" id="shopping-cart-icon"></div>
                    <p class="desktop-icon-paragraph">Kundvagn</p> <!-- Visable on desktop -->
                </div>

            </div>
        </nav>
        <div class="search-field">
            <input class="search" placeholder="Sök..."> <button class="search-btn"></button>
        </div>
        <section id="hero" class="hero">
            <div class="inner-wrapper">
                <h1>ReGen: Framtidens mode, idag.</h1>
                <p class="hero-paragraph">Upplev en ny dimension av mode med vår senaste kollektion. Designad av dig, drivet av teknik, skapat för planeten.</p>
                <div class="cta-button">
                    <a href="#cta">
                        <p>Vår påverkan</p>
                    </a>
                    <img src="img/arrow-up-right.svg">
                </div>
                <div id="scroll">
                    <img src="img/arrow-down-inverted.svg">
                    <p class="tiny">Scrolla</p>
                </div>
            </div>
            <img src="/img/hero.jpeg" class="section-bg" alt="" />
        </section>
    </header>
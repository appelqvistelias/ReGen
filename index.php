<?php require_once(__DIR__ . "/header.php"); ?>

<main>
    <?php require_once(__DIR__ . "/section-categories.php"); ?>

    <section id="sustainability">
        <div class="inner-wrapper">
            <h2>Mode som ReGenererar</h2>
            <p>Utforska en hållbar framtid där stil möter ansvar. Regen skapar produkter som inte bara inspirerar utan också gör skillnad.</p>
            <a href="#cta" class="cta-button">
                Läs mer om vår hållbarhet
                <img src="img/arrow-up-right.svg">
            </a>
        </div>
        <img src="/img/sustainability.jpeg" class="section-bg" alt="" />
    </section>

    <?php require_once(__DIR__ . "/section-best-seller.php"); ?>

    <section id="icons">
        <div class="inner-wrapper">
            <div class="item">
                <div class="icon"><img src="/img/globe-orange.svg"></div>
                <p>Miljövänligt, hållbart och redo för naturen</p>
            </div>
            <div class="item">
                <div class="icon"><img src="/img/check.svg"></div>
                <p>Återvunnet material, hög kvalitet</p>
            </div>
            <div class="item">
                <div class="icon"><img src="/img/leaf.svg"></div>
                <p>Minimal miljöpåverkan maximal hållbarhet</p>
            </div>
            <div class="item">
                <div class="icon"><img src="/img/clock.svg"></div>
                <p>Gjort för äventyr, byggt för framtiden</p>
            </div>
        </div>
    </section>

    <section id="newsletter-signup">
        <div class="inner-wrapper">
            <h2>Få <span class="text-orange">10% rabatt</span> på ditt nästa köp.</h2>
            <p class="newsletter-signup-paragraph">Skriv in dig på vårt nyhetsbrev, där vi gör utskick om nya kollektioner.</p>
            <label class="newsletter-signup-label">Email*</label>
            <div class="newsletter-signup-email-input-box">
                <input class="newsletter-signup-input" type="email" placeholder="john.doe@email.com">
                <button class="email-signup-btn"></button>
            </div>
        </div>
        <img src="/img/newsletter.jpeg" class="section-bg" alt="" />
    </section>
</main>

<?php require_once(__DIR__ . "/footer.php"); ?>
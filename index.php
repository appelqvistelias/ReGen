<?php require_once(__DIR__ . "/header.php"); ?>

<main>
    <?php require_once(__DIR__ . "/section-categories.php"); ?>

    <section id="sustainability">
        <div class="inner-wrapper">
            <h2>Hållbarhet något</h2>
            <p>Upplev en ny dimension av mode med vår senaste kollektion. Designad av dig, drivet av teknik, skapat för planeten.</p>
            <a href="#cta" class="cta-button">
                Hållbarhet
                <img src="img/arrow-up-right.svg">
            </a>
        </div>
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
            <h3 class="newsletter-signup-h3">Få 10% rabatt på ditt nästa köp.</h3>
            <p class="newsletter-signup-paragraph">Skriv in dig på vårat nyhetsbrev, där vi gör utskick om nya kollektioner.</p>
            <label class="newsletter-signup-label">Email*</label>
            <div class="newsletter-signup-email-input-box">
                <input class="newsletter-signup-input" type="email" placeholder="john.doe@email.com">
                <button class="email-signup-btn"></button>
            </div>
        </div>
    </section>
</main>

<?php require_once(__DIR__ . "/footer.php"); ?>
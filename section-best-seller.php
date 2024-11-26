<?php require_once('data.php'); ?>
<section id="best-sellers">
    <div class="inner-wrapper">
        <hgroup>
            <h2>Bäst säljande</h2>
        </hgroup>

        <div class="arrows">
            <img src="/img/chevron-left.svg" class="prev-btn" alt="Previous">
            <div class="container">
                <?php foreach ($products as $product) : ?>
                    <?php foreach ($product['colors'] as $color => $colorData) : ?>
                        <article class="product">
                            <!-- Huvudbilden för den valda färgen -->
                            <img id="huvudbild-<?php echo $product['name'] . '-' . $color; ?>"
                                src="img/<?php echo $colorData['images'][0]; ?>"
                                alt="<?php echo $product['name'] . ' ' . $color; ?>"
                                class="produkt-huvudbild"
                                onclick="toggleImages('<?php echo $product['name'] . '-' . $color; ?>')">

                            <img id="bild-<?php echo $product['name'] . '-' . $color; ?>"
                                src="img/<?php echo $colorData['images'][1]; ?>"
                                alt="Bild" class="produkt-bild" style="display: none;"
                                onclick="toggleImages('<?php echo $product['name'] . '-' . $color; ?>')">

                            <div class="product-inner-wrapper">
                                <h3 class="product-name"><?= $product['name']; ?></h3>
                                <h2 class="product-price"><?= $product['price']; ?>kr</h2>

                                <!-- Färgalternativ (kan bytas med en knapp) -->
                                <div class="product-colors">
                                    <?php foreach ($product['colors'] as $altColor => $altColorData) : ?>
                                        <button class="color <?php echo $altColor; ?>" onclick="changeColor('<?php echo $product['name']; ?>', '<?php echo $color; ?>', '<?php echo $altColor; ?>')">
                                        </button>
                                    <?php endforeach; ?>
                                </div>

                                <div class="product-add-btn">
                                    <img src="/img/plus.svg" alt="add to cart symbol" /> Förbeställ
                                </div>
                            </div><!-- product-inner-wrapper -->
                        </article>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div><!-- .container -->

            <img src="/img/chevron-right.svg" class="next-btn" alt="Next">
        </div> <!-- .arrow -->
    </div><!-- .inner-wrapper -->
</section>

<section id="materials">
    <div class="inner-wrapper">
        <article>
            <img src="/img/tekniska_element.png" alt="" id="materials-image" />
            <div class="text">
                <h2>Innovativa Material för en Hållbar Framtid</h2>
                <h3>Vattenavvisande utan skadliga kemikalier</h3>
                <p>Vi fokuserar också på material som är vattenavvisande utan att använda skadliga kemikalier. Detta innebär att våra plagg skyddar dig mot regn och fukt samtidigt som de är snälla mot miljön. Dessutom är alla våra material biologiskt nedbrytbara eller helt återvinningsbara, vilket gör att de kan återgå till naturen när de nått slutet av sin livscykel.</p>
                <h3>Värmehållande och lätt för alla äventyr</h3>
                <p>En av våra mest framstående innovationer är vårt värmehållande lager. Det är designat för att hålla dig varm under kalla nätter i tältet eller långa vandringar på hög höjd. Den unika strukturen hos materialet gör det lätt och packbart, vilket gör det till en idealisk följeslagare för camping och hiking.</p>
                <h3>Regenerativa fibrer för en hållbar framtid</h3>
                <p>Våra huvudmaterial består av regenerativa fibrer, tillverkade av återvunnet avfall som plastflaskor och textilspill. Genom att använda dessa resurser för att skapa nya, högpresterande material minskar vi avfallet samtidigt som vi reducerar behovet av jungfruliga resurser. Resultatet är slitstarka, andningsbara och stretchiga tyger som är perfekta för både vardag och outdoor-äventyr.</p>
                <h3>Biologiskt nedbrytbara och återvinningsbara material</h3>
                <p>På ReGen är materialen hjärtat av vår vision. Vi strävar efter att skapa plagg som inte bara är skonsamma mot planeten utan också erbjuder överlägsen funktionalitet för dig som älskar äventyr i naturen. Våra textilier är noggrant framtagna för att möta kraven hos både vardagsliv och extremt friluftsliv, utan att kompromissa på hållbarhet.</p>
                <p>ReGen står för att kombinera hållbarhet med prestanda, så att du kan upptäcka världen med lättare samvete och en starkare koppling till naturen.</p>
            </div>
            <div class="read-more">
                <a href="" id="read-more-btn">Läs mer <img src="/img/arrow-down.svg" alt="pil nedåt" class="icon" /></a>
            </div>
        </article>
    </div><!-- .inner-wrapper -->
</section>


<section id="new-articles">
    <div class="inner-wrapper">
        <hgroup>
            <h2>Kommer 2025</h2>
        </hgroup>
        <div class="arrows">
            <img src="/img/chevron-left.svg" class="prev-btn" alt="Previous">
            <div class="container">
                <?php foreach ($products_soon as $product) : ?>
                    <?php foreach ($product['colors'] as $color => $colorData) : ?>
                        <article class="product">
                            <!-- Huvudbilden för den valda färgen -->
                            <img id="huvudbild-<?php echo $product['name'] . '-' . $color; ?>"
                                src="img/<?php echo $colorData['images'][0]; ?>"
                                alt="<?php echo $product['name'] . ' ' . $color; ?>"
                                class="produkt-huvudbild"
                                onclick="toggleImages('<?php echo $product['name'] . '-' . $color; ?>')">

                            <img id="bild-<?php echo $product['name'] . '-' . $color; ?>"
                                src="img/<?php echo $colorData['images'][1]; ?>"
                                alt="Bild" class="produkt-bild" style="display: none;"
                                onclick="toggleImages('<?php echo $product['name'] . '-' . $color; ?>')">

                            <div class="product-inner-wrapper">
                                <h3 class="product-name"><?= $product['name']; ?></h3>
                                <h2 class="product-price"><?= $product['price']; ?>kr</h2>

                                <!-- Färgalternativ (kan bytas med en knapp) -->
                                <div class="product-colors">
                                    <?php foreach ($product['colors'] as $altColor => $altColorData) : ?>
                                        <button class="color <?php echo $altColor; ?>" onclick="changeColor('<?php echo $product['name']; ?>', '<?php echo $color; ?>', '<?php echo $altColor; ?>')">
                                        </button>
                                    <?php endforeach; ?>
                                </div>

                                <div class="product-add-btn">
                                    <img src="/img/plus.svg" alt="add to cart symbol" /> Förbeställ
                                </div>
                            </div><!-- product-inner-wrapper -->
                        </article>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div><!-- .container -->
            <img src="/img/chevron-right.svg" class="next-btn" alt="Next">
        </div><!-- .arrows -->
    </div><!-- . inner-wrapper -->
</section>

<script>
    // Funktion för att byta färg på bilder
    function changeColor(produktNamnet, valdFarg, nyFarg) {

        // Hämta produktdata från PHP och konvertera till JavaScript-objekt
        const produktData = <?php echo json_encode($products); ?>;
        const produktData2 = <?php echo json_encode($products_soon); ?>;

        // Hitta rätt produkt i arrayen
        const valdProdukt = produktData.find(p => p.name === produktNamnet) || produktData2.find(p => p.name === produktNamnet);
        if (!valdProdukt) {
            console.error("Produkt ej hittad");
            return;
        }
        // Hitta rätt färg (nyFarg) i produktens färger
        const valdFargData = valdProdukt.colors[nyFarg];

        // Uppdatera huvudbilden för produkten
        const huvudbild = document.getElementById('huvudbild-' + produktNamnet + '-' + valdFarg);
        if (huvudbild) {
            huvudbild.src = 'img/' + valdFargData.images[0];
        }
        // Uppdatera andra bilder
        const bild = document.getElementById('bild-' + produktNamnet + '-' + valdFarg);
        if (bild) {
            bild.src = 'img/' + valdFargData.images[1];
        }
    }
</script>
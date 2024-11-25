/*********** Karuseller **********/

    function setupScrollNavigation(sectionSelector) {
        document.addEventListener("DOMContentLoaded", () => {
            // Hämta sektionen med angiven selector
            const section = document.querySelector(sectionSelector);

            // Kontrollera om sektionen finns
            if (!section) {
                console.log(`Sektion med selector ${sectionSelector} finns inte.`);
                return;
            }

            // Hitta container-elementet inuti sektionen
            const container = section.querySelector('.container');

            // Kontrollera att containern finns
            if (!container) {
                console.log(`Container finns inte i sektionen ${sectionSelector}.`);
                return;
            }

            // Hitta prev- och next-knapparna inom sektionen
            const prevBtn = section.querySelector('.prev-btn');
            const nextBtn = section.querySelector('.next-btn');

            // Kontrollera om knapparna finns
            if (!prevBtn || !nextBtn) {
                console.log('Knapparna finns inte.');
                return;
            }

            // Hämta bredden på produkten för att veta hur mycket vi ska scrolla
            const itemWidth = container.querySelector('.product').offsetWidth;

            // Lägg till eventlyssnare för prev-knappen (skrolla vänster)
            prevBtn.addEventListener('click', () => {
                container.scrollLeft -= itemWidth; // Skrolla till vänster
            });

            // Lägg till eventlyssnare för next-knappen (skrolla höger)
            nextBtn.addEventListener('click', () => {
                container.scrollLeft += itemWidth; // Skrolla till höger
            });
        });
    }
    setupScrollNavigation('#categories');
    setupScrollNavigation('#best-sellers');
    setupScrollNavigation('#new-articles');


/********* Back to top **********/

    function backToTopFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }

/********* Växla mellan produktbilder *********/

    function toggleImages(produktId) {
        const huvudbild = document.getElementById('huvudbild-' + produktId);
        const bild = document.getElementById('bild-' + produktId);

        // Toggla visibiliteten mellan bilderna
        const isVisible = huvudbild.style.display !== 'none';
        huvudbild.style.display = isVisible ? 'none' : 'block';
        bild.style.display = isVisible ? 'block' : 'none';
    }

/********** Välj och byt färg  *************/

    function changeColor(produktNamnet, valdFarg, nyFarg) {
        // Hämta produktdata från PHP och konvertera till JavaScript-objekt
        const produktData = <?php echo json_encode($products); ?>;
        // Hitta rätt produkt i arrayen
        const valdProdukt = produktData.find(p => p.name === produktNamnet);
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
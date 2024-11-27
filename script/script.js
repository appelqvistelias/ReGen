    //     document.addEventListener("DOMContentLoaded", () => {
    //     const container = document.querySelector('.container');
    //     const prevBtn = document.querySelector('.prev-btn');
    //     const nextBtn = document.querySelector('.next-btn');
    //     // const prevBtn = document.getElementById('prev-btn');
    //     // const nextBtn = document.getElementById('next-btn');

    //     const itemWidth = container.querySelector('.product').offsetWidth;  // Hämta bredden på ett objekt

    //     prevBtn.addEventListener('click', () => {
    //         container.scrollLeft -= itemWidth;  // Skrolla till vänster
    //     });

    //     nextBtn.addEventListener('click', () => {
    //         container.scrollLeft += itemWidth;  // Skrolla till höger
    //     });
    // });

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

            // *** NEW FUNCTION TO ADJUST SCROLL POSITION TO CLOSEST PRODUCT ***
            const adjustScrollPosition = () => {
                const scrollPosition = container.scrollLeft;
                const nearestItemIndex = Math.round(scrollPosition / itemWidth); // Find closest product
                const targetScrollPosition = nearestItemIndex * itemWidth; // Target for scroll

                // Scroll to exact position
                container.scrollTo({
                    left: targetScrollPosition,
                    behavior: 'smooth'
                })
            };

            // *** END OF NEW FUNCTION ***

            // Lägg till eventlyssnare för prev-knappen (skrolla vänster)
            prevBtn.addEventListener('click', () => {
                container.scrollLeft -= itemWidth; // Skrolla till vänster
                setTimeout(adjustScrollPosition, 300); // *** PART OF NEW FUNCTION ***
            });

            // Lägg till eventlyssnare för next-knappen (skrolla höger)
            nextBtn.addEventListener('click', () => {
                container.scrollLeft += itemWidth; // Skrolla till höger
                setTimeout(adjustScrollPosition, 300); // *** PART OF NEW FUNCTION ***
            });

            // *** PART OF NEW FUNCTION ***
            container.addEventListener('scroll', () => {
                clearTimeout(container.scrollTimeout); // Avoid running multiple times
                container.scrollTimeout = setTimeout(adjustScrollPosition, 150); // Adjust after 150ms paus
            })
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


/********* Växla mellan produktbilder ******/
 
    function toggleImages(produktId) {
        const huvudbild = document.getElementById('huvudbild-' + produktId);
        const bild = document.getElementById('bild-' + produktId);

        // Toggla visibiliteten mellan bilderna
        const isVisible = huvudbild.style.display !== 'none';
        huvudbild.style.display = isVisible ? 'none' : 'block';
        bild.style.display = isVisible ? 'block' : 'none';
    }
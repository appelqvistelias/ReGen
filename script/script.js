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


/********* Växla mellan produktbilder ******/
 
    function toggleImages(produktId) {
        const huvudbild = document.getElementById('huvudbild-' + produktId);
        const bild = document.getElementById('bild-' + produktId);

        // Toggla visibiliteten mellan bilderna
        const isVisible = huvudbild.style.display !== 'none';
        huvudbild.style.display = isVisible ? 'none' : 'block';
        bild.style.display = isVisible ? 'block' : 'none';
    }

// *** Change add to cart symbol ***
const addToCartImages = document.querySelectorAll('.add-to-cart');

const addToCartPlus = 'img/add-to-cart-plus.svg';
const addToCartPlusHover = 'img/add-to-cart-plus-hover.svg';
const addToCartCheck = 'img/add-to-cart-check.svg';
const addToCartCross = 'img/add-to-cart-cross.svg';

addToCartImages.forEach((addToCartImage) => {

addToCartImage.addEventListener('mouseover', () => {
    if (addToCartImage.src.endsWith(addToCartPlus)) {
        addToCartImage.src = addToCartPlusHover;
    } else if (addToCartImage.src.endsWith(addToCartCheck)) {
        addToCartImage.src = addToCartCross;
    }
});

addToCartImage.addEventListener('mouseleave', () => {
    if (addToCartImage.src.endsWith(addToCartPlusHover)) {
        addToCartImage.src = addToCartPlus;
    } else if (addToCartImage.src.endsWith(addToCartCross)) {
        addToCartImage.src = addToCartCheck;
    }
});

addToCartImage.addEventListener('click', () => {
    if (addToCartImage.src.endsWith(addToCartPlusHover)) {
        addToCartImage.src = addToCartCheck;
    } else if (addToCartImage.src.endsWith(addToCartCross)) {
        addToCartImage.src = addToCartPlus;
    }  else if (addToCartImage.src.endsWith(addToCartCheck)) {
        addToCartImage.src = addToCartPlus;
    }
})});
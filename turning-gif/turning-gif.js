const imageContainer = document.querySelector('.img-container');
const totalFrames = 36;
let currentFrame = 0;
let isDragging = false;
let startX = 0;

function setFrame(frame) {
    const frameIndex = (frame % totalFrames + totalFrames) % totalFrames; // Makes sure that there is no negative value
    imageContainer.style.backgroundImage = `url('hat-gif/turning-hat-${frameIndex + 1}.png')`;
}

setFrame(currentFrame); // Start with the first picture

function startDrag(event) { // Handles mouse / touch event
    isDragging = true;
    startX = event.touches ? event.touches[0].pageX : event.pageX;
    imageContainer.style.cursor = 'grabbing';
}

function drag(event) {
    if (!isDragging) return;
    const x = event.touches ? event.touches[0].pageX : event.pageX;
    const delta = x - startX;
    startX = x;

    currentFrame -= Math.sign(delta); // Move forwards and backwards
    setFrame(currentFrame);
}

function stopDrag() {
    isDragging = false;
    imageContainer.style.cursor = 'grab';
}

// eventlisteners
imageContainer.addEventListener('mousedown', startDrag);
imageContainer.addEventListener('mousemove', drag);
imageContainer.addEventListener('mouseup', stopDrag);
imageContainer.addEventListener('mouseleave', stopDrag);
imageContainer.addEventListener('touchstart', startDrag);
imageContainer.addEventListener('touchmove', drag);
imageContainer.addEventListener('touchend', stopDrag);
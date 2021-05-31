let currentSlide = 0;
let currentPointer = "";

function autoSwitch() {
    switch(currentSlide) {
        case 0:
            currentPointer = document.querySelector("[data_key='1']");
            secondSlide(currentPointer);
            break;
        case 1:
            currentPointer = document.querySelector("[data_key='2']");
            thirdSlide(currentPointer);
            break;
        case 2:
            currentPointer = document.querySelector("[data_key='0']");
            fristSlide(currentPointer);
            break;
    }
}

function fristSlide(element) {
    currentSlide = 0;
    switchSlide();
    cleanActivated();
    element.classList.add("ativado");
}

function secondSlide(element) {
    currentSlide = 1;
    switchSlide();
    cleanActivated();
    element.classList.add("ativado");
}
function thirdSlide(element) {
    currentSlide = 2;
    switchSlide();
    cleanActivated();
    element.classList.add("ativado");
}

function switchSlide() {
    let slider = document.querySelector(".section_banner .oppacity_banner .slider");
    slider.style.marginLeft = `-${currentSlide * 100}vw`;
}

function cleanActivated() {
    let pointerAtivo = document.querySelector(".section_banner .oppacity_banner .slide_pointers .pointer.ativado");
    pointerAtivo.classList.remove("ativado");
}

setInterval(autoSwitch, 8000);
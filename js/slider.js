$(document).ready(function(){
    const sliderBox = document.querySelector(".slider-box");
const sliderImages = document.querySelectorAll(".slider-box img");

//buttons

const prevBtn = document.querySelector("#prevBtn");
const nextBtn = document.querySelector("#nextBtn");

//setting conter varaible for inrementing and settted image size
let counter = 1;
const imageSize = sliderImages[0].clientWidth;
sliderBox.style.transform = "translateX(" + -imageSize * counter + "px)";

//Event listeners for button next click
nextBtn.addEventListener("click", () => {
    if (counter >= sliderImages.length - 1) return;
    sliderBox.style.transition = "transform 0.4s";
    counter++;
    sliderBox.style.transform = "translateX(" + -imageSize * counter + "px)";
});

//Event listeners for button prev click
prevBtn.addEventListener("click", () => {
    if (counter <= 0) return;
    sliderBox.style.transition = "transform 0.4s";
    counter--;
    sliderBox.style.transform = "translateX(" + -imageSize * counter + "px)";
});
counter -= 1;
autoLoad();
function autoLoad() {
    sliderBox.style.transition = "transform 0.4s";
    counter++;
    if (sliderImages[counter - 1].id == "firstimg") {
        sliderBox.style.transition = "none";
        counter = 1;
        sliderBox.style.transform = "translateX(" + -imageSize * counter + "px)";
    }

    sliderBox.style.transform = "translateX(" + -imageSize * counter + "px)";
    setTimeout(autoLoad, 4000);
}

//Checking whether image reached first and last image and do infinite scrolling
sliderBox.addEventListener("transitionend", () => {
    if (sliderImages[counter].id == "lastimg") {
        sliderBox.style.transition = "none";
        counter = sliderImages.length - 2;
        sliderBox.style.transform = "translateX(" + -imageSize * counter + "px)";
    }

    if (sliderImages[counter].id == "firstimg") {
        sliderBox.style.transition = "none";
        counter = 1;
        sliderBox.style.transform = "translateX(" + -imageSize * counter + "px)";
    }
});

});
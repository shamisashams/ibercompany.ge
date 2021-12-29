const imageZoomin = document.getElementById("image_zoomin");
const imgBackground = document.getElementById("img_background");
const imageZoomedIn = document.getElementById("image_zoomed_in");
const closeBtn = document.getElementById("close_zoomed");

// image popup

imageZoomin.addEventListener("click", () => {
    imgBackground.classList.toggle("on");
    imageZoomedIn.classList.toggle("on");
    $(window).scrollTop(0);
});
imgBackground.addEventListener("click", () => {
    imgBackground.classList.toggle("on");
    imageZoomedIn.classList.toggle("on");
});
closeBtn.addEventListener("click", () => {
    imgBackground.classList.toggle("on");
    imageZoomedIn.classList.toggle("on");
});

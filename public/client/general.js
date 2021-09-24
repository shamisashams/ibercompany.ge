const navigation = document.getElementById("navigation");
const navigationButton = document.getElementById("open_navigation");
const partnerSlider = document.getElementById("partners_slider");
const partnerSlideItem = document.querySelectorAll(".partner_slide_item");
const imageZoomin = document.getElementById("image_zoomin");
const imgBackground = document.getElementById("img_background");
const imageZoomedIn = document.getElementById("image_zoomed_in");
const closeBtn = document.getElementById("close_zoomed");

let startDate;
let endDate;

if (navigationButton) {
    navigationButton.addEventListener("click", () => {
        navigationButton.classList.toggle("clicked");
        navigation.classList.toggle("open");
    });
}

$(function () {
    var url = new URL(window.location.href);
    let dateRange = url.searchParams.get("date");

    if (dateRange) {
        startDate = dateRange.substr(0, dateRange.indexOf("-") - 1);
        endDate = dateRange.substr(dateRange.indexOf("-") + 2);
    }

    $("#date-range-picker").daterangepicker({
        opens: "left",
        startDate: startDate,
        endDate: endDate,
        locale: {
            format: "D/MM/Y",
        },
    });

    $("#date-range-picker").on("apply.daterangepicker", (e, picker) => {
        $("#news-filter-form").submit();
    });
});
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

if (partnerSlideItem.length <= 5) {
    function mediaQuery(x) {
        if (x.matches) {
            // If media query matches
            partnerSlider.classList.remove("notslide");
        } else {
            partnerSlider.classList.add("notslide");
        }
    }
}

var x = window.matchMedia("(max-width: 1500px)");
mediaQuery(x); // Call listener function at run time
x.addListener(mediaQuery); // Attach listener function on state changes

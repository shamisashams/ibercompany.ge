const navigation = document.getElementById("navigation");
const navigationButton = document.getElementById("open_navigation");
const partnerSlider = document.getElementById("partners_slider");
const partnerSlideItem = document.querySelectorAll(".partner_slide_item");

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

// if (partnerSlideItem.length <= 5) {
//     partnerSlider.classList.add("notslide");
// }

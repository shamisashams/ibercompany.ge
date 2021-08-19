$("#hero_slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: true,
    arrows: true,
    prevArrow: "#hero_arrow_prev",
    nextArrow: "#hero_arrow_next",
    dots: true,
    fade: true,
    speed: 900,
    infinite: true,
    cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
    touchThreshold: 100,
    autoplay: true,
    autoplaySpeed: 4000,
    // pauseOnHover: false,
});
$("#partners_slider").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    draggable: true,
    arrows: false,
    prevArrow: "",
    // nextArrow: "#partners_arrow_next",
    dots: false,
    cssEase: "linear",
    speed: 5000,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 0,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 1500,
            settings: {
                slidesToShow: 4,
            },
        },
        {
            breakpoint: 1000,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 700,
            settings: {
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 1,
            },
        },
    ],
});
$("#team_slider").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    draggable: true,
    arrows: true,
    prevArrow: "#team_arrow_prev",
    nextArrow: "#team_arrow_next",
    dots: false,
    cssEase: "linear",
    speed: 400,
    infinite: true,
    autoplay: false,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 1600,
            settings: {
                slidesToShow: 4,
            },
        },
        {
            breakpoint: 1400,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                centerMode: true,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                centerMode: true,
            },
        },
    ],
});
$("#company_projects_slider").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    draggable: true,
    arrows: true,
    prevArrow: "",
    nextArrow: "#company_arrow_next",
    dots: false,
    cssEase: "linear",
    speed: 400,
    infinite: true,
    autoplay: false,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 1800,
            settings: {
                slidesToShow: 4,
            },
        },
        {
            breakpoint: 1300,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 550,
            settings: {
                slidesToShow: 1,
                centerMode: true,
            },
        },
    ],
});

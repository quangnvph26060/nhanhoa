// alert(12);

if ($(window).width() < 768) {
    const swiper = new Swiper(".swiper_sevice_nvme", {
        slidesPerView: 2,
        slidesPerColumn: 2,
        spaceBetween: 30,
        loop: false,
        loopFillGroupWithBlank: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        grid: {
            rows: 2,
            fill: "row",
        },

    });
}

$(".btn_show_popup").click(function () {
    $(".popup-re-call").css("display", "block");
});

$(".re-close-popup").click(function () {
    $(".popup-re-call").css("display", "none");
});

// Chá»n nĂºt menu mobile vĂ  menu
const menuButton = document.querySelector(".btn-menu-mobile");
const menu = document.querySelector("#main_menu_mobile");
const backDrop = document.querySelector(".back-drop");
const closeButton = document.querySelector(".btn-close-menu a");



// Toggle khi nháº¥n nĂºt menu
menuButton.addEventListener("click", function () {
    menu.classList.toggle("open"); // Toggle hiá»ƒn thá»‹ menu
    backDrop.classList.toggle("open"); // Toggle backdrop
});

// ÄĂ³ng menu khi nháº¥n nĂºt close
closeButton.addEventListener("click", function () {
    menu.classList.remove("open");
    backDrop.classList.remove("open");
});

// ÄĂ³ng menu khi nháº¥n vĂ o backdrop
backDrop.addEventListener("click", function () {
    menu.classList.remove("open");
    backDrop.classList.remove("open");
});

$("[nh-toggle]").on("click", function () {
    var toggleId = $(this).attr("nh-toggle");
    var targetElement = $('[nh-toggle-element="' + toggleId + '"]');

    if (targetElement.is(":hidden")) {
        targetElement.stop(true, true).animate(
            {
                height: "toggle",
                opacity: "toggle",
            },
            500,
            "swing"
        ); // 'swing' táº¡o hiá»‡u á»©ng mÆ°á»£t mĂ  hÆ¡n 'linear'
    } else {
        targetElement.stop(true, true).animate(
            {
                height: "toggle",
                opacity: "toggle",
            },
            500,
            "swing"
        );
    }
});

function checkScreenWidth() {
    const headerTop = document.querySelector(".header-top");

    if (window.innerWidth > 767) {
        headerTop.classList.remove("header-top-home");
        headerTop.classList.add("fix_nav");
    } else {
        headerTop.classList.add("header-top-home");
        headerTop.classList.remove("fix_nav");
    }
}

// Check screen width on page load
window.addEventListener("load", checkScreenWidth);

// Check screen width on window resize
window.addEventListener("resize", checkScreenWidth);

$(document).on("click", ".btn-view-more-td", function () {
    System_js.show_hide_table_section(this);

});
$(document).on("click", ".btn-add-to-cart-table", function () {
    $("html, body").animate(
        {
            scrollTop: $(".section-table-price-wp").offset().top - 110,
        },
        1000
    );
});

$(".has-child > a").click(function (e) {
    e.preventDefault();

    // Toggle the corresponding dropdown
    const dropdown = $(this).siblings("ul");

    dropdown.toggleClass("submenu-active");
});

// Initialize Swiper
// Object to store Swiper instances
var swipers = {};

// Reusable function to initialize Swiper
function initSwiper(selector) {
    swipers[selector] = new Swiper(selector + " .swiper_register_service", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 2,
        speed: 600,
        preventClicks: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 10,
            stretch: -20,
            depth: 350,
            modifier: 1,
            slideShadows: true,
        },
        on: {
            click(event) {
                swipers[selector].slideTo(event.clickedIndex);
            },
        },
        pagination: {
            el: selector + " .swiper-pagination",
        },
        navigation: {
            nextEl: selector + " .swiper-button-next",
            prevEl: selector + " .swiper-button-prev",
        },
    });
}

// List of all tab selectors
const tabs = ["#domain", "#cloud", "#hosting", "#email", "#ssl"];

// Initialize Swiper for each tab
tabs.forEach((tab) => {
    initSwiper(tab);
});

// Listen for tab changes to update Swiper
$('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
    var target = $(e.target).attr("href"); // Get the active tab

    if (swipers[target]) {
        swipers[target].update();
    }
});


var swiperCarousel = new Swiper(".swiper_customers_about", {
    slidesPerView: 1, // Hiển thị 3 ảnh trên mỗi khung hình
    spaceBetween: 10, // Khoảng cách giữa các ảnh
    loop: true, // Tạo vòng lặp
    grabCursor: true, // Con trỏ chuột thay đổi khi kéo
    breakpoints: {
        767: {
            slidesPerView: 3, // Hiển thị 1 ảnh trên mỗi khung hình khi màn hình <= 767px
            spaceBetween: 10, // Khoảng cách giữa các ảnh
        },
    },
});

const url = window.location.href;

if (url.includes('may-chu-cloud-server') && window.innerWidth > 1200) {
    $(".section-table-price-server .content-table-price > ul >li").css('width', 'calc(20% - 10px)');
}



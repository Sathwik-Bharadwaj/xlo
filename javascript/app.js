const locationmove = document.querySelector(".location");
const searchmove = document.querySelector(".search");

locationmove.addEventListener("mouseenter", (e) => {
    locationmove.style.transform = "translateY(5px)";
});

locationmove.addEventListener("mouseleave", (e) => {
    locationmove.style.transform = "translateY(0px)";
});

searchmove.addEventListener("mouseenter", (e) => {
    searchmove.style.transform = "translateY(5px)";
});

searchmove.addEventListener("mouseleave", (e) => {
    searchmove.style.transform = "translateY(0px)";
});
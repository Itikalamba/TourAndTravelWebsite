const mobileMenu = document.querySelector(".mobile-menu");
const menu = document.querySelector('.nav-list');

$(function () {
    $(".drop-btn").on("click", (e) => {
        // console.log(this);
        $(e.currentTarget).find(".drop-down").slideToggle();

        
    });
})
// Event Listeners
mobileMenu.addEventListener('click', (e) => {
    menu.classList.toggle('active');
});

// Functions


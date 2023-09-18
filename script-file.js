const WelcomeBanner = document.querySelector('.welcome-banner');
const content = document.querySelector('.content');
const remove = document.querySelector('.remove');

window.addEventListener('load', function () {
    showOverlay();
})
WelcomeBanner.addEventListener('click', function () {
    hideOverlay();
});

remove.addEventListener('click', function () {
    hideOverlay();
});

// Functions
function showOverlay() {
    WelcomeBanner.style.opacity = ".48";
    WelcomeBanner.style.visibility = "visible";
    content.style.opacity = "1";
    content.style.visibility = "visible";
}

function hideOverlay() {
    WelcomeBanner.style.opacity = "0";
    WelcomeBanner.style.visibility = "hidden";
    content.style.opacity = "0";
    content.style.visibility = "hidden";
}
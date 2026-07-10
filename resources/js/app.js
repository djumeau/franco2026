document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.querySelector("#hamburger");
    const menu = document.querySelector("#mobile-menu");

    // Defend against errors if the elements don't exist on the current page
    if (hamburger && menu) {
        hamburger.addEventListener("click", function () {
            console.log("show menu");
            menu.classList.toggle("hidden");
        });
    }
});

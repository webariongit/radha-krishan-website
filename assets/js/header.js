document.addEventListener("DOMContentLoaded", function () {
    var navItems = document.querySelectorAll('.nav-link');
    var offcanvasNav = document.getElementById('offcanvasNavItems');

    navItems.forEach(function (item) {
        var clonedItem = item.cloneNode(true);
        offcanvasNav.appendChild(clonedItem);
    });
});
document.getElementById('menu-toggle').addEventListener('click', function () {
    var menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');

    var bars = document.querySelectorAll('.hamburger span');
    bars[0].classList.toggle('rotate-45');
    bars[0].classList.toggle('translate-y-2');
    bars[1].classList.toggle('opacity-0');
    bars[2].classList.toggle('-rotate-45');
    bars[2].classList.toggle('-translate-y-2');
});
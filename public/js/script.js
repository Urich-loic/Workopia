document.querySelector('#hamburger').addEventListener('click', function() {
    console.log('Hamburger menu clicked');
    const menu = document.querySelector('#mobile-menu');
    menu.classList.toggle('hidden');
});

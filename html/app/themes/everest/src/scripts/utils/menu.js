let menuIcon = document.querySelector('.mobile-menu-icon');
let menu = document.querySelector('.header-menu-mobile');
let closeMenu = document.querySelector('.mobile-close');
let menuIndex = document.querySelector('.mobail-menu');
menuIcon.addEventListener('click',function(){
    menuIndex.classList.add('index6');
    menuIndex.classList.add('header-menu-mobile--active');
});
closeMenu.addEventListener('click', function(){
    menuIndex.classList.remove('header-menu-mobile--active');
    menuIndex.classList.remove('index6');
});
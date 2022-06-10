let links = document.querySelectorAll('.header .menu__item a[href*="#"]');

for (let link of links){
    link.addEventListener('click', function(event){
        event.preventDefault();
        const blockID = link.getAttribute('href');
        document.querySelector(''+blockID).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        })
    })
}
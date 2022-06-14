let links = document.querySelectorAll(' a[href*="#"]');

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
let workLinks = document.querySelectorAll('.our_works a');
for(let link of workLinks){
    link.addEventListener('click', function(e){
        e.preventDefault();
    })
}
let footerLink = document.querySelectorAll('.footer-grid__item ');
footerLink[footerLink.length - 1].addEventListener('click', function(event){
    event.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
    
})

let btnShowMore = document.querySelector('.our_works .button');
let gridTemplate = document.querySelector('.our_works__grid');
let gridItem = document.querySelector('.our_works__grid-item-img img');

document.addEventListener('DOMContentLoaded', function(){
    if(window.innerWidth < 1025){
        setHeight();
        let height = gridItem.offsetHeight * 7;
        
        window.addEventListener('resize', function(){
            
            setHeight();
        })
    }
})
btnShowMore.addEventListener('click',function(){
    gridTemplate.classList.toggle('max-content');
})
function setHeight(){
    let height = gridItem.clientHeight * 7;
    gridTemplate.style.maxHeight = height + 130 + 'px';
}

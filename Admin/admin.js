
let viewpage = document.querySelector('.pageview');


viewpage.addEventListener('mouseover', () => {
    viewpage.children[1].style.display = 'flex';
});

viewpage.addEventListener('mouseout', () => {
    viewpage.children[1].style.display = 'none';
});
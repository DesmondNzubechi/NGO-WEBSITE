
let viewpage = document.querySelector('.pageview');
let viewOption = document.querySelectorAll('.viewOPtion');


viewOption.forEach(view => {
    view.addEventListener('mouseover', () => {
        view.children[1].style.display = 'flex';
        view.children[0].children[0].style.display = 'none';
        view.children[0].children[1].style.display = 'inline-flex';
        });
    view.addEventListener('mouseout', () => {
        view.children[1].style.display = 'none';
        view.children[0].children[0].style.display = '';
        view.children[0].children[1].style.display = 'none';
    })
})

viewpage.addEventListener('mouseover', () => {
    viewpage.children[1].style.display = 'flex';
    viewpage.children[0].children[2].style.display = 'none';
    viewpage.children[0].children[3].style.display = 'inline-flex';
});

viewpage.addEventListener('mouseout', () => {
    viewpage.children[1].style.display = 'none';
    viewpage.children[0].children[2].style.display = 'inline-flex';
    viewpage.children[0].children[3].style.display =  'none'; 
});
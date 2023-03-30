let open = document.querySelector('.open');
let close = document.querySelector('.close');
let sidemenu = document.querySelector('.sideNav');
let showDrop = document.querySelectorAll('.ShowDropDown');
let messageS = document.querySelector('.hidemessageStat');

messageS.addEventListener('click', () => {
   let hideMsg =  messageS.parentElement.parentElement.children[0];
   if (hideMsg.style.display === 'flex') {
    hideMsg.style.display = 'none';
   }
   console.log(hideMsg);
})

showDrop.forEach(showD => {
    showD.addEventListener('mouseover', () => {
     let getList = showD.children[1];
     getList.style.display = 'flex';
    });
});


showDrop.forEach(showD => {
    showD.addEventListener('mouseout', () => {
     let getList = showD.children[1];
     getList.style.display = 'none';
    });
});



open.addEventListener('click', () => {
    close.style.display = 'block';
    open.style.display = 'none';
    sidemenu.style.left = '0';
})

close.addEventListener('click', () => {
    close.style.display = 'none';
    open.style.display = 'block';
    sidemenu.style.left = '-1000px';
});


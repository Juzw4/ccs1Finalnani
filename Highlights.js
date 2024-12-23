let items = document.querySelectorAll('.highlights .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let preview = document.querySelectorAll('.preview .item');

let countItem = items.length;
let itemActive = 0;

next.onclick = function(){
    itemActive = itemActive + 1;
    if(itemActive >= countItem){
        itemActive =0;
    }
    showSlider();
}

prev.onclick = function(){
    itemActive = itemActive - 1;
    if(itemActive < 0){
        itemActive = countItem - 1;
    }
    showSlider();
}

function showSlider(){

     let itemActiveOld = document.querySelector('.highlights .list .item.active');
     let thumbnailActiveOld = document.querySelector('.preview .item.active');
     itemActiveOld.classList.remove('active');
     thumbnailActiveOld.classList.remove('active');

     items[itemActive].classList.add('active');
     preview[itemActive].classList.add('active')
}


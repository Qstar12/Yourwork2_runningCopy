// _______To keep the navigation bar sticked at the top when scrolling_______

var header = document.getElementById('header'),
  navigation = document.getElementById('navigation');

window.addEventListener('scroll', () => {
  if (pageYOffset > 0) {
    header.style.paddingTop = '58px';
    navigation.style.cssText = 'background: #000; position: fixed; top: 0; padding: 10px 3%;';
  }
  else if (pageYOffset == 0) {
    header.style.paddingTop = '0';
    navigation.style.cssText = 'position: static;';
  }
})



var search_btn = document.getElementById('search-button');
var search_input = document.getElementById('search-input');

var search = false;

search_btn.onclick = () => {
  if (search == false) {
    search_input.style.cssText = 'visibility: visible; width: 200px; margin-left: 30px;';
    search = true;
  }
  else {
    search_input.style.cssText = 'visibility: hidden; width: 0; margin-left: 0;';
    search = false;
  }
}



var menu_icon = document.querySelector('.menu-icon');
var menu_close_icon = document.querySelector('.menu-close-icon');
var menu = document.querySelector('.menu');

menu_icon.addEventListener('click', function() {
  menu.style.display = 'flex';
})

menu_close_icon.addEventListener('click', function() {
  menu.style.display = 'none';
})
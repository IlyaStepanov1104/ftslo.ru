function toggle() {
  var menu = document.getElementById('nav-mobile');
  if(this.checked)
    menu.classList.add("nav-mobile-on");
  else
    menu.classList.remove("nav-mobile-on");
    };
document.getElementById('nav-mobile-check').onchange = toggle;
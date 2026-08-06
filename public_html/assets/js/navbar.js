let lastScroll = 0;
const navbar = document.querySelector('.section1');
let idScrollTimerNavbar

function onIdleScroll() {
  if (navbar.classList.contains("hide")) {
    navbar.classList.remove("hide")
  }
}

function onIdleScrollWtacher() {
  clearTimeout(idScrollTimerNavbar)
  idScrollTimerNavbar = setTimeout(onIdleScroll, 3000)
}

window.addEventListener('scroll', () => {
  const currentScroll = window.scrollY;

  if (currentScroll <= 0) {
    // En haut de la page
    navbar.classList.remove('hide');
    return;
  }

  if (currentScroll > lastScroll) {
    // Scroll vers le bas → on cache la navbar
    navbar.classList.add('hide');
  } else {
    // Scroll vers le haut → on l'affiche
    navbar.classList.remove('hide');
  }

  lastScroll = currentScroll;
  onIdleScrollWtacher()
});


//––––––––––––––––––––––––––––––––– button-mobile –––––––––––––––––––––––––––––––––

const inputCheckedBox = document.querySelector(".burger input#burger-toggle");

document.addEventListener("click", (event) => {

  if (inputCheckedBox.checked && !event.target.closest(".burger input#burger-toggle")) {
    inputCheckedBox.checked = false; // ferme le menu burger si on clique ailleurs
  }
});

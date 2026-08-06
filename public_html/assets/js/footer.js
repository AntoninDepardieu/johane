// document.addEventListener("DOMContentLoaded", () => {


//   let lastScrollb = 0;
//   const footer = document.querySelector('section#footer');
//   let scrollListenerActive = false;
//   const total = document.documentElement.scrollHeight - window.visualViewport.height;


//   console.log(window.scrollY, total / 5, total - (total / 5))

//   let scrollIdTimer

//   function onScrollIdle() {
//     if (window.scrollY > total / 7 &&
//       window.scrollY < total - (total / 7)) {
//       if (!footer.classList.contains('show')) {
//         footer.classList.add('show')
//       }
//     }
//   }
//   function idleMode() {
//     clearTimeout(scrollIdTimer)
//     // scrollIdTimer = setTimeout(onScrollIdle, 3000)
//   }

//   function setRelative() {
//     if (window.scrollY > total / 7 &&
//       window.scrollY < total - (total / 7)) {
//         footer.style.marginTop = "0px";
//     } else {
//       footer.style.position = "relative";
//       footer.style.marginTop = `-${footer.offsetHeight}px`;
//     }
//   }

//   function scrollHandler() {
//     if (window.scrollY > total / 7 &&
//       window.scrollY < total - (total / 7)) {
//       footer.style.position = "fixed";
//       const currentScroll = window.scrollY;

//       if (currentScroll <= 0) {
//         // En haut de la page
//         footer.classList.remove('show');
//         return;
//       }

//       if (currentScroll < lastScrollb) {
//         // Scroll vers le bas → on cache la footer
//         footer.classList.add('show');
//       } else {
//         // Scroll vers le haut → on l'affiche
//         footer.classList.remove('show');
//       }

//       idleMode()
//       lastScrollb = currentScroll;
//     } else {
//       if (footer.classList.contains("show")) {
//         footer.classList.remove("show")
//       }
//       if (window.scrollY < total / 7) {
//         setTimeout(setRelative, 300)
//       } else {
//         setRelative()
//       }
//     }
//   };

//   function scrollFooter() {
//     if (window.innerWidth < 767) {
//       if (!scrollListenerActive) {
//         window.addEventListener("scroll", scrollHandler, { passive: true });
//         scrollListenerActive = true;
//         console.log("Scroll footer activé ✅");
//       }
//     } else {
//       if (scrollListenerActive) {
//         window.removeEventListener("scroll", scrollHandler);
//         scrollListenerActive = false;
//         console.log("Scroll footer désactivé ❌");
//       }
//     }
//   }

//   scrollFooter()
//   scrollHandler()
//   window.addEventListener("resize", scrollFooter)
// })

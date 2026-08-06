// =*=*=*=*=*=*=*=*=*=*=*=*=*=*=* INDEX =*=*=*=*=*=*=*=*=*=*=*=*=*=*=*


document.addEventListener("DOMContentLoaded", function () {
    const bouttons = document.querySelectorAll(".index-section4");

    ajustementMedia()


    bouttons.forEach(el => {

        el.addEventListener("click", function () {
            if (window.innerWidth <= 767) {
                if (el.classList.contains("choix-mobile-hover")) {
                    el.classList.remove("choix-mobile-hover");
                    el.setAttribute("href", "Book.php");
                } else {
                    el.classList.add("choix-mobile-hover");
                }
            }
        });

    });

    window.addEventListener("resize", ajustementMedia)

    function ajustementMedia() {
        if (window.innerWidth >= 767) {
            bouttons.forEach(el => {
                el.setAttribute("href", "Book.php")
                el.classList.add("hover-animation");
            })
        } else {
            bouttons.forEach(el => {
                el.removeAttribute("href");
                el.classList.remove("hover-animation");
            })
        };
    }

});



// =*=*=*=*=*=*=*=*=*=*=*=*=*=*=* sliders =*=*=*=*=*=*=*=*=*=*=*=*=*=*=*

document.addEventListener("DOMContentLoaded", () => {

    if (window.location.href.includes('yunee') || window.location.href.includes('motion-montage')) {
        const url = window.location.href;
        console.log("ça match")
        const match = url.match(/\/([^\/]+)\.[^\/]+$/);
        let mot;
        if (match) {
            mot = match[1];
        }

        const troisPetitsPoints = document.querySelectorAll(`.${mot}-page .trois-points`)
        const fleches = document.querySelectorAll(`.${mot}-page button`)

        //contentWrapperParSection
        const sections = [...document.querySelectorAll("section")].filter(sec => sec.querySelector(".video-wrapper"));
        sections.forEach((el) => {
            const nbContentWrapper = [...el.children].filter(vw => vw.classList.contains("video-wrapper")).length;
            const currentTroisPoints = el.querySelector(".trois-points");
            const listePoints = currentTroisPoints.children
            if (nbContentWrapper === 1) {
                el.removeChild(el.querySelector(".trois-points"))
                el.querySelectorAll("button.fleche").forEach(elchild => {
                    el.removeChild(elchild)
                });
            } else {
                while (listePoints.length !== nbContentWrapper) {
                    currentTroisPoints.removeChild(currentTroisPoints.lastChild)
                }
            }
        })


        //fonction clics
        function changeDeSlide(event) {
            console.log("clické")
            //layout
            const elTarget = event.target;
            let curentPoint = elTarget.parentElement.querySelector(".trois-points .current-petit-point");
            const listePoints = [...curentPoint.parentElement.children]

            //content
            const currentContentWrapper = elTarget.closest("section").querySelector(".video-wrapper:not(.hidden)");
            const contentWrappers = [...elTarget.closest("section").querySelectorAll(".video-wrapper")];


            if (elTarget.closest(".trois-points")) {
                //points

                //content
                const refIndex = listePoints.indexOf(elTarget);
                const indexMap = contentWrappers.length - 1 - refIndex;

                contentWrappers.forEach((el) => {
                    if (contentWrappers.indexOf(el) === indexMap) {
                        el.classList.remove("hidden");
                        const vid = el.querySelector("video[muted]");
                        if (vid) {
                            vid.load();
                            vid.play();

                        }
                    } else {
                        el.classList.add("hidden");
                        console.log("la video !", el.querySelector("video"))
                        if (el.querySelector("video")) {
                            el.querySelector("video").pause();
                            el.querySelector("video").load();
                            console.log("loadé")

                        }
                    }
                })



                //layout
                const sibling = [...elTarget.parentElement.children].filter(sib => sib != elTarget);

                sibling.forEach((el) => {
                    el.classList.remove("current-petit-point");
                })
                elTarget.classList.add("current-petit-point");



            } else {
                //fleches
                if (elTarget.id === `right-${mot}-page`) {
                    //droit
                    if (listePoints.indexOf(curentPoint) === listePoints.length - 1) {
                        listePoints[0].classList.add("current-petit-point");
                    } else {
                        curentPoint.nextElementSibling.classList.add("current-petit-point");
                    }
                    curentPoint.classList.remove("current-petit-point");

                } else {
                    //gauche
                    if (listePoints.indexOf(curentPoint) === 0) {
                        listePoints[listePoints.length - 1].classList.add("current-petit-point");
                    } else {
                        curentPoint.previousElementSibling.classList.add("current-petit-point");
                    }
                    curentPoint.classList.remove("current-petit-point");


                }

                curentPoint = elTarget.parentElement.querySelector(".trois-points .current-petit-point");
                const refIndex = listePoints.indexOf(curentPoint);
                const indexMap = contentWrappers.length - 1 - refIndex;

                contentWrappers.forEach((el) => {
                    if (contentWrappers.indexOf(el) === indexMap) {
                        el.classList.remove("hidden");
                        const vid = el.querySelector("video[muted]");
                        if (vid) {
                            console.log(vid);
                            vid.load();
                            vid.play();

                        }
                    } else {
                        el.classList.add("hidden");
                        if (el.querySelector("video")) {
                            el.querySelector("video").pause();
                            el.querySelector("video").load();
                        }
                    }
                })
            }
        }

        fleches.forEach(el => (el.addEventListener("click", changeDeSlide)))

        //setup clics et nb de points
        troisPetitsPoints.forEach(el => {
            el.firstElementChild.classList.add("current-petit-point");
            el = [...el.children]
            el.forEach((elChild) => {
                elChild.addEventListener("click", changeDeSlide)
            })
        })
    }

    if (window.location.href.includes('shin')) {

        function slider() {
            const targetClil = event.target;
            const imgWrapper = targetClil.parentElement.querySelector(".img-wrapper");
            const images = [...imgWrapper.children];
            const imageActuelle = images.find(el => !el.classList.contains("hidden"));
            const indexImageActuelle = images.indexOf(imageActuelle)

            if (targetClil.id.includes('right')) {

                if (indexImageActuelle === images.length - 1) {
                    images[0].classList.remove("hidden");
                } else {
                    images[indexImageActuelle].nextElementSibling.classList.remove("hidden");
                }

            } else {

                if (indexImageActuelle === 0) {
                    images[images.length - 1].classList.remove("hidden");
                } else {
                    images[indexImageActuelle].previousElementSibling.classList.remove("hidden");
                }

            }
            imageActuelle.classList.add("hidden")



        }

        document.querySelectorAll(".projets .fleche").forEach((el) => {
            el.addEventListener("click", slider)
        })

        function visualizer() {
            const visualizer = document.querySelector(".visualizer");
            const counter = visualizer.querySelector("#counter");
            const description = visualizer.querySelector("#description");
            const container = visualizer.querySelector(".img-container");
            let currentFrame
            let galerie

            if (event.target.closest(".galerie-wrapper")) {
                //si c une mini galerie
                currentFrame = event.target.closest(".frame-wrapper");
                galerie = [...currentFrame.parentElement.children];
            } else {
                //si c un slider
                galerie = [...event.target.closest(".img-wrapper").children].filter(el => ["IMG", "VIDEO"].includes(el.tagName));
                currentFrame = galerie.find(el => !el.classList.contains("hidden"));
            }

            let currentIndex = galerie.indexOf(currentFrame);
            let cloneImg

            visualizer.classList.remove("hidden")

            //setup
            galerie.forEach((el) => {
                elImg = el.querySelector("video") || el.querySelector("img") || el;
                console.log(elImg, " détecté")
                if (elImg.tagName === "IMG" || elImg.tagName === "VIDEO") {
                    console.log(elImg, "ajouté")
                    cloneImg = elImg.cloneNode(true);
                    container.appendChild(cloneImg)
                }
            })

            const containerContent = [...container.children]

            function initializer() {
                containerContent.forEach((el, index) => {
                    console.log(index, currentIndex)
                    if (index !== currentIndex) {
                        el.classList.add("hidden")
                    } else {
                        description.innerHTML = "";
                        el.classList.remove("hidden")
                        if (el.dataset.description) {
                            description.innerHTML = `${el.dataset.description}`
                        }
                    }
                })
                counter.innerHTML = `${currentIndex + 1} / ${galerie.length}`;
            }

            initializer()



            //fleches
            function visualizerSlider() {
                const direction = event.target.id;

                if (direction.includes("right")) {
                    if (currentIndex === galerie.length - 1) {
                        currentIndex = 0;
                    } else {
                        currentIndex += 1;
                    }

                } else {
                    if (currentIndex === 0) {
                        currentIndex = galerie.length - 1;
                    } else {
                        currentIndex -= 1;
                    }
                }
                initializer()

            }




            visualizer.querySelectorAll(".fleche").forEach((el) => {
                el.addEventListener("click", () => visualizerSlider());
            })


            //exit
            visualizer.querySelector("#exit").addEventListener("click", () => {
                visualizer.classList.add("hidden");
                container.innerHTML = "";
                description.innerHTML = "";

            })

        }

        document.querySelectorAll(".overlay").forEach((el) => {
            el.addEventListener("click", visualizer)
        })

    }
})
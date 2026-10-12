document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll("img").forEach((img) => {
        img.draggable = false;
    });

    const onboarding = document.body.querySelector(".onboarding");
    const overlay = document.body.querySelector(".overlay");
    const shirt = document.querySelector("#SHIRT");
    const button = overlay.querySelector("div#button");
    const music = new Audio("ASSETS/LAYOUT/MUSIC.mp3");
    const buzzer = new Audio("ASSETS/LAYOUT/BUZZER.mp3");
    const unlock = new Audio("ASSETS/LAYOUT/UNLOCK.mp3");
    const video = document.querySelector(".gain video")
    let lock = true
    const input = document.querySelector("input");
    const codeSecret = "4511"
    let currentElement = null
    let text = ""
    let src = ""
    let id = ""


    function objectClicked(el) {

        console.log(el.parentElement, el.parentElement.querySelector("p"))
        if (el.parentElement.querySelector("p")) {
            text = el.parentElement.querySelector("p").innerHTML
            if (el.id === "CAVEAU") {
                text = el.parentElement.querySelector(".object-wrapper:has(#CAVEAU) p").innerHTML
            }
        }

        src = el.src
        if (el.src === undefined) {
            if (el.id === "CAVEAU") {
                src = el.parentElement.querySelector(".object-wrapper #CAVEAU").src
            }
            console.log(el.id)
            if (el.id === "OURS") {
                src = el.parentElement.querySelector(".object-wrapper #OURSON").src
            }

        }

        src = src.replace("SCENE", "FOCUS")
        id = el.id
        id = src.split('/').pop()
        id = id.split('.')[0]


        if (el.id === "SHIRT") {
            shirt.style.transform = "translateY(-40%)";
            shirt.style.opacity = "0%";
            setTimeout(() => {
                shirt.style.display = "none"
            }, "300")
            document.querySelector("#COFFRE").classList.remove("enable")
        } else {

            overlay.querySelectorAll("div.TIRROIR_FEUILLE").forEach((el) => {
                el.style.display = "none"
            })
            overlay.querySelector(".object-wrapper").style.display = "none"
            overlay.querySelector("#button").style.display = "none"

            overlay.classList.remove("TIRROIR")
            overlay.querySelector(".text").style.display = "flex";
            overlay.querySelector("img").style.display = "flex";
            if (id === "CAVEAU" || id === "CINEMA") {
                overlay.querySelectorAll(".TREE-D").forEach((el) => {
                    el.style.pointerEvents = "all";
                })
                overlay.querySelector("img").classList = "CARTE"
            } else { overlay.querySelector("img").classList = "" }

            overlay.querySelector("img").src = src
            overlay.querySelector("img").id = id
            overlay.querySelector(".text").innerHTML = text

            if (el.classList.contains("PHOTO") || el.id === "CAVEAU") {
                overlay.querySelector("#PHOTO").style.display = ""
                overlay.querySelector("#PHOTO").src = src.replace(id, "PHOTO_" + id)
            } else {
                overlay.querySelector("#PHOTO").style.display = "none"
            }

            overlay.querySelector("#button img").style.rotate = "0deg"

            let srcButton = overlay.querySelector("#button img").src.split("/").at(-1)
            srcButton = srcButton.split(".")[0]
            if (el.id === "GUITARE") {
                overlay.querySelector("#button").style.display = "flex"
                overlay.querySelector("#button").classList.remove("erase");
                overlay.querySelector("#button img").src = overlay.querySelector("#button img").src.replace(srcButton, "PLAY")
            }
            if (el.id === "CINEMA") {
                overlay.querySelector("#button").style.display = "flex"
                overlay.querySelector(".object-wrapper").style.display = "none";
                overlay.querySelector("#button").classList.remove("erase");
                overlay.querySelector("#button img").src = overlay.querySelector("#button img").src.replace(srcButton, "TURN")
            }
            if (el.id === "TIRROIR") {
                overlay.querySelector("#button").style.display = "flex"
                overlay.querySelector("#button").classList.remove("erase");
                overlay.querySelector("#button img").src = "ASSETS/LAYOUT/FLECHE.svg"
                overlay.querySelector("#button img").style.rotate = "90deg"
            }
            if (el.id === "COFFRE") {
                overlay.querySelector("#button").style.display = "flex"
                if (!lock && !overlay.querySelector("#button").classList.contains("erase")) {
                    overlay.querySelector("#button").classList.add("erase");
                }
                overlay.querySelector("#button img").src = overlay.querySelector("#button img").src.replace(srcButton, "KEY")
            }
            overlay.style.display = "flex";
        }
        if (el.id === "TIRROIR") {
            overlay.querySelector(".object-wrapper").style.display = "flex";
            overlay.querySelector(".text").style.display = "none";
            overlay.querySelector("img").style.display = "none";
            overlay.querySelectorAll(".TREE-D").forEach((el) => {
                el.style.pointerEvents = "none";
            })
            overlay.classList.add("TIRROIR")
            overlay.style.display = "flex";

            let i = 0;
            if (overlay.querySelector("div.TIRROIR_FEUILLE")) {
                document.querySelectorAll("div.TIRROIR_FEUILLE").forEach((el) => {
                    el.style.display = "flex"
                })
            } else {
                while (i < 64) {
                    i += 1;
                    fetch("ASSETS/LAYOUT/CURSOR.svg")
                        .then(response => response.text())
                        .then(svgText => {
                            const conteneur = document.createElement("div");
                            conteneur.classList.add("TIRROIR_FEUILLE");

                            conteneur.innerHTML = svgText;

                            const feuille = conteneur.querySelector("svg");

                            const random_position_X =
                                Math.floor(Math.random() * (-15 - 15) + 15) * 10;

                            const random_position_Y =
                                Math.floor(Math.random() * (-27 - 27) + 27) * 10;

                            const random_rotation =
                                Math.floor(Math.random() * 36) * 10;

                            const couleurs = [
                                "hue-rotate(0deg)",
                                "hue-rotate(20deg)",
                                "hue-rotate(35deg)",
                                "hue-rotate(320deg)",
                                "hue-rotate(340deg)"
                            ];

                            conteneur.style.transform =
                                `translate(${random_position_X}%, ${random_position_Y}%) rotate(${random_rotation}deg)`;

                            feuille.style.filter =
                                couleurs[Math.floor(Math.random() * couleurs.length)];

                            // Le SVG occupe la taille prévue par ton CSS
                            feuille.style.width = "100%";
                            feuille.style.height = "100%";
                            feuille.style.overflow = "visible";

                            // Seule la partie dessinée du SVG capte les clics
                            const tracé = feuille.querySelector("path");

                            if (tracé) {
                                tracé.style.pointerEvents = "visiblePainted";

                                tracé.addEventListener("click", () => {
                                    conteneur.remove();
                                    const POP = new Audio("ASSETS/LAYOUT/POP.mp3")
                                    POP.play()
                                });
                            }

                            overlay.appendChild(conteneur);
                        })
                }
            }

        }
    }
    document.querySelectorAll(".object").forEach((el) => {
        el.addEventListener("click", () => {
            currentElement = el;
            objectClicked(currentElement)
        })
    })

    let back = false;
    button.addEventListener("click", () => {
        if (currentElement.id === "CINEMA") {
            if (back === false) {
                src = src.replace("CINEMA", "CINEMA1")
                back = true
            } else {
                src = src.replace("CINEMA1", "CINEMA")
                back = false
            }

            overlay.querySelector("img").src = src
        }

        if (currentElement.id === "GUITARE") {
            music.currentTime = 0;
            music.play();
        }

        if (currentElement.id === "COFFRE") {
            if (input.value !== codeSecret) {
                input.value = "";
                overlay.querySelector("#button").classList.add("wrong")
                setTimeout(() => {
                    overlay.querySelector("#button").classList.remove("wrong")
                }, 1000)
                buzzer.currentTime = 0;
                buzzer.play();
            } else {
                unlock.currentTime = 0;
                unlock.play();

                overlay.querySelector("#button").classList.add("right")
                setTimeout(() => {
                    overlay.querySelector("#button").classList.add("erase")
                    overlay.querySelector("input").classList.add("erase")
                    lock = false
                }, 1000)
                overlay.querySelector("img").src = overlay.querySelector("img").src.replace("COFFRE", "COFFRE_OUVERT")
                document.querySelector(".gain").style.display = "flex"
                document.querySelector(".gain").style.pointerEvents = "all"
                setTimeout(() => {
                    document.querySelector(".gain").style.opacity = "1"
                    const COFFRE_SIC = new Audio("ASSETS/LAYOUT/COFFRE.mp3")
                    COFFRE_SIC.play()
                    video.play()
                }, 1000)

            }
        }

        if (currentElement.id === "TIRROIR") {
            overlay.style.display = "none"
            document.querySelectorAll("div.TIRROIR_FEUILLE").forEach((el) => {
                el.style.display = "none"
            })
        }
    })

    overlay.addEventListener("click", (e) => {
        if (!e.target.closest('.object-wrapper') && !e.target.closest('#button') && !e.target.closest('#input') && !e.target.closest(".TIRROIR_FEUILLE") && !overlay.classList.contains("TIRROIR")) {
            overlay.style.display = "none";
        }
    })

    function onboardingFunc() {
        let counterText = 0;
        const enfants = onboarding.querySelectorAll("h1")
        const talking1 = new Audio("ASSETS/LAYOUT/TALKING1.mp3")
        enfants[counterText].classList.remove("actif");
        enfants[counterText + 1].classList.add("actif");
        counterText = counterText + 1;
        talking1.play()
        onboarding.querySelector("#button").addEventListener("click", (e) => {
            enfants[counterText].classList.remove("actif");
            counterText = counterText + 1;
            if (counterText <= enfants.length - 1) {
                if (counterText === 2) {
                    const talking2 = new Audio("ASSETS/LAYOUT/TALKING2.mp3")
                    talking2.play()
                    onboarding.querySelector("img").src = onboarding.querySelector("img").src.replace("PHOTO1", "PHOTO2")
                }
                if (counterText === 3) {
                    const talking3 = new Audio("ASSETS/LAYOUT/TALKING3.mp3")
                    talking3.play()
                    onboarding.querySelector("img").src = onboarding.querySelector("img").src.replace("PHOTO2", "PHOTO3")
                }
                enfants[counterText].classList.add("actif");
                talking.currentTime = 0;
                talking.play()
            }
            if (counterText > enfants.length - 1) {
                onboarding.style.pointerEvents = "none";
                onboarding.querySelector("#button").style.display = "none"
                onboarding.querySelector(".text").style.display = "none"
                onboarding.style.pointerEvent = "none"

                onboarding.style.opacity = "0"
            }
        })
    }


    onboarding.addEventListener("click", (e) => {
        if (e.target.closest('.text')) {
            onboardingFunc()
        }
    })

})
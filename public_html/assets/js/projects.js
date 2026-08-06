window.addEventListener("DOMContentLoaded", () => {

    // ———————————————————————— vignettes ————————————————————————

    const vignetteWrapper = document.querySelector(".developement #vignette");
    const project = window.location.pathname.split('/').pop().replace('.php', '');

    if (vignetteWrapper) {
        fetch(`/api/get-vignette.php?project=${project}`)
            .then(res => res.json())
            .then(vignetteFiles => {
                vignetteFiles.forEach((el) => {
                    if (el.includes("png") || el.includes("webp") || el.includes("jpg")) {
                        const vignette = document.createElement("img");
                        vignette.src = el;
                        vignetteWrapper.appendChild(vignette)
                    } else { }
                });
                initlightbox();
            });
    } else {
        initlightbox();
    }

    // ———————————————————————— lightbox ————————————————————————

    function initlightbox() {
        const overlayWrapper = document.querySelector(".overlay-wrapper");
        const wrappers = [...document.querySelectorAll(".developement .grid-wrapper")]
        const imageLayout = overlayWrapper.querySelector(".layout-wrapper img");
        const overlayControls = overlayWrapper.querySelector(".display:not(:has( #close))");
        const controller = new AbortController();
        let number = overlayWrapper.querySelector("p#number")
        let imageActuel = 0;
        let wrapperActuel = 0;
        let wrapperActuelLenght = 0;

        if (window.innerWidth > 767) {

            // cliques images 
            wrappers.forEach((el, index, wrapperElement) => {

                wrapperElement = [...el.querySelectorAll("img")];
                console.log("wrapperElement", wrapperElement)

                wrapperElement.forEach((imgElement, index) => {
                    console.log("click ajouté à : ", imgElement)
                    imgElement.addEventListener("click", (event) => {
                        wrapperActuel = wrappers.indexOf(imgElement.parentElement)
                        wrapperActuelLenght = wrapperElement.length;
                        imageActuel = index;

                        if (wrapperActuelLenght === 1) {
                            overlayControls.style.display = "none";
                        } else {
                            overlayControls.style.display = "";
                        };

                        imageLayout.src = [...wrappers[wrapperActuel].querySelectorAll("img")][imageActuel].src
                        number.innerHTML = `${imageActuel + 1} / ${wrapperElement.length}`;
                        overlayWrapper.style.display = "";

                    })

                })
            })


            // overlay bouttons 
            overlayWrapper.querySelectorAll(".display>*").forEach((el) => {
                if (el.tagName !== "P") {
                    el.addEventListener("click", (event) => {
                        if (event.target.id === "close") overlayWrapper.style.display = "none";

                        if (event.target.id === "right") {
                            imageActuel = (imageActuel + 1) % wrapperActuelLenght;
                            number.innerHTML = `${imageActuel + 1} / ${wrapperActuelLenght}`;
                            console.log(imageActuel, [...wrappers[wrapperActuel].querySelectorAll("img")][imageActuel].src)
                            imageLayout.src = [...wrappers[wrapperActuel].querySelectorAll("img")][imageActuel].src
                        }
                        if (event.target.id === "left") {
                            imageActuel = (imageActuel - 1 + wrapperActuelLenght) % wrapperActuelLenght;
                            number.innerHTML = `${imageActuel + 1} / ${wrapperActuelLenght}`;
                            imageLayout.src = [...wrappers[wrapperActuel].querySelectorAll("img")][imageActuel].src
                        }
                    })
                } else { }
            })

        }

    }
})


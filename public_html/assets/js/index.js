window.addEventListener("DOMContentLoaded", () => {

    const gridWrapper = document.querySelector(".book-grid .object-wrapper .grid-wrapper");

    document.querySelectorAll(".book-grid .object-wrapper .button-wrapper div.boutton").forEach((buttonElement) => {
        buttonElement.addEventListener("click", () => {
            if (!buttonElement.classList.contains("actuel")) {
                buttonElement.parentElement.querySelector("div.actuel").classList.remove("actuel");
                buttonElement.classList.add("actuel");

                gridWrapper.style.columns = "4";

                document.querySelectorAll(".book-grid .grid-wrapper>*").forEach((cellElement) => {
                    if (cellElement.classList.contains(buttonElement.id)) {
                        cellElement.style.display = "";

                    } else {
                        cellElement.style.display = "none";
                    }

                    if (buttonElement.id === "tout" && !cellElement.classList.contains("showreel")) {
                        cellElement.style.display = "";
                    }
                })

                if (buttonElement.id === "showreel") {
                    gridWrapper.style.columns = "1";
                    console.log("gridWrapper : ", gridWrapper)
                }

                if (window.innerWidth <= 767) {
                    gridWrapper.style.columns = "1"
                }
            } else {
            }
        })
    })
})



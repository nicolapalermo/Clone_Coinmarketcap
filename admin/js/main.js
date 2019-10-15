const showSpinner = () => {
    const form = document.querySelector("#form");
    const spinner = document.querySelector("#spinner");
    const alert = document.querySelector("#alert");

    form.addEventListener("submit", () => {
        form.style.display = "none";
        alert.remove();
        spinner.style.display = "block"; 
    })
}

showSpinner();
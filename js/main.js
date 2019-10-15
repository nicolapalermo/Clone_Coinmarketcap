const formSubmit = () => {
    const forms = document.querySelectorAll(".submitOnChange");

    forms.forEach(form => {
        form.addEventListener("change", () => {
            form.submit();
        })
    });
}

const themeSwitcher = () => {
    const switcher = document.querySelector("#switcher");
    const body = document.body;


    if (localStorage.getItem("theme") === "light" || localStorage.getItem("theme") === null) {
        switcher.classList.remove("dark-theme-active");
        body.classList.remove("dark-theme");
    } else {
        switcher.classList.add("dark-theme-active");
        body.classList.add("dark-theme");
    }


    switcher.addEventListener("click", () => {
        switcher.classList.toggle("dark-theme-active");
        body.classList.toggle("dark-theme");

        if (switcher.classList.contains("dark-theme-active")) {
            localStorage.setItem("theme", "dark");
        } else {
            localStorage.setItem("theme", "light");
        }
    })
}

formSubmit();
themeSwitcher();

$('#disclaimer').modal();
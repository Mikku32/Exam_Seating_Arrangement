const form = document.querySelector("#frm");
const uField = form.querySelector(".username");
const uInput = uField.querySelector("input");
const pField = form.querySelector(".password");
const pInput = pField.querySelector("input");

form.onsubmit = (e) => {
    e.preventDefault();

    (uInput.value.trim() === "") ? uField.classList.add("shake", "error") : checkUsername();
    (pInput.value === "") ? pField.classList.add("shake", "error") : checkPass();

    setTimeout(() => {
        uField.classList.remove("shake");
        pField.classList.remove("shake");
    }, 500);

    uInput.onkeyup = () => { checkUsername(); };
    pInput.onkeyup = () => { checkPass(); };

    function checkUsername() {
        if (uInput.value.trim() === "") {
            uField.classList.add("error");
            uField.classList.remove("valid");
            let errorTxt = uField.querySelector(".error-txt");
            errorTxt.innerText = "Username can't be blank";
        } else {
            uField.classList.remove("error");
            uField.classList.add("valid");
        }
    }

    function checkPass() {
        if (pInput.value.length < 8) {
            pField.classList.add("error");
            pField.classList.remove("valid");
            let errorTxt = pField.querySelector(".error-txt");
            errorTxt.innerText = "Password must be at least 8 characters long";
        } else {
            pField.classList.remove("error");
            pField.classList.add("valid");
        }
    }

    if (!uField.classList.contains("error") && !pField.classList.contains("error")) {
        window.location.href = form.getAttribute("action");
    }
    
};

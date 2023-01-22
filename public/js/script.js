function isEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}


async function changeBackGround(x) {
    if (x.style.background === "rgb(216, 216, 216)") {
        x.style.background = "#FFFFFF";
    }
    else {
        x.style.background = "#D8D8D8";
    }

}

function markValidation(element, condition) {
    !condition ? element.classList.add('no-valid') : element.classList.remove('no-valid');
}

function validateEmail() {
    setTimeout(function () {
            markValidation(emailInput, isEmail(emailInput.value));
        },
        1000
    );
}
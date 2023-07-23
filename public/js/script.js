const form = document.querySelector("form");
const emailInput = form.querySelector('input[name="email"]');

const isEmail = (email) => {
    return /\S+@\S+\.\S+/.test(email);
}

const markValidation = (element, condition) => {
    !condition ? element.classList.add('no-valid') : element.classList.remove('no-valid');
}

const validateEmail = () => {
    setTimeout(() => {
            markValidation(emailInput, isEmail(emailInput.value));
        },
        1000
    );
}

emailInput.addEventListener('keyup', validateEmail);
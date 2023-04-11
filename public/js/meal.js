const plusIcon = document.querySelector(".plus-icon");
const minusIcon = document.querySelector(".minus-icon");
const addToListFromMealButtons = document.querySelectorAll(".addButton-meal");
const servingNumberElement = document.querySelector(".servings");

let servings = 1;

function updateServingNumber(value) {
    servings = Math.max(1, servings + value);
    servingNumberElement.textContent = servings;
}

function addServing() {
    updateServingNumber(1);
}

function minusServing() {
    updateServingNumber(-1);
}

async function addToListFromMeal() {
    const mealInList = this;
    const mealId = mealInList.getAttribute("id");

    for (let i = 0; i < servings; i++) {
        await fetch(`/mealList/${mealId}`, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            }
        });
    }

    setTimeout(() => {
        window.location.href = "/plan";
    }, 200);
}

plusIcon.addEventListener("click", addServing);
minusIcon.addEventListener("click", minusServing);
addToListFromMealButtons.forEach(button => button.addEventListener("click", addToListFromMeal));

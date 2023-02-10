const plusIcon = document.querySelector(".plus-icon");
const minusIcon = document.querySelector(".minus-icon");
const addToListFromMealButton = document.querySelectorAll(".addButton-meal");
const servingNumber = document.querySelector(".servings");

i = 1;

function addServing() {
    servingNumber.innerHTML = parseInt(servingNumber.innerHTML) + 1;
    i++;
}

function minusServing() {
    if (servingNumber.innerHTML > 1) {
        servingNumber.innerHTML = parseInt(servingNumber.innerHTML) - 1;
        i--;
    }
}

function addToListFromMeal() {
    const mealInList = this;
    const id = mealInList.getAttribute("id");

    while(i > 0) { 
        fetch(`/mealList/${id}`, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
        }}).then(function () {
            });
            i--;
    }
    setTimeout(() => {
            window.location.href = "/plan";
        }, 200
    );
}

plusIcon.addEventListener("click", addServing);
minusIcon.addEventListener("click", minusServing);
addToListFromMealButton.forEach(button => button.addEventListener("click", addToListFromMeal));
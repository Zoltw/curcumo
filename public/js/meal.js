const plusIcon = document.querySelector(".plus-icon");
const minusIcon = document.querySelector(".minus-icon");
const addToListFromMealButton = document.querySelectorAll(".addButton-meal");

function addServing() {
    console.log("add serving");
}

function minusServing() {

}

function addToListFromMeal() {
    const mealInList = this;
    const id = mealInList.getAttribute("id");

    fetch(`/mealList/${id}`)
        .then(function () {
            plato++;
        });
}

plusIcon.addEventListener("click", addServing);
minusIcon.addEventListener("click", minusServing);
addToListFromMealButton.forEach(button => button.addEventListener("click", addToListFromMeal));
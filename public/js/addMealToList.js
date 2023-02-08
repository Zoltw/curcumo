const addToListButton = document.querySelectorAll(".addButton");
const plateIcon1 = document.querySelector(".icon");
const plateIcon2 = document.querySelector(".icon2");
const plateIcon3 = document.querySelector(".icon3");

plato = 0;

function addToList() {
    const mealInList = this;
    const id = mealInList.getAttribute("id");

    fetch(`/mealList/${id}`)
        .then(function () {
            plato++;
        });
}

function changeOpacityPlateIcon() {
    if (plato === 0) {
        plateIcon1.style.opacity = "1";
    }
    else if (plato === 1) {
        plateIcon2.style.opacity = "1";
    }
    else if (plato === 2) {
        window.location.href = "/list";
    }


}


addToListButton.forEach(button => button.addEventListener("click", addToList));
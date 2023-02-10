const addToListButton = document.querySelectorAll(".addButton");
const plateIcon1 = document.querySelector(".icon");
const plateIcon2 = document.querySelector(".icon2");
const drawListButton = document.querySelector(".draw-button");

plato = 0;

function addToList() {
    const mealInList = this;
    const id = mealInList.getAttribute("id");

    fetch(`/mealList/${id}`, {
        method: "POST",
    }).then(function () {
            plato++;
        });
}

function drawMeals() {
    for(i = 0; i < 3; i++) {
        random = Math.floor(Math.random() * 8) + 1;
        fetch(`/mealList/${random}`, {
            method: "POST",
        }).then(function () {
                i++;
            });
    }
    delayWithListRedirect();
}

function changeOpacityPlateIcon() {

    if (plato === 0) {
        plateIcon1.style.opacity = "1";
    }
    else if (plato === 1) {
        plateIcon2.style.opacity = "1";
    }
    else if (plato === 2) {
        delayWithListRedirect();
    }
}

function delayWithListRedirect() {
    setTimeout(() => {
        const reloadUsingLocationHash = () => {
            window.location.hash = "reload";
        }
        window.onload = reloadUsingLocationHash();
        window.location.href = "/list";
    }, 300);
}

addToListButton.forEach(button => button.addEventListener("click", addToList));
drawListButton.addEventListener("click", drawMeals);
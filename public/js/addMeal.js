
function showMeals() {
}


function getMealsFromDb() {
    const template = document.querySelector('#meals');
    const clone = template.content.cloneNode(true);
    const div_id = clone.querySelector("div");
    div_id.id = "meals";
    const image = clone.querySelector("img");
    image.src = `/public/img/${meal.image}`;
    const name = clone.querySelector("h2");
    name.innerHTML = meal.name;
    const time = clone.querySelector("h3");
    time.innerHTML = meal.time;
}

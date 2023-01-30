const mealsContainer = document.querySelector(".meals");

function showMeals(meals) {
    meals.forEach(meal => {
        getMealsFromDb(meal);
    });
}





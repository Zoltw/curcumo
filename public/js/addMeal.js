
function mealAction(likes) {
    console.log(likes);
    const container = likes
    const id = container.getAttribute("id");
    console.log(id);

    fetch(`/meal/${id}`, {
        method: "GET",
    }).then(function () {
        window.document.location.reload();
    })

}






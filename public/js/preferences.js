const prefButton = document.querySelector(".preferences");

function managePref() {
    const template = document.querySelector("#pref-template")
    document.querySelector(".container").innerHTML="";
    const clone = template.content.cloneNode(true);
    header = clone.querySelector("h1");
    header.innerHTML = "I would like to eat..."
    image = clone.getElementById("img1");
    image.src = `/public/img/bacon-icon.svg`;
    image = clone.getElementById("img2");
    image.src = `/public/img/greens-icon.svg`;
    image = clone.getElementById("img3");
    image.src = `/public/img/bread-icon.svg`;
    image = clone.getElementById("img4");
    image.src = `/public/img/fish-icon.svg`;
    b = clone.querySelector("b1");
    b.innerHTML = "less meat";
    b = clone.querySelector("b2");
    b.innerHTML = "more greens";
    b = clone.querySelector("b3");
    b.innerHTML = "low ig";
    b = clone.querySelector("b4");
    b.innerHTML = "more fishes";
    a = clone.querySelector(".preferences");
    a.innerHTML ="let's plan!";
    document.querySelector(".container").appendChild(clone);

}

prefButton.addEventListener("click", managePref);
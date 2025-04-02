function buttonAlert() {
    window.alert("hola desde html!");
}

function changeIMG(img) {
    img.src = "img/2.png"
}

function backIMG(img) {
    img.src = "img/1.png"
}

function buttonAlert2() {
    window.alert("Hola desde JS!")
}

document.querySelector("button").onclick = buttonAlert2;

/*
function changeIMG2(img) {
    document.querySelector("img").src = "img/2.png"
}

document.querySelector("img").onmouseover = changeIMG2;

function backIMG2() {
    document.querySelector("img").src = "img/1.png"
}

document.querySelector("img").onmouseout = backIMG2;
*/

function changeIMG3(e) {
    e.target.src = "img/2.png"
}

document.querySelector("img").addEventListener("mouseover", changeIMG3);

///////////////////////////////////////////////////////////////////////////////////////

function backIMG3(e) {
    e.target.src = "img/1.png"
}

document.querySelector("img").addEventListener("mouseout", backIMG3);

/////////////////////////////////////////////////////////////////////////////////////

function changeText(e) {
    e.target.textContent = "Modificat amb JavaScript";
}

let x = document.querySelectorAll("h1, h2, h3, h4");

for (let y = 0; y < x.length; y++){
    x[y].addEventListener("click", changeText)
}

//////////////////////////////////////////////////////////////////////////////////////

function turnRed(e) {
    e.target.classList.add("vermell");
}

function removeRed(e) {
    e.target.classList.remove("vermell");
}

let p = document.querySelectorAll("p");

for (let y = 0; y < p.length; y++){
    p[y].addEventListener("mouseover", turnRed)
    p[y].addEventListener("mouseout", removeRed)
}
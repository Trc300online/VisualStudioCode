const h1 = document.querySelector("h1");
h1.textContent = "ASIX - Llenguatges de Marques i Sistemes de Gestió d’Informació";

/****************************************************************************************************************************************/

const p_last = document.querySelector("p:last-of-type");
p_last.classList.add("destacat");

/****************************************************************************************************************************************/

const li_all = document.querySelectorAll("li");
/*for (let x = 0; x < li_all.length; x++) {
    li_all[x].classList.add("destacat");
}*/

li_all.forEach(z => z.classList.add("destacat"));

/****************************************************************************************************************************************/

const a_href_all = document.querySelectorAll("a[href='#']");
a_href_all.forEach(x => x.href = "https://www.politecnicllevant.cat");

/****************************************************************************************************************************************/

const ul = document.querySelector("ul");
const numChild = ul.children.length + 1;
const li = document.createElement('li');
li.textContent = `Item ${numChild}`;
ul.appendChild(li);

/****************************************************************************************************************************************/
let documentation_div = document.querySelector(".documentation")
let docNavL1 = document.querySelector("#doc-nav-l1")
let docNavL2 = document.querySelector("#doc-nav-l2")
let docNavL3 = document.querySelector("#doc-nav-l3")

document.querySelectorAll(".ml-sel-parent,.ml-sel-collapse").forEach((element) => {
    element.addEventListener("change", () => {
        console.log(docNavL2)
        documentation_div.dataset.level1 = docNavL1.value;
        documentation_div.dataset.level2 = docNavL2.value;
        documentation_div.dataset.level3 = docNavL3.value;
    })
})
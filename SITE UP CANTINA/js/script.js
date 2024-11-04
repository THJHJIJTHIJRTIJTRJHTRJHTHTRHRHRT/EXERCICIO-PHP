let menu = document.querySelector("#menu-icon"); // Corrigido para o id
let navbar = document.querySelector(".navbar");

menu.addEventListener("click", function() {
    navbar.classList.toggle("active");
});

window.onscroll = () => {
    navbar.classList.remove("active");
};


function mostrarCadastro(event) {
    event.preventDefault(); // Evita o comportamento padrão do link
    document.getElementById("modalCadastro").style.display = "flex"; // Exibe o modal
}

function fecharCadastro() {
    document.getElementById("modalCadastro").style.display = "none"; // Esconde o modal
}




function abrirCadastro() {
    document.getElementById("modalCadastro").style.display = "block";
}

function fecharCadastro() {
    document.getElementById("modalCadastro").style.display = "none";
}


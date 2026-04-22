const perfilBtn = document.getElementById('perfilBtn');
const menuLateral = document.getElementById('menuLateral');
const overlayMenu = document.getElementById('overlayMenu');

perfilBtn.addEventListener('click', () => {
  menuLateral.classList.toggle('aberto');
  overlayMenu.classList.toggle('visivel'); // corrigido aqui
});

overlayMenu.addEventListener('click', () => {
  menuLateral.classList.remove('aberto');
  overlayMenu.classList.remove('visivel'); // e aqui também
});

document.getElementById("btnSair").addEventListener("click", function () {
    document.getElementById("popupSair").style.display = "flex";
});

document.getElementById("cancelarPopup").addEventListener("click", function () {
    document.getElementById("popupSair").style.display = "none";
});

document.getElementById("confirmarPopup").addEventListener("click", function () {
    window.location.href = "../usuario/form_usuario.html";
});

function Cancelar() {
    document.getElementById("popupSair").style.display = "none";
  
}

function Sair() {
    window.location.href = "../usuario/form_usuario.html";
}

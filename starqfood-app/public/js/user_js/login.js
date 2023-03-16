const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});

// Modal
let openModal = document.getElementById('openModal');
let modalBitcoin = document.getElementById('modal' );
let closeModal = document.getElementById('close' );
// Abri modal
openModal.onclick = function () {
    modalBitcoin.style.visibility = "visible";
}
// Cerrar Modal Btn
closeModal.onclick = function () {
    modalBitcoin.style.visibility = "hidden";
}
// Cerrar en ventana
// moda1Bitcoin.onclick = function () {
//     modalBitcoin.style.visibility = "hidden";
// }

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

// Modal
let openComida = document.getElementById('openComida');
let modalC = document.getElementById('modalComida' );
let closeComida = document.getElementById('closeC' );
// Abri modal
openComida.onclick = function () {
    modalC.style.visibility = "visible";
}
// Cerrar Modal Btn
closeComida.onclick = function () {
    modalC.style.visibility = "hidden";
}

// Modal
let openTiempo = document.getElementById('openTiempo');
let modalT = document.getElementById('modalTiempo' );
let closeTiempo = document.getElementById('closeT' );
// Abri modal
openTiempo.onclick = function () {
    modalT.style.visibility = "visible";
}
// Cerrar Modal Btn
closeTiempo.onclick = function () {
    modalT.style.visibility = "hidden";
}

// Modal
let openVariacion = document.getElementById('openVariacion');
let modalV = document.getElementById('modalVariacion' );
let closeVariacion = document.getElementById('closeV' );
// Abri modal
openVariacion.onclick = function () {
    modalV.style.visibility = "visible";
}
// Cerrar Modal Btn
closeVariacion.onclick = function () {
    modalV.style.visibility = "hidden";
}

// Modal
let openAmbiente = document.getElementById('openAmbiente');
let modalA = document.getElementById('modalAmbiente' );
let closeAmbiente = document.getElementById('closeA' );
// Abri modal
openAmbiente.onclick = function () {
    modalA.style.visibility = "visible";
}
// Cerrar Modal Btn
closeAmbiente.onclick = function () {
    modalA.style.visibility = "hidden";
}

//--------------------------------------------------------------------------
var ratingContainers = document.querySelectorAll('.rating-container');
for (var i = 0; i < ratingContainers.length; i++) {
    var ratingInputs = ratingContainers[i].querySelectorAll('input[type="radio"]');
    for (var j = 0; j < ratingInputs.length; j++) {
    ratingInputs[j].addEventListener('click', function() {
        var ratingValue = this.value;
        document.getElementById('calificacion-atencion').value = ratingValue;
    });
    }
}
//--------------------------------------------------------------------------
var ratingContainers = document.querySelectorAll('.rating-container');
for (var i = 0; i < ratingContainers.length; i++) {
    var ratingInputs = ratingContainers[i].querySelectorAll('input[type="radio"]');
    for (var j = 0; j < ratingInputs.length; j++) {
    ratingInputs[j].addEventListener('click', function() {
        var ratingValue = this.value;
        document.getElementById('calificacion-comida').value = ratingValue;
    });
    }
}
//--------------------------------------------------------------------------

//--------------------------------------------------------------------------

//--------------------------------------------------------------------------

//--------------------------------------------------------------------------


const botonRecolectar = document.getElementById('botonrecolectar');

botonRecolectar.addEventListener('click', function() {
    botonRecolectar.value = 'Recolectando...';
    console.log('Valor del botón cambiado a 1');
});
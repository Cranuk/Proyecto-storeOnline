'use strict'

window.addEventListener('load', function(){
    var anio = document.getElementById("yearNow");
    anio.textContent = new Date().getFullYear();
});
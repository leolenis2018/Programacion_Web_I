//1. Creamos las referencias a las etiquetas que queremos controlar.
let imagen=document.getElementById("imagen")
let titulo=document.getElementById("titulo")
let audio=document.getElementById("audio")
let boton=document.getElementById("boton")

//2. Detectar el evento de click en el boton
//poner un escuchador de eventos "EventListener"
boton.addEventListener("click",cambiar);

//3.definir la funcion cambiar
function cambiar(){
    imagen.src="imagen1.jpg"
    audio.src="audio1.mp3"
    titulo.textContent = "ColdPlay"
}
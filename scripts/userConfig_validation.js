document.addEventListener('DOMContentLoaded', function() {
const nombre = document.getElementById("usemane")
const direccion = document.getElementById("addres")
const correo = document.getElementById("email")
const contra = document.getElementById("password")
const formulario = document.getElementById("form")
const parrafo = document.getElementById("warnings")

formulario.addEventListener("submit", e=>{
    e.preventDefault()
    let warnings = ""
    let entrar = false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    parrafo.innerHTML = ""
    if(nombre.value.length == 0 || direccion.value.length == 0 || correo.value.length == 0 || contra.value.length == 0) {
        warnings += 'Los campos no pueden estar vacíos si desea modificarlos <br>'
        entrar = true
    }
    if(nombre.value.length <4) {
        warnings += 'El nombre de usuario debe tener más de 4 caracteres <br>'
        entrar = true
    }
    if(direccion.value.length <10) {
        warnings += 'La direccion debe ser precisa <br>'
        entrar = true
    }
    if(!regexEmail.test(correo.value)) {
        warnings += 'La direccion de email no es valida'
        entrar = true
    }
    if(contra.value.length <4) {
        warnings += 'La contraseña debe tener más de 4 caracteres <br>'
        entrar = true
    }
    if(entrar) {
        parrafo.innerHTML = warnings
    } else {
        parrafo.innerHTML = "Modificación exitosa!"
    }
})
})
document.addEventListener('DOMContentLoaded', function() {
const nombre = document.getElementById("usemane")
const contra = document.getElementById("password")
const formulario = document.getElementById("form")
const parrafo = document.getElementById("warnings")

formulario.addEventListener("submit", e=>{
    e.preventDefault()
    let warnings = ""
    let entrar = false
    parrafo.innerHTML = ""
    if(nombre.value.length == 0 || contra.value.length == 0) {
        warnings += 'Los campos no pueden estar vacíos si desea modificarlos <br>'
        entrar = true
    }
    if(nombre.value.length <4) {
        warnings += 'El nombre de usuario debe tener más de 4 caracteres <br>'
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
const formulario = document.getElementById('form-register');

const inputs = document.querySelectorAll('#form-register input');

const submitButton = document.querySelector('#btn');

const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{4,45}$/, //letras, numeros, guion, guin_bajo y de 4 a 45 digitos
    password: /^.{4,45}$/ //de 8 a 45 digitos
}

const campos = {
    usuario: false,
    password: false
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "username_input":
            if (expresiones.usuario.test(e.target.value)) {
                document.querySelector('#username .formulario__grupo-incorrecto').classList.add('formulario__grupo-incorrecto-block');
                document.querySelector('#username .username_input').classList.remove('username_input-red');



            } else {
                document.querySelector('#username .formulario__grupo-incorrecto').classList.remove('formulario__grupo-incorrecto-block');
                document.querySelector('#username .username_input').classList.add('username_input-red');
                submitButton.toggleAttribute('disabled');

            }
            break;
        case "password_input":
            if (expresiones.password.test(e.target.value)) {
                document.querySelector('#password .formulario__grupo-incorrecto').classList.add('formulario__grupo-incorrecto-block');
                document.querySelector('#password .password_input').classList.remove('password_input-red');

            } else {
                document.querySelector('#password .formulario__grupo-incorrecto').classList.remove('formulario__grupo-incorrecto-block');
                document.querySelector('#password .password_input').classList.add('password_input-red');
                submitButton.toggleAttribute('disabled');

            }
            break;
    }
}
inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});




formulario.addEventListener('submit', (event) => {
    event.preventDefault();
    const formdata = new FormData(event.target);
    console.log([...formdata]);
    for (let [key, value] of formdata.entries()) {
        console.log(`${key}: ${value}`);
        document.querySelector('#form-register .error-envio').classList.add('error-envio-red');
    }

});
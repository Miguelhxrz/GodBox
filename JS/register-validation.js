const formulario = document.getElementById('form-register');
document.getElementById('btn').disabled = true;

const inputs = document.querySelectorAll('#form-register input');


const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{4,45}$/, //letras, numeros, guion, guin_bajo y de 4 a 45 digitos

    password: /^.{4,45}$/, //de 4 a 45 digitos

    id: /^[0-9]+$/, //Letra guion y numeros

    direccion: /^[a-zA-Z0-9\s-]+$/, //Solo letras - numeros espacios y guiones

    email: /[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+/, //Email
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "username_input":
            if (expresiones.usuario.test(e.target.value)) {
                document.querySelector('#username .formulario__grupo-incorrecto').classList.add('formulario__grupo-incorrecto-block');
                document.querySelector('#username .username_input').classList.remove('username_input-red');
                document.getElementById('btn').disabled = false;

            } else {
                document.querySelector('#username .formulario__grupo-incorrecto').classList.remove('formulario__grupo-incorrecto-block');
                document.querySelector('#username .username_input').classList.add('username_input-red');


            }
            break;
        case "password_input":
            if (expresiones.password.test(e.target.value)) {
                document.querySelector('#password .formulario__grupo-incorrecto').classList.add('formulario__grupo-incorrecto-block');
                document.querySelector('#password .password_input').classList.remove('password_input-red');
                document.getElementById('btn').disabled = false;


            } else {
                document.querySelector('#password .formulario__grupo-incorrecto').classList.remove('formulario__grupo-incorrecto-block');
                document.querySelector('#password .password_input').classList.add('password_input-red');
            }
            break;
        case "email_input":
            if (expresiones.email.test(e.target.value)) {
                document.querySelector('#email .formulario__grupo-incorrecto').classList.add('formulario__grupo-incorrecto-block');
                document.querySelector('#email .email_input').classList.remove('email_input-red');
                document.getElementById('btn').disabled = false;


            } else {
                document.querySelector('#email .formulario__grupo-incorrecto').classList.remove('formulario__grupo-incorrecto-block');
                document.querySelector('#email .email_input').classList.add('email_input-red');
            }
            break;
        case "id_input":
            if (expresiones.id.test(e.target.value)) {
                document.querySelector('#id .formulario-grupo-incorrecto').classList.add('formulario-grupo-incorrecto-block');
                document.querySelector('#id .id_input').classList.remove('id_input-red');
                document.getElementById('btn').disabled = false;


            } else {
                document.querySelector('#id .formulario-grupo-incorrecto').classList.remove('formulario-grupo-incorrecto-block');
                document.querySelector('#id .id_input').classList.add('id_input-red');
            }
            break;
        case "addres_input":
            if (expresiones.direccion.test(e.target.value)) {
                document.querySelector('#addres .formulario__grupo-incorrecto').classList.add('formulario__grupo-incorrecto-block');
                document.querySelector('#addres .addres_input').classList.remove('addres_input-red');
                document.getElementById('btn').disabled = false;


            } else {
                document.querySelector('#addres .formulario__grupo-incorrecto').classList.remove('formulario__grupo-incorrecto-block');
                document.querySelector('#addres .addres_input').classList.add('addres_input-red');
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
        document.querySelector('#form-register .envio').classList.add('envio-red');
        setTimeout(() => {
            document.querySelector('#form-register .envio').classList.remove('envio-red');
        }, 3000);
    }
    formulario.reset();
});
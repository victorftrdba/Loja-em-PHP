let usuario = document.querySelector('#usuario')
let senha = document.querySelector('#senha')
let erro1 = document.querySelector('#erroUsuario')
let erro2 = document.querySelector('#erroSenha')
let checar = document.querySelector('#checarUsuario')

checar.addEventListener('click', (e) => {
    usuario.value == '' ? erro1.innerHTML = '<div class="d-none">' + e.preventDefault() + '</div>' + '<span class="text-danger">Não deixe o usuário em branco!</span>' : ''
    senha.value == '' ? erro2.innerHTML = '<div class="d-none">' + e.preventDefault() + '</div>' + '<span class="text-danger">Não deixe a senha em branco!</span>' : ''
})
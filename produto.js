let incrementa = document.querySelector('#incrementa')
let decrementa = document.querySelector('#decrementa')
let quantidade = document.querySelector('#quantidade')
let precoProduto = document.querySelector('#precoProduto')
let total = document.querySelector('#total')

incrementa.addEventListener('click', () => {
    quantidade.value++
    total.value = (Number(precoProduto.textContent * quantidade.value))
})

decrementa.addEventListener('click', () => {
    if (quantidade.value > 0) {
        quantidade.value--
        total.value = (Number(precoProduto.textContent * quantidade.value))
    } else {
        confirm('Não pode ser menor que zero!')
    }
})
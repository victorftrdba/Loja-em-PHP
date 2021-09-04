<?php 
require('produtos.php');
session_start();
if(!$_SESSION) {
    header("Location: /login/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=ed   ge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto #<?php echo $_GET['id'] ?> | Lojinha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <a href="/home/index.php" class="mb-5">Voltar para Produtos</a>
            <div class="col">
                <?php foreach(Produto::mostrarProduto() as $item) { ?>
                <div class="fw-bold"><?php echo $item->nome ?></div>
                <div class="mb-3"><?php echo $item->descricao ?></div>
                <div class="mb-3">Preço: R$<span id="precoProduto"><?php echo $item->preco ?></span></div>
                <?php } ?>
                Quantidade:
                <button class="btn" id="incrementa">+</button>
                <input type="number" readonly class="mb-3 fw-bold text-center ps-3 p-1" style="width:5%;"
                    id="quantidade" value="0" />
                <button class="btn" id="decrementa">-</button>
                <div class="mb-3">R$<input type="number" id="total" readonly placeholder="Total em R$" /></div>
                <div>
                    <button type="submit" class="btn btn-primary">Comprar
                        produto</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/produto.js"></script>
</body>

</html>
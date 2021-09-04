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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                Bem-vindo <strong><?php echo $_SESSION['usuario'] ?></strong> à Página Principal da Loja!
                <a href="/login/logout.php">Logout</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php foreach(Produto::mostrarProdutos() as $item) { ?>
            <div class="col-3 m-3">
                <div class="card rounded shadow" style="width: 18rem;">
                    <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c3RvcmV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item->nome ?></h5>
                        <p class="card-text"><?php echo $item->descricao ?></p>
                        <a href="/home/verproduto.php?id=<?php echo $item->id ?>" class="btn btn-primary">Go
                            somewhere</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/app.js"></script>
</body>

</html>
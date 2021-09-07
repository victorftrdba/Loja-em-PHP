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

<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div
                class="col-3 rounded d-flex flex-column justify-content-center pt-5 pb-5 bg-light position-absolute login-template">
                <form action="/login/valida.php" method="POST" class="text-center">
                    <?php echo (isset($_GET['falha']) ? '<p class="text-danger fw-bold">Dados inválidos</p>' : '') ?>
                    <label for="usuario" class="fw-bold mb-4"> Usuário*
                        <input id="usuario" name="usuario" type="text" class="form-control" />
                        <div id="erroUsuario"></div>
                    </label>
                    <label for="senha" class="fw-bold mb-4"> Senha*
                        <input id="senha" name="senha" type="password" class="form-control" />
                        <div id="erroSenha"></div>
                    </label>
                    <button type="submit" id="checarUsuario" class="btn btn-outline-dark w-50">Acessar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/login.js"></script>
</body>

</html>
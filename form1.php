<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/parsley.min.js"></script>
    <script src="https://kit.fontawesome.com/5ae85dff3f.js" crossorigin="anonymous"></script>
    <title>Formulário</title>
</head>

<body>
    <div class="container border rounded p-5 mt-5 shadow">
        <h1>Formulário de contato</h1>
        <form name="contato" method="post" action="ex1.php" class="form-group" data-parsley-validate>
            <div class="row">

                <div class="col-md-6 my-2">
                    <label for="nome">Preencha seu nome</label>
                    <input type="text" class="form-control" name="nome" required placeholder="Digite seu nome..." data-parsley-required-message="Digite seu nome" minlength="10" data-parsley-minlength-message="Digite ao menos 10 caracteres">
                </div>

                <div class="col-md-6 my-2">
                    <label for="email">Preencha seu email</label>
                    <input type="email" class="form-control" name="email" required placeholder="Digite seu email..." data-parsley-required-message="Digite seu email" data-parsley-type-message="Digite um email válido!">
                </div>

                <div class="col-md-3 my-2">
                    <label for="genero">Selecione o gênero</label>
                    <select name="genero" required class="form-control" data-parsley-required-message="Escolha seu gênero">
                        <option></option>
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Não definir</option>
                    </select>
                </div>

                <div class="mt-5 ml-auto">
                    <button type="reset" class="btn btn-danger">Cancelar <i class="fas fa-times"></i></button>
                    <button type="submit" class="btn btn-success">Enviar mensagem <i class="far fa-paper-plane"></i></button>
                </div>

            </div>
        </form>
    </div>


    <script>

    </script>
</body>

</html>
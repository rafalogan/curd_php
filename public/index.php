<?php
    function __autoload($class) {
        require_once 'src/classes/' . $class . '.php';
    }
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Styles -->
    <link href="css/">
    <title>Teste Crud PHP</title>
</head>
<body>
    <header>
        <div class="row">
            <div class="col s12 center-align">
                <h1>Crud - PHP OO</h1>
            </div>
        </div>
    </header>
    <main>
        <?php
        $client = new Clients();

        if (isset($_POST['cadastrar'])):
            $name   = $_POST['name'];
            $email  = $_POST['email'];

            $client->setName($name);
            $client->setEmail($email);
            $client->insert();

        endif;
        ?>

        <div id="client-form">
            <div class="row">
                <form  class="col s12" method="post">
                    <div class="row">
                        <div class="input-fileld col s12 m4">
                            <input id="name" type="text" class="validate" name="name">
                            <label for="name">Nome Completo</label>
                        </div>
                        <div class="input-fileld col s12 m4">
                            <input id="email" type="email" class="validate" name="email">
                            <label for="email">E-mail</label>
                        </div>
                        <div class="col s12 m4">
                            <button type="submit" class="btn waves-effect btn-success">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div id="clients">
            <div class="row ">
                <div class="col s12 center-align">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-title">
                                <h4>Todos os Clientes</h4>
                            </div>
                            <div>
                                <table class="striped">
                                    <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Menu</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>00</td>
                                        <td>Nome Completo</td>
                                        <td>email@email.com</td>
                                        <td>
                                            <button class="btn waves-effect btn-info">Editar</button>
                                            <button class="btn waves-effect btn-danger">Apagar</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.0.slim.js" integrity="sha256-milezx5lakrZu0OP9b2QWFy1ft/UEUK6NH1Jqz8hUhQ=" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="assets/jquery/jquery-3.4.0.min.js">\x3C/script>')
    </script>
    <!-- materialize script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="assets/materialize/js/materialize.js">\x3C/script>')
    </script>
</body>
</html>

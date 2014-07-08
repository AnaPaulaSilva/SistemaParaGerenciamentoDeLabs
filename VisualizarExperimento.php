<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Física</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastrar<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="VisualizarUsuarios.php">Seus Dados</a></li>
                            <li><a href="CadastrarEmprestimo.php">Empréstimos</a></li>
                            <li><a href="CadastrarPecas.php">Pecas</a></li>
                            <li><a href="CadastrarFornecedor.php">Fornecedor</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Visualizar <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="VisualizarExperimento.php.php">Experimento</a></li>

                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="form-inline" role="form" style="margin-top: 8px">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-default">Sign in</button>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron" style="text-align: center;">
                    <h1> Experimentos Cadastrados </h1>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            $connect = mysqli_connect("localhost","root","", "db_Adler");
            $results = mysqli_query($connect, "SELECT id, NomeExperimento FROM experimentos ORDER BY NomeExperimento");
            while ($linhas = mysqli_fetch_array($results)) {
                $results_NomeExperimento = $linhas['NomeExperimento'];
                $results_id = $linhas['id'];
                ?>
                <div class="col-sm-4 col-md-3">
                    <div class="thumbnail">
                        <img src="http://placehold.it/300x200" class="media-object img-rounded">
                        <div class="caption"style="text-align: center">
                            <h3><strong><?php echo $results_NomeExperimento ?></h3></strong>
                            <p><a href="AlterarExperimento.php?escolha=alterar&id=<?php echo $results_id ?>"class="btn btn-warning" role="button">
                                    Alterar</a>
                                <a href="FunctionsExperimento.php?escolha=remover&id=<?php echo $results_id ?>" class="btn btn-danger" role="button">
                                    Remover</a></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
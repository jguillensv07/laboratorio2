<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('location: login.php');
}

require_once("datos.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "update automovil set
        matricula = '" . $_POST['matricula'] . "',
        marca = '" . $_POST['marca'] . "',
        modelo = '" . $_POST['modelo'] . "',
        color = '" . $_POST['color'] . "',
        precio = '" . $_POST['precio'] . "'
        where autoId = '" . $_POST['autoId'] . "'; ";


    $mysqli->query($query);

    header("Location: /");
}


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $resultado = $mysqli->query("select * from automovil where autoId = '" . $_GET['auto'] . "'");
    $datoAutomovil = $resultado->fetch_assoc();
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Laboratorio 2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-static/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laboratorio 2</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Autos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="logout.php">Salir</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>-->
                </ul>

            </div>
        </div>
    </nav>

    <main class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h4>Editar Automovil</h4>
                        <hr>

                        <form class="form" method="post">
                            <input type="hidden" class="form-control" id="autoId" name="autoId" value="<?php echo $datoAutomovil['autoId'] ?>">
                            <div class="mb-2">
                                <label for="matricula" class="form-label">Matricula:</label>
                                <input type="text" class="form-control" id="matricula" name="matricula" value="<?php echo $datoAutomovil['matricula'] ?>" required>
                            </div>
                            <div class="mb-2">
                                <label for="marca" class="form-label">Marca:</label>
                                <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $datoAutomovil['marca'] ?>" required>
                            </div>
                            <div class="mb-2">
                                <label for="modelo" class="form-label">Modelo:</label>
                                <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $datoAutomovil['modelo'] ?>" required>
                            </div>
                            <div class="mb-2">
                                <label for="color" class="form-label">Color:</label>
                                <input type="text" class="form-control" id="color" name="color" value="<?php echo $datoAutomovil['color'] ?>" required>
                            </div>
                            <div class="mb-2">
                                <label for="precio" class="form-label">Precio:</label>
                                <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="<?php echo $datoAutomovil['precio'] ?>" required>
                            </div>

                            <button class="btn btn-primary" type="submit">Guardar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>
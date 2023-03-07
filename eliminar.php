<?php

require 'config/database.php';

$db = new Database();
$con = $db->conectar();

$id = $_GET['id'];

$query = $con->prepare("DELETE FROM pacientes WHERE id=?");
$query->execute([$id]);
$eliminado = $query->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelar cita</title>
    <link rel="icon" href="img/copamundial.png">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
</head>
<body class="py-3">
    <main class="container contenedor">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <img src="img/hospital-clinic-plus-logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> Hospital</a>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php"> Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="info.php"> Seguridade</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contacto.php"> Contacto</a>
        </li>
        </ul>
        </div>
        </nav>
    </nav>
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                <?php if($eliminado>0){ ?>
                        <h3 class="text-info">Cita cancelada</h3>
                        <?php } else { ?>
                        <h3 class="text-danger">Erro ao cancelar</h3>
                    <?php } ?> 
                </div>
                <div class="row">
                    <div class="col">
                        <a class="btn btn-primary" href="index.php"> Voltar ao inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
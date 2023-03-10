<?php

require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$activo = 1;

$comando = $con->prepare("SELECT id, nombres, apellidos, medico, telefono, correo_electronico, fecha_cita FROM pacientes WHERE activo=:mi_activo ORDER BY nombres ASC");
$comando->execute(['mi_activo'=>$activo]);
$resultado = $comando->fetchALL(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <link rel="icon" href="img/hospital-clinic-plus-logo.png">
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
                <div class="col-12">
                    <h4 class="text-info">Doentes
                    <a href="nuevo.php" class="btn btn-outline-primary float-right">Agregar</a>
                    </h4>
                    <hr>
                </div>
                <div class="row py-3">
                    <div class="col">
                        <table class="table table-striped table-info">
                            <thead>
                                <tr>
                                <th>??</th>
                                <th>Nome</th>
                                <th>Apelidos</th>
                                <th>Tel??fono</th>
                                <th>M??dico</th>
                                <th>Enderezo</th>
                                <th>Data cita</th>
                                <th>Refrescar</th>
                                <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($resultado as $row){ ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['nombres'] ?></td>
                                <td><?php echo $row['apellidos'] ?></td>
                                <td><?php echo $row['telefono'] ?></td>
                                <td><?php echo $row['medico'] ?></td>
                                <td><?php echo $row['correo_electronico'] ?></td>
                                <td><?php echo $row['fecha_cita'] ?></td>
                                <td><a href="editar.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Editar</a></td>
                                <td><a href="eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>  
</body>
</html>
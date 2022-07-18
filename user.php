<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ab10eea0d3.js" crossorigin="anonymous"></script>

</head>
<header>
    <a href="productos.php">Productos</a>
</header>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("estas seguro?");
            return respuesta 
        }
    </script>
    <h1 class="text-center p-3">Hola mundo</h1>
    <?php
    include "modelo/conexion.php";
    include 'controller/eliminar.php';
    include 'controller/registro-usuarios.php';
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de usuarios</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="contraseña">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">USUARIO</th>
                        <th scope="col">PASSWORD</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    $sql = $conexion->query("select * from user ");
                    while ($datos = $sql->fetch_object()) { ?>

                        <tr>
                            <td><?= $datos->CODE?></td>
                            <td><?= $datos->USER?></td>
                            <td><?= $datos->PASSWORD?></td>
                            <td>
                                <a href="vistamodificar.php?id=<?= $datos->CODE ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()"href="index.php?id=<?= $datos->CODE?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>



                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
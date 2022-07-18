<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MundoCelAdmin
    </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
    include "modelo/conexion.php";
    include 'controller/eliminar-producto.php';
    include 'controller/registro-productos.php';
    ?>
    <link rel="stylesheet" href="style.css">
    <script>
        function eliminar() {
            var respuesta = confirm("estas seguro?");
            return respuesta
        }

        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function() {
                if (this.checked) {
                    checkbox.each(function() {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function() {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });
    </script>
</head>

<body>


    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row ">
                        <div class="col-xs-6">
                            <h2>Administrar <b>Productos</b></h2>
                        </div>
                        <div class="col-xs-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Añadir producto</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover col">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Descuento</th>
                            <th>Categoria</th>
                            <th>Color</th>
                            <th>Medidas</th>
                            <th>Cantidad</th>
                            <th>Activo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $sql = $conexion->query("select * from productos ");
                        while ($datos = $sql->fetch_object()) { ?>

                            <tr>
                                <td><?= $datos->id ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->descripcion ?></td>
                                <td><?= $datos->precio ?></td>
                                <td><?= $datos->descuento ?></td>
                                <td><?= $datos->id_categoria ?></td>
                                <td><?= $datos->color ?></td>
                                <td><?= $datos->medidas ?></td>
                                <td><?= $datos->cantidad ?></td>
                                <td><?= $datos->activo ?></td>
                                <td>



                                    <a href="vistamodificarproducto.php?id=<?= $datos->id ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                                    <a onclick="return eliminar()" href="productos.php?id=<?= $datos->id ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>



                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title">Añadir Usuarios</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Precio</label>
                            <input type="number" class="form-control" name="precio">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Descuento</label>
                            <input type="number" class="form-control" name="descuento">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Categoria</label>
                            <input type="text" class="form-control" name="categoria">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Color</label>
                            <input type="text" class="form-control" name="color">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Medidas</label>
                            <input type="text" class="form-control" name="medidas">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" name="cantidad">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Activo</label>
                            <input type="text" class="form-control" name="activo">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                        <button type="submit" class="btn btn-primary" name="btnregistro" value="ok">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div class="modal fade" id="editEmployeeModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <?php
                while ($datos = $sql->fetch_object()) { ?>
                    <form method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title">Editar Usuario</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <?php
                        include 'controller/modificar.php';
                        ?>
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="nombre" value="<?= $datos->USER ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                                <input type="text" class="form-control" name="contraseña" value="<?= $datos->PASSWORD ?>">
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-info" value="Save">
                            </div>
                    </form>
                <?php }
                ?>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>

                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
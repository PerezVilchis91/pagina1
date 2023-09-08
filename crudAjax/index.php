
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Crud</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>


<?php
/*include('conexion.php');
$conectar=conexion();

$sql="SELECT * FROM users";
$query=mysqli_query($conectar,$sql);
*/
?>

<div class="container mt-2 d-flex justify-content-center">
    <form action="insert.php" method="POST">
        <div class="form-group row">            
            <div class="col-sm-15">
                <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
            </div>
        </div>
        <div class="form-group row">           
            <div class="col-sm-15">
                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Apellido" required>
            </div>
        </div>
        <div class="form-group row">            
            <div class="col-sm-15">
                <input type="text" name="username" id="username" class="form-control" placeholder="Usuario" required>
            </div>
        </div>
        <div class="form-group row">            
            <div class="col-sm-15">
                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
            </div>
        </div>
        <div class="form-group row">           
            <div class="col-sm-15">
                <input type="text" name="email" id="email" class="form-control" placeholder="Correo" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-15 text-center">
                <button type="submit" class="btn btn-primary">Agregar Usuario</button>
            </div>
        </div>
    </form>
</div>


    <div class="container">
        <h2 class="text-center my-4">Usuarios registrados</h2>
        <table id="tabla-usuarios" class="table table-stripped">             
            <thead>            
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                   <!-- <th>Contrasena</th>-->
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tabla-cuerpo">

            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c84c7425d0.js" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){

        $.ajax({
            url: 'getUsers.php',
            type: 'GET',
            //data:{id:1},
            //dataType:'JSON',
            success:function(response){
                var objetoJson=JSON.parse(response);
                console.log(objetoJson.length);
                
                 for (var i = 0; i <objetoJson.length; i++) {
                    $('#tabla-cuerpo').append(
                        '<tr>' +
                        '<td>' + objetoJson[i].id + '</td>' +
                        '<td>' + objetoJson[i].nombre + '</td>' +
                        '<td>' + objetoJson[i].apellido + '</td>' +
                        '<td>' + objetoJson[i].usuario + '</td>' +
                       // '<td><input type="password" value="' + objetoJson[i].contrasena + '"></td>' +
                        '<td>' + objetoJson[i].email + '</td>' +
                        '<td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</button></td>' +
                        '<td><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Eliminar</button></td>' +
                        '</tr>'
                    );
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Manejo de errores en caso de que la solicitud falle
                console.error('Error en la solicitud AJAX:', textStatus, errorThrown);
            }
               
            
        });
    });
    </script>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #03C8C8">
<a class="navbar-brand" href="#">
    <img src="https://github.com/kellyalzate11/imagenestiendavirtual/blob/master/nerd.png?raw=true" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    Friki Store
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="formularioregistro.php">Registo<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="listaProductos.php">Productos<span class="sr-only">(current)</span></a>
      </li>
     
    </ul>
    
  </div>
</nav>

<style>


body{  

background-image: url('https://github.com/kellyalzate11/imagenestiendavirtual/blob/master/fondo.jpg?raw=true');

}

</style>

</head>
<body>

    <?php
    include("BaseDatos.php");

    //1. Crear un objeto de la clase BaseDatos
    $transaccion= new BaseDatos();

    //2.Crear la consulta para buscar datos
    $consultaSQL="SELECT * FROM usuarios WHERE 1";

    //3. Utilizar el metodo para consultarDatos()
    $usuarios=$transaccion->consultarDatos($consultaSQL);
        
   // print_r($usuarios);

    ?>
  <h1 class="text-center" style="color:#FDFEFE ">Productos en bodega</h1><br>
    <div class="container">

    <div class="row row-cols-1 row-cols-md-3">

        <?php foreach($usuarios as $usuario):?>
        

            <div class="col mb-4">
                <div class="card h-100">
                <img src="<?php echo($usuario["foto"])?>" class="card-img-top" alt="imagen" width="50px" height="300px">
                     <div class="card-body">
                        <h5 class="card-title"><?php echo($usuario["nombre"]) ?></h5>
                        <p class="card-title"><?php echo($usuario["marca"]) ?></p>
                        <p class="card-title"><?php echo($usuario["precio"]) ?></p>
                        <p class="card-title"><?php echo($usuario["descripcion"]) ?></p>
                        <p class="card-title"><?php echo($usuario["unidades"]) ?></p>
                        <a href="eliminarProductos.php?id=<?php echo($usuario["idproducto"])?>" class="btn btn-danger">Eliminar</a>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($usuario["idproducto"])?>">    
                                Editar
                            </button>
                      </div>
                </div>
                <div class="modal fade" id="editar<?php echo($usuario["idproducto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">EDICIÓN DE PRODUCTOS</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="editarProductos.php?id=<?php echo($usuario["idproducto"])?>" method="POST">
                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input type="text" class="form-control" name="nombreEditar" value="<?php echo($usuario["nombre"])?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Precio:</label>
                                            <input type="text" class="form-control" name="precioEditar" value="<?php echo($usuario["precio"])?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Descripcion:</label>
                                            <textarea class="form-control" rows="3" name="descripcionEditar"> <?php echo($usuario["descripcion"])?>  </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Unidades:</label>
                                            <input type="text" class="form-control" name="unidadesEditar" value="<?php echo($usuario["unidades"])?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Foto:</label>
                                            <textarea class="form-control" rows="3" name="fotoEditar"> <?php echo($usuario["foto"])?>  </textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>

            </div>

        
        
        
        <?php endforeach?>

    </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
</body>
</html>
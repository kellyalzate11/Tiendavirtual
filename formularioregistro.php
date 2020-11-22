<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friki store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#03C8C8">
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
        <a class="nav-link" href="formularioregistro.php">Registro<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="listaProductos.php">Productos<span class="sr-only">(current)</span></a>
      </li>
     
    </ul>
    
  </div>
 
</nav>
<br>
<style> 

form{
    width:700px;
    height:600px;
	padding:30px;
	border-radius:5px;
	margin:auto;
	background-color:#ccc;
}
button{
    padding-right:30px;
    float: right;
}
h1{
    font-family="Century Gothic";
}
body{
    
    background-image: url('https://github.com/kellyalzate11/imagenestiendavirtual/blob/master/fondo.jpg?raw=true');
}



</style>

</head>
<body>
<main>
    <div class="container">
        <form action="registrarProductos.php" method="POST">
            <h1 class="text-center">Administración de productos</h1><br>

            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre producto" name="nombre">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Marca producto" name="marca">
                </div>
                </div>
                
            <div class="row mt-3">
                    
                <div class="col">
                    <input type="number" class="form-control" placeholder="Precio Producto" name="precio">
                </div>
                </div>
            <div class="row mt-3">
                    
                <div class="col">
                    <label class="font-weight-bold">Descripción:</label>
                    <textarea class="form-control" rows="4" name="descripcion"></textarea>
                </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label class="font-weight-bold">Unidades disponibles:</label>
                        <input type="text" class="form-control" placeholder="Unidades disponibles" name="unidades">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label class="font-weight-bold">Foto:</label>
                        <input type="text" class="form-control" placeholder="foto URL" name="foto">
                    </div>
                </div>
    
            <div class="row mt-3">
                <div class="col">
            <button class="btn btn-success" type="submit" name="botonregistro">Registrar</button>
            </div>
            </div>
        </form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 

   </body>
</html>
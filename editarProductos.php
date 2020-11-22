<?php 

    include("BaseDatos.php");

    //1.Capturar el id del usuario a editar
    $id=$_GET["id"];
    
    //2. recibo los datos a editar
    if (isset($_POST["botonEditar"])){

        $nombre=$_POST["nombreEditar"];
        $precio=$_POST["precioEditar"];
        $descripcion=$_POST["descripcionEditar"];
        $unidades=$_POST["unidadesEditar"];
        $foto=$_POST["fotoEditar"];
        

        //3. UTILIZAR O CERAR UN OBJETO DE LA CLASE BASEDATOS
        $transaccion=new BaseDatos();

        //4. Crear una consulta SQL para editar datos
        $consultaSQL="UPDATE usuarios SET nombre='$nombre',precio='$precio',descripcion='$descripcion', unidades='$unidades',foto='$foto' WHERE idproducto='$id'";

        //5. Utilizar el metodo editarDdatos
        $transaccion->editarDatos($consultaSQL);

        //6.REDIRECCION
        header("location:listaproductos.php");


    }








?>
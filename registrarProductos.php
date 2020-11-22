<?php

    include("BaseDatos.php");

    if (isset($_POST["botonregistro"])){
        
        //recibir los datos desde la vista (interfaz de usuario)
        $nombre = $_POST["nombre"];
        $marca=$_POST["marca"];
        $precio=$_POST["precio"];
        $descripcion =$_POST["descripcion"];
        $unidades=$_POST["unidades"];
        $foto =$_POST["foto"];

        //2.crear una copia de la clase BaseDatos
        //crear un objete de la clase BaseDatos
        $transaccion=new BaseDatos();

        //3.Crear una consulta SQL para agregar datos
        $consultaSQL="INSERT INTO usuarios(nombre,marca,precio,descripcion,unidades,foto) VALUES ('$nombre','$marca','$precio','$descripcion','$unidades','$foto')";

        //4. Utilizar la funcion para insertar datos de la clase base de datos
        $transaccion->agregarDatos($consultaSQL);
        
        

        
    }


?>
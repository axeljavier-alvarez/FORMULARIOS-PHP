<?php
    //incluir el archivo Cliente.php para poder utilizar
    //el código que contienen
    include_once('../clases/Cliente.php');
    //crear un objeto de tipo Cliente = instanciar la clase
    $cliente = new Cliente();
    
    $cliente->nit=$_POST['txtNit'];
    $cliente->telefono=$_POST['txtTelefono'];
    $cliente->apellido=$_POST['txtApellido'];
    $cliente->asignarNombre($_POST['txtNombre']);
    $cliente->direccion=$_POST['txtDireccion'];
    
    echo $cliente->verDatos();
    //echo "<br>". $cliente->nombreCompleto();
?>
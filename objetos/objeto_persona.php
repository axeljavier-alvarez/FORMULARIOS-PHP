<?php 

    //referencia al archivo donde esta la clase
    include_once('../clases/Persona.php');
    //instanciar la clase = crear un objeto
    $persona = new Persona();
    //asigne valor al atributo apellido el cual es publico
    $persona->apellido=$_GET['txtApellido'];
    //mostrarndo el contenido del atributo apellido el cual es public
    echo "<br>Apellido: ". $persona->apellido;
    $persona->telefono=$_GET['txtTelefono'];
    $persona->direccion=$_GET['txtDireccion'];
    //asignado nombre por medio de un método porque el atributo es privado
    $persona->asignarNombre($_GET['txtNombre']);
    //mostrar contenido del atributo nombre,es privado por eso uso un método
    
    echo "<br>Nombre: ". $persona->verNombre();
    echo "<br>".$persona->nombreCompleto();
    echo "<br>".$persona->verDatos();

?>
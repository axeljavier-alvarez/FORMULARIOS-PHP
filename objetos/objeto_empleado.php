<?php
    include_once('../clases/Empleado.php');
    $emple = new Empleado();
    //atributos de la clase Empleado    
    $emple->codigo=$_POST['txtCodigo'];
    $emple->nivelAcademico=$_POST['txtNivelAcademico'];
    $emple->sueldoBase=$_POST['txtSueldoBase'];

    //atributos que hereda de la clase Persona
    $emple->asignarNombre($_POST['txtNombre']);
    $emple->apellido=$_POST['txtApellido'];
    $emple->telefono=$_POST['txtTelefono'];
    $emple->direccion=$_POST['txtDireccion'];

    echo "Sueldo liquido: ". $emple->calcularSueldoLiquido();
    echo $emple->verDatos();
    
?>
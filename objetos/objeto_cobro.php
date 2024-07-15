<?php
    include_once('../clases/Cobro.php');
    $cobro = new Cobro();

    // cobro
    $cobro->bonificacion=$_POST['txtBonificacion'];
    $cobro->comisionCobro=$_POST['txtComisionCobro'];
    // atributos que hereda de la clase empleado y persona
    // empleado    
    $cobro->codigo=$_POST['txtCodigo'];
    $cobro->nivelAcademico=$_POST['txtNivelAcademico'];
    $cobro->sueldoBase=$_POST['txtSueldoBase'];
    // persona
    $cobro->asignarNombre($_POST['txtNombre']);
    $cobro->apellido=$_POST['txtApellido'];
    $cobro->telefono=$_POST['txtTelefono'];
    $cobro->direccion=$_POST['txtDireccion'];

    echo "Sueldo liquido: ". $cobro->calcularSueldoLiquido();
    echo $cobro->verDatos();
?>
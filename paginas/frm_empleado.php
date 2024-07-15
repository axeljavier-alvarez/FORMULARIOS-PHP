<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empleados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="../css/ejemplo.css">
</head>

<body>

    <br>
    <br>

    <form class="msform" action="../objetos/objeto_empleado.php" method="post" id="myForm">
        <!-- FORMULARIO DE PERSONA-->
        <fieldset>
          <h2 class="fs-title">Formulario de empleados</h2>
          <br>
          <!-- <h3 class="fs-subtitle">Llenar los datos</h3> -->
          
          <input type="text" id="txtNombre" name="txtNombre" placeholder="Ingrese su nombre" autocomplete="off">

          <input type="text" id="txtApellido" name="txtApellido" placeholder="Ingrese su apellido" autocomplete="off">

          <input type="text" id="txtDireccion" name="txtDireccion" placeholder="Ingrese su dirección" autocomplete="off" />

          <input type="number" id="txtTelefono" name="txtTelefono" placeholder="Ingrese su teléfono" autocomplete="off">
         
          <input type="number" id="txtCodigo" name="txtCodigo" placeholder="Ingrese su código" autocomplete="off">
         
          <input type="number" id="txtSueldoBase" name="txtSueldoBase" placeholder="Ingrese el sueldo base" autocomplete="off">
          <input type="text" id="txtNivelAcademico" name="txtNivelAcademico" placeholder="Ingrese su nivel académico" autocomplete="off">

          <input type="submit" name="Enviar" class="next action-button" value="Enviar" />
        </fieldset>
        
      </form>

      

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

      <script src="../javascript/ejemplo.js">

      </script>

   
</body>

</html>
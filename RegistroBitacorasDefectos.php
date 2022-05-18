<?php
    $DFecha=$_POST['DFecha'];
    $DNumero=$_POST['DNumero'];
    $Dfase=$_POST['Dfase'];
    $Dfase2=$_POST['Dfase2'];
    $Dfase3=$_POST['Dfase3'];
    $DTiempoR=$_POST['DTiempoR'];
    $DReparacionDe=$_POST['DReparacionDe'];
    $DDescripcion=$_POST['DDescripcion'];


    $servername = "localhost";
    $username = "root";
    $password = "monseeligio";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO psp0.bitacoradefectos(id, fecha, numero, tipo, faseIntroduccion, faseRemovido, faseReparacion, reparacionDefecto, Descripcion) VALUES (0,'$DFecha', '$DNumero', '$Dfase', '$Dfase2','$Dfase3','$DTiempoR','$DReparacionDe','$DDescripcion')";
    if (mysqli_query($conn, $sql)) {
        echo "Nuevo registro insertado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $conn->close();
?>

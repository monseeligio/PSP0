<?php
    $total=481;
    $Planeado=$_POST['TPlaneado'];
    $Actual=$_POST['TActual'];
    $Alafecha=$_POST['TAlafecha'];
    $AlafechaP=($Actual*100)/$total;
    echo 'Muy bien, hemos recibido los siguientes datos del formulario:';
    echo "<br>";
    echo "<br>";
    echo 'Planeado (minutos): '.$Planeado;
    echo "<br>";
    echo 'Actual (minutos)'.$Actual;
    echo "<br>";
    echo 'A la fecha (minutos)'.$Alafecha;
    echo "<br>";
    echo 'Calcular a la fecha en porcentaje'.$AlafechaP;
    echo "<br>";
    echo 'ahora, los insertaremos en la base de datos llamada formulario';
    echo "<br>";
    echo "<br>";
    $servername = "localhost";
    $username = "root";
    $password = "monseeligio";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO psp0.tiempofase (id, tiempoPlaneado, tiempoActual, A_fecha, A_fechaP) VALUES (0,'$Planeado', '$Actual', '$Alafecha','$AlafechaP')";
    if (mysqli_query($conn, $sql)) {
        echo "Nuevo registro insertado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $conn->close();
?>

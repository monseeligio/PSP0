<?php
    $Tfecha=$_POST['Tfecha'];
    $TInicio=$_POST['TInicio'];
    $TParo=$_POST['TParo'];
    $TTiempointerrupcion=$_POST['TTiempointerrupcion'];
    $Tdelta=160;
    $Tfase=$_POST['Tfase'];
    $TComentarios=$_POST['TComentarios'];
    //$total=$TParo-$TInicio;

    //$Tdelta=$total-$Tdelta;



    echo 'Muy bien, hemos recibido los siguientes datos del formulario:';
    echo "<br>";
    echo "<br>";
    echo 'Fecha '.$Tfecha;
    echo "<br>";
    echo 'Hora de incio'.$TInicio;
    echo "<br>";
    echo 'Hora que se detuvo '.$TParo;
    echo "<br>";
    echo 'Total de tiempo de interrupcion'.$TTiempointerrupcion;
    echo "<br>";
    echo 'Tiempo delta'.$Tdelta;
    echo "<br>";
    echo 'Fase'.$Tfase;
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
    
    $sql = "INSERT INTO psp0.bitacoratiempos (id, fecha, inicio, paro, tiempoInterrupcion, deltaTiempo, fase, comentarios) VALUES (0,'$Tfecha', '$TInicio', '$TParo', '$TTiempointerrupcion','$Tdelta','$Tfase','$TComentarios')";
    if (mysqli_query($conn, $sql)) {
        echo "Nuevo registro insertado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $conn->close();
?>

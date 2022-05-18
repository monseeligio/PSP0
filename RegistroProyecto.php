<?php
    $nombreC=$_POST['PNombre_C'];
    $nombreP=$_POST['PNombre_P'];
    $Instructor=$_POST['PInstructor'];
    $Fecha=$_POST['PFecha'];
    $NumeroP=$_POST['TNumero_P'];
    $Lenguaje=$_POST['PLenguaje1'];

    echo 'Muy bien, hemos recibido los siguientes datos del formulario:';
    echo "<br>";
    echo "<br>";
    echo 'Nombre del creado: '.$nombreC;
    echo "<br>";
    echo 'Nombre del programa: '.$nombreP;
    echo "<br>";
    echo 'Intructor: '.$Instructor;
    echo "<br>";
    echo 'Fecha: '.$Fecha;
    echo "<br>";
    echo 'Numero de programa: '.$NumeroP;
    echo "<br>";
    echo "<br>";
    echo 'Lenguaje seleccionado: '.$Lenguaje;
    echo "<br>";
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
    
    $sql = "INSERT INTO psp0.proyectos (id, creador, programador, instructor, fecha, numeroPrograma, lenguaje) VALUES (0,'$nombreC', '$nombreP', '$Instructor', '$Fecha', '$NumeroP', '$Lenguaje')";
    if (mysqli_query($conn, $sql)) {
        echo "Nuevo registro insertado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $conn->close();
?>

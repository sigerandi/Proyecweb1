<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre_completo = $_POST["nombre_completo"];
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    $interes = $_POST["interes"];

    $servername = "localhost";
    $username = "tu_usuario";
    $password_db = "tu_contraseña";
    $dbname = "tu_base_de_datos";

    $conn = new mysqli($servername, $username, $password_db, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO nombre_tabla (nombre_completo, correo, password, interes) VALUES ('$nombre_completo', '$correo', '$password', '$interes')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrado";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
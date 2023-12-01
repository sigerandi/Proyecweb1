<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre_completo = $_POST["nombre_completo"];

    $servername = "localhost";
    $username = "tu_usuario";
    $password_db = "tu_contraseña";
    $dbname = "tu_base_de_datos";

    $conn = new mysqli($servername, $username, $password_db, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM tabla_erandi WHERE nombre_completo=$nombre_completo";

    

    if ($conn->query($sql) === TRUE) {
        header("Location: " . "lista.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>
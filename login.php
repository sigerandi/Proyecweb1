<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    $servername = "localhost";
    $username = "";
    $password_db = "";
    $dbname = "";

    $conn = new mysqli($servername, $username, $password_db, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $sql = "SELECT * FROM nombre_tabla WHERE usuario='$usuario' AND password='$password'";


    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Inicio de sesión exitoso";
   
    } else {
        echo "Información incorrecta";
    }

    $conn->close();
}
?>
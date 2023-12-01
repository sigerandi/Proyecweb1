<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="media/logo.avif" type="image/x-icon" />
    <meta
    name="description"
    content="Pagina de registro de un club de plantas"
    />
    <meta name="keywords" content="HTML, Basico, Curso, UNAM, ICO" />
    <meta name="author" content="Erandi Soublett" />
    <link rel="stylesheet" href="estilostab.css" />
    <title>Tabla de usuarios</title>
</head>
<body>
<?php
    $servidor='';
    $usuario='';
    $contra='';
    $bd='';

    $conexion= new mysqli($servidor,$usuario,$contra, $bd);

    $sql='SELECT * FROM ';

    $regresa= $conexion->query($sql);

    if ($regresa->num_rows > 0){
        echo '
<form action="actualizar.php" method="post">
<div>
    <label for="actualizar">
        Actualizar
    </label>
    <input type="text">
</div>
<button type="submit">Actualizar</button>
</form>
<form action="eliminar.php" method="post">
<div>
    <label for="eliminar">
        Eliminar
    </label>
    <input type="text">
</div>
<button type="submit">Eliminar</button>
</form>    
<section>
    <h1>Registro de usuarios</h1>
    ';

        echo'
        <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Interes</th>
            <th>Acciones</th>
        </tr>
        </thead>';

        while ($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row['nombre_completo'] . "</td>";
            echo "<td>" . $row['correo'] . "</td>";
            echo "<td>" . $row['interes'] . "</td>";
            echo "</tr>";
        }

    echo'</table>
    </section>';
    }
    else{
        echo "No hay registros";
    }


</body>
</html>
';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>

<body>
<?php
    session_start();
    if (isset($$_SESSION["color"])) {
        $color = $_SESSION["color"];
        if ($color == "red") {
            echo "<style type'text/css'>
        body{
            background-color:red;
        } </style>";
        }
        if ($color == "cyan") {
            echo "<style type'text/css'>
        body{
            background-color:cyan;
         } </style>";
        }
        if ($color == "yellow") {
            echo "<style type'text/css'>
            body{
                background-color:yellow;
             } </style>";
        }
    }

    ?>
    <h2>Bienvenido</h2>
    <?php
    echo '<a href="?method=vistacolores">Lista colores</a>';
    ?>

</body>

</html>
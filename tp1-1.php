<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Ejercicio1</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>X</th>
            <?php
            for ($fila = 1;$fila <= 10; $fila++){
                print "<th>$fila</th>";
            }
            ?>

        </tr>
        <?php
        for ($fila=1;$fila <=10;$fila++){
            print "<tr>";
            print "<th>$fila</th>";
            for($columna=1;$columna <=10;$columna++){
                $producto = $fila * $columna;
                print "<td>$producto</td>";
            }
            print "</tr>";
        }

        ?>

    </table>


</body>
</html>

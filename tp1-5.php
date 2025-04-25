<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="5">
        <?php
        for ($fila = 0; $fila < 20; $fila++) {
            print "<tr>";
            for ($col = 0; $col < 20; $col++) {
                if ($fila == $col) {
                    $color = "lime"; // Diagonal
                } elseif ($col < $fila) {
                    $color = "red"; // Izquierda
                } else {
                    $color = "blue"; // Derecha
                }
                print "<td style='background-color: $color'></td>";
            }
            print "</tr>";
        }
        ?>
    </table>
</body>
</html>

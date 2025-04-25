<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($fila = 0; $fila < 8; $fila++) {
            print "<tr>";
            for ($col = 0; $col < 8; $col++) {
                // Comenzamos el tablero con negro en (0,0)
                if (($fila + $col) % 2 == 0) {
                    print "<td style='background-color: black'></td>";
                } else {
                    print "<td style='background-color: white'></td>";
                }
            }
            print "</tr>";
        }
        ?>
    </table>
</body>
</html>

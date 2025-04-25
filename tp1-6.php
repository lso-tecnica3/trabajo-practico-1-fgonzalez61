<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css_ej6/styles.css">
    <title>Ejercicio 6</title>
</head>
<body>
    <div class="tabla_1">
        <table border="1">
        
        <?php
    
        for ($fila = 1; $fila <= 10; $fila++) {
        print "<tr>";
            for ($col = 0; $col < 5; $col++) {
            $numero = $fila + ($col * 10);
            print "<td>• $numero</td>";
            }
         print "</tr>";
        }
        ?>

         </table>
    </div>

    <div class="tabla_2">
        <table border="1" >
            <?php
                for ($fila = 1; $fila <= 10; $fila++) {
                    print "<tr>";
                    for ($col = 0; $col < 5; $col++) {
                        $numero = 100 - ($col * 10) - ($fila - 1);
                        print "<td>$fila. $numero</td>";
                    }
        
                 }
            ?>
        </table>
    </div>

</body>
</html>

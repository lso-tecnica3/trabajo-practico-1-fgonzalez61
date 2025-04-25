<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
<table border="1">
        <?php
        for ($i = 1; $i <= 50; $i++) {
            print "<tr>";
            print "<td>$i</td>";
            print "<td>";
            if ($i % 3 == 0 && $i % 5 == 0) {
                print "FIZZBUZZ";
            } elseif ($i % 3 == 0) {
                print "FIZZ";
            } elseif ($i % 5 == 0) {
                print "BUZZ";
            }
            print "</td>";
            print "</tr>";
        }
        ?>
</body>
</html>

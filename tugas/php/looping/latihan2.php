<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Looping</title>
</head>
<body>
    <h2>Membuat perulangan tabel</h2>
    <table border="1" cellpading="10" cellspacing="0">
        <?php
            echo "<tr>";
            for ($i=1; $i <= 10; $i++) { 
                echo "<tr>";
                for ($j=1; $j <= 8; $j++) { 
                    echo "<td> $i, $j </td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
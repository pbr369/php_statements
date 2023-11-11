<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
        }
    </style>
    <title>Division Table Chart</title>
</head>
<body>

<?php
echo "<h2>Division Table Chart</h2>";
echo "<table>";
echo "<tr><th></th>";

for ($divisor = 1; $divisor <= 10; $divisor++) {
    echo "<th>$divisor</th>";
}

echo "</tr>";

for ($dividend = 1; $dividend <= 10; $dividend++) {
    echo "<tr><td><b>$dividend</b></td>";

    for ($divisor = 1; $divisor <= 10; $divisor++) {
        $result = ($divisor != 0) ? $dividend / $divisor : "Undefined";
        echo "<td>$result</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>